<?php

namespace ShipStream\Ups\Api\Endpoint;

class QuantumView extends \ShipStream\Ups\Api\Runtime\Client\BaseEndpoint implements \ShipStream\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * Get Quantum View Response
     *
     * @param string $version Version of API
     * @param \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody 
     */
    public function __construct(string $version, \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody)
    {
        $this->version = $version;
        $this->body = $requestBody;
    }
    use \ShipStream\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}'), array($this->version), '/quantumview/{version}/events');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ShipStream\Ups\Api\Exception\QuantumViewUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ShipStream\\Ups\\Api\\Model\\QUANTUMVIEWResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \ShipStream\Ups\Api\Exception\QuantumViewUnauthorizedException($response);
        }
        throw new \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}