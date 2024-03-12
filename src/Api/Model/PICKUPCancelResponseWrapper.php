<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPCancelResponseWrapper extends \ArrayObject
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
     * The response for cancelling pickup(s)
     *
     * @var PickupCancelResponse
     */
    protected $pickupCancelResponse;
    /**
     * The response for cancelling pickup(s)
     *
     * @return PickupCancelResponse
     */
    public function getPickupCancelResponse() : PickupCancelResponse
    {
        return $this->pickupCancelResponse;
    }
    /**
     * The response for cancelling pickup(s)
     *
     * @param PickupCancelResponse $pickupCancelResponse
     *
     * @return self
     */
    public function setPickupCancelResponse(PickupCancelResponse $pickupCancelResponse) : self
    {
        $this->initialized['pickupCancelResponse'] = true;
        $this->pickupCancelResponse = $pickupCancelResponse;
        return $this;
    }
}