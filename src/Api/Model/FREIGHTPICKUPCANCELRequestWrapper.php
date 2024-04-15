<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTPICKUPCANCELRequestWrapper extends \ArrayObject
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
     * FreightCancelPickupRequest container.
     *
     * @var FreightCancelPickupRequest|null
     */
    protected $freightCancelPickupRequest;
    /**
     * FreightCancelPickupRequest container.
     *
     * @return FreightCancelPickupRequest|null
     */
    public function getFreightCancelPickupRequest() : ?FreightCancelPickupRequest
    {
        return $this->freightCancelPickupRequest;
    }
    /**
     * FreightCancelPickupRequest container.
     *
     * @param FreightCancelPickupRequest|null $freightCancelPickupRequest
     *
     * @return self
     */
    public function setFreightCancelPickupRequest(?FreightCancelPickupRequest $freightCancelPickupRequest) : self
    {
        $this->initialized['freightCancelPickupRequest'] = true;
        $this->freightCancelPickupRequest = $freightCancelPickupRequest;
        return $this;
    }
}