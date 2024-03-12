<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPPolDivResponseWrapper extends \ArrayObject
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
     * The response for getting a list of valid Political Division 1 or State field in the specified country or territory.
     *
     * @var PickupGetPoliticalDivision1ListResponse
     */
    protected $pickupGetPoliticalDivision1ListResponse;
    /**
     * The response for getting a list of valid Political Division 1 or State field in the specified country or territory.
     *
     * @return PickupGetPoliticalDivision1ListResponse
     */
    public function getPickupGetPoliticalDivision1ListResponse() : PickupGetPoliticalDivision1ListResponse
    {
        return $this->pickupGetPoliticalDivision1ListResponse;
    }
    /**
     * The response for getting a list of valid Political Division 1 or State field in the specified country or territory.
     *
     * @param PickupGetPoliticalDivision1ListResponse $pickupGetPoliticalDivision1ListResponse
     *
     * @return self
     */
    public function setPickupGetPoliticalDivision1ListResponse(PickupGetPoliticalDivision1ListResponse $pickupGetPoliticalDivision1ListResponse) : self
    {
        $this->initialized['pickupGetPoliticalDivision1ListResponse'] = true;
        $this->pickupGetPoliticalDivision1ListResponse = $pickupGetPoliticalDivision1ListResponse;
        return $this;
    }
}