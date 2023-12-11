<?php

namespace ShipStream\Ups\Api\Exception;

class LandedCostUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \ShipStream\Ups\Api\Model\Errors
     */
    private $errors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ShipStream\Ups\Api\Model\Errors $errors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized Request');
        $this->errors = $errors;
        $this->response = $response;
    }
    public function getErrors() : \ShipStream\Ups\Api\Model\Errors
    {
        return $this->errors;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}