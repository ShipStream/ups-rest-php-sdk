<?php

namespace ShipStream\Ups\Api\Endpoint;

class PickupCancel extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $CancelBy;
    protected $version;
    /**
    * Using the CancelBy endpoint of the Pickup API, users can request cancellation of a UPS on-demand package pickup. When the PRN (pickup request number), transaction ID, and the transaction source are supplied as required parameters, the endpoint returns confirmation that the pickup has been cancelled.
    *
    * @param string $cancelBy Valid Values: 01 = AccountNumber, 02 = PRN
    * @param string $version Version of API.
    
    Valid values:
    - v2403
    
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $Prn The pickup equest number (PRN) generated by 
    UPS pickup system.
    Required if CancelBy = prn.Length 26
    * }
    */
    public function __construct(string $cancelBy, string $version, array $headerParameters = [])
    {
        $this->CancelBy = $cancelBy;
        $this->version = $version;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{CancelBy}', '{version}'], [$this->CancelBy, $this->version], '/shipments/{version}/pickup/{CancelBy}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc', 'Prn']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        $optionsResolver->addAllowedTypes('Prn', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\PickupCancelBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\PickupCancelUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\PickupCancelForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\PickupCancelTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\PICKUPCancelResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\PickupCancelBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\PickupCancelUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\PickupCancelForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\PickupCancelTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}