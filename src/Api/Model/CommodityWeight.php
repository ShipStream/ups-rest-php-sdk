<?php

namespace ShipStream\Ups\Api\Model;

class CommodityWeight extends \ArrayObject
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
     * The value for the line item weight associated with the shipment.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Reference Weight UnitOfMeasurement Container.
     *
     * @var WeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The value for the line item weight associated with the shipment.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for the line item weight associated with the shipment.
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
     * Reference Weight UnitOfMeasurement Container.
     *
     * @return WeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?WeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Reference Weight UnitOfMeasurement Container.
     *
     * @param WeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?WeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}