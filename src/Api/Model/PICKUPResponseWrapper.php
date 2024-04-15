<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPResponseWrapper extends \ArrayObject
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
     * The response of rating on-callpickup.
     *
     * @var PickupRateResponse|null
     */
    protected $pickupRateResponse;
    /**
     * The response of rating on-callpickup.
     *
     * @return PickupRateResponse|null
     */
    public function getPickupRateResponse() : ?PickupRateResponse
    {
        return $this->pickupRateResponse;
    }
    /**
     * The response of rating on-callpickup.
     *
     * @param PickupRateResponse|null $pickupRateResponse
     *
     * @return self
     */
    public function setPickupRateResponse(?PickupRateResponse $pickupRateResponse) : self
    {
        $this->initialized['pickupRateResponse'] = true;
        $this->pickupRateResponse = $pickupRateResponse;
        return $this;
    }
}