<?php

namespace ShipStream\Ups\Api\Endpoint;

class ProcessSubscriptionTypeForTrackingNumber extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $type;
    /**
    * This endpoint takes a list of tracking numbers and creates a subscription for each.
    Clients must provide the tracking numbers in the correct format.
    
    Upon success it should return:
    - List of valid tracking number for which subscription created.
    - List of invalid tracking number for which subscription not created.
    
    *
    * @param string $type - 'Standard' - Represents a standard subscription type that provides near real time updates on tracking status.
    
    * @param null|\ShipStream\Ups\Api\Model\TrackSubsServiceRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request.
    *     @var string $transactionSrc Identifies the client/source application that is calling.
    * }
    */
    public function __construct(string $type, ?\ShipStream\Ups\Api\Model\TrackSubsServiceRequest $requestBody = null, array $headerParameters = [])
    {
        $this->type = $type;
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
        return str_replace(['{type}'], [$this->type], '/subscription/{type}/package');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\TrackSubsServiceRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired(['transId', 'transactionSrc']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberNotFoundException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\TrackSubsServiceResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberNotFoundException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (405 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}