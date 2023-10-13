<?php

namespace ShipStream\Ups\Api\Endpoint;

class GenerateToken extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    /**
     * Generate Token
     *
     * @param null|\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-merchant-id Client merchant ID
     * }
     */
    public function __construct(?\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody = null, array $headerParameters = array())
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/security/v1/oauth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('x-merchant-id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('x-merchant-id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\GenerateTokenSuccessResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\GenerateTokenSuccessResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GenerateTokenBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GenerateTokenUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GenerateTokenForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GenerateTokenTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}