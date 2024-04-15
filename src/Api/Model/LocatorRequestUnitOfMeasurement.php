<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestUnitOfMeasurement extends \ArrayObject
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
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @var string|null
    */
    protected $code;
    /**
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
}