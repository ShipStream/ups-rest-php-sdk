<?php

namespace ShipStream\Ups\Api\Model;

class DryIceDryIceWeight extends \ArrayObject
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
     * Container for Unit of measurement for Dry Ice Weight.
     *
     * @var DryIceWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Dry Ice Weight.  Cannot be more than package weight. Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @var string
     */
    protected $weight;
    /**
     * Container for Unit of measurement for Dry Ice Weight.
     *
     * @return DryIceWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : DryIceWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container for Unit of measurement for Dry Ice Weight.
     *
     * @param DryIceWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(DryIceWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Dry Ice Weight.  Cannot be more than package weight. Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Dry Ice Weight.  Cannot be more than package weight. Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." and can hold up to 1 decimal place.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}