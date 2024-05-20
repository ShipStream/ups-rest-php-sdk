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
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    
    3 and 4 do not apply.
    
    *
    * @var string
    */
    protected $rateChart;
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @var ShipmentChargesBaseServiceCharge
    */
    protected $baseServiceCharge;
    /**
     * Transportation Charges container.
     *
     * @var ShipmentChargesTransportationCharges
     */
    protected $transportationCharges;
    /**
     * Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ShipmentChargesItemizedCharges>
     */
    protected $itemizedCharges;
    /**
     * Service Option Charges container.
     *
     * @var ShipmentChargesServiceOptionsCharges
     */
    protected $serviceOptionsCharges;
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ShipmentChargesTaxCharges>
     */
    protected $taxCharges;
    /**
     * Total charges container.
     *
     * @var ShipmentChargesTotalCharges
     */
    protected $totalCharges;
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @var ShipmentChargesTotalChargesWithTaxes
     */
    protected $totalChargesWithTaxes;
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:
    US 48 origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    
    3 and 4 do not apply.
    
    *
    * @return string
    */
    public function getRateChart() : string
    {
        return $this->rateChart;
    }
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:
    US 48 origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    
    3 and 4 do not apply.
    
    *
    * @param string $rateChart
    *
    * @return self
    */
    public function setRateChart(string $rateChart) : self
    {
        $this->initialized['rateChart'] = true;
        $this->rateChart = $rateChart;
        return $this;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @return ShipmentChargesBaseServiceCharge
    */
    public function getBaseServiceCharge() : ShipmentChargesBaseServiceCharge
    {
        return $this->baseServiceCharge;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @param ShipmentChargesBaseServiceCharge $baseServiceCharge
    *
    * @return self
    */
    public function setBaseServiceCharge(ShipmentChargesBaseServiceCharge $baseServiceCharge) : self
    {
        $this->initialized['baseServiceCharge'] = true;
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }
    /**
     * Transportation Charges container.
     *
     * @return ShipmentChargesTransportationCharges
     */
    public function getTransportationCharges() : ShipmentChargesTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation Charges container.
     *
     * @param ShipmentChargesTransportationCharges $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(ShipmentChargesTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ShipmentChargesItemizedCharges>
     */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
     * Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ShipmentChargesItemizedCharges> $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
    /**
     * Service Option Charges container.
     *
     * @return ShipmentChargesServiceOptionsCharges
     */
    public function getServiceOptionsCharges() : ShipmentChargesServiceOptionsCharges
    {
        return $this->serviceOptionsCharges;
    }
    /**
     * Service Option Charges container.
     *
     * @param ShipmentChargesServiceOptionsCharges $serviceOptionsCharges
     *
     * @return self
     */
    public function setServiceOptionsCharges(ShipmentChargesServiceOptionsCharges $serviceOptionsCharges) : self
    {
        $this->initialized['serviceOptionsCharges'] = true;
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ShipmentChargesTaxCharges>
     */
    public function getTaxCharges() : array
    {
        return $this->taxCharges;
    }
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ShipmentChargesTaxCharges> $taxCharges
     *
     * @return self
     */
    public function setTaxCharges(array $taxCharges) : self
    {
        $this->initialized['taxCharges'] = true;
        $this->taxCharges = $taxCharges;
        return $this;
    }
    /**
     * Total charges container.
     *
     * @return ShipmentChargesTotalCharges
     */
    public function getTotalCharges() : ShipmentChargesTotalCharges
    {
        return $this->totalCharges;
    }
    /**
     * Total charges container.
     *
     * @param ShipmentChargesTotalCharges $totalCharges
     *
     * @return self
     */
    public function setTotalCharges(ShipmentChargesTotalCharges $totalCharges) : self
    {
        $this->initialized['totalCharges'] = true;
        $this->totalCharges = $totalCharges;
        return $this;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @return ShipmentChargesTotalChargesWithTaxes
     */
    public function getTotalChargesWithTaxes() : ShipmentChargesTotalChargesWithTaxes
    {
        return $this->totalChargesWithTaxes;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @param ShipmentChargesTotalChargesWithTaxes $totalChargesWithTaxes
     *
     * @return self
     */
    public function setTotalChargesWithTaxes(ShipmentChargesTotalChargesWithTaxes $totalChargesWithTaxes) : self
    {
        $this->initialized['totalChargesWithTaxes'] = true;
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }
}