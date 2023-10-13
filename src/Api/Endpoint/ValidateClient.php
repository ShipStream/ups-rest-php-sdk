<?php

namespace ShipStream\Ups\Api\Endpoint;

class ValidateClient extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    /**
     * Validate Client
     *
     * @param array $queryParameters {
     *     @var string $client_id Client id for the requesting application.
     *     @var string $redirect_uri Callback URL for the requesting application.
     * }
     */
    public function __construct(array $queryParameters = array())
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
        return '/security/v1/oauth/validate-client';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('client_id', 'redirect_uri'));
        $optionsResolver->setRequired(array('client_id', 'redirect_uri'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('client_id', array('string'));
        $optionsResolver->addAllowedTypes('redirect_uri', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\ValidateClientBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\ValidateClientUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\ValidateSuccessResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ValidateSuccessResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ValidateClientBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ValidateClientUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}