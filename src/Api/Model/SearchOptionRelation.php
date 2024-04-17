<?php

namespace ShipStream\Ups\Api\Model;

class SearchOptionRelation extends \ArrayObject
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
    * Applicable for Additional Services and Program Types.
    
    Valid values:
    
    - 01 - And (Default)
    - 02 - Or
    
    *
    * @var string
    */
    protected $code;
    /**
    * Applicable for Additional Services and Program Types.
    
    Valid values:
    
    - 01 - And (Default)
    - 02 - Or
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Applicable for Additional Services and Program Types.
    
    Valid values:
    
    - 01 - And (Default)
    - 02 - Or
    
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