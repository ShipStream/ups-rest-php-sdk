<?php

namespace ShipStream\Ups\Api\Model;

class DimensionalWeightUnitOfMeasurement extends \ArrayObject
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
    * The code representing the unit of measure associated with the shipment's dimensional weight.
    Valid values:
    LBS - Pounds (default)
    KGS - Kilograms
    Defaults Unit of Measurement used in the shipper's country or territory.
    *
    * @var string
    */
    protected $code;
    /**
     * A text description of the code representing the unit of measure associated with the package weight.
     *
     * @var string
     */
    protected $description;
    /**
    * The code representing the unit of measure associated with the shipment's dimensional weight.
    Valid values:
    LBS - Pounds (default)
    KGS - Kilograms
    Defaults Unit of Measurement used in the shipper's country or territory.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The code representing the unit of measure associated with the shipment's dimensional weight.
    Valid values:
    LBS - Pounds (default)
    KGS - Kilograms
    Defaults Unit of Measurement used in the shipper's country or territory.
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
     * A text description of the code representing the unit of measure associated with the package weight.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A text description of the code representing the unit of measure associated with the package weight.
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