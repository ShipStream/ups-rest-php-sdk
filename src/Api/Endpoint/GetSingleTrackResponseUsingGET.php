<?php

namespace ShipStream\Ups\Api\Endpoint;

class GetSingleTrackResponseUsingGET extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $inquiryNumber;
    /**
     * 
     *
     * @param string $inquiryNumber The tracking number for which tracking information is requested. Each inquiry number must be between 7 and 34 characters in length.
     * @param array $queryParameters {
     *     @var string $locale Language and country code of the user, separated by an underscore. Default value is 'en_US'
     *     @var string $returnSignature Indicator requesting that the delivery signature image be included as part of the response (by default the image will not be returned). Returns image bytecodes of the signature.
     *     @var string $returnMilestones returnMilestones
     * }
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request.
     *     @var string $transactionSrc Identifies the client/source application that is calling
     * }
     */
    public function __construct(string $inquiryNumber, array $queryParameters = [], array $headerParameters = [])
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
        return str_replace(['{inquiryNumber}'], [$this->inquiryNumber], '/track/v1/details/{inquiryNumber}');
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
        $optionsResolver->setDefined(['locale', 'returnSignature', 'returnMilestones']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['locale' => 'en_US', 'returnSignature' => 'false', 'returnMilestones' => 'false']);
        $optionsResolver->addAllowedTypes('locale', ['string']);
        $optionsResolver->addAllowedTypes('returnSignature', ['string']);
        $optionsResolver->addAllowedTypes('returnMilestones', ['string']);
        return $optionsResolver;
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
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETForbiddenException
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
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETForbiddenException($serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
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
        return ['oauth2'];
    }
}