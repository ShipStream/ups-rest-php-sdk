<?php

namespace ShipStream\Ups\Api\Model;

class ProductQuantity extends \ArrayObject
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
     * Quantity of products. Must be a positive integer.
     *
     * @var string
     */
    protected $value;
    /**
     * Container for the unit of measurement.
     *
     * @var QuantityUnitOfMeasure
     */
    protected $unitOfMeasure;
    /**
     * Quantity of products. Must be a positive integer.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Quantity of products. Must be a positive integer.
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
     * Container for the unit of measurement.
     *
     * @return QuantityUnitOfMeasure
     */
    public function getUnitOfMeasure() : QuantityUnitOfMeasure
    {
        return $this->unitOfMeasure;
    }
    /**
     * Container for the unit of measurement.
     *
     * @param QuantityUnitOfMeasure $unitOfMeasure
     *
     * @return self
     */
    public function setUnitOfMeasure(QuantityUnitOfMeasure $unitOfMeasure) : self
    {
        $this->initialized['unitOfMeasure'] = true;
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }
}