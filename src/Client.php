<?php

namespace ShipStream\Ups;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use ShipStream\Ups\Api\Client as ApiClient;
use ShipStream\Ups\Endpoint\AuthorizeClient;
use ShipStream\Ups\Authentication\AccessToken;
use ShipStream\Ups\Authentication\AuthenticationManager;
use ShipStream\Ups\Exception\AuthenticationException;
use ShipStream\Ups\Model\AuthorizeClientResponse;
use ShipStream\Ups\Normalizer\CustomJaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends ApiClient
{
    protected AuthenticationManager $authManager;

    protected Config $config;

    /**
     * Set Config instance on the client. For internal use only.
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Retrieve the Config object that was used to instantiate this client instance.
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * Set Authentication Manager instance on the client. For internal use only.
     */
    public function setAuthManager(AuthenticationManager $authManager)
    {
        $this->authManager = $authManager;
    }

    /**
     * Exchange the authorization code acquired from UPS login redirection with an access token and cache it.
     *
     * @param string $code Authorization code obtained from the UPS login redirection request.
     * @throws AuthenticationException
     */
    public function exchangeAuthorizationCode(string $code)
    {
        $this->authManager->exchangeAuthorizationCode($code);
    }

    /**
     * Retrieve access token from the cache if it exists, otherwise tries to generate/refresh it.
     *
     * @param bool $skipCache Whether to ignore the cached access token if any and regenerate/refresh it.
     * @throws AuthenticationException
     */
    public function getAccessToken(bool $skipCache = false): AccessToken
    {
        return $this->authManager->requestAccessToken($skipCache);
    }

    /**
     * @inheritDoc
     *
     * @return \Psr\Http\Message\ResponseInterface|AuthorizeClientResponse
     */
    public function authorizeClient(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AuthorizeClient($queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = []): Client
    {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        // Use the custom object normalizer to override the generated normalizers
        $normalizers = [new ArrayDenormalizer(), new CustomJaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
