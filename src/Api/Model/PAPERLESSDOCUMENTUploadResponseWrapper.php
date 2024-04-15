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
     * Paperless Document API Response Container for upload request.  N/A
     *
     * @var UploadResponse|null
     */
    protected $uploadResponse;
    /**
     * Paperless Document API Response Container for upload request.  N/A
     *
     * @return UploadResponse|null
     */
    public function getUploadResponse() : ?UploadResponse
    {
        return $this->uploadResponse;
    }
    /**
     * Paperless Document API Response Container for upload request.  N/A
     *
     * @param UploadResponse|null $uploadResponse
     *
     * @return self
     */
    public function setUploadResponse(?UploadResponse $uploadResponse) : self
    {
        $this->initialized['uploadResponse'] = true;
        $this->uploadResponse = $uploadResponse;
        return $this;
    }
}