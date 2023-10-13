<?php

namespace ShipStream\Ups\Api\Model;

class ProductWeight extends \ArrayObject
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
    * The weight value of the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @var string
    */
    protected $value;
    /**
     * Container for the Unit of Measure of weight
     *
     * @var WeightUnitOfMeasure
     */
    protected $unitOfMeasure;
    /**
    * The weight value of the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @return string
    */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
    * The weight value of the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
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
     * Container for the Unit of Measure of weight
     *
     * @return WeightUnitOfMeasure
     */
    public function getUnitOfMeasure() : WeightUnitOfMeasure
    {
        return $this->unitOfMeasure;
    }
    /**
     * Container for the Unit of Measure of weight
     *
     * @param WeightUnitOfMeasure $unitOfMeasure
     *
     * @return self
     */
    public function setUnitOfMeasure(WeightUnitOfMeasure $unitOfMeasure) : self
    {
        $this->initialized['unitOfMeasure'] = true;
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }
}