<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsBillingWeight extends \ArrayObject
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
     * Billing weight unit of measurement code. The unit of measurement used in Shipment request is returned.
     *
     * @var BillingWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Billing weight. Higher of the actual shipment weight versus the shipment dimensional weight.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
     *
     * @var string
     */
    protected $weight;
    /**
     * Billing weight unit of measurement code. The unit of measurement used in Shipment request is returned.
     *
     * @return BillingWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : BillingWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Billing weight unit of measurement code. The unit of measurement used in Shipment request is returned.
     *
     * @param BillingWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(BillingWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Billing weight. Higher of the actual shipment weight versus the shipment dimensional weight.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Billing weight. Higher of the actual shipment weight versus the shipment dimensional weight.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
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