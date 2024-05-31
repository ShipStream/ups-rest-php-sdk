<?php

namespace ShipStream\Ups\Authentication;

use Exception;
use ShipStream\Ups\Api\Client;
use ShipStream\Ups\Api\Exception\GenerateTokenBadRequestException;
use ShipStream\Ups\Api\Exception\GenerateTokenForbiddenException;
use ShipStream\Ups\Api\Exception\GenerateTokenTooManyRequestsException;
use ShipStream\Ups\Api\Exception\GenerateTokenUnauthorizedException;
use ShipStream\Ups\Api\Exception\RefreshTokenBadRequestException;
use ShipStream\Ups\Api\Exception\RefreshTokenTooManyRequestsException;
use ShipStream\Ups\Api\Exception\RefreshTokenUnauthorizedException;
use ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody;
use ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody;
use ShipStream\Ups\Config;
use ShipStream\Ups\Exception\AuthenticationException;

class AuthenticationManager
{
    protected const GRANT_TYPE_REFRESH_TOKEN = 'refresh_token';

    protected Config $config;

    protected Client $client;

    protected AccessTokenCache $accessTokenCache;

    protected ?AccessTokenLock $accessTokenLock;

    public function __construct(Config $config, ?AccessTokenCache $accessTokenCache = null, ?AccessTokenLock $accessTokenLock = null)
    {
        $this->config = $config;
        $this->accessTokenCache = $accessTokenCache ?? new InMemoryAccessTokenCache();
        $this->accessTokenLock = $accessTokenLock;
    }

    /**
     * Set Client instance on the Authentication Manager. For internal use only.
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve the access token from the cache.
     */
    public function getAccessTokenFromCache(): ?AccessToken
    {
        return $this->accessTokenCache->retrieve($this->config->getClientId());
    }

    /**
     * Request an access token either by retrieving it from the cache, or generating a new one/refreshing it.
     *
     * @param bool $skipCache Whether to ignore the cached access token if any and regenerate/refresh it.
     * @throws AuthenticationException
     */
    public function requestAccessToken(bool $skipCache = false): AccessToken
    {
        // Access token not found in cache, generate a new one and save it
        if ($skipCache || ! ($accessToken = $this->getAccessTokenFromCache())) {
            $accessToken = $this->generateToken();
            $this->accessTokenCache->save($accessToken);
            return $accessToken;
        }

        // Access token found in cache, check for expiry and refresh-ability
        if ($accessToken->hasAccessTokenExpired()) {
            try {
                $this->accessTokenLock?->lock();
                // Reload the access token from cache in case it changed after acquiring the lock
                $accessToken = $this->getAccessTokenFromCache();
                if ($accessToken && ! $accessToken->hasAccessTokenExpired()) {
                    return $accessToken;
                }
                if ($accessToken?->isRefreshable()) {
                    $accessToken = $this->refreshToken($accessToken->getRefreshToken());
                } else {
                    $accessToken = $this->generateToken();
                }
                $this->accessTokenCache->save($accessToken);
            } finally {
                $this->accessTokenLock?->unlock();
            }
        }
        return $accessToken;
    }

    /**
     * Exchange the authorization code acquired from UPS login redirection with an access token and cache it.
     *
     * @param string $code Authorization code obtained from the UPS login redirection request.
     * @throws AuthenticationException
     */
    public function exchangeAuthorizationCode(string $code)
    {
        $accessToken = $this->generateToken($code);
        $this->accessTokenCache->save($accessToken);
    }

    /**
     * Generate a new access token from the API.
     *
     * @param string|null $code If set it will attempt to generate a token using authorization_code grant type.
     * @throws AuthenticationException
     */
    protected function generateToken(?string $code = null): AccessToken
    {
        if ($code === null && $this->config->getGrantType() === Config::GRANT_TYPE_AUTHORIZATION_CODE) {
            throw new AuthenticationException('Unauthenticated');
        }

        $body = new SecurityV1OauthTokenPostBody();
        $body->setGrantType($this->config->getGrantType());
        if ($body->getGrantType() === Config::GRANT_TYPE_AUTHORIZATION_CODE) {
            $body->setCode($code);
            $body->setRedirectUri($this->config->getRedirectUri());
        }

        try {
            $response = $this->client->generateToken($body);
            if ($response->getStatus() !== 'approved') {
                throw new AuthenticationException("Invalid access token status: {$response->getStatus()}");
            }
            // Refresh token is only present for authorization_code grant type
            if (($status = $response->getRefreshTokenStatus()) && $status !== 'approved') {
                throw new AuthenticationException("Invalid refresh token status: $status");
            }
        } catch (
            GenerateTokenBadRequestException |
            GenerateTokenUnauthorizedException |
            GenerateTokenForbiddenException |
            GenerateTokenTooManyRequestsException $e
        ) {
            $errors = array_map(
                fn($error) => "{$error->getCode()}: {$error->getMessage()}",
                $e->getErrorResponse()->getResponse()->getErrors()
            );
            throw new AuthenticationException(implode(' - ', $errors), 0, $e);
        } catch (Exception $e) {
            throw new AuthenticationException('Failed to retrieve an access token.', 0, $e);
        }

        $accessToken = (new AccessToken())
            ->setClientId($response->getClientId())
            ->setAccessToken($response->getAccessToken())
            ->setIssuedAt((int)($response->getIssuedAt() / 1000)) // Convert timestamp to seconds
            ->setExpiresIn((int)$response->getExpiresIn());

        if ($response->getRefreshToken()) {
            $accessToken->setRefreshToken($response->getRefreshToken())
                ->setRefreshTokenIssuedAt((int)($response->getRefreshTokenIssuedAt() / 1000))
                ->setRefreshTokenExpiresIn((int)$response->getRefreshTokenExpiresIn());
        }
        return $accessToken;
    }

    /**
     * Refresh an access token using its refresh token and save it in the cache.
     *
     * @throws AuthenticationException
     */
    protected function refreshToken(string $refreshToken): AccessToken
    {
        $body = new SecurityV1OauthRefreshPostBody();
        $body->setGrantType(self::GRANT_TYPE_REFRESH_TOKEN);
        $body->setRefreshToken($refreshToken);

        try {
            $response = $this->client->refreshToken($body);
            if ($response->getStatus() !== 'approved') {
                throw new AuthenticationException("Invalid access token status: {$response->getStatus()}");
            }
            if ($response->getRefreshTokenStatus() !== 'approved') {
                throw new AuthenticationException("Invalid refresh token status: {$response->getRefreshTokenStatus()}");
            }
        } catch (
            RefreshTokenBadRequestException |
            RefreshTokenUnauthorizedException |
            RefreshTokenTooManyRequestsException $e
        ) {
            $errors = array_map(
                fn($error) => "{$error->getCode()}: {$error->getMessage()}",
                $e->getErrorResponse()->getResponse()->getErrors()
            );
            throw new AuthenticationException(implode(' - ', $errors), 0, $e);
        } catch (Exception $e) {
            throw new AuthenticationException('Failed to retrieve an access token.', 0, $e);
        }

        return (new AccessToken())
            ->setClientId($response->getClientId())
            ->setAccessToken($response->getAccessToken())
            ->setIssuedAt((int)($response->getIssuedAt() / 1000)) // Convert timestamp to seconds
            ->setExpiresIn((int)$response->getExpiresIn())
            ->setRefreshToken($response->getRefreshToken())
            ->setRefreshTokenIssuedAt((int)($response->getRefreshTokenIssuedAt() / 1000))
            ->setRefreshTokenExpiresIn((int)$response->getRefreshTokenExpiresIn());
    }
}
