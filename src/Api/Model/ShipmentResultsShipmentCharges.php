<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsShipmentCharges extends \ArrayObject
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
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: 
    US 48 origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates. 
    Alaska/Hawaii origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates.  
    All Other origins: 
    1 - Rates 
    5 - Regional Rates 
    6 - General List Rates. 
    3 and 4 do not apply.
    *
    * @var string|null
    */
    protected $rateChart;
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @var ShipmentChargesBaseServiceCharge|null
    */
    protected $baseServiceCharge;
    /**
     * Transportation Charges container.
     *
     * @var ShipmentChargesTransportationCharges|null
     */
    protected $transportationCharges;
    /**
     * 
     *
     * @var list<ShipmentChargesItemizedCharges>|null
     */
    protected $itemizedCharges;
    /**
     * Service Option Charges container.
     *
     * @var ShipmentChargesServiceOptionsCharges|null
     */
    protected $serviceOptionsCharges;
    /**
     * 
     *
     * @var list<ShipmentChargesTaxCharges>|null
     */
    protected $taxCharges;
    /**
     * Total charges container.
     *
     * @var ShipmentChargesTotalCharges|null
     */
    protected $totalCharges;
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @var ShipmentChargesTotalChargesWithTaxes|null
     */
    protected $totalChargesWithTaxes;
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: 
    US 48 origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates. 
    Alaska/Hawaii origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates.  
    All Other origins: 
    1 - Rates 
    5 - Regional Rates 
    6 - General List Rates. 
    3 and 4 do not apply.
    *
    * @return string|null
    */
    public function getRateChart() : ?string
    {
        return $this->rateChart;
    }
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be: 
    US 48 origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates. 
    Alaska/Hawaii origin: 
    1 - Daily Rates 
    3 - Standard List Rates 
    4 - Retail Rates.  
    All Other origins: 
    1 - Rates 
    5 - Regional Rates 
    6 - General List Rates. 
    3 and 4 do not apply.
    *
    * @param string|null $rateChart
    *
    * @return self
    */
    public function setRateChart(?string $rateChart) : self
    {
        $this->initialized['rateChart'] = true;
        $this->rateChart = $rateChart;
        return $this;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @return ShipmentChargesBaseServiceCharge|null
    */
    public function getBaseServiceCharge() : ?ShipmentChargesBaseServiceCharge
    {
        return $this->baseServiceCharge;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @param ShipmentChargesBaseServiceCharge|null $baseServiceCharge
    *
    * @return self
    */
    public function setBaseServiceCharge(?ShipmentChargesBaseServiceCharge $baseServiceCharge) : self
    {
        $this->initialized['baseServiceCharge'] = true;
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }
    /**
     * Transportation Charges container.
     *
     * @return ShipmentChargesTransportationCharges|null
     */
    public function getTransportationCharges() : ?ShipmentChargesTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation Charges container.
     *
     * @param ShipmentChargesTransportationCharges|null $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(?ShipmentChargesTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentChargesItemizedCharges>|null
     */
    public function getItemizedCharges() : ?array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param list<ShipmentChargesItemizedCharges>|null $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(?array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
    /**
     * Service Option Charges container.
     *
     * @return ShipmentChargesServiceOptionsCharges|null
     */
    public function getServiceOptionsCharges() : ?ShipmentChargesServiceOptionsCharges
    {
        return $this->serviceOptionsCharges;
    }
    /**
     * Service Option Charges container.
     *
     * @param ShipmentChargesServiceOptionsCharges|null $serviceOptionsCharges
     *
     * @return self
     */
    public function setServiceOptionsCharges(?ShipmentChargesServiceOptionsCharges $serviceOptionsCharges) : self
    {
        $this->initialized['serviceOptionsCharges'] = true;
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentChargesTaxCharges>|null
     */
    public function getTaxCharges() : ?array
    {
        return $this->taxCharges;
    }
    /**
     * 
     *
     * @param list<ShipmentChargesTaxCharges>|null $taxCharges
     *
     * @return self
     */
    public function setTaxCharges(?array $taxCharges) : self
    {
        $this->initialized['taxCharges'] = true;
        $this->taxCharges = $taxCharges;
        return $this;
    }
    /**
     * Total charges container.
     *
     * @return ShipmentChargesTotalCharges|null
     */
    public function getTotalCharges() : ?ShipmentChargesTotalCharges
    {
        return $this->totalCharges;
    }
    /**
     * Total charges container.
     *
     * @param ShipmentChargesTotalCharges|null $totalCharges
     *
     * @return self
     */
    public function setTotalCharges(?ShipmentChargesTotalCharges $totalCharges) : self
    {
        $this->initialized['totalCharges'] = true;
        $this->totalCharges = $totalCharges;
        return $this;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @return ShipmentChargesTotalChargesWithTaxes|null
     */
    public function getTotalChargesWithTaxes() : ?ShipmentChargesTotalChargesWithTaxes
    {
        return $this->totalChargesWithTaxes;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @param ShipmentChargesTotalChargesWithTaxes|null $totalChargesWithTaxes
     *
     * @return self
     */
    public function setTotalChargesWithTaxes(?ShipmentChargesTotalChargesWithTaxes $totalChargesWithTaxes) : self
    {
        $this->initialized['totalChargesWithTaxes'] = true;
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }
}