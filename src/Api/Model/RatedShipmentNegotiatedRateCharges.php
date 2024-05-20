<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentNegotiatedRateCharges extends \ArrayObject
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
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'.  These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<NegotiatedRateChargesItemizedCharges>
     */
    protected $itemizedCharges;
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<NegotiatedRateChargesTaxCharges>
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
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'.  These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<NegotiatedRateChargesItemizedCharges>
     */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'.  These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<NegotiatedRateChargesItemizedCharges> $itemizedCharges
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
     * TaxCharges container are returned only when TaxInformationIndicator is present in request. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<NegotiatedRateChargesTaxCharges>
     */
    public function getTaxCharges() : array
    {
        return $this->taxCharges;
    }
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<NegotiatedRateChargesTaxCharges> $taxCharges
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