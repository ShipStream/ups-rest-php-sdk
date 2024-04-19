<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentTotalWeightUnitOfMeasurement extends \ArrayObject
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
    * Code representing the unit of measure associated with the package weight.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Text description of the code representing the unit of measure associated with the shipment weight.
     *
     * @var string
     */
    protected $description;
    /**
    * Code representing the unit of measure associated with the package weight.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code representing the unit of measure associated with the package weight.
    
    Valid values:
    - LBS = Pounds
    - KGS = Kilograms.
    
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
     * Text description of the code representing the unit of measure associated with the shipment weight.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Text description of the code representing the unit of measure associated with the shipment weight.
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