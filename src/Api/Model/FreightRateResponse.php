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
     * @var FreightRateResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @var list<FreightRateResponseRate>
     */
    protected $rate;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var FreightRateResponseFreightDensityRate
     */
    protected $freightDensityRate;
    /**
     * 
     *
     * @var list<FreightRateResponseCommodity>
     */
    protected $commodity;
    /**
     * TotalShipmentCharge Container.
     *
     * @var FreightRateResponseTotalShipmentCharge
     */
    protected $totalShipmentCharge;
    /**
     * BillableShipmentWeight Container.
     *
     * @var FreightRateResponseBillableShipmentWeight
     */
    protected $billableShipmentWeight;
    /**
     * DimensionalWeight Container.
     *
     * @var FreightRateResponseDimensionalWeight
     */
    protected $dimensionalWeight;
    /**
     * Service Container.
     *
     * @var FreightRateResponseService
     */
    protected $service;
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @var string
     */
    protected $guaranteedIndicator;
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @var string
     */
    protected $minimumChargeAppliedIndicator;
    /**
     * 
     *
     * @var list<FreightRateResponseAlternateRatesResponse>
     */
    protected $alternateRatesResponse;
    /**
     * Time In transit information.
     *
     * @var FreightRateResponseTimeInTransit
     */
    protected $timeInTransit;
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @var FreightRateResponseHandlingUnits
    */
    protected $handlingUnits;
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @var string
     */
    protected $quoteNumber;
    /**
     * Response Container.
     *
     * @return FreightRateResponseResponse
     */
    public function getResponse() : FreightRateResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param FreightRateResponseResponse $response
     *
     * @return self
     */
    public function setResponse(FreightRateResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseRate>
     */
    public function getRate() : array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseRate> $rate
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
     * FreightDensityRate container for Density based rating.
     *
     * @return FreightRateResponseFreightDensityRate
     */
    public function getFreightDensityRate() : FreightRateResponseFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param FreightRateResponseFreightDensityRate $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(FreightRateResponseFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseCommodity>
     */
    public function getCommodity() : array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseCommodity> $commodity
     *
     * @return self
     */
    public function setCommodity(array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * TotalShipmentCharge Container.
     *
     * @return FreightRateResponseTotalShipmentCharge
     */
    public function getTotalShipmentCharge() : FreightRateResponseTotalShipmentCharge
    {
        return $this->totalShipmentCharge;
    }
    /**
     * TotalShipmentCharge Container.
     *
     * @param FreightRateResponseTotalShipmentCharge $totalShipmentCharge
     *
     * @return self
     */
    public function setTotalShipmentCharge(FreightRateResponseTotalShipmentCharge $totalShipmentCharge) : self
    {
        $this->initialized['totalShipmentCharge'] = true;
        $this->totalShipmentCharge = $totalShipmentCharge;
        return $this;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @return FreightRateResponseBillableShipmentWeight
     */
    public function getBillableShipmentWeight() : FreightRateResponseBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container.
     *
     * @param FreightRateResponseBillableShipmentWeight $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(FreightRateResponseBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * DimensionalWeight Container.
     *
     * @return FreightRateResponseDimensionalWeight
     */
    public function getDimensionalWeight() : FreightRateResponseDimensionalWeight
    {
        return $this->dimensionalWeight;
    }
    /**
     * DimensionalWeight Container.
     *
     * @param FreightRateResponseDimensionalWeight $dimensionalWeight
     *
     * @return self
     */
    public function setDimensionalWeight(FreightRateResponseDimensionalWeight $dimensionalWeight) : self
    {
        $this->initialized['dimensionalWeight'] = true;
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return FreightRateResponseService
     */
    public function getService() : FreightRateResponseService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param FreightRateResponseService $service
     *
     * @return self
     */
    public function setService(FreightRateResponseService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @return string
     */
    public function getGuaranteedIndicator() : string
    {
        return $this->guaranteedIndicator;
    }
    /**
     * This is an empty tag. The presence of the indicator indicates the rate returned is guaranteed.
     *
     * @param string $guaranteedIndicator
     *
     * @return self
     */
    public function setGuaranteedIndicator(string $guaranteedIndicator) : self
    {
        $this->initialized['guaranteedIndicator'] = true;
        $this->guaranteedIndicator = $guaranteedIndicator;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @return string
     */
    public function getMinimumChargeAppliedIndicator() : string
    {
        return $this->minimumChargeAppliedIndicator;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it.
     *
     * @param string $minimumChargeAppliedIndicator
     *
     * @return self
     */
    public function setMinimumChargeAppliedIndicator(string $minimumChargeAppliedIndicator) : self
    {
        $this->initialized['minimumChargeAppliedIndicator'] = true;
        $this->minimumChargeAppliedIndicator = $minimumChargeAppliedIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateResponseAlternateRatesResponse>
     */
    public function getAlternateRatesResponse() : array
    {
        return $this->alternateRatesResponse;
    }
    /**
     * 
     *
     * @param list<FreightRateResponseAlternateRatesResponse> $alternateRatesResponse
     *
     * @return self
     */
    public function setAlternateRatesResponse(array $alternateRatesResponse) : self
    {
        $this->initialized['alternateRatesResponse'] = true;
        $this->alternateRatesResponse = $alternateRatesResponse;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return FreightRateResponseTimeInTransit
     */
    public function getTimeInTransit() : FreightRateResponseTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param FreightRateResponseTimeInTransit $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(FreightRateResponseTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @return FreightRateResponseHandlingUnits
    */
    public function getHandlingUnits() : FreightRateResponseHandlingUnits
    {
        return $this->handlingUnits;
    }
    /**
    * Handling Unit Container for Density based rating.
    Returned if Shipper is eligible for density based pricing.
    *
    * @param FreightRateResponseHandlingUnits $handlingUnits
    *
    * @return self
    */
    public function setHandlingUnits(FreightRateResponseHandlingUnits $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @return string
     */
    public function getQuoteNumber() : string
    {
        return $this->quoteNumber;
    }
    /**
     * The Quote Number returned in the response associated to the specific LTL Freight Rate returned in the response.
     *
     * @param string $quoteNumber
     *
     * @return self
     */
    public function setQuoteNumber(string $quoteNumber) : self
    {
        $this->initialized['quoteNumber'] = true;
        $this->quoteNumber = $quoteNumber;
        return $this;
    }
}