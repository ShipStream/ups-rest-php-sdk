<?php

namespace ShipStream\Ups\Api\Model;

class LocatorResponseSearchResults extends \ArrayObject
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
     * If the origin address provided in the location request document does not have a match, a list of candidate addresses, geocodes and optionally a landmark will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SearchResultsGeocodeCandidate>
     */
    protected $geocodeCandidate;
    /**
    * Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius. 
    
    The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin.
    *
    * @var string
    */
    protected $disclaimer;
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SearchResultsDropLocation>
     */
    protected $dropLocation;
    /**
     * This container contains the information about the currently existing Retail Locations or Additional Services or Program types.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SearchResultsAvailableLocationAttributes>
     */
    protected $availableLocationAttributes;
    /**
    * Indicates whether the country or territory has AccessPoints or not. 
    
    This tag is populated in the Response only if tag "ExistIndicator" was present in the Locator request.
    *
    * @var string
    */
    protected $activeAvailableAccessPointIndicator;
    /**
     * If the origin address provided in the location request document does not have a match, a list of candidate addresses, geocodes and optionally a landmark will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SearchResultsGeocodeCandidate>
     */
    public function getGeocodeCandidate() : array
    {
        return $this->geocodeCandidate;
    }
    /**
     * If the origin address provided in the location request document does not have a match, a list of candidate addresses, geocodes and optionally a landmark will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SearchResultsGeocodeCandidate> $geocodeCandidate
     *
     * @return self
     */
    public function setGeocodeCandidate(array $geocodeCandidate) : self
    {
        $this->initialized['geocodeCandidate'] = true;
        $this->geocodeCandidate = $geocodeCandidate;
        return $this;
    }
    /**
    * Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius. 
    
    The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin.
    *
    * @return string
    */
    public function getDisclaimer() : string
    {
        return $this->disclaimer;
    }
    /**
    * Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius. 
    
    The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin.
    *
    * @param string $disclaimer
    *
    * @return self
    */
    public function setDisclaimer(string $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SearchResultsDropLocation>
     */
    public function getDropLocation() : array
    {
        return $this->dropLocation;
    }
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SearchResultsDropLocation> $dropLocation
     *
     * @return self
     */
    public function setDropLocation(array $dropLocation) : self
    {
        $this->initialized['dropLocation'] = true;
        $this->dropLocation = $dropLocation;
        return $this;
    }
    /**
     * This container contains the information about the currently existing Retail Locations or Additional Services or Program types.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SearchResultsAvailableLocationAttributes>
     */
    public function getAvailableLocationAttributes() : array
    {
        return $this->availableLocationAttributes;
    }
    /**
     * This container contains the information about the currently existing Retail Locations or Additional Services or Program types.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SearchResultsAvailableLocationAttributes> $availableLocationAttributes
     *
     * @return self
     */
    public function setAvailableLocationAttributes(array $availableLocationAttributes) : self
    {
        $this->initialized['availableLocationAttributes'] = true;
        $this->availableLocationAttributes = $availableLocationAttributes;
        return $this;
    }
    /**
    * Indicates whether the country or territory has AccessPoints or not. 
    
    This tag is populated in the Response only if tag "ExistIndicator" was present in the Locator request.
    *
    * @return string
    */
    public function getActiveAvailableAccessPointIndicator() : string
    {
        return $this->activeAvailableAccessPointIndicator;
    }
    /**
    * Indicates whether the country or territory has AccessPoints or not. 
    
    This tag is populated in the Response only if tag "ExistIndicator" was present in the Locator request.
    *
    * @param string $activeAvailableAccessPointIndicator
    *
    * @return self
    */
    public function setActiveAvailableAccessPointIndicator(string $activeAvailableAccessPointIndicator) : self
    {
        $this->initialized['activeAvailableAccessPointIndicator'] = true;
        $this->activeAvailableAccessPointIndicator = $activeAvailableAccessPointIndicator;
        return $this;
    }
}