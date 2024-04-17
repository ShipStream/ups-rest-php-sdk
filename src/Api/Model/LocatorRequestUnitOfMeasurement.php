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
    * Valid values are:
    
    - MI-Miles
    - KM-Kilometers
    
    *
    * @var string
    */
    protected $code;
    /**
    * Valid values are:
    
    - MI-Miles
    - KM-Kilometers
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Valid values are:
    
    - MI-Miles
    - KM-Kilometers
    
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
}