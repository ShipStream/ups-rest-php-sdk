<?php

namespace ShipStream\Ups\Api\Model;

class LOCATORResponseWrapper extends \ArrayObject
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
     * Container for LocatorResponse.
     *
     * @var LocatorResponse|null
     */
    protected $locatorResponse;
    /**
     * Container for LocatorResponse.
     *
     * @return LocatorResponse|null
     */
    public function getLocatorResponse() : ?LocatorResponse
    {
        return $this->locatorResponse;
    }
    /**
     * Container for LocatorResponse.
     *
     * @param LocatorResponse|null $locatorResponse
     *
     * @return self
     */
    public function setLocatorResponse(?LocatorResponse $locatorResponse) : self
    {
        $this->initialized['locatorResponse'] = true;
        $this->locatorResponse = $locatorResponse;
        return $this;
    }
}