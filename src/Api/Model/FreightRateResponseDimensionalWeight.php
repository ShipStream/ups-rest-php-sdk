<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponseDimensionalWeight extends \ArrayObject
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
     * The value for the dimensional weight associated with the shipment.
     *
     * @var string
     */
    protected $value;
    /**
     * UnitOfMeasurement Container.
     *
     * @var DimensionalWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * The value for the dimensional weight associated with the shipment.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value for the dimensional weight associated with the shipment.
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
     * UnitOfMeasurement Container.
     *
     * @return DimensionalWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : DimensionalWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param DimensionalWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(DimensionalWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}