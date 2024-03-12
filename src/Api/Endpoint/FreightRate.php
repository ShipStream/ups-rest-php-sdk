<?php

namespace ShipStream\Ups\Api\Endpoint;

class FreightRate extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    protected $requestoption;
    protected $accept;
    /**
    * The Rating Ground Freight API may only be used by brokers or resellers of transportation services with a current and active UPGF Master Transportation Agreement.
    *
    * @param string $version When TForce Freight introduces new elements 
    in the response that are not associated with new 
    request elements, Version is used. This ensures 
    backward compatibility.
    Supported values: v1, v1601, v1607, v1701, 
    v1707, v1801. Length 5
    * @param string $requestoption Valid Values: 
    ground,
    air. Length 15
    * @param \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param array $accept Accept content header application/json|application/xml
    */
    public function __construct(string $version, string $requestoption, \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->version = $version;
        $this->requestoption = $requestoption;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{version}', '{requestoption}'], [$this->version, $this->requestoption], '/freight/{version}/rating/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/xml']];
        }
        return $this->accept;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired(['transId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\FreightRateUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\FREIGHTRATEResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\FREIGHTRATEResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \ShipStream\Ups\Api\Exception\FreightRateUnauthorizedException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}