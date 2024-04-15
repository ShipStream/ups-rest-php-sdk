<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsNegotiatedRateCharges extends \ArrayObject
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
     * 
     *
     * @var list<NegotiatedRateChargesItemizedCharges>|null
     */
    protected $itemizedCharges;
    /**
     * 
     *
     * @var list<NegotiatedRateChargesTaxCharges>|null
     */
    protected $taxCharges;
    /**
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @var NegotiatedRateChargesTotalCharge|null
     */
    protected $totalCharge;
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @var NegotiatedRateChargesTotalChargesWithTaxes|null
     */
    protected $totalChargesWithTaxes;
    /**
     * 
     *
     * @return list<NegotiatedRateChargesItemizedCharges>|null
     */
    public function getItemizedCharges() : ?array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param list<NegotiatedRateChargesItemizedCharges>|null $itemizedCharges
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
     * 
     *
     * @return list<NegotiatedRateChargesTaxCharges>|null
     */
    public function getTaxCharges() : ?array
    {
        return $this->taxCharges;
    }
    /**
     * 
     *
     * @param list<NegotiatedRateChargesTaxCharges>|null $taxCharges
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
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @return NegotiatedRateChargesTotalCharge|null
     */
    public function getTotalCharge() : ?NegotiatedRateChargesTotalCharge
    {
        return $this->totalCharge;
    }
    /**
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @param NegotiatedRateChargesTotalCharge|null $totalCharge
     *
     * @return self
     */
    public function setTotalCharge(?NegotiatedRateChargesTotalCharge $totalCharge) : self
    {
        $this->initialized['totalCharge'] = true;
        $this->totalCharge = $totalCharge;
        return $this;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @return NegotiatedRateChargesTotalChargesWithTaxes|null
     */
    public function getTotalChargesWithTaxes() : ?NegotiatedRateChargesTotalChargesWithTaxes
    {
        return $this->totalChargesWithTaxes;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @param NegotiatedRateChargesTotalChargesWithTaxes|null $totalChargesWithTaxes
     *
     * @return self
     */
    public function setTotalChargesWithTaxes(?NegotiatedRateChargesTotalChargesWithTaxes $totalChargesWithTaxes) : self
    {
        $this->initialized['totalChargesWithTaxes'] = true;
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }
}