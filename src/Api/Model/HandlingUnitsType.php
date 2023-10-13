<?php

namespace ShipStream\Ups\Api\Model;

class HandlingUnitsType extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The code associated with Handling Unit Type.  Valid values:
    SKD = Skid
    CBY = Carboy 
    PLT = Pallet
    TOT = Totes 
    LOO = Loose
    OTH = Other
    *
    * @var string
    */
    protected $code;
    /**
     * A description of the code for the Handling Unit type.
     *
     * @var string
     */
    protected $description;
    /**
    * The code associated with Handling Unit Type.  Valid values:
    SKD = Skid
    CBY = Carboy 
    PLT = Pallet
    TOT = Totes 
    LOO = Loose
    OTH = Other
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The code associated with Handling Unit Type.  Valid values:
    SKD = Skid
    CBY = Carboy 
    PLT = Pallet
    TOT = Totes 
    LOO = Loose
    OTH = Other
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
     * A description of the code for the Handling Unit type.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the code for the Handling Unit type.
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