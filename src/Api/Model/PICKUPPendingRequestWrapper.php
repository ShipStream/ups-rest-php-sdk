<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPPendingRequestWrapper extends \ArrayObject
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
     * This request is used to get the pending pickup status.
     *
     * @var PickupPendingStatusRequest
     */
    protected $pickupPendingStatusRequest;
    /**
     * This request is used to get the pending pickup status.
     *
     * @return PickupPendingStatusRequest
     */
    public function getPickupPendingStatusRequest() : PickupPendingStatusRequest
    {
        return $this->pickupPendingStatusRequest;
    }
    /**
     * This request is used to get the pending pickup status.
     *
     * @param PickupPendingStatusRequest $pickupPendingStatusRequest
     *
     * @return self
     */
    public function setPickupPendingStatusRequest(PickupPendingStatusRequest $pickupPendingStatusRequest) : self
    {
        $this->initialized['pickupPendingStatusRequest'] = true;
        $this->pickupPendingStatusRequest = $pickupPendingStatusRequest;
        return $this;
    }
}