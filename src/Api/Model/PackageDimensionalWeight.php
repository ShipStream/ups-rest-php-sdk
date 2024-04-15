<?php

namespace ShipStream\Ups\Api\Model;

class PackageDimensionalWeight extends \ArrayObject
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
     * UnitOfMeasurement Container.
     *
     * @var DimensionalWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
     *
     * @var string|null
     */
    protected $weight;
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
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
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