<?php

namespace ShipStream\Ups\Api\Model;

class ErrorResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ErrorResponseWrapper|null
     */
    protected $response;
    /**
     * 
     *
     * @return ErrorResponseWrapper|null
     */
    public function getResponse() : ?ErrorResponseWrapper
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ErrorResponseWrapper|null $response
     *
     * @return self
     */
    public function setResponse(?ErrorResponseWrapper $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
}