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
     * Paperless Document API request container for push to Image Repository.
     *
     * @var PushToImageRepositoryRequest
     */
    protected $pushToImageRepositoryRequest;
    /**
     * Paperless Document API request container for push to Image Repository.
     *
     * @return PushToImageRepositoryRequest
     */
    public function getPushToImageRepositoryRequest() : PushToImageRepositoryRequest
    {
        return $this->pushToImageRepositoryRequest;
    }
    /**
     * Paperless Document API request container for push to Image Repository.
     *
     * @param PushToImageRepositoryRequest $pushToImageRepositoryRequest
     *
     * @return self
     */
    public function setPushToImageRepositoryRequest(PushToImageRepositoryRequest $pushToImageRepositoryRequest) : self
    {
        $this->initialized['pushToImageRepositoryRequest'] = true;
        $this->pushToImageRepositoryRequest = $pushToImageRepositoryRequest;
        return $this;
    }
}