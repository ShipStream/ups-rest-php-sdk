<?php

namespace ShipStream\Ups\Api\Model;

class OriginAddressOriginSearchCriteria extends \ArrayObject
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
    * Search Request range. Valied values:
    - 1 to 200
    
    Default: 200
    *
    * @var string
    */
    protected $searchRadius;
    /**
     * Unit of Measure  Required if ProximitySearchIndicator is present. Example: MI or KM
     *
     * @var string
     */
    protected $distanceUnitOfMeasure;
    /**
    * Maximum Number of locations. Valied values:
    - 1 to 100
    
    Default: 100
    *
    * @var string
    */
    protected $maximumLocation;
    /**
    * Search Request range. Valied values:
    - 1 to 200
    
    Default: 200
    *
    * @return string
    */
    public function getSearchRadius() : string
    {
        return $this->searchRadius;
    }
    /**
    * Search Request range. Valied values:
    - 1 to 200
    
    Default: 200
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
     * Unit of Measure  Required if ProximitySearchIndicator is present. Example: MI or KM
     *
     * @return string
     */
    public function getDistanceUnitOfMeasure() : string
    {
        return $this->distanceUnitOfMeasure;
    }
    /**
     * Unit of Measure  Required if ProximitySearchIndicator is present. Example: MI or KM
     *
     * @param string $distanceUnitOfMeasure
     *
     * @return self
     */
    public function setDistanceUnitOfMeasure(string $distanceUnitOfMeasure) : self
    {
        $this->initialized['distanceUnitOfMeasure'] = true;
        $this->distanceUnitOfMeasure = $distanceUnitOfMeasure;
        return $this;
    }
    /**
    * Maximum Number of locations. Valied values:
    - 1 to 100
    
    Default: 100
    *
    * @return string
    */
    public function getMaximumLocation() : string
    {
        return $this->maximumLocation;
    }
    /**
    * Maximum Number of locations. Valied values:
    - 1 to 100
    
    Default: 100
    *
    * @param string $maximumLocation
    *
    * @return self
    */
    public function setMaximumLocation(string $maximumLocation) : self
    {
        $this->initialized['maximumLocation'] = true;
        $this->maximumLocation = $maximumLocation;
        return $this;
    }
}