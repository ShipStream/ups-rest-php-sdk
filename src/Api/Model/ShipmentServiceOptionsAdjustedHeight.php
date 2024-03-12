<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsAdjustedHeight extends \ArrayObject
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
     * Adjusted Height value for the handling unit.
     *
     * @var string
     */
    protected $value;
    /**
     * Unit of Measurement container for the Adjusted height.
     *
     * @var AdjustedHeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Adjusted Height value for the handling unit.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Adjusted Height value for the handling unit.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Unit of Measurement container for the Adjusted height.
     *
     * @return AdjustedHeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : AdjustedHeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Unit of Measurement container for the Adjusted height.
     *
     * @param AdjustedHeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(AdjustedHeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}