<?php

namespace ShipStream\Ups\Api\Model;

class UltimateConsigneeUltimateConsigneeType extends \ArrayObject
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
    * Ultimate Consignee Type Code.   Applicable for EEI form only.
    
    Valid values:  
    D =  Direct Consumer 
    G = Government Entity
    R = Reseller
    O = Other/Unknown
    *
    * @var string
    */
    protected $code;
    /**
     * Ultimate Consignee Type Description.  Applicable for EEI form only.
     *
     * @var string
     */
    protected $description;
    /**
    * Ultimate Consignee Type Code.   Applicable for EEI form only.
    
    Valid values:  
    D =  Direct Consumer 
    G = Government Entity
    R = Reseller
    O = Other/Unknown
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Ultimate Consignee Type Code.   Applicable for EEI form only.
    
    Valid values:  
    D =  Direct Consumer 
    G = Government Entity
    R = Reseller
    O = Other/Unknown
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
    /**
     * Ultimate Consignee Type Description.  Applicable for EEI form only.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Ultimate Consignee Type Description.  Applicable for EEI form only.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}