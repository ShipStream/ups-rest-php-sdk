<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestServiceGeoUnit extends \ArrayObject
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
    * Service Code. Required if ServiceGeoUnit Container present. 
    Valid value is '096' .
    *
    * @var string|null
    */
    protected $serviceCode;
    /**
    * GeoPoliticalUnit. Required if ServiceGeoUnit container present.
    Valid value is '002' .
    *
    * @var string|null
    */
    protected $geoPoliticalUnit;
    /**
    * Service Code. Required if ServiceGeoUnit Container present. 
    Valid value is '096' .
    *
    * @return string|null
    */
    public function getServiceCode() : ?string
    {
        return $this->serviceCode;
    }
    /**
    * Service Code. Required if ServiceGeoUnit Container present. 
    Valid value is '096' .
    *
    * @param string|null $serviceCode
    *
    * @return self
    */
    public function setServiceCode(?string $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
    * GeoPoliticalUnit. Required if ServiceGeoUnit container present.
    Valid value is '002' .
    *
    * @return string|null
    */
    public function getGeoPoliticalUnit() : ?string
    {
        return $this->geoPoliticalUnit;
    }
    /**
    * GeoPoliticalUnit. Required if ServiceGeoUnit container present.
    Valid value is '002' .
    *
    * @param string|null $geoPoliticalUnit
    *
    * @return self
    */
    public function setGeoPoliticalUnit(?string $geoPoliticalUnit) : self
    {
        $this->initialized['geoPoliticalUnit'] = true;
        $this->geoPoliticalUnit = $geoPoliticalUnit;
        return $this;
    }
}