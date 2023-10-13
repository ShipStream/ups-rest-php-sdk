<?php

namespace ShipStream\Ups\Api\Endpoint;

class GetSingleTrackResponseUsingGET extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $inquiryNumber;
    /**
     * 
     *
     * @param string $inquiryNumber Inquiry Number
     * @param array $queryParameters {
     *     @var string $locale locale
     *     @var string $returnSignature returnSignature
     * }
     * @param array $headerParameters {
     *     @var string $transId transId
     *     @var string $transactionSrc transactionSrc
     * }
     */
    public function __construct(string $inquiryNumber, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->inquiryNumber = $inquiryNumber;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{inquiryNumber}'), array($this->inquiryNumber), '/track/v1/details/{inquiryNumber}');
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
        $optionsResolver->setDefined(array('locale', 'returnSignature'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('locale' => 'en_US', 'returnSignature' => 'false'));
        $optionsResolver->addAllowedTypes('locale', array('string'));
        $optionsResolver->addAllowedTypes('returnSignature', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('transId', 'transactionSrc'));
        $optionsResolver->setRequired(array('transId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETNotFoundException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\TrackApiResponse|\ShipStream\Ups\Api\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\TrackApiResponse', 'json');
        }
        if (is_null($contentType) === false && (207 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETNotFoundException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}