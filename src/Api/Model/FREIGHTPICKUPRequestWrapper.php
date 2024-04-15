<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTPICKUPRequestWrapper extends \ArrayObject
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
     * @var FreightPickupRequest|null
     */
    protected $freightPickupRequest;
    /**
     * 
     *
     * @return FreightPickupRequest|null
     */
    public function getFreightPickupRequest() : ?FreightPickupRequest
    {
        return $this->freightPickupRequest;
    }
    /**
     * 
     *
     * @param FreightPickupRequest|null $freightPickupRequest
     *
     * @return self
     */
    public function setFreightPickupRequest(?FreightPickupRequest $freightPickupRequest) : self
    {
        $this->initialized['freightPickupRequest'] = true;
        $this->freightPickupRequest = $freightPickupRequest;
        return $this;
    }
}