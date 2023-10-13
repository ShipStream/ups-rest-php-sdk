<?php

namespace ShipStream\Ups\Api\Model;

class ProductCharges extends \ArrayObject
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
     * Product duties. Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). Limit to 4 digits after the decimal.
     *
     * @var string
     */
    protected $duties;
    /**
    * Product taxes and fees. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $taxesAndFees;
    /**
    * Product VAT. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $vAT;
    /**
    * Product price unit price * quantity. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $costOfGoods;
    /**
    * The product total cost ...sum of Duties, TaxesAndFees, VAT and CostOfGoods. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @var string
    */
    protected $subTotal;
    /**
     * Product duties. Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). Limit to 4 digits after the decimal.
     *
     * @return string
     */
    public function getDuties() : string
    {
        return $this->duties;
    }
    /**
     * Product duties. Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). Limit to 4 digits after the decimal.
     *
     * @param string $duties
     *
     * @return self
     */
    public function setDuties(string $duties) : self
    {
        $this->initialized['duties'] = true;
        $this->duties = $duties;
        return $this;
    }
    /**
    * Product taxes and fees. 
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
    * Product taxes and fees. 
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
    * Product VAT. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getVAT() : string
    {
        return $this->vAT;
    }
    /**
    * Product VAT. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $vAT
    *
    * @return self
    */
    public function setVAT(string $vAT) : self
    {
        $this->initialized['vAT'] = true;
        $this->vAT = $vAT;
        return $this;
    }
    /**
    * Product price unit price * quantity. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getCostOfGoods() : string
    {
        return $this->costOfGoods;
    }
    /**
    * Product price unit price * quantity. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $costOfGoods
    *
    * @return self
    */
    public function setCostOfGoods(string $costOfGoods) : self
    {
        $this->initialized['costOfGoods'] = true;
        $this->costOfGoods = $costOfGoods;
        return $this;
    }
    /**
    * The product total cost ...sum of Duties, TaxesAndFees, VAT and CostOfGoods. 
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
    * The product total cost ...sum of Duties, TaxesAndFees, VAT and CostOfGoods. 
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