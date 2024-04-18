<?php

namespace ShipStream\Ups\Api\Model;

class RatedPackageBillingWeight extends \ArrayObject
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
     * Unit Of Measurement Container.
     *
     * @var RatedPackageBillingWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * The value for the billable weight associated with the package.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
     *
     * @var string
     */
    protected $weight;
    /**
     * Unit Of Measurement Container.
     *
     * @return RatedPackageBillingWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : RatedPackageBillingWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Unit Of Measurement Container.
     *
     * @param RatedPackageBillingWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(RatedPackageBillingWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * The value for the billable weight associated with the package.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * The value for the billable weight associated with the package.  When using a negotiated divisor different from the published UPS divisor (139 for inches and 5,000 for cm), the weight returned is based on the published divisor. Rates, however, are based on the negotiated divisor.
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