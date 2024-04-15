<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPCancelRequestWrapper extends \ArrayObject
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
     * This request is to cancel an on-callpickup.
     *
     * @var PickupCancelRequest|null
     */
    protected $pickupCancelRequest;
    /**
     * This request is to cancel an on-callpickup.
     *
     * @return PickupCancelRequest|null
     */
    public function getPickupCancelRequest() : ?PickupCancelRequest
    {
        return $this->pickupCancelRequest;
    }
    /**
     * This request is to cancel an on-callpickup.
     *
     * @param PickupCancelRequest|null $pickupCancelRequest
     *
     * @return self
     */
    public function setPickupCancelRequest(?PickupCancelRequest $pickupCancelRequest) : self
    {
        $this->initialized['pickupCancelRequest'] = true;
        $this->pickupCancelRequest = $pickupCancelRequest;
        return $this;
    }
}