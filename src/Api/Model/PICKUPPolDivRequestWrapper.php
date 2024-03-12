<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPPolDivRequestWrapper extends \ArrayObject
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
     * This request is for client to get a list of valid Political Division 1s/State field for a specific country or territory
     *
     * @var PickupGetPoliticalDivision1ListRequest
     */
    protected $pickupGetPoliticalDivision1ListRequest;
    /**
     * This request is for client to get a list of valid Political Division 1s/State field for a specific country or territory
     *
     * @return PickupGetPoliticalDivision1ListRequest
     */
    public function getPickupGetPoliticalDivision1ListRequest() : PickupGetPoliticalDivision1ListRequest
    {
        return $this->pickupGetPoliticalDivision1ListRequest;
    }
    /**
     * This request is for client to get a list of valid Political Division 1s/State field for a specific country or territory
     *
     * @param PickupGetPoliticalDivision1ListRequest $pickupGetPoliticalDivision1ListRequest
     *
     * @return self
     */
    public function setPickupGetPoliticalDivision1ListRequest(PickupGetPoliticalDivision1ListRequest $pickupGetPoliticalDivision1ListRequest) : self
    {
        $this->initialized['pickupGetPoliticalDivision1ListRequest'] = true;
        $this->pickupGetPoliticalDivision1ListRequest = $pickupGetPoliticalDivision1ListRequest;
        return $this;
    }
}