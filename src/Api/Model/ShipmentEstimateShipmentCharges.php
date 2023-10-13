<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentEstimateShipmentCharges extends \ArrayObject
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
    * Shipment Level Taxes and Fees. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $taxesAndFees;
    /**
    * Insurance cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $additionalInsuranceCost;
    /**
    * Transportation cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $transportationCost;
    /**
    * Shipment level charge... sum of Shipment TaxesAndFees, AddtionalInsuranceCost and TransportationCost. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @var string
    */
    protected $subTotal;
    /**
    * Shipment Level Taxes and Fees. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getTaxesAndFees() : string
    {
        return $this->taxesAndFees;
    }
    /**
    * Shipment Level Taxes and Fees. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $taxesAndFees
    *
    * @return self
    */
    public function setTaxesAndFees(string $taxesAndFees) : self
    {
        $this->initialized['taxesAndFees'] = true;
        $this->taxesAndFees = $taxesAndFees;
        return $this;
    }
    /**
    * Insurance cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getAdditionalInsuranceCost() : string
    {
        return $this->additionalInsuranceCost;
    }
    /**
    * Insurance cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $additionalInsuranceCost
    *
    * @return self
    */
    public function setAdditionalInsuranceCost(string $additionalInsuranceCost) : self
    {
        $this->initialized['additionalInsuranceCost'] = true;
        $this->additionalInsuranceCost = $additionalInsuranceCost;
        return $this;
    }
    /**
    * Transportation cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getTransportationCost() : string
    {
        return $this->transportationCost;
    }
    /**
    * Transportation cost value in the result currency. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $transportationCost
    *
    * @return self
    */
    public function setTransportationCost(string $transportationCost) : self
    {
        $this->initialized['transportationCost'] = true;
        $this->transportationCost = $transportationCost;
        return $this;
    }
    /**
    * Shipment level charge... sum of Shipment TaxesAndFees, AddtionalInsuranceCost and TransportationCost. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @return string
    */
    public function getSubTotal() : string
    {
        return $this->subTotal;
    }
    /**
    * Shipment level charge... sum of Shipment TaxesAndFees, AddtionalInsuranceCost and TransportationCost. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @param string $subTotal
    *
    * @return self
    */
    public function setSubTotal(string $subTotal) : self
    {
        $this->initialized['subTotal'] = true;
        $this->subTotal = $subTotal;
        return $this;
    }
}