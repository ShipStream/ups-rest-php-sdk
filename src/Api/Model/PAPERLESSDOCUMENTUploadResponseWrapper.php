<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTUploadResponseWrapper extends \ArrayObject
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
     * Paperless Document API Response Container for upload request.
     *
     * @var UploadResponse
     */
    protected $uploadResponse;
    /**
     * Paperless Document API Response Container for upload request.
     *
     * @return UploadResponse
     */
    public function getUploadResponse() : UploadResponse
    {
        return $this->uploadResponse;
    }
    /**
     * Paperless Document API Response Container for upload request.
     *
     * @param UploadResponse $uploadResponse
     *
     * @return self
     */
    public function setUploadResponse(UploadResponse $uploadResponse) : self
    {
        $this->initialized['uploadResponse'] = true;
        $this->uploadResponse = $uploadResponse;
        return $this;
    }
}