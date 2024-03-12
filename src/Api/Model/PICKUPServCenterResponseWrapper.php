<?php

namespace ShipStream\Ups\Api\Model;

class PICKUPServCenterResponseWrapper extends \ArrayObject
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
     * Returns service center location information for Origin UPS Facilities and Destination Facilities
     *
     * @var PickupGetServiceCenterFacilitiesResponse
     */
    protected $pickupGetServiceCenterFacilitiesResponse;
    /**
     * Returns service center location information for Origin UPS Facilities and Destination Facilities
     *
     * @return PickupGetServiceCenterFacilitiesResponse
     */
    public function getPickupGetServiceCenterFacilitiesResponse() : PickupGetServiceCenterFacilitiesResponse
    {
        return $this->pickupGetServiceCenterFacilitiesResponse;
    }
    /**
     * Returns service center location information for Origin UPS Facilities and Destination Facilities
     *
     * @param PickupGetServiceCenterFacilitiesResponse $pickupGetServiceCenterFacilitiesResponse
     *
     * @return self
     */
    public function setPickupGetServiceCenterFacilitiesResponse(PickupGetServiceCenterFacilitiesResponse $pickupGetServiceCenterFacilitiesResponse) : self
    {
        $this->initialized['pickupGetServiceCenterFacilitiesResponse'] = true;
        $this->pickupGetServiceCenterFacilitiesResponse = $pickupGetServiceCenterFacilitiesResponse;
        return $this;
    }
}