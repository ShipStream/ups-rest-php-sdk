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
     * @var FreightCancelPickupRequest
     */
    protected $freightCancelPickupRequest;
    /**
     * FreightCancelPickupRequest container.
     *
     * @return FreightCancelPickupRequest
     */
    public function getFreightCancelPickupRequest() : FreightCancelPickupRequest
    {
        return $this->freightCancelPickupRequest;
    }
    /**
     * FreightCancelPickupRequest container.
     *
     * @param FreightCancelPickupRequest $freightCancelPickupRequest
     *
     * @return self
     */
    public function setFreightCancelPickupRequest(FreightCancelPickupRequest $freightCancelPickupRequest) : self
    {
        $this->initialized['freightCancelPickupRequest'] = true;
        $this->freightCancelPickupRequest = $freightCancelPickupRequest;
        return $this;
    }
}