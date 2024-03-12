<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTPICKUPResponseWrapper extends \ArrayObject
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
     * Freight Pickup Response Container.
     *
     * @var FreightPickupResponse
     */
    protected $freightPickupResponse;
    /**
     * Freight Pickup Response Container.
     *
     * @return FreightPickupResponse
     */
    public function getFreightPickupResponse() : FreightPickupResponse
    {
        return $this->freightPickupResponse;
    }
    /**
     * Freight Pickup Response Container.
     *
     * @param FreightPickupResponse $freightPickupResponse
     *
     * @return self
     */
    public function setFreightPickupResponse(FreightPickupResponse $freightPickupResponse) : self
    {
        $this->initialized['freightPickupResponse'] = true;
        $this->freightPickupResponse = $freightPickupResponse;
        return $this;
    }
}