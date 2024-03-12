<?php

namespace ShipStream\Ups\Api\Model;

class LOCATORRequestWrapper extends \ArrayObject
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
     * N/A
     *
     * @var LocatorRequest
     */
    protected $locatorRequest;
    /**
     * N/A
     *
     * @return LocatorRequest
     */
    public function getLocatorRequest() : LocatorRequest
    {
        return $this->locatorRequest;
    }
    /**
     * N/A
     *
     * @param LocatorRequest $locatorRequest
     *
     * @return self
     */
    public function setLocatorRequest(LocatorRequest $locatorRequest) : self
    {
        $this->initialized['locatorRequest'] = true;
        $this->locatorRequest = $locatorRequest;
        return $this;
    }
}