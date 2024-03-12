<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPRequestWrapper extends \ArrayObject
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
     * This request is used to rate an on-callpickup.
     *
     * @var PickupRateRequest
     */
    protected $pickupRateRequest;
    /**
     * This request is used to rate an on-callpickup.
     *
     * @return PickupRateRequest
     */
    public function getPickupRateRequest() : PickupRateRequest
    {
        return $this->pickupRateRequest;
    }
    /**
     * This request is used to rate an on-callpickup.
     *
     * @param PickupRateRequest $pickupRateRequest
     *
     * @return self
     */
    public function setPickupRateRequest(PickupRateRequest $pickupRateRequest) : self
    {
        $this->initialized['pickupRateRequest'] = true;
        $this->pickupRateRequest = $pickupRateRequest;
        return $this;
    }
}