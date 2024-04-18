<?php

namespace ShipStream\Ups\Api\Model;

class ServiceCenterLocationPickupFacilities extends \ArrayObject
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
     * Name of the facility
     *
     * @var string
     */
    protected $name;
    /**
     * Address of the facility
     *
     * @var PickupFacilitiesAddress
     */
    protected $address;
    /**
     * SLIC code for the UPS Pickup facility
     *
     * @var string
     */
    protected $sLIC;
    /**
     * Freight or Package.
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
     * Phone Number of the Pickup Facility
     *
     * @var string
     */
    protected $phone;
    /**
     * Pickup Facilities Fax Number
     *
     * @var string
     */
    protected $fax;
    /**
     * Facility Time Container
     *
     * @var PickupFacilitiesFacilityTime
     */
    protected $facilityTime;
    /**
    * AirPort Code for destination/pickup facility. 
    Example: ATL (Atlanta)
    If Airport code is not present "---" will be returned.
    *
    * @var string
    */
    protected $airportCode;
    /**
    * Sort Code for destination/pickup facility. 
    Example: V1
    *
    * @var string
    */
    protected $sortCode;
    /**
     * Name of the facility
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the facility
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
     * Address of the facility
     *
     * @return PickupFacilitiesAddress
     */
    public function getAddress() : PickupFacilitiesAddress
    {
        return $this->address;
    }
    /**
     * Address of the facility
     *
     * @param PickupFacilitiesAddress $address
     *
     * @return self
     */
    public function setAddress(PickupFacilitiesAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * SLIC code for the UPS Pickup facility
     *
     * @return string
     */
    public function getSLIC() : string
    {
        return $this->sLIC;
    }
    /**
     * SLIC code for the UPS Pickup facility
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
     * Freight or Package.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Freight or Package.
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
     * Phone Number of the Pickup Facility
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Phone Number of the Pickup Facility
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
     * Pickup Facilities Fax Number
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * Pickup Facilities Fax Number
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
     * @return PickupFacilitiesFacilityTime
     */
    public function getFacilityTime() : PickupFacilitiesFacilityTime
    {
        return $this->facilityTime;
    }
    /**
     * Facility Time Container
     *
     * @param PickupFacilitiesFacilityTime $facilityTime
     *
     * @return self
     */
    public function setFacilityTime(PickupFacilitiesFacilityTime $facilityTime) : self
    {
        $this->initialized['facilityTime'] = true;
        $this->facilityTime = $facilityTime;
        return $this;
    }
    /**
    * AirPort Code for destination/pickup facility. 
    Example: ATL (Atlanta)
    If Airport code is not present "---" will be returned.
    *
    * @return string
    */
    public function getAirportCode() : string
    {
        return $this->airportCode;
    }
    /**
    * AirPort Code for destination/pickup facility. 
    Example: ATL (Atlanta)
    If Airport code is not present "---" will be returned.
    *
    * @param string $airportCode
    *
    * @return self
    */
    public function setAirportCode(string $airportCode) : self
    {
        $this->initialized['airportCode'] = true;
        $this->airportCode = $airportCode;
        return $this;
    }
    /**
    * Sort Code for destination/pickup facility. 
    Example: V1
    *
    * @return string
    */
    public function getSortCode() : string
    {
        return $this->sortCode;
    }
    /**
    * Sort Code for destination/pickup facility. 
    Example: V1
    *
    * @param string $sortCode
    *
    * @return self
    */
    public function setSortCode(string $sortCode) : self
    {
        $this->initialized['sortCode'] = true;
        $this->sortCode = $sortCode;
        return $this;
    }
}