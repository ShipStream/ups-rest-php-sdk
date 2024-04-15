<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var FreightRateResponseResponse|null
     */
    protected $response;
    /**
     * 
     *
     * @var list<FreightRateResponseRate>|null
     */
    protected $rate;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var FreightRateResponseFreightDensityRate|null
     */
    protected $freightDensityRate;
    /**
     * 
     *
     * @var list<FreightRateResponseCommodity>|null
     */
    protected $commodity;
    /**
     * TotalShipmentCharge Container.
     *
     * @var FreightRateResponseTotalShipmentCharge|null
     */
    protected $totalShipmentCharge;
    /**
     * BillableShipmentWeight Container.
     *
     * @var FreightRateResponseBillableShipmentWeight|null
     */
    protected $billableShipmentWeight;
    /**
     * DimensionalWeight Container.
     *
     * @var FreightRateResponseDimensionalWeight|null
     */
    protected $dimensionalWeight;
    /**
     * Service Container.
     *
     * @var FreightRateResponseService|null
     */
    protected $service;
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @var string|null
     */
    protected $guaranteedIndicator;
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @var string|null
     */
    protected $minimumChargeAppliedIndicator;
    /**
     * 
     *
     * @var list<FreightRateResponseAlternateRatesResponse>|null
     */
    protected $alternateRatesResponse;
    /**
     * Time In transit information.
     *
     * @var FreightRateResponseTimeInTransit|null
     */
    protected $timeInTransit;
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @var FreightRateResponseHandlingUnits|null
    */
    protected $handlingUnits;
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @var string|null
     */
    protected $quoteNumber;
    /**
     * Response Container.
     *
     * @return FreightRateResponseResponse|null
     */
    public function getResponse() : ?FreightRateResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param FreightRateResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?FreightRateResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseRate>|null
     */
    public function getRate() : ?array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseRate>|null $rate
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
     * FreightDensityRate container for Density based rating.
     *
     * @return FreightRateResponseFreightDensityRate|null
     */
    public function getFreightDensityRate() : ?FreightRateResponseFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param FreightRateResponseFreightDensityRate|null $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(?FreightRateResponseFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseCommodity>|null
     */
    public function getCommodity() : ?array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseCommodity>|null $commodity
     *
     * @return self
     */
    public function setCommodity(?array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * TotalShipmentCharge Container.
     *
     * @return FreightRateResponseTotalShipmentCharge|null
     */
    public function getTotalShipmentCharge() : ?FreightRateResponseTotalShipmentCharge
    {
        return $this->totalShipmentCharge;
    }
    /**
     * TotalShipmentCharge Container.
     *
     * @param FreightRateResponseTotalShipmentCharge|null $totalShipmentCharge
     *
     * @return self
     */
    public function setTotalShipmentCharge(?FreightRateResponseTotalShipmentCharge $totalShipmentCharge) : self
    {
        $this->initialized['totalShipmentCharge'] = true;
        $this->totalShipmentCharge = $totalShipmentCharge;
        return $this;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @return FreightRateResponseBillableShipmentWeight|null
     */
    public function getBillableShipmentWeight() : ?FreightRateResponseBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @param FreightRateResponseBillableShipmentWeight|null $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(?FreightRateResponseBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * DimensionalWeight Container.
     *
     * @return FreightRateResponseDimensionalWeight|null
     */
    public function getDimensionalWeight() : ?FreightRateResponseDimensionalWeight
    {
        return $this->dimensionalWeight;
    }
    /**
     * DimensionalWeight Container.
     *
     * @param FreightRateResponseDimensionalWeight|null $dimensionalWeight
     *
     * @return self
     */
    public function setDimensionalWeight(?FreightRateResponseDimensionalWeight $dimensionalWeight) : self
    {
        $this->initialized['dimensionalWeight'] = true;
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return FreightRateResponseService|null
     */
    public function getService() : ?FreightRateResponseService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param FreightRateResponseService|null $service
     *
     * @return self
     */
    public function setService(?FreightRateResponseService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @return string|null
     */
    public function getGuaranteedIndicator() : ?string
    {
        return $this->guaranteedIndicator;
    }
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @param string|null $guaranteedIndicator
     *
     * @return self
     */
    public function setGuaranteedIndicator(?string $guaranteedIndicator) : self
    {
        $this->initialized['guaranteedIndicator'] = true;
        $this->guaranteedIndicator = $guaranteedIndicator;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @return string|null
     */
    public function getMinimumChargeAppliedIndicator() : ?string
    {
        return $this->minimumChargeAppliedIndicator;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @param string|null $minimumChargeAppliedIndicator
     *
     * @return self
     */
    public function setMinimumChargeAppliedIndicator(?string $minimumChargeAppliedIndicator) : self
    {
        $this->initialized['minimumChargeAppliedIndicator'] = true;
        $this->minimumChargeAppliedIndicator = $minimumChargeAppliedIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseAlternateRatesResponse>|null
     */
    public function getAlternateRatesResponse() : ?array
    {
        return $this->alternateRatesResponse;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseAlternateRatesResponse>|null $alternateRatesResponse
     *
     * @return self
     */
    public function setAlternateRatesResponse(?array $alternateRatesResponse) : self
    {
        $this->initialized['alternateRatesResponse'] = true;
        $this->alternateRatesResponse = $alternateRatesResponse;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return FreightRateResponseTimeInTransit|null
     */
    public function getTimeInTransit() : ?FreightRateResponseTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param FreightRateResponseTimeInTransit|null $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(?FreightRateResponseTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @return FreightRateResponseHandlingUnits|null
    */
    public function getHandlingUnits() : ?FreightRateResponseHandlingUnits
    {
        return $this->handlingUnits;
    }
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @param FreightRateResponseHandlingUnits|null $handlingUnits
    *
    * @return self
    */
    public function setHandlingUnits(?FreightRateResponseHandlingUnits $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @return string|null
     */
    public function getQuoteNumber() : ?string
    {
        return $this->quoteNumber;
    }
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @param string|null $quoteNumber
     *
     * @return self
     */
    public function setQuoteNumber(?string $quoteNumber) : self
    {
        $this->initialized['quoteNumber'] = true;
        $this->quoteNumber = $quoteNumber;
        return $this;
    }
}