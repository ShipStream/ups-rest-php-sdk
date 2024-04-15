<?php

namespace ShipStream\Ups\Api\Model;

class RateFactor extends \ArrayObject
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
     * Contains value pertaining to rate type code. For e.g. if discount rate is 25% then rate type code will have code type as DISCOUNT_RATE" and rate factor value will have 25"
     *
     * @var string|null
     */
    protected $value;
    /**
     * Unit of measurement container for factors related to Rate Types.
     *
     * @var FactorUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Contains value pertaining to rate type code. For e.g. if discount rate is 25% then rate type code will have code type as DISCOUNT_RATE" and rate factor value will have 25"
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Contains value pertaining to rate type code. For e.g. if discount rate is 25% then rate type code will have code type as DISCOUNT_RATE" and rate factor value will have 25"
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
     * Unit of measurement container for factors related to Rate Types.
     *
     * @return FactorUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?FactorUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Unit of measurement container for factors related to Rate Types.
     *
     * @param FactorUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?FactorUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}