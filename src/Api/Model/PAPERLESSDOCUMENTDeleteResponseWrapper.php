<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTDeleteResponseWrapper extends \ArrayObject
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
     * Paperless Document API response container for delete request.  N/A
     *
     * @var DeleteResponse
     */
    protected $deleteResponse;
    /**
     * Paperless Document API response container for delete request.  N/A
     *
     * @return DeleteResponse
     */
    public function getDeleteResponse() : DeleteResponse
    {
        return $this->deleteResponse;
    }
    /**
     * Paperless Document API response container for delete request.  N/A
     *
     * @param DeleteResponse $deleteResponse
     *
     * @return self
     */
    public function setDeleteResponse(DeleteResponse $deleteResponse) : self
    {
        $this->initialized['deleteResponse'] = true;
        $this->deleteResponse = $deleteResponse;
        return $this;
    }
}