<?php

namespace ShipStream\Ups\Api\Model;

class CommodityAdjustedWeight extends \ArrayObject
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
     * Adjusted weight value for the commodity.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Unit of Measurement container for the Adjusted weight.
     *
     * @var AdjustedWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Adjusted weight value for the commodity.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Adjusted weight value for the commodity.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Unit of Measurement container for the Adjusted weight.
     *
     * @return AdjustedWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?AdjustedWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Unit of Measurement container for the Adjusted weight.
     *
     * @param AdjustedWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?AdjustedWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}