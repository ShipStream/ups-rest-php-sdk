<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPCreationRequestWrapper extends \ArrayObject
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
     * This request is for scheduling an on-call pickup
     *
     * @var PickupCreationRequest
     */
    protected $pickupCreationRequest;
    /**
     * This request is for scheduling an on-call pickup
     *
     * @return PickupCreationRequest
     */
    public function getPickupCreationRequest() : PickupCreationRequest
    {
        return $this->pickupCreationRequest;
    }
    /**
     * This request is for scheduling an on-call pickup
     *
     * @param PickupCreationRequest $pickupCreationRequest
     *
     * @return self
     */
    public function setPickupCreationRequest(PickupCreationRequest $pickupCreationRequest) : self
    {
        $this->initialized['pickupCreationRequest'] = true;
        $this->pickupCreationRequest = $pickupCreationRequest;
        return $this;
    }
}