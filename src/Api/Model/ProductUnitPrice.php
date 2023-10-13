<?php

namespace ShipStream\Ups\Api\Model;

class ProductUnitPrice extends \ArrayObject
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
    * The monetary value of the unit price for the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point. 
    The total price of this value ... Quantity*product unit price... may not exceed 999999999999.99.
    *
    * @var string
    */
    protected $monetaryValue;
    /**
    * Currency code for the unit price of the product. 
    Must be 			three-character ISO code.+G35
    *
    * @var string
    */
    protected $currencyCode;
    /**
    * The monetary value of the unit price for the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point. 
    The total price of this value ... Quantity*product unit price... may not exceed 999999999999.99.
    *
    * @return string
    */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
    * The monetary value of the unit price for the product. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point. 
    The total price of this value ... Quantity*product unit price... may not exceed 999999999999.99.
    *
    * @param string $monetaryValue
    *
    * @return self
    */
    public function setMonetaryValue(string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
    /**
    * Currency code for the unit price of the product. 
    Must be 			three-character ISO code.+G35
    *
    * @return string
    */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
    * Currency code for the unit price of the product. 
    Must be 			three-character ISO code.+G35
    *
    * @param string $currencyCode
    *
    * @return self
    */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
}