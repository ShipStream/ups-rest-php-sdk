<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPServCenterRequestWrapper extends \ArrayObject
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
     * This request is to retrieve UPS Facility location information including location address, phone number, SLIC, and hours of operation for pick-up and drop-off requests
     *
     * @var PickupGetServiceCenterFacilitiesRequest
     */
    protected $pickupGetServiceCenterFacilitiesRequest;
    /**
     * This request is to retrieve UPS Facility location information including location address, phone number, SLIC, and hours of operation for pick-up and drop-off requests
     *
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function getPickupGetServiceCenterFacilitiesRequest() : PickupGetServiceCenterFacilitiesRequest
    {
        return $this->pickupGetServiceCenterFacilitiesRequest;
    }
    /**
     * This request is to retrieve UPS Facility location information including location address, phone number, SLIC, and hours of operation for pick-up and drop-off requests
     *
     * @param PickupGetServiceCenterFacilitiesRequest $pickupGetServiceCenterFacilitiesRequest
     *
     * @return self
     */
    public function setPickupGetServiceCenterFacilitiesRequest(PickupGetServiceCenterFacilitiesRequest $pickupGetServiceCenterFacilitiesRequest) : self
    {
        $this->initialized['pickupGetServiceCenterFacilitiesRequest'] = true;
        $this->pickupGetServiceCenterFacilitiesRequest = $pickupGetServiceCenterFacilitiesRequest;
        return $this;
    }
}