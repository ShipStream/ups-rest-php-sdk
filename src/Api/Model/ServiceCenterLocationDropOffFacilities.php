<?php

namespace ShipStream\Ups\Api\Model;

class ServiceCenterLocationDropOffFacilities extends \ArrayObject
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
     * Name of the Facility.
     *
     * @var string
     */
    protected $name;
    /**
     * Address of the facility.
     *
     * @var DropOffFacilitiesAddress
     */
    protected $address;
    /**
     * SLIC code for the UPS Drop off facility.
     *
     * @var string
     */
    protected $sLIC;
    /**
     * FRT for Freight or PKG for Package
     *
     * @var string
     */
    protected $type;
    /**
    * Facility's Timezone. Format:
    - America/New_York
    - Asia/Hong_Kong
    - Europe/London
    *
    * @var string
    */
    protected $timezone;
    /**
     * Phone Number of the Drop off Facility
     *
     * @var string
     */
    protected $phone;
    /**
     * Drop off Facilities Fax Number
     *
     * @var string
     */
    protected $fax;
    /**
     * Facility Time Container
     *
     * @var DropOffFacilitiesFacilityTime
     */
    protected $facilityTime;
    /**
     * Type of Facility.
     *
     * @var string
     */
    protected $originOrDestination;
    /**
     * 
     *
     * @var list<DropOffFacilitiesLocalizedInstruction>
     */
    protected $localizedInstruction;
    /**
     * Distance from origin  Distance will be retuned for drop off location search by proximity order.
     *
     * @var DropOffFacilitiesDistance
     */
    protected $distance;
    /**
     * Name of the Facility.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the Facility.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Address of the facility.
     *
     * @return DropOffFacilitiesAddress
     */
    public function getAddress() : DropOffFacilitiesAddress
    {
        return $this->address;
    }
    /**
     * Address of the facility.
     *
     * @param DropOffFacilitiesAddress $address
     *
     * @return self
     */
    public function setAddress(DropOffFacilitiesAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * SLIC code for the UPS Drop off facility.
     *
     * @return string
     */
    public function getSLIC() : string
    {
        return $this->sLIC;
    }
    /**
     * SLIC code for the UPS Drop off facility.
     *
     * @param string $sLIC
     *
     * @return self
     */
    public function setSLIC(string $sLIC) : self
    {
        $this->initialized['sLIC'] = true;
        $this->sLIC = $sLIC;
        return $this;
    }
    /**
     * FRT for Freight or PKG for Package
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * FRT for Freight or PKG for Package
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
    * Facility's Timezone. Format:
    - America/New_York
    - Asia/Hong_Kong
    - Europe/London
    *
    * @return string
    */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
    * Facility's Timezone. Format:
    - America/New_York
    - Asia/Hong_Kong
    - Europe/London
    *
    * @param string $timezone
    *
    * @return self
    */
    public function setTimezone(string $timezone) : self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Phone Number of the Drop off Facility
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Phone Number of the Drop off Facility
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Drop off Facilities Fax Number
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * Drop off Facilities Fax Number
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * Facility Time Container
     *
     * @return DropOffFacilitiesFacilityTime
     */
    public function getFacilityTime() : DropOffFacilitiesFacilityTime
    {
        return $this->facilityTime;
    }
    /**
     * Facility Time Container
     *
     * @param DropOffFacilitiesFacilityTime $facilityTime
     *
     * @return self
     */
    public function setFacilityTime(DropOffFacilitiesFacilityTime $facilityTime) : self
    {
        $this->initialized['facilityTime'] = true;
        $this->facilityTime = $facilityTime;
        return $this;
    }
    /**
     * Type of Facility.
     *
     * @return string
     */
    public function getOriginOrDestination() : string
    {
        return $this->originOrDestination;
    }
    /**
     * Type of Facility.
     *
     * @param string $originOrDestination
     *
     * @return self
     */
    public function setOriginOrDestination(string $originOrDestination) : self
    {
        $this->initialized['originOrDestination'] = true;
        $this->originOrDestination = $originOrDestination;
        return $this;
    }
    /**
     * 
     *
     * @return list<DropOffFacilitiesLocalizedInstruction>
     */
    public function getLocalizedInstruction() : array
    {
        return $this->localizedInstruction;
    }
    /**
     * 
     *
     * @param list<DropOffFacilitiesLocalizedInstruction> $localizedInstruction
     *
     * @return self
     */
    public function setLocalizedInstruction(array $localizedInstruction) : self
    {
        $this->initialized['localizedInstruction'] = true;
        $this->localizedInstruction = $localizedInstruction;
        return $this;
    }
    /**
     * Distance from origin  Distance will be retuned for drop off location search by proximity order.
     *
     * @return DropOffFacilitiesDistance
     */
    public function getDistance() : DropOffFacilitiesDistance
    {
        return $this->distance;
    }
    /**
     * Distance from origin  Distance will be retuned for drop off location search by proximity order.
     *
     * @param DropOffFacilitiesDistance $distance
     *
     * @return self
     */
    public function setDistance(DropOffFacilitiesDistance $distance) : self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
}