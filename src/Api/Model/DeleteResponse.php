<?php

namespace ShipStream\Ups\Api\Model;

class DeleteResponse extends \ArrayObject
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
     * Response container.
     *
     * @var DeleteResponseResponse
     */
    protected $response;
    /**
     * Response container.
     *
     * @return DeleteResponseResponse
     */
    public function getResponse() : DeleteResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param DeleteResponseResponse $response
     *
     * @return self
     */
    public function setResponse(DeleteResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
}