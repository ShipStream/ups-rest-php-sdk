<?php

namespace ShipStream\Ups\Api\Model;

class ServiceSearchServiceOptionCode extends \ArrayObject
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
    * Code that defines the optional service.
    
    Valid values:
    - 01 - Saturday pickup.
    
    Only valid for air service.
    
    *
    * @var string
    */
    protected $code;
    /**
    * Code that defines the optional service.
    
    Valid values:
    - 01 - Saturday pickup.
    
    Only valid for air service.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code that defines the optional service.
    
    Valid values:
    - 01 - Saturday pickup.
    
    Only valid for air service.
    
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