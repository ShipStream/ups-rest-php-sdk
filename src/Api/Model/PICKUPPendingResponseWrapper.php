<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPPendingResponseWrapper extends \ArrayObject
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
     * The response of the pending status for on-callpickup.
     *
     * @var PickupPendingStatusResponse
     */
    protected $pickupPendingStatusResponse;
    /**
     * The response of the pending status for on-callpickup.
     *
     * @return PickupPendingStatusResponse
     */
    public function getPickupPendingStatusResponse() : PickupPendingStatusResponse
    {
        return $this->pickupPendingStatusResponse;
    }
    /**
     * The response of the pending status for on-callpickup.
     *
     * @param PickupPendingStatusResponse $pickupPendingStatusResponse
     *
     * @return self
     */
    public function setPickupPendingStatusResponse(PickupPendingStatusResponse $pickupPendingStatusResponse) : self
    {
        $this->initialized['pickupPendingStatusResponse'] = true;
        $this->pickupPendingStatusResponse = $pickupPendingStatusResponse;
        return $this;
    }
}