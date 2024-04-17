<?php

namespace ShipStream\Ups\Api\Model;

class SearchOptionOptionType extends \ArrayObject
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
    * Code for Option type valid values are:
    
    - 01-Location
    - 02-Retail Location
    - 03-Additional Services
    - 04-Program Type
    - 05-Service Level Option.
    - 06-End Point Service Offering
    
    *
    * @var string
    */
    protected $code;
    /**
    * Code for Option type valid values are:
    
    - 01-Location
    - 02-Retail Location
    - 03-Additional Services
    - 04-Program Type
    - 05-Service Level Option.
    - 06-End Point Service Offering
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for Option type valid values are:
    
    - 01-Location
    - 02-Retail Location
    - 03-Additional Services
    - 04-Program Type
    - 05-Service Level Option.
    - 06-End Point Service Offering
    
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