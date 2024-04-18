<?php

namespace ShipStream\Ups\Api\Endpoint;

class DeprecatedVoidShipment extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $deprecatedVersion;
    protected $shipmentidentificationnumber;
    /**
    * The Void Shipping API is used to cancel the previously scheduled shipment
    *
    * @param string $deprecatedVersion API Version.
    
    Valid values:
    - v1
    
    * @param string $shipmentidentificationnumber The shipment's identification number 
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * @param array $queryParameters {
    *     @var string $trackingnumber The package's tracking number. You may have 
    up to 20 different tracking numbers listed.
    If more than one tracking number, pass this 
    value as: trackingnumber= 
    ["1ZISUS010330563105","1ZISUS01033056310
    8"] with a coma separating each number.
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $deprecatedVersion, string $shipmentidentificationnumber, array $queryParameters = [], array $headerParameters = [])
    {
        $this->deprecatedVersion = $deprecatedVersion;
        $this->shipmentidentificationnumber = $shipmentidentificationnumber;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{deprecatedVersion}', '{shipmentidentificationnumber}'], [$this->deprecatedVersion, $this->shipmentidentificationnumber], '/shipments/{deprecatedVersion}/void/cancel/{shipmentidentificationnumber}');
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
        $optionsResolver->setDefined(['trackingnumber']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('trackingnumber', ['string']);
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
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\VOIDSHIPMENTResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\VOIDSHIPMENTResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}