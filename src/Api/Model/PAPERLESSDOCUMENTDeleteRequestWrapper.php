<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTDeleteRequestWrapper extends \ArrayObject
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
     * Paperless Document API Request container for deleting user created forms.
     *
     * @var DeleteRequest
     */
    protected $deleteRequest;
    /**
     * Paperless Document API Request container for deleting user created forms.
     *
     * @return DeleteRequest
     */
    public function getDeleteRequest() : DeleteRequest
    {
        return $this->deleteRequest;
    }
    /**
     * Paperless Document API Request container for deleting user created forms.
     *
     * @param DeleteRequest $deleteRequest
     *
     * @return self
     */
    public function setDeleteRequest(DeleteRequest $deleteRequest) : self
    {
        $this->initialized['deleteRequest'] = true;
        $this->deleteRequest = $deleteRequest;
        return $this;
    }
}