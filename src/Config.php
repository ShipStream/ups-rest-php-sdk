<?php

namespace ShipStream\Ups;

use InvalidArgumentException;

final class Config
{
    public const BASE_URL_PRODUCTION = 'https://onlinetools.ups.com/';
    public const BASE_URL_TESTING = 'https://wwwcie.ups.com/';
    public const BASE_PATH = '/api';

    public const GRANT_TYPE_AUTHORIZATION_CODE = 'authorization_code';
    public const GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';

    private bool $useTestingEnvironment;

    private string $grantType;

    private string $clientId;

    private string $clientSecret;

    private string $redirectUri;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(array $config)
    {
        $this->grantType = $config['grant_type'] ?? self::GRANT_TYPE_CLIENT_CREDENTIALS;
        if ( ! in_array($this->grantType, [self::GRANT_TYPE_AUTHORIZATION_CODE, self::GRANT_TYPE_CLIENT_CREDENTIALS])) {
            throw new InvalidArgumentException("Invalid grant_type: $this->grantType");
        }
        if (empty($config['client_id'])) {
            throw new InvalidArgumentException('Missing required parameter: client_id');
        }
        if (empty($config['client_secret'])) {
            throw new InvalidArgumentException('Missing required parameter: client_secret');
        }
        $this->useTestingEnvironment = $config['use_testing_environment'] ?? false;
        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
        $this->redirectUri = $config['redirect_uri'] ?? '';
    }

    public function getEnvironmentBaseUrl(): string
    {
        return $this->getUseTestingEnvironment() ? self::BASE_URL_TESTING : self::BASE_URL_PRODUCTION;
    }

    public function getUseTestingEnvironment(): bool
    {
        return $this->useTestingEnvironment;
    }

    public function getGrantType(): string
    {
        return $this->grantType;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getRedirectUri(): string
    {
        return (string)$this->redirectUri;
    }

    /**
     * @deprecated
     */
    public function getMerchantId(): ?string
    {
        return null;
    }
}
