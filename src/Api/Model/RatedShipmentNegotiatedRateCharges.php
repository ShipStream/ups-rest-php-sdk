<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentNegotiatedRateCharges extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var NegotiatedRateChargesItemizedCharges[]
     */
    protected $itemizedCharges;
    /**
     * 
     *
     * @var NegotiatedRateChargesTaxCharges[]
     */
    protected $taxCharges;
    /**
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @var NegotiatedRateChargesTotalCharge
     */
    protected $totalCharge;
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @var NegotiatedRateChargesTotalChargesWithTaxes
     */
    protected $totalChargesWithTaxes;
    /**
     * 
     *
     * @return NegotiatedRateChargesItemizedCharges[]
     */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param NegotiatedRateChargesItemizedCharges[] $itemizedCharges
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
     * 
     *
     * @return NegotiatedRateChargesTaxCharges[]
     */
    public function getTaxCharges() : array
    {
        return $this->taxCharges;
    }
    /**
     * 
     *
     * @param NegotiatedRateChargesTaxCharges[] $taxCharges
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
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @return NegotiatedRateChargesTotalCharge
     */
    public function getTotalCharge() : NegotiatedRateChargesTotalCharge
    {
        return $this->totalCharge;
    }
    /**
     * Total charges container. Account Based Rates info. Total charges are only returned for ABR eligible shipper account/UserId combinations when the user includes the NegotiatedRatesIndicator in the request.
     *
     * @param NegotiatedRateChargesTotalCharge $totalCharge
     *
     * @return self
     */
    public function setTotalCharge(NegotiatedRateChargesTotalCharge $totalCharge) : self
    {
        $this->initialized['totalCharge'] = true;
        $this->totalCharge = $totalCharge;
        return $this;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @return NegotiatedRateChargesTotalChargesWithTaxes
     */
    public function getTotalChargesWithTaxes() : NegotiatedRateChargesTotalChargesWithTaxes
    {
        return $this->totalChargesWithTaxes;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @param NegotiatedRateChargesTotalChargesWithTaxes $totalChargesWithTaxes
     *
     * @return self
     */
    public function setTotalChargesWithTaxes(NegotiatedRateChargesTotalChargesWithTaxes $totalChargesWithTaxes) : self
    {
        $this->initialized['totalChargesWithTaxes'] = true;
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }
}