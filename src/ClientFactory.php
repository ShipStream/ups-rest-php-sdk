<?php

namespace ShipStream\Ups;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use ShipStream\Ups\Api\Authentication\BasicAuthAuthentication;
use ShipStream\Ups\Authentication\AccessTokenCache;
use ShipStream\Ups\Authentication\AuthenticationManager;
use ShipStream\Ups\Authentication\Oauth2Authentication;
use ShipStream\Ups\Plugin\AddBaseUrlPlugin;

class ClientFactory
{
    /**
     * Create a new instance of the API Client.
     *
     * @param Config $config Client configuration object.
     * @param AccessTokenCache|null $accessTokenCache Cache implementation for storing access tokens across multiple requests. Defaults to an in-memory cache.
     * @param ClientInterface|null $httpClient Custom PSR-18-compatible HTTP client instance.
     * @return Client
     */
    public static function create(Config $config, ?AccessTokenCache $accessTokenCache = null, ?ClientInterface $httpClient = null): Client
    {
        $baseUri = Psr17FactoryDiscovery::findUriFactory()
            ->createUri($config->getEnvironmentBaseUrl())
            ->withPath(Config::BASE_PATH);

        $authManager = new AuthenticationManager($config, $accessTokenCache);
        $plugins = [
            new AddBaseUrlPlugin($baseUri),
            new AuthenticationRegistry([
                new BasicAuthAuthentication($config->getClientId(), $config->getClientSecret()),
                new Oauth2Authentication($authManager),
            ])
        ];

        if ($httpClient !== null) {
            $httpClient = new PluginClient($httpClient, $plugins);
        }

        $apiClient = Client::create($httpClient, $plugins);
        $apiClient->setAuthManager($authManager);
        $apiClient->setConfig($config);
        $authManager->setClient($apiClient);
        return $apiClient;
    }
}
