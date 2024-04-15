<?php

namespace ShipStream\Ups\Api\Endpoint;

class AddressValidation extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $requestoption;
    protected $version;
    protected $accept;
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the type of request. Valid 
    values: 
    1 - Address Validation
    2 - Address Classification 
    3 - Address Validation and Address 
    Classification.
    * @param string $version Identifies the version of the API. Valid 
    values: 
    v1
    * @param null|\ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False. 
    If True, either the region element or any 
    combination of Political Division 1, 
    Political Division 2, PostcodePrimaryLow 
    and the PostcodeExtendedLow fields will 
    be recognized for validation in addition to 
    the urbanization element. If False or no 
    indicator, street level address validation 
    is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50
    The maximum number of Candidates to 
    return for this request. If not provided, 
    the default size of 15 is returned.
    * }
    * @param array $accept Accept content header application/json|application/xml
    */
    public function __construct(int $requestoption, string $version, ?\ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody = null, array $queryParameters = [], array $accept = [])
    {
        $this->requestoption = $requestoption;
        $this->version = $version;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{requestoption}', '{version}'], [$this->requestoption, $this->version], '/addressvalidation/{version}/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\XAVRequestWrapper) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['regionalrequestindicator', 'maximumcandidatelistsize']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('regionalrequestindicator', ['string']);
        $optionsResolver->addAllowedTypes('maximumcandidatelistsize', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\AddressValidationBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\AddressValidationUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\AddressValidationNotFoundException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\XAVResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\XAVResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\AddressValidationBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\AddressValidationUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\AddressValidationNotFoundException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}