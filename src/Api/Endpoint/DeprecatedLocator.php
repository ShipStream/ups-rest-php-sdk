<?php

namespace ShipStream\Ups\Api\Endpoint;

class DeprecatedLocator extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $deprecatedVersion;
    protected $reqOption;
    /**
    * The Locator API allows you to find UPS locations - such as drop-off points, retail locations, and UPS access points (third-party retail locations that offer UPS package drop-off, or delivery services). The API provides capabilities to search by location, services offered, program types, and related criteria. You can also retrieve hours of operation, location details, and additional UPS services offered at specific locations.
    *
    * @param string $deprecatedVersion Version of API
    
    Valid values:
    - v1
    
    * @param string $reqOption Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.  
    * @param \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $Locale Locale of request
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $deprecatedVersion, string $reqOption, \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->deprecatedVersion = $deprecatedVersion;
        $this->reqOption = $reqOption;
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
        return str_replace(['{deprecatedVersion}', '{reqOption}'], [$this->deprecatedVersion, $this->reqOption], '/locations/{deprecatedVersion}/search/availabilities/{reqOption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\LOCATORRequestWrapper) {
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
        $optionsResolver->setDefined(['Locale']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Locale' => 'en_US']);
        $optionsResolver->addAllowedTypes('Locale', ['string']);
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
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\LOCATORResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\LOCATORResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedLocatorBadRequestException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedLocatorUnauthorizedException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedLocatorForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\DeprecatedLocatorTooManyRequestsException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}