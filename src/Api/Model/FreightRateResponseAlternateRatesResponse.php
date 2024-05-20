<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponseAlternateRatesResponse extends \ArrayObject
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
     * Container for the type of alternate rate
     *
     * @var AlternateRatesResponseAlternateRateType
     */
    protected $alternateRateType;
    /**
     * 
     *
     * @var list<AlternateRatesResponseRate>
     */
    protected $rate;
    /**
     * FreightDensityRate container.
     *
     * @var AlternateRatesResponseFreightDensityRate
     */
    protected $freightDensityRate;
    /**
     * BillableShipmentWeight Container.
     *
     * @var AlternateRatesResponseBillableShipmentWeight
     */
    protected $billableShipmentWeight;
    /**
     * Time In transit information.
     *
     * @var AlternateRatesResponseTimeInTransit
     */
    protected $timeInTransit;
    /**
     * Container for the type of alternate rate
     *
     * @return AlternateRatesResponseAlternateRateType
     */
    public function getAlternateRateType() : AlternateRatesResponseAlternateRateType
    {
        return $this->alternateRateType;
    }
    /**
     * Container for the type of alternate rate
     *
     * @param AlternateRatesResponseAlternateRateType $alternateRateType
     *
     * @return self
     */
    public function setAlternateRateType(AlternateRatesResponseAlternateRateType $alternateRateType) : self
    {
        $this->initialized['alternateRateType'] = true;
        $this->alternateRateType = $alternateRateType;
        return $this;
    }
    /**
     * 
     *
     * @return list<AlternateRatesResponseRate>
     */
    public function getRate() : array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<AlternateRatesResponseRate> $rate
     *
     * @return self
     */
    public function setRate(array $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * FreightDensityRate container.
     *
     * @return AlternateRatesResponseFreightDensityRate
     */
    public function getFreightDensityRate() : AlternateRatesResponseFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container.
     *
     * @param AlternateRatesResponseFreightDensityRate $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(AlternateRatesResponseFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @return AlternateRatesResponseBillableShipmentWeight
     */
    public function getBillableShipmentWeight() : AlternateRatesResponseBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @param AlternateRatesResponseBillableShipmentWeight $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(AlternateRatesResponseBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return AlternateRatesResponseTimeInTransit
     */
    public function getTimeInTransit() : AlternateRatesResponseTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param AlternateRatesResponseTimeInTransit $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(AlternateRatesResponseTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
}