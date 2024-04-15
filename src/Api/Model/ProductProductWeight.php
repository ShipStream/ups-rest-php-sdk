<?php

namespace ShipStream\Ups\Api\Model;

class ProductProductWeight extends \ArrayObject
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
     * Container tag for the Unit of Measurement of weight.  Applies to CO and EEI forms only.
     *
     * @var ProductWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Weight of Product.  Applies to CO and EEI forms only. Valid characters are 0-9 and "."  (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @var string|null
     */
    protected $weight;
    /**
     * Container tag for the Unit of Measurement of weight.  Applies to CO and EEI forms only.
     *
     * @return ProductWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?ProductWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container tag for the Unit of Measurement of weight.  Applies to CO and EEI forms only.
     *
     * @param ProductWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?ProductWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Weight of Product.  Applies to CO and EEI forms only. Valid characters are 0-9 and "."  (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * Weight of Product.  Applies to CO and EEI forms only. Valid characters are 0-9 and "."  (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}