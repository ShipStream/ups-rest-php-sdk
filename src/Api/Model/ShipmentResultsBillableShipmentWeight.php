<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsBillableShipmentWeight extends \ArrayObject
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
     * @var BillableShipmentWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The value for the billable weight associated with the shipment.
     *
     * @var string|null
     */
    protected $value;
    /**
     * UnitOfMeasurement Container.
     *
     * @return BillableShipmentWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?BillableShipmentWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param BillableShipmentWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?BillableShipmentWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * The value for the billable weight associated with the shipment.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for the billable weight associated with the shipment.
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
}