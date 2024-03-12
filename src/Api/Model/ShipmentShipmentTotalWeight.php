<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipmentTotalWeight extends \ArrayObject
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
     * @var ShipmentTotalWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Non-zero total weight of all packages in the shipment.
     *
     * @var string
     */
    protected $weight;
    /**
     * UnitOfMeasurement Container.
     *
     * @return ShipmentTotalWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : ShipmentTotalWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param ShipmentTotalWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(ShipmentTotalWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Non-zero total weight of all packages in the shipment.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Non-zero total weight of all packages in the shipment.
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