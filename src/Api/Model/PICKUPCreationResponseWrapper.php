<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPCreationResponseWrapper extends \ArrayObject
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
     * The response for scheduling an on-callpickup.
     *
     * @var PickupCreationResponse
     */
    protected $pickupCreationResponse;
    /**
     * The response for scheduling an on-callpickup.
     *
     * @return PickupCreationResponse
     */
    public function getPickupCreationResponse() : PickupCreationResponse
    {
        return $this->pickupCreationResponse;
    }
    /**
     * The response for scheduling an on-callpickup.
     *
     * @param PickupCreationResponse $pickupCreationResponse
     *
     * @return self
     */
    public function setPickupCreationResponse(PickupCreationResponse $pickupCreationResponse) : self
    {
        $this->initialized['pickupCreationResponse'] = true;
        $this->pickupCreationResponse = $pickupCreationResponse;
        return $this;
    }
}