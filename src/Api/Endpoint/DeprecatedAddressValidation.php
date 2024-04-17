<?php

namespace ShipStream\Ups\Api\Endpoint;

class DeprecatedAddressValidation extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $requestoption;
    protected $deprecatedVersion;
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
    * @param string $deprecatedVersion Identifies the version of the API.
    
    Valid  values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False.  If True, either the region element or any  combination of Political Division 1,  Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will  be recognized for validation in addition to  the urbanization element. If False or no  indicator, street level address validation  is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50 The maximum number of Candidates to  return for this request. If not provided,  the default size of 15 is returned.
    * }
    */
    public function __construct(int $requestoption, string $deprecatedVersion, \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody, array $queryParameters = array())
    {
        $this->requestoption = $requestoption;
        $this->deprecatedVersion = $deprecatedVersion;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{requestoption}', '{deprecatedVersion}'), array($this->requestoption, $this->deprecatedVersion), '/addressvalidation/{deprecatedVersion}/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\XAVRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('regionalrequestindicator', 'maximumcandidatelistsize'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('regionalrequestindicator', array('string'));
        $optionsResolver->addAllowedTypes('maximumcandidatelistsize', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationTooManyRequestsException
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
            throw new \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}