<?php

namespace ShipStream\Ups\Api\Endpoint;

class Delete extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * 
     *
     * @param string $version Version of API
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $ShipperNumber Your Shipper Number
     *     @var string $DocumentId DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
     * }
     */
    public function __construct(string $version = 'v1', array $headerParameters = [])
    {
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
        return str_replace(['{version}'], [$this->version], '/paperlessdocuments/{version}/DocumentId/ShipperNumber');
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
        $optionsResolver->setDefined(['transId', 'transactionSrc', 'ShipperNumber', 'DocumentId']);
        $optionsResolver->setRequired(['ShipperNumber', 'DocumentId']);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        $optionsResolver->addAllowedTypes('ShipperNumber', ['string']);
        $optionsResolver->addAllowedTypes('DocumentId', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\DeleteUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\PAPERLESSDOCUMENTDeleteResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \ShipStream\Ups\Api\Exception\DeleteUnauthorizedException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}