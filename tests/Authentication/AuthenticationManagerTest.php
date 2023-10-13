<?php

namespace Tests\Authentication;

use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use ShipStream\Ups\Authentication\AccessToken;
use ShipStream\Ups\Authentication\AccessTokenCache;
use ShipStream\Ups\Authentication\AuthenticationManager;
use ShipStream\Ups\Authentication\InMemoryAccessTokenCache;
use ShipStream\Ups\Client;
use ShipStream\Ups\Config;

/** @covers \ShipStream\Ups\Authentication\AuthenticationManager */
final class AuthenticationManagerTest extends TestCase
{
    public function testItLoadsAccessTokenFromCache()
    {
        $config = new Config([
            'use_testing_environment' => true,
            'client_id' => 'dummy_client_id',
            'client_secret' => 'dummy_client_secret',
        ]);

        $expectedAccessToken = (new AccessToken)
            ->setClientId($config->getClientId())
            ->setAccessToken(md5('dummy_access_token'))
            ->setIssuedAt(time())
            ->setExpiresIn(strtotime('+4 hours'));

        $cacheStub = $this->createStub(AccessTokenCache::class);
        $cacheStub->method('retrieve')
            ->willReturn($expectedAccessToken);

        $authManager = new AuthenticationManager($config, $cacheStub);

        $actualAccessToken = $authManager->getAccessTokenFromCache();

        self::assertSame($expectedAccessToken, $actualAccessToken);
    }

    public function testItExchangesAuthCodeWithAnAccessToken()
    {
        $config = new Config([
            'use_testing_environment' => true,
            'client_id' => 'dummy_client_id',
            'client_secret' => 'dummy_client_secret',
        ]);

        $expectedResponse = (object) [
            'client_id' => $config->getClientId(),
            'access_token' => md5('dummy_access_token'),
            'refresh_token' => md5('dummy_refresh_token'),
            'expires_in' => 60 * 60 * 4, // 4 hours
            'refresh_token_expires_in' => 60 * 60 * 24 * 7, // 7 days
            'issued_at' => time() * 1000, // Convert to milliseconds
            'refresh_token_issued_at' => time() * 1000,
            'status' => 'approved',
            'refresh_token_status' => 'approved'
        ];

        $clientStub = $this->createStub(ClientInterface::class);
        $clientStub->method('sendRequest')
            ->willReturn(new Response(200, ['Content-Type' => 'application/json'], json_encode($expectedResponse)));

        $authManager = new AuthenticationManager($config);
        $authManager->setClient(Client::create($clientStub));

        $authManager->exchangeAuthorizationCode(md5('dummy_auth_code'));
        $actualResponse = $authManager->getAccessTokenFromCache();

        self::assertEquals($expectedResponse->client_id, $actualResponse->getClientId());
        self::assertEquals($expectedResponse->access_token, $actualResponse->getAccessToken());
        self::assertEquals($expectedResponse->refresh_token, $actualResponse->getRefreshToken());
        self::assertEquals($expectedResponse->expires_in, $actualResponse->getExpiresIn());
        self::assertEquals($expectedResponse->refresh_token_expires_in, $actualResponse->getRefreshTokenExpiresIn());
        self::assertEquals($expectedResponse->issued_at / 1000, $actualResponse->getIssuedAt());
        self::assertEquals($expectedResponse->refresh_token_issued_at / 1000, $actualResponse->getRefreshTokenIssuedAt());
    }

    public function testItRequestsANewAccessTokenWhenSkippingCache()
    {
        $config = new Config([
            'use_testing_environment' => true,
            'client_id' => 'dummy_client_id',
            'client_secret' => 'dummy_client_secret',
        ]);

        $cachedAccessToken = (new AccessToken)
            ->setClientId($config->getClientId())
            ->setAccessToken(md5('dummy_access_token_1'))
            ->setIssuedAt(strtotime('-1 hour'))
            ->setExpiresIn(60 * 60 * 4);
        $expectedTokenResponse = (object) [
            'client_id' => $config->getClientId(),
            'access_token' => md5('dummy_access_token_2'),
            'expires_in' => 60 * 60 * 4,
            'issued_at' => time() * 1000,
            'status' => 'approved',
        ];

        $clientStub = $this->createStub(ClientInterface::class);
        $clientStub->method('sendRequest')
            ->willReturn(new Response(200, ['Content-Type' => 'application/json'], json_encode($expectedTokenResponse)));

        $cache = new InMemoryAccessTokenCache();
        $cache->save($cachedAccessToken);
        $authManager = new AuthenticationManager($config, $cache);
        $authManager->setClient(Client::create($clientStub));

        $authManager->requestAccessToken(true);
        $actualTokenResponse = $authManager->getAccessTokenFromCache();

        self::assertEquals($expectedTokenResponse->client_id, $actualTokenResponse->getClientId());
        self::assertEquals($expectedTokenResponse->access_token, $actualTokenResponse->getAccessToken());
        self::assertEquals($expectedTokenResponse->expires_in, $actualTokenResponse->getExpiresIn());
        self::assertEquals($expectedTokenResponse->issued_at / 1000, $actualTokenResponse->getIssuedAt());
    }

    public function testItRefreshesTheAccessTokenWhenItExpires()
    {
        $config = new Config([
            'use_testing_environment' => true,
            'client_id' => 'dummy_client_id',
            'client_secret' => 'dummy_client_secret',
        ]);

        $cachedAccessToken = (new AccessToken)
            ->setClientId($config->getClientId())
            ->setAccessToken(md5('dummy_access_token_1'))
            ->setIssuedAt(strtotime('-6 hours'))
            ->setExpiresIn(60 * 60 * 4);

        $expectedTokenResponse = (object) [
            'client_id' => $config->getClientId(),
            'access_token' => md5('dummy_access_token_2'),
            'refresh_token' => md5('dummy_refresh_token_2'),
            'expires_in' => 60 * 60 * 4,
            'issued_at' => time() * 1000,
            'status' => 'approved',
        ];

        $clientStub = $this->createStub(ClientInterface::class);
        $clientStub->method('sendRequest')
            ->willReturn(new Response(200, ['Content-Type' => 'application/json'], json_encode($expectedTokenResponse)));

        $cache = new InMemoryAccessTokenCache();
        $cache->save($cachedAccessToken);
        $authManager = new AuthenticationManager($config, $cache);
        $authManager->setClient(Client::create($clientStub));

        $actualTokenResponse = $authManager->requestAccessToken();

        self::assertEquals($expectedTokenResponse->client_id, $actualTokenResponse->getClientId());
        self::assertEquals($expectedTokenResponse->access_token, $actualTokenResponse->getAccessToken());
        self::assertEquals($expectedTokenResponse->expires_in, $actualTokenResponse->getExpiresIn());
        self::assertEquals($expectedTokenResponse->issued_at / 1000, $actualTokenResponse->getIssuedAt());
        self::assertFalse($actualTokenResponse->hasAccessTokenExpired());
    }
}
