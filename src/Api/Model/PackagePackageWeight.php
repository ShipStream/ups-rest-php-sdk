<?php

namespace ShipStream\Ups\Api\Model;

class PackagePackageWeight extends \ArrayObject
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
     * Container to hold UnitOfMeasurement information for package weight.
     *
     * @var PackageWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Packages weight. Weight accepted for letters/envelopes.  Only average package weight is required for Ground Freight Pricing Shipment.
     *
     * @var string
     */
    protected $weight;
    /**
     * Container to hold UnitOfMeasurement information for package weight.
     *
     * @return PackageWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : PackageWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container to hold UnitOfMeasurement information for package weight.
     *
     * @param PackageWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(PackageWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Packages weight. Weight accepted for letters/envelopes.  Only average package weight is required for Ground Freight Pricing Shipment.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Packages weight. Weight accepted for letters/envelopes.  Only average package weight is required for Ground Freight Pricing Shipment.
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