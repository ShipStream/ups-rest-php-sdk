<?php

namespace ShipStream\Ups\Api\Endpoint;

class ChemicalReferenceData extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
    * The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.
    *
    * @param string $version Version of the API. Valid values:
    v1
    v1801. Length 5
    * @param \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $version, \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody, array $headerParameters = [])
    {
        $this->version = $version;
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
        return str_replace(['{version}'], [$this->version], '/dangerousgoods/{version}/chemicalreferencedata');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper) {
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
        $optionsResolver->setRequired(['transId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\DANGEROUSGOODSUTILITYResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \ShipStream\Ups\Api\Exception\ChemicalReferenceDataUnauthorizedException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}