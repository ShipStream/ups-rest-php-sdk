<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesResponse extends \ArrayObject
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
     * Container for response.
     *
     * @var PickupGetServiceCenterFacilitiesResponseResponse|null
     */
    protected $response;
    /**
     * Locations of the nearest Service Center for Dropoff and Pickup
     *
     * @var PickupGetServiceCenterFacilitiesResponseServiceCenterLocation|null
     */
    protected $serviceCenterLocation;
    /**
     * Container for response.
     *
     * @return PickupGetServiceCenterFacilitiesResponseResponse|null
     */
    public function getResponse() : ?PickupGetServiceCenterFacilitiesResponseResponse
    {
        return $this->response;
    }
    /**
     * Container for response.
     *
     * @param PickupGetServiceCenterFacilitiesResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?PickupGetServiceCenterFacilitiesResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Locations of the nearest Service Center for Dropoff and Pickup
     *
     * @return PickupGetServiceCenterFacilitiesResponseServiceCenterLocation|null
     */
    public function getServiceCenterLocation() : ?PickupGetServiceCenterFacilitiesResponseServiceCenterLocation
    {
        return $this->serviceCenterLocation;
    }
    /**
     * Locations of the nearest Service Center for Dropoff and Pickup
     *
     * @param PickupGetServiceCenterFacilitiesResponseServiceCenterLocation|null $serviceCenterLocation
     *
     * @return self
     */
    public function setServiceCenterLocation(?PickupGetServiceCenterFacilitiesResponseServiceCenterLocation $serviceCenterLocation) : self
    {
        $this->initialized['serviceCenterLocation'] = true;
        $this->serviceCenterLocation = $serviceCenterLocation;
        return $this;
    }
}