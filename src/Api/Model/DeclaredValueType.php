<?php

namespace ShipStream\Ups\Api\Model;

class DeclaredValueType extends \ArrayObject
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
    * Declared value type. Valid values:
    - 01=EVS
    - 02=DVS
    
    Defaults to 01 i.e. EVS if declared value type is not provided.  The user cannot specify different type of declared value for the shipment. User can either have shipper declared value (DVS) or declared value (EVS) but not both at package level.
    
    Note: The Shipper Declared Value is applicable for forward shipments when the billing option is freight collect or third party.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Declared value Description.
     *
     * @var string
     */
    protected $description;
    /**
    * Declared value type. Valid values:
    - 01=EVS
    - 02=DVS
    
    Defaults to 01 i.e. EVS if declared value type is not provided.  The user cannot specify different type of declared value for the shipment. User can either have shipper declared value (DVS) or declared value (EVS) but not both at package level.
    
    Note: The Shipper Declared Value is applicable for forward shipments when the billing option is freight collect or third party.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Declared value type. Valid values:
    - 01=EVS
    - 02=DVS
    
    Defaults to 01 i.e. EVS if declared value type is not provided.  The user cannot specify different type of declared value for the shipment. User can either have shipper declared value (DVS) or declared value (EVS) but not both at package level.
    
    Note: The Shipper Declared Value is applicable for forward shipments when the billing option is freight collect or third party.
    
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
     * Declared value Description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Declared value Description.
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