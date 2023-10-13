<?php

namespace Tests\Plugin;

use Http\Client\Common\Plugin;
use Http\Client\Promise\HttpFulfilledPromise;
use Nyholm\Psr7\Request;
use Nyholm\Psr7\Response;
use Nyholm\Psr7\Uri;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use ShipStream\Ups\Plugin\AddBaseUrlPlugin;

/** @covers \ShipStream\Ups\Plugin\AddBaseUrlPlugin */
final class AddBaseUrlPluginTest extends TestCase
{
    /**
     * @var callable $first
     */
    private $first;

    private Plugin $plugin;

    protected function setUp(): void
    {
        $this->first = function () {};
        $this->plugin = new AddBaseUrlPlugin(new Uri('https://example.com/api'));
    }

    public function testItSetsBaseUrl()
    {
        $request = new Request('GET', '/foo');
        $this->plugin->handleRequest($request, function (RequestInterface $request) {
            self::assertEquals('https://example.com/api/foo', $request->getUri()->__toString());
            return new HttpFulfilledPromise(new Response());
        }, $this->first);
    }

    public function testItSkipsSettingPathForOauthRequests()
    {
        $request = new Request('GET', '/security/v1/oauth/token');
        $this->plugin->handleRequest($request, function (RequestInterface $request) {
            self::assertEquals('https://example.com/security/v1/oauth/token', $request->getUri()->__toString());
            return new HttpFulfilledPromise(new Response());
        }, $this->first);
    }
}
