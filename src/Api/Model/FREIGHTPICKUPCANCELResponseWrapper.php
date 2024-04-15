<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTPICKUPCANCELResponseWrapper extends \ArrayObject
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
     * Freight Cancel response container.
     *
     * @var FreightCancelPickupResponse|null
     */
    protected $freightCancelPickupResponse;
    /**
     * Freight Cancel response container.
     *
     * @return FreightCancelPickupResponse|null
     */
    public function getFreightCancelPickupResponse() : ?FreightCancelPickupResponse
    {
        return $this->freightCancelPickupResponse;
    }
    /**
     * Freight Cancel response container.
     *
     * @param FreightCancelPickupResponse|null $freightCancelPickupResponse
     *
     * @return self
     */
    public function setFreightCancelPickupResponse(?FreightCancelPickupResponse $freightCancelPickupResponse) : self
    {
        $this->initialized['freightCancelPickupResponse'] = true;
        $this->freightCancelPickupResponse = $freightCancelPickupResponse;
        return $this;
    }
}