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
     * @var AlternateRatesResponseAlternateRateType|null
     */
    protected $alternateRateType;
    /**
     * 
     *
     * @var list<AlternateRatesResponseRate>|null
     */
    protected $rate;
    /**
     * FreightDensityRate container.
     *
     * @var AlternateRatesResponseFreightDensityRate|null
     */
    protected $freightDensityRate;
    /**
     * BillableShipmentWeight Container.
     *
     * @var AlternateRatesResponseBillableShipmentWeight|null
     */
    protected $billableShipmentWeight;
    /**
     * Time In transit information.
     *
     * @var AlternateRatesResponseTimeInTransit|null
     */
    protected $timeInTransit;
    /**
     * Container for the type of alternate rate
     *
     * @return AlternateRatesResponseAlternateRateType|null
     */
    public function getAlternateRateType() : ?AlternateRatesResponseAlternateRateType
    {
        return $this->alternateRateType;
    }
    /**
     * Container for the type of alternate rate
     *
     * @param AlternateRatesResponseAlternateRateType|null $alternateRateType
     *
     * @return self
     */
    public function setAlternateRateType(?AlternateRatesResponseAlternateRateType $alternateRateType) : self
    {
        $this->initialized['alternateRateType'] = true;
        $this->alternateRateType = $alternateRateType;
        return $this;
    }
    /**
     * 
     *
     * @return list<AlternateRatesResponseRate>|null
     */
    public function getRate() : ?array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<AlternateRatesResponseRate>|null $rate
     *
     * @return self
     */
    public function setRate(?array $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * FreightDensityRate container.
     *
     * @return AlternateRatesResponseFreightDensityRate|null
     */
    public function getFreightDensityRate() : ?AlternateRatesResponseFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container.
     *
     * @param AlternateRatesResponseFreightDensityRate|null $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(?AlternateRatesResponseFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @return AlternateRatesResponseBillableShipmentWeight|null
     */
    public function getBillableShipmentWeight() : ?AlternateRatesResponseBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @param AlternateRatesResponseBillableShipmentWeight|null $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(?AlternateRatesResponseBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return AlternateRatesResponseTimeInTransit|null
     */
    public function getTimeInTransit() : ?AlternateRatesResponseTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param AlternateRatesResponseTimeInTransit|null $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(?AlternateRatesResponseTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
}