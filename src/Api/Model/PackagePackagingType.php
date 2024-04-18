<?php

namespace ShipStream\Ups\Api\Model;

class PackagePackagingType extends \ArrayObject
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
    * The code for the UPS packaging type associated with the package.  Valid values:
    - 00 - UNKNOWN
    - 01 - UPS Letter
    - 02 - Package
    - 03 - Tube
    - 04 - Pak
    - 21 - Express Box
    - 24 - 25KG Box
    - 25 - 10KG Box
    - 30 - Pallet
    - 2a - Small Express Box
    - 2b - Medium Express Box
    - 2c - Large Express Box.
    
    For FRS rating requests the only valid value is customer supplied packaging “02”.
    
    *
    * @var string
    */
    protected $code;
    /**
     * A text description of the code for the UPS packaging type associated with the shipment.  Length is not validated.
     *
     * @var string
     */
    protected $description;
    /**
    * The code for the UPS packaging type associated with the package.  Valid values:
    - 00 - UNKNOWN
    - 01 - UPS Letter
    - 02 - Package
    - 03 - Tube
    - 04 - Pak
    - 21 - Express Box
    - 24 - 25KG Box
    - 25 - 10KG Box
    - 30 - Pallet
    - 2a - Small Express Box
    - 2b - Medium Express Box
    - 2c - Large Express Box.
    
    For FRS rating requests the only valid value is customer supplied packaging “02”.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The code for the UPS packaging type associated with the package.  Valid values:
    - 00 - UNKNOWN
    - 01 - UPS Letter
    - 02 - Package
    - 03 - Tube
    - 04 - Pak
    - 21 - Express Box
    - 24 - 25KG Box
    - 25 - 10KG Box
    - 30 - Pallet
    - 2a - Small Express Box
    - 2b - Medium Express Box
    - 2c - Large Express Box.
    
    For FRS rating requests the only valid value is customer supplied packaging “02”.
    
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
     * A text description of the code for the UPS packaging type associated with the shipment.  Length is not validated.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A text description of the code for the UPS packaging type associated with the shipment.  Length is not validated.
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