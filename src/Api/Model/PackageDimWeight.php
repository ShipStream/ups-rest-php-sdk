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
     * UnitOfMeasurement Container.
     *
     * @var DimWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
     *
     * @var string
     */
    protected $weight;
    /**
     * UnitOfMeasurement Container.
     *
     * @return DimWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : DimWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param DimWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(DimWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Actual package weight.  Weight accepted for letters/envelopes.
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