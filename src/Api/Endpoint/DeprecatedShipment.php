<?php

namespace ShipStream\Ups\Api\Endpoint;

class DeprecatedShipment extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $deprecatedVersion;
    /**
    * The Shipping API makes UPS shipping services available to client applications that communicate with UPS 
    using the Internet
    *
    * @param string $deprecatedVersion Indicates Ship API to display the new release features in Ship API response based on Ship release.
    
    Valid values:
    - v1
    - v1601
    - v1607
    - v1701
    - v1707
    - v1801
    - v1807
    - v2108
    - v2205
    
    * @param \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionaladdressvalidation Valid Values: 
    city = validation will include city.Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $deprecatedVersion, \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->deprecatedVersion = $deprecatedVersion;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{deprecatedVersion}'], [$this->deprecatedVersion], '/shipments/{deprecatedVersion}/ship');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\SHIPRequestWrapper) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['additionaladdressvalidation']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('additionaladdressvalidation', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\SHIPResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\SHIPResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedShipmentBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedShipmentUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedShipmentForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedShipmentTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}