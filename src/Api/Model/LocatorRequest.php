<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequest extends \ArrayObject
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
     * N/A
     *
     * @var LocatorRequestRequest
     */
    protected $request;
    /**
     * Container for origin address information.
     *
     * @var LocatorRequestOriginAddress
     */
    protected $originAddress;
    /**
     * Contains the locale information for the request.
     *
     * @var LocatorRequestTranslate
     */
    protected $translate;
    /**
     * Distance unit of measurement. This is required for location requests (request option 1).
     *
     * @var LocatorRequestUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Location ID is the identification number of the UPS affiliated location.
     *
     * @var list<string>
     */
    protected $locationID;
    /**
    * The Location search criteria container allows the user to further define the basis to which they wish to receive the UPS locations. 
    Only relevant when the user requests a Location search (request option 1).
    *
    * @var LocatorRequestLocationSearchCriteria
    */
    protected $locationSearchCriteria;
    /**
     * Container for Sort Criteria
     *
     * @var LocatorRequestSortCriteria
     */
    protected $sortCriteria;
    /**
     * Indicator to allow confidence level in search.
     *
     * @var string
     */
    protected $allowAllConfidenceLevels;
    /**
    * Valid values: 
    01-Proximity Search Details
    02-Address Search Details
    03-Proximity Search Summary
    04-Address Search Summary
    05-Freight Will Call Search. 
    Either OptionType 03 or 04 is required.
    *
    * @var string
    */
    protected $searchOptionCode;
    /**
     * ServiceGeoUnit Container. Required to search for the freight facility information
     *
     * @var LocatorRequestServiceGeoUnit
     */
    protected $serviceGeoUnit;
    /**
     * FreightIndicator. Required for Freight Location Search.
     *
     * @var string
     */
    protected $freightIndicator;
    /**
     * N/A
     *
     * @return LocatorRequestRequest
     */
    public function getRequest() : LocatorRequestRequest
    {
        return $this->request;
    }
    /**
     * N/A
     *
     * @param LocatorRequestRequest $request
     *
     * @return self
     */
    public function setRequest(LocatorRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Container for origin address information.
     *
     * @return LocatorRequestOriginAddress
     */
    public function getOriginAddress() : LocatorRequestOriginAddress
    {
        return $this->originAddress;
    }
    /**
     * Container for origin address information.
     *
     * @param LocatorRequestOriginAddress $originAddress
     *
     * @return self
     */
    public function setOriginAddress(LocatorRequestOriginAddress $originAddress) : self
    {
        $this->initialized['originAddress'] = true;
        $this->originAddress = $originAddress;
        return $this;
    }
    /**
     * Contains the locale information for the request.
     *
     * @return LocatorRequestTranslate
     */
    public function getTranslate() : LocatorRequestTranslate
    {
        return $this->translate;
    }
    /**
     * Contains the locale information for the request.
     *
     * @param LocatorRequestTranslate $translate
     *
     * @return self
     */
    public function setTranslate(LocatorRequestTranslate $translate) : self
    {
        $this->initialized['translate'] = true;
        $this->translate = $translate;
        return $this;
    }
    /**
     * Distance unit of measurement. This is required for location requests (request option 1).
     *
     * @return LocatorRequestUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : LocatorRequestUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Distance unit of measurement. This is required for location requests (request option 1).
     *
     * @param LocatorRequestUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(LocatorRequestUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Location ID is the identification number of the UPS affiliated location.
     *
     * @return list<string>
     */
    public function getLocationID() : array
    {
        return $this->locationID;
    }
    /**
     * Location ID is the identification number of the UPS affiliated location.
     *
     * @param list<string> $locationID
     *
     * @return self
     */
    public function setLocationID(array $locationID) : self
    {
        $this->initialized['locationID'] = true;
        $this->locationID = $locationID;
        return $this;
    }
    /**
    * The Location search criteria container allows the user to further define the basis to which they wish to receive the UPS locations. 
    Only relevant when the user requests a Location search (request option 1).
    *
    * @return LocatorRequestLocationSearchCriteria
    */
    public function getLocationSearchCriteria() : LocatorRequestLocationSearchCriteria
    {
        return $this->locationSearchCriteria;
    }
    /**
    * The Location search criteria container allows the user to further define the basis to which they wish to receive the UPS locations. 
    Only relevant when the user requests a Location search (request option 1).
    *
    * @param LocatorRequestLocationSearchCriteria $locationSearchCriteria
    *
    * @return self
    */
    public function setLocationSearchCriteria(LocatorRequestLocationSearchCriteria $locationSearchCriteria) : self
    {
        $this->initialized['locationSearchCriteria'] = true;
        $this->locationSearchCriteria = $locationSearchCriteria;
        return $this;
    }
    /**
     * Container for Sort Criteria
     *
     * @return LocatorRequestSortCriteria
     */
    public function getSortCriteria() : LocatorRequestSortCriteria
    {
        return $this->sortCriteria;
    }
    /**
     * Container for Sort Criteria
     *
     * @param LocatorRequestSortCriteria $sortCriteria
     *
     * @return self
     */
    public function setSortCriteria(LocatorRequestSortCriteria $sortCriteria) : self
    {
        $this->initialized['sortCriteria'] = true;
        $this->sortCriteria = $sortCriteria;
        return $this;
    }
    /**
     * Indicator to allow confidence level in search.
     *
     * @return string
     */
    public function getAllowAllConfidenceLevels() : string
    {
        return $this->allowAllConfidenceLevels;
    }
    /**
     * Indicator to allow confidence level in search.
     *
     * @param string $allowAllConfidenceLevels
     *
     * @return self
     */
    public function setAllowAllConfidenceLevels(string $allowAllConfidenceLevels) : self
    {
        $this->initialized['allowAllConfidenceLevels'] = true;
        $this->allowAllConfidenceLevels = $allowAllConfidenceLevels;
        return $this;
    }
    /**
    * Valid values: 
    01-Proximity Search Details
    02-Address Search Details
    03-Proximity Search Summary
    04-Address Search Summary
    05-Freight Will Call Search. 
    Either OptionType 03 or 04 is required.
    *
    * @return string
    */
    public function getSearchOptionCode() : string
    {
        return $this->searchOptionCode;
    }
    /**
    * Valid values: 
    01-Proximity Search Details
    02-Address Search Details
    03-Proximity Search Summary
    04-Address Search Summary
    05-Freight Will Call Search. 
    Either OptionType 03 or 04 is required.
    *
    * @param string $searchOptionCode
    *
    * @return self
    */
    public function setSearchOptionCode(string $searchOptionCode) : self
    {
        $this->initialized['searchOptionCode'] = true;
        $this->searchOptionCode = $searchOptionCode;
        return $this;
    }
    /**
     * ServiceGeoUnit Container. Required to search for the freight facility information
     *
     * @return LocatorRequestServiceGeoUnit
     */
    public function getServiceGeoUnit() : LocatorRequestServiceGeoUnit
    {
        return $this->serviceGeoUnit;
    }
    /**
     * ServiceGeoUnit Container. Required to search for the freight facility information
     *
     * @param LocatorRequestServiceGeoUnit $serviceGeoUnit
     *
     * @return self
     */
    public function setServiceGeoUnit(LocatorRequestServiceGeoUnit $serviceGeoUnit) : self
    {
        $this->initialized['serviceGeoUnit'] = true;
        $this->serviceGeoUnit = $serviceGeoUnit;
        return $this;
    }
    /**
     * FreightIndicator. Required for Freight Location Search.
     *
     * @return string
     */
    public function getFreightIndicator() : string
    {
        return $this->freightIndicator;
    }
    /**
     * FreightIndicator. Required for Freight Location Search.
     *
     * @param string $freightIndicator
     *
     * @return self
     */
    public function setFreightIndicator(string $freightIndicator) : self
    {
        $this->initialized['freightIndicator'] = true;
        $this->freightIndicator = $freightIndicator;
        return $this;
    }
}