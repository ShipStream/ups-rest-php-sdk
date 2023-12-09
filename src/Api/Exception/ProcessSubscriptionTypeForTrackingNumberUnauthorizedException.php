<?php

namespace ShipStream\Ups\Api\Exception;

class ProcessSubscriptionTypeForTrackingNumberUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \ShipStream\Ups\Api\Model\Response
     */
    private $response;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ShipStream\Ups\Api\Model\Response $response, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->response = $response;
        $this->response = $response;
    }
    public function getResponse() : \ShipStream\Ups\Api\Model\Response
    {
        return $this->response;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}