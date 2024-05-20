<?php

namespace ShipStream\Ups\Api\Model;

class LocationSearchCriteriaFreightWillCallSearch extends \ArrayObject
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
    * Valid values are: 
    1 - Postal Code
    2 - Delivery SLIC
    3 - Delivery City/State.
    1: Freight Will Call Search based on Postal Code, this search is valid for Postal code countries. 2: Freight Will Call Search based on SLIC. 3: Freight Will Call Search based on City and/or State. This Search is valid for non-postal code Countries
    *
    * @var string
    */
    protected $freightWillCallRequestType;
    /**
     * 
     *
     * @var list<FreightWillCallSearchFacilityAddress>
     */
    protected $facilityAddress;
    /**
    * OriginOrDestination is required for FreightWillCallRequestType 1 and type 3 . Valid values:
    01-Origin facilities
    02-Destination facilities.
    *
    * @var string
    */
    protected $originOrDestination;
    /**
    * FormatPostalCode would be required in the request when FreightWillCallRequestType is 1. Valid values are:
    NFR-No format requested
    FR-format requested
    FS-format and search
    NVR-No validation requested.
    *
    * @var string
    */
    protected $formatPostalCode;
    /**
    * Day Of week Code. Valid Values are 1 to 7. 
    1-Sunday
    2-Monday 
    3-Tuesday 
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @var string
    */
    protected $dayOfWeekCode;
    /**
    * Valid values are: 
    1 - Postal Code
    2 - Delivery SLIC
    3 - Delivery City/State.
    1: Freight Will Call Search based on Postal Code, this search is valid for Postal code countries. 2: Freight Will Call Search based on SLIC. 3: Freight Will Call Search based on City and/or State. This Search is valid for non-postal code Countries
    *
    * @return string
    */
    public function getFreightWillCallRequestType() : string
    {
        return $this->freightWillCallRequestType;
    }
    /**
    * Valid values are: 
    1 - Postal Code
    2 - Delivery SLIC
    3 - Delivery City/State.
    1: Freight Will Call Search based on Postal Code, this search is valid for Postal code countries. 2: Freight Will Call Search based on SLIC. 3: Freight Will Call Search based on City and/or State. This Search is valid for non-postal code Countries
    *
    * @param string $freightWillCallRequestType
    *
    * @return self
    */
    public function setFreightWillCallRequestType(string $freightWillCallRequestType) : self
    {
        $this->initialized['freightWillCallRequestType'] = true;
        $this->freightWillCallRequestType = $freightWillCallRequestType;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightWillCallSearchFacilityAddress>
     */
    public function getFacilityAddress() : array
    {
        return $this->facilityAddress;
    }
    /**
     * 
     *
     * @param list<FreightWillCallSearchFacilityAddress> $facilityAddress
     *
     * @return self
     */
    public function setFacilityAddress(array $facilityAddress) : self
    {
        $this->initialized['facilityAddress'] = true;
        $this->facilityAddress = $facilityAddress;
        return $this;
    }
    /**
    * OriginOrDestination is required for FreightWillCallRequestType 1 and type 3 . Valid values:
    01-Origin facilities
    02-Destination facilities.
    *
    * @return string
    */
    public function getOriginOrDestination() : string
    {
        return $this->originOrDestination;
    }
    /**
    * OriginOrDestination is required for FreightWillCallRequestType 1 and type 3 . Valid values:
    01-Origin facilities
    02-Destination facilities.
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
    * FormatPostalCode would be required in the request when FreightWillCallRequestType is 1. Valid values are:
    NFR-No format requested
    FR-format requested
    FS-format and search
    NVR-No validation requested.
    *
    * @return string
    */
    public function getFormatPostalCode() : string
    {
        return $this->formatPostalCode;
    }
    /**
    * FormatPostalCode would be required in the request when FreightWillCallRequestType is 1. Valid values are:
    NFR-No format requested
    FR-format requested
    FS-format and search
    NVR-No validation requested.
    *
    * @param string $formatPostalCode
    *
    * @return self
    */
    public function setFormatPostalCode(string $formatPostalCode) : self
    {
        $this->initialized['formatPostalCode'] = true;
        $this->formatPostalCode = $formatPostalCode;
        return $this;
    }
    /**
    * Day Of week Code. Valid Values are 1 to 7. 
    1-Sunday
    2-Monday 
    3-Tuesday 
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @return string
    */
    public function getDayOfWeekCode() : string
    {
        return $this->dayOfWeekCode;
    }
    /**
    * Day Of week Code. Valid Values are 1 to 7. 
    1-Sunday
    2-Monday 
    3-Tuesday 
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @param string $dayOfWeekCode
    *
    * @return self
    */
    public function setDayOfWeekCode(string $dayOfWeekCode) : self
    {
        $this->initialized['dayOfWeekCode'] = true;
        $this->dayOfWeekCode = $dayOfWeekCode;
        return $this;
    }
}