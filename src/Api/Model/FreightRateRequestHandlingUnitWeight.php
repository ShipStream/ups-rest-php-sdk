<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestHandlingUnitWeight extends \ArrayObject
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
     * Handling unit weight value for the shipment.
     *
     * @var string
     */
    protected $value;
    /**
     * Unit of Measurement container for the handling unit weight.
     *
     * @var HandlingUnitWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Handling unit weight value for the shipment.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Handling unit weight value for the shipment.
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
     * Unit of Measurement container for the handling unit weight.
     *
     * @return HandlingUnitWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : HandlingUnitWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Unit of Measurement container for the handling unit weight.
     *
     * @param HandlingUnitWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(HandlingUnitWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}