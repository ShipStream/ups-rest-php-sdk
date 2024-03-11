<?php

namespace ShipStream\Ups\Endpoint;

use Psr\Http\Message\ResponseInterface;
use ShipStream\Ups\Api\Endpoint\AuthorizeClient as BaseEndpoint;
use ShipStream\Ups\Model\AuthorizeClientResponse;
use Symfony\Component\Serializer\SerializerInterface;

class AuthorizeClient extends BaseEndpoint
{
    /**
     * @inheritDoc
     * @return AuthorizeClientResponse
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        if ($response->getStatusCode() === 302) {
            $headers = $response->getHeaders();
            $responseModel = new AuthorizeClientResponse();
            $responseModel->setLocation($headers['Location'][0] ?? '');
            $responseModel->setAppName($headers['appname'][0] ?? '');
            $responseModel->setDisplayName($headers['displayname'][0] ?? '');
            return $responseModel;
        }
        return parent::transformResponseBody($response, $serializer, $contentType);
    }
}
