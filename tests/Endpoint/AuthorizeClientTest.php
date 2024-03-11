<?php

namespace Tests\Endpoint;

use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use ShipStream\Ups\ClientFactory;
use ShipStream\Ups\Config;
use ShipStream\Ups\Model\AuthorizeClientResponse;

/** @covers \ShipStream\Ups\Endpoint\AuthorizeClient */
final class AuthorizeClientTest extends TestCase
{
    public function testItReturnsValuesFromHeaderOnSuccess()
    {
        $config = new Config([
            'use_testing_environment' => true,
            'grant_type' => Config::GRANT_TYPE_AUTHORIZATION_CODE,
            'client_id' => 'dummy_client_id',
            'client_secret' => 'dummy_client_secret'
        ]);

        $expectedResponse = new AuthorizeClientResponse();
        $expectedResponse->setLocation('https://www.example.com/');
        $expectedResponse->setAppName('Test App Name');
        $expectedResponse->setDisplayName('Test Display Name');

        $clientStub = $this->createStub(ClientInterface::class);
        $clientStub->method('sendRequest')
            ->willReturn(new Response(302, [
                'Location' => $expectedResponse->getLocation(),
                'appname' => $expectedResponse->getAppName(),
                'displayname' => $expectedResponse->getDisplayName()
            ]));

        $client = ClientFactory::create($config, null, $clientStub);
        $actualResponse = $client->authorizeClient([
            'client_id' => $client->getConfig()->getClientId(),
            'redirect_uri' => $client->getConfig()->getRedirectUri(),
            'response_type' => 'code'
        ]);

        self::assertEquals($expectedResponse->getLocation(), $actualResponse->getLocation());
        self::assertEquals($expectedResponse->getAppName(), $actualResponse->getAppName());
        self::assertEquals($expectedResponse->getDisplayName(), $actualResponse->getDisplayName());
    }
}
