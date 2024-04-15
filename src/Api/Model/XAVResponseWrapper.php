<?php

namespace ShipStream\Ups\Api\Model;

class XAVResponseWrapper extends \ArrayObject
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
     * XAV Response Container.
     *
     * @var XAVResponse|null
     */
    protected $xAVResponse;
    /**
     * XAV Response Container.
     *
     * @return XAVResponse|null
     */
    public function getXAVResponse() : ?XAVResponse
    {
        return $this->xAVResponse;
    }
    /**
     * XAV Response Container.
     *
     * @param XAVResponse|null $xAVResponse
     *
     * @return self
     */
    public function setXAVResponse(?XAVResponse $xAVResponse) : self
    {
        $this->initialized['xAVResponse'] = true;
        $this->xAVResponse = $xAVResponse;
        return $this;
    }
}