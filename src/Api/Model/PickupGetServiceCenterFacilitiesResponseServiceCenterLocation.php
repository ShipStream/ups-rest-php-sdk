<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesResponseServiceCenterLocation extends \ArrayObject
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
     * 
     *
     * @var list<ServiceCenterLocationDropOffFacilities>
     */
    protected $dropOffFacilities;
    /**
     * Returns information for Pickup Facilities. This includes name of facility, address, and business hours.
     *
     * @var ServiceCenterLocationPickupFacilities
     */
    protected $pickupFacilities;
    /**
     * 
     *
     * @return list<ServiceCenterLocationDropOffFacilities>
     */
    public function getDropOffFacilities() : array
    {
        return $this->dropOffFacilities;
    }
    /**
     * 
     *
     * @param list<ServiceCenterLocationDropOffFacilities> $dropOffFacilities
     *
     * @return self
     */
    public function setDropOffFacilities(array $dropOffFacilities) : self
    {
        $this->initialized['dropOffFacilities'] = true;
        $this->dropOffFacilities = $dropOffFacilities;
        return $this;
    }
    /**
     * Returns information for Pickup Facilities. This includes name of facility, address, and business hours.
     *
     * @return ServiceCenterLocationPickupFacilities
     */
    public function getPickupFacilities() : ServiceCenterLocationPickupFacilities
    {
        return $this->pickupFacilities;
    }
    /**
     * Returns information for Pickup Facilities. This includes name of facility, address, and business hours.
     *
     * @param ServiceCenterLocationPickupFacilities $pickupFacilities
     *
     * @return self
     */
    public function setPickupFacilities(ServiceCenterLocationPickupFacilities $pickupFacilities) : self
    {
        $this->initialized['pickupFacilities'] = true;
        $this->pickupFacilities = $pickupFacilities;
        return $this;
    }
}