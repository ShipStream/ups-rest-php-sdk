<?php

namespace ShipStream\Ups\Api\Model;

class PackageDimWeight extends \ArrayObject
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
     * UnitOfMeasurement Container.  N/A
     *
     * @var DimWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
     *
     * @var string|null
     */
    protected $weight;
    /**
     * UnitOfMeasurement Container.  N/A
     *
     * @return DimWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?DimWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.  N/A
     *
     * @param DimWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?DimWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
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