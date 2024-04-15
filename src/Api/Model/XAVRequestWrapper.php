<?php

namespace ShipStream\Ups\Api\Model;

class XAVRequestWrapper extends \ArrayObject
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
     * 
     *
     * @var XAVRequest|null
     */
    protected $xAVRequest;
    /**
     * 
     *
     * @return XAVRequest|null
     */
    public function getXAVRequest() : ?XAVRequest
    {
        return $this->xAVRequest;
    }
    /**
     * 
     *
     * @param XAVRequest|null $xAVRequest
     *
     * @return self
     */
    public function setXAVRequest(?XAVRequest $xAVRequest) : self
    {
        $this->initialized['xAVRequest'] = true;
        $this->xAVRequest = $xAVRequest;
        return $this;
    }
}