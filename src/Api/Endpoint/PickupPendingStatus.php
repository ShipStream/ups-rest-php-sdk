<?php

namespace ShipStream\Ups\Api\Endpoint;

class PickupPendingStatus extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    protected $pickuptype;
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version version of API e.g v1
    * @param string $pickuptype Type of pickup. Valid values:
    oncall
    smart
    both. Length 6
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $AccountNumber The specific account number that belongs to the 
    shipper.Length 6 or 10
    * }
    */
    public function __construct(string $version, string $pickuptype, array $headerParameters = array())
    {
        $this->version = $version;
        $this->pickuptype = $pickuptype;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}', '{pickuptype}'), array($this->version, $this->pickuptype), '/shipments/{version}/pickup/{pickuptype}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('transId', 'transactionSrc', 'AccountNumber'));
        $optionsResolver->setRequired(array('AccountNumber'));
        $optionsResolver->setDefaults(array('transactionSrc' => 'testing'));
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        $optionsResolver->addAllowedTypes('AccountNumber', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PICKUPPendingResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\PICKUPPendingResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \ShipStream\Ups\Api\Exception\PickupPendingStatusUnauthorizedException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}