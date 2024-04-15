<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTUploadRequestWrapper extends \ArrayObject
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
     * Paperless Document API Request container for uploading User Created Forms.  N/A
     *
     * @var UploadRequest|null
     */
    protected $uploadRequest;
    /**
     * Paperless Document API Request container for uploading User Created Forms.  N/A
     *
     * @return UploadRequest|null
     */
    public function getUploadRequest() : ?UploadRequest
    {
        return $this->uploadRequest;
    }
    /**
     * Paperless Document API Request container for uploading User Created Forms.  N/A
     *
     * @param UploadRequest|null $uploadRequest
     *
     * @return self
     */
    public function setUploadRequest(?UploadRequest $uploadRequest) : self
    {
        $this->initialized['uploadRequest'] = true;
        $this->uploadRequest = $uploadRequest;
        return $this;
    }
}