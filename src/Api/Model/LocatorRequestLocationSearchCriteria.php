<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestLocationSearchCriteria extends \ArrayObject
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
     * @var list<LocationSearchCriteriaSearchOption>
     */
    protected $searchOption;
    /**
     * If present, indicates the maximum number of locations the client wishes to receive in response; ranges from 1 to 50 with a default value of 5.
     *
     * @var string
     */
    protected $maximumListSize;
    /**
    * Defines the maximum radius the user wishes to search for a UPS location. If the user does not specify, the default value is 100 miles. Whole numbers only. 
    
    Valid values are:
    5-100 for UnitOfMeasure MI
    5-150 for UnitOfMesaure KM
    *
    * @var string
    */
    protected $searchRadius;
    /**
     * Allows for users to further define the search criteria. Refer to the rules specified in Service Search section.
     *
     * @var LocationSearchCriteriaServiceSearch
     */
    protected $serviceSearch;
    /**
     * Freight Will Call Search Container. Required if SearchOption is '05-Freight Will Call Search'
     *
     * @var LocationSearchCriteriaFreightWillCallSearch
     */
    protected $freightWillCallSearch;
    /**
     * Applicable for request option 64 only. This contains inclusion and exclusion criteria for address search. It also contains Account Number and Access Point Public ID search elements.
     *
     * @var LocationSearchCriteriaAccessPointSearch
     */
    protected $accessPointSearch;
    /**
     * Container to hold open times of the Location.
     *
     * @var LocationSearchCriteriaOpenTimeCriteria
     */
    protected $openTimeCriteria;
    /**
     * Brexit Filter. Applicable for country code GB; Pass the PostalCode for the address in the location search if Brexit functionality is desired. UAPs with postal code starts with BT returned when brexit filter starts with BT, else UAPs returned with non BT postal code. Applicable for UAP and Proximal building search.
     *
     * @var string
     */
    protected $brexitFilter;
    /**
     * 
     *
     * @return list<LocationSearchCriteriaSearchOption>
     */
    public function getSearchOption() : array
    {
        return $this->searchOption;
    }
    /**
     * 
     *
     * @param list<LocationSearchCriteriaSearchOption> $searchOption
     *
     * @return self
     */
    public function setSearchOption(array $searchOption) : self
    {
        $this->initialized['searchOption'] = true;
        $this->searchOption = $searchOption;
        return $this;
    }
    /**
     * If present, indicates the maximum number of locations the client wishes to receive in response; ranges from 1 to 50 with a default value of 5.
     *
     * @return string
     */
    public function getMaximumListSize() : string
    {
        return $this->maximumListSize;
    }
    /**
     * If present, indicates the maximum number of locations the client wishes to receive in response; ranges from 1 to 50 with a default value of 5.
     *
     * @param string $maximumListSize
     *
     * @return self
     */
    public function setMaximumListSize(string $maximumListSize) : self
    {
        $this->initialized['maximumListSize'] = true;
        $this->maximumListSize = $maximumListSize;
        return $this;
    }
    /**
    * Defines the maximum radius the user wishes to search for a UPS location. If the user does not specify, the default value is 100 miles. Whole numbers only. 
    
    Valid values are:
    5-100 for UnitOfMeasure MI
    5-150 for UnitOfMesaure KM
    *
    * @return string
    */
    public function getSearchRadius() : string
    {
        return $this->searchRadius;
    }
    /**
    * Defines the maximum radius the user wishes to search for a UPS location. If the user does not specify, the default value is 100 miles. Whole numbers only. 
    
    Valid values are:
    5-100 for UnitOfMeasure MI
    5-150 for UnitOfMesaure KM
    *
    * @param string $searchRadius
    *
    * @return self
    */
    public function setSearchRadius(string $searchRadius) : self
    {
        $this->initialized['searchRadius'] = true;
        $this->searchRadius = $searchRadius;
        return $this;
    }
    /**
     * Allows for users to further define the search criteria. Refer to the rules specified in Service Search section.
     *
     * @return LocationSearchCriteriaServiceSearch
     */
    public function getServiceSearch() : LocationSearchCriteriaServiceSearch
    {
        return $this->serviceSearch;
    }
    /**
     * Allows for users to further define the search criteria. Refer to the rules specified in Service Search section.
     *
     * @param LocationSearchCriteriaServiceSearch $serviceSearch
     *
     * @return self
     */
    public function setServiceSearch(LocationSearchCriteriaServiceSearch $serviceSearch) : self
    {
        $this->initialized['serviceSearch'] = true;
        $this->serviceSearch = $serviceSearch;
        return $this;
    }
    /**
     * Freight Will Call Search Container. Required if SearchOption is '05-Freight Will Call Search'
     *
     * @return LocationSearchCriteriaFreightWillCallSearch
     */
    public function getFreightWillCallSearch() : LocationSearchCriteriaFreightWillCallSearch
    {
        return $this->freightWillCallSearch;
    }
    /**
     * Freight Will Call Search Container. Required if SearchOption is '05-Freight Will Call Search'
     *
     * @param LocationSearchCriteriaFreightWillCallSearch $freightWillCallSearch
     *
     * @return self
     */
    public function setFreightWillCallSearch(LocationSearchCriteriaFreightWillCallSearch $freightWillCallSearch) : self
    {
        $this->initialized['freightWillCallSearch'] = true;
        $this->freightWillCallSearch = $freightWillCallSearch;
        return $this;
    }
    /**
     * Applicable for request option 64 only. This contains inclusion and exclusion criteria for address search. It also contains Account Number and Access Point Public ID search elements.
     *
     * @return LocationSearchCriteriaAccessPointSearch
     */
    public function getAccessPointSearch() : LocationSearchCriteriaAccessPointSearch
    {
        return $this->accessPointSearch;
    }
    /**
     * Applicable for request option 64 only. This contains inclusion and exclusion criteria for address search. It also contains Account Number and Access Point Public ID search elements.
     *
     * @param LocationSearchCriteriaAccessPointSearch $accessPointSearch
     *
     * @return self
     */
    public function setAccessPointSearch(LocationSearchCriteriaAccessPointSearch $accessPointSearch) : self
    {
        $this->initialized['accessPointSearch'] = true;
        $this->accessPointSearch = $accessPointSearch;
        return $this;
    }
    /**
     * Container to hold open times of the Location.
     *
     * @return LocationSearchCriteriaOpenTimeCriteria
     */
    public function getOpenTimeCriteria() : LocationSearchCriteriaOpenTimeCriteria
    {
        return $this->openTimeCriteria;
    }
    /**
     * Container to hold open times of the Location.
     *
     * @param LocationSearchCriteriaOpenTimeCriteria $openTimeCriteria
     *
     * @return self
     */
    public function setOpenTimeCriteria(LocationSearchCriteriaOpenTimeCriteria $openTimeCriteria) : self
    {
        $this->initialized['openTimeCriteria'] = true;
        $this->openTimeCriteria = $openTimeCriteria;
        return $this;
    }
    /**
     * Brexit Filter. Applicable for country code GB; Pass the PostalCode for the address in the location search if Brexit functionality is desired. UAPs with postal code starts with BT returned when brexit filter starts with BT, else UAPs returned with non BT postal code. Applicable for UAP and Proximal building search.
     *
     * @return string
     */
    public function getBrexitFilter() : string
    {
        return $this->brexitFilter;
    }
    /**
     * Brexit Filter. Applicable for country code GB; Pass the PostalCode for the address in the location search if Brexit functionality is desired. UAPs with postal code starts with BT returned when brexit filter starts with BT, else UAPs returned with non BT postal code. Applicable for UAP and Proximal building search.
     *
     * @param string $brexitFilter
     *
     * @return self
     */
    public function setBrexitFilter(string $brexitFilter) : self
    {
        $this->initialized['brexitFilter'] = true;
        $this->brexitFilter = $brexitFilter;
        return $this;
    }
}