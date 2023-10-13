<?php

namespace ShipStream\Ups\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;
use ShipStream\Ups\Exception\AuthenticationException;

class Oauth2Authentication implements AuthenticationPlugin
{
    protected AuthenticationManager $authManager;

    public function __construct(AuthenticationManager $authManager)
    {
        $this->authManager = $authManager;
    }

    /**
     * @throws AuthenticationException
     */
    public function authentication(RequestInterface $request): RequestInterface
    {
        $accessToken = $this->authManager->requestAccessToken();
        return $request->withHeader('Authorization', 'Bearer ' . $accessToken->getAccessToken());
    }

    public function getScope(): string
    {
        return 'oauth2';
    }
}
