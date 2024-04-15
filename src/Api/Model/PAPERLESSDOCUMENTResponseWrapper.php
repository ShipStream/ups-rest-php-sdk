<?php

namespace ShipStream\Ups\Api\Model;

class PAPERLESSDOCUMENTResponseWrapper extends \ArrayObject
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
     * Paperless Document API response container for Push To Image Repository request.  N/A
     *
     * @var PushToImageRepositoryResponse|null
     */
    protected $pushToImageRepositoryResponse;
    /**
     * Paperless Document API response container for Push To Image Repository request.  N/A
     *
     * @return PushToImageRepositoryResponse|null
     */
    public function getPushToImageRepositoryResponse() : ?PushToImageRepositoryResponse
    {
        return $this->pushToImageRepositoryResponse;
    }
    /**
     * Paperless Document API response container for Push To Image Repository request.  N/A
     *
     * @param PushToImageRepositoryResponse|null $pushToImageRepositoryResponse
     *
     * @return self
     */
    public function setPushToImageRepositoryResponse(?PushToImageRepositoryResponse $pushToImageRepositoryResponse) : self
    {
        $this->initialized['pushToImageRepositoryResponse'] = true;
        $this->pushToImageRepositoryResponse = $pushToImageRepositoryResponse;
        return $this;
    }
}