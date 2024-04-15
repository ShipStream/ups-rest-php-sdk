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
     * @var string|null
     */
    protected $value;
    /**
     * UnitOfMeasurement Container.
     *
     * @var DimensionalWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The value for the dimensional weight associated with the shipment.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for the dimensional weight associated with the shipment.
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
     * UnitOfMeasurement Container.
     *
     * @return DimensionalWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?DimensionalWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param DimensionalWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?DimensionalWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}