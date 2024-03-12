<?php

namespace ShipStream\Ups\Api\Endpoint;

class AuthorizeClient extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    /**
     * The Authorize Client endpoint initiates the OAuth flow by redirecting the user to UPS to log in and authorize the client application. It accepts the parameters listed below to facilitate the user authorization flow. A successful response redirects back to the client with an authorization code that can be exchanged for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Client id for the requesting application.
     *     @var string $redirect_uri Callback URL for the requesting application.
     *     @var string $response_type Valid Values: code
     *     @var string $state Optional value supplied by the client, will be returned during the redirection back to the client. Can be utilized to maintain state between Auth-Code request and callback event.
     *     @var string $scope Optional value supplied by the client, will be returned during the redirection back to the client.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/security/v1/oauth/authorize';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['client_id', 'redirect_uri', 'response_type', 'state', 'scope']);
        $optionsResolver->setRequired(['client_id', 'redirect_uri', 'response_type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('client_id', ['string']);
        $optionsResolver->addAllowedTypes('redirect_uri', ['string']);
        $optionsResolver->addAllowedTypes('response_type', ['string']);
        $optionsResolver->addAllowedTypes('state', ['string']);
        $optionsResolver->addAllowedTypes('scope', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (302 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\AuthorizeClientBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\AuthorizeClientUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}