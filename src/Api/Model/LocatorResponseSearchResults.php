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
     * 
     *
     * @var SearchResultsGeocodeCandidate[]
     */
    protected $geocodeCandidate;
    /**
    * Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius. 
    
    The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin.
    *
    * @var array<string, mixed>[]
    */
    protected $disclaimer;
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     *
     * @var SearchResultsDropLocation
     */
    protected $dropLocation;
    /**
     * 
     *
     * @var SearchResultsAvailableLocationAttributes[]
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
     * 
     *
     * @return SearchResultsGeocodeCandidate[]
     */
    public function getGeocodeCandidate() : array
    {
        return $this->geocodeCandidate;
    }
    /**
     * 
     *
     * @param SearchResultsGeocodeCandidate[] $geocodeCandidate
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
    * @return array<string, mixed>[]
    */
    public function getDisclaimer() : array
    {
        return $this->disclaimer;
    }
    /**
    * Disclaimer. In the event the user requested Ground and Air service types and the maximum UPS locations list size has not been met, the list of locations will continue with locations that provide either ground or air within the search radius. 
    
    The disclaimer will note this deviation from the requested search criteria. The disclaimer is also the location where the user will receive information regarding a one-time pickup option if the first location is greater than 20 miles from the origin.
    *
    * @param array<string, mixed>[] $disclaimer
    *
    * @return self
    */
    public function setDisclaimer(array $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     *
     * @return SearchResultsDropLocation
     */
    public function getDropLocation() : SearchResultsDropLocation
    {
        return $this->dropLocation;
    }
    /**
     * When a location request is submitted with a valid origin address, UPS locations will be returned.
     *
     * @param SearchResultsDropLocation $dropLocation
     *
     * @return self
     */
    public function setDropLocation(SearchResultsDropLocation $dropLocation) : self
    {
        $this->initialized['dropLocation'] = true;
        $this->dropLocation = $dropLocation;
        return $this;
    }
    /**
     * 
     *
     * @return SearchResultsAvailableLocationAttributes[]
     */
    public function getAvailableLocationAttributes() : array
    {
        return $this->availableLocationAttributes;
    }
    /**
     * 
     *
     * @param SearchResultsAvailableLocationAttributes[] $availableLocationAttributes
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