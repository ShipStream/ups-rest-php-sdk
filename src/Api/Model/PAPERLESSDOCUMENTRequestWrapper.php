<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTRequestWrapper extends \ArrayObject
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
     * Paperless Document API request container for push to Image Repository.  N/A
     *
     * @var PushToImageRepositoryRequest|null
     */
    protected $pushToImageRepositoryRequest;
    /**
     * Paperless Document API request container for push to Image Repository.  N/A
     *
     * @return PushToImageRepositoryRequest|null
     */
    public function getPushToImageRepositoryRequest() : ?PushToImageRepositoryRequest
    {
        return $this->pushToImageRepositoryRequest;
    }
    /**
     * Paperless Document API request container for push to Image Repository.  N/A
     *
     * @param PushToImageRepositoryRequest|null $pushToImageRepositoryRequest
     *
     * @return self
     */
    public function setPushToImageRepositoryRequest(?PushToImageRepositoryRequest $pushToImageRepositoryRequest) : self
    {
        $this->initialized['pushToImageRepositoryRequest'] = true;
        $this->pushToImageRepositoryRequest = $pushToImageRepositoryRequest;
        return $this;
    }
}