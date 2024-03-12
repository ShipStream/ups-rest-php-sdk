<?php

namespace ShipStream\Ups\Api\Model;

class AlternateRatesResponseBillableShipmentWeight extends \ArrayObject
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
     * The value for the billable weight associated with the shipment.
     *
     * @var string
     */
    protected $value;
    /**
     * UnitOfMeasurement Container.
     *
     * @var BillableShipmentWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * The value for the billable weight associated with the shipment.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value for the billable weight associated with the shipment.
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
     * UnitOfMeasurement Container.
     *
     * @return BillableShipmentWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : BillableShipmentWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param BillableShipmentWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(BillableShipmentWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}