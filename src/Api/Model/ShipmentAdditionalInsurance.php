<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentAdditionalInsurance extends \ArrayObject
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
    * The monetary value of the insurance charge for the shipment.
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $monetaryValue;
    /**
    * Currency code for the insurance charge. Must be
    			three-character ISO code.
    *
    * @var string
    */
    protected $currencyCode;
    /**
    * The monetary value of the insurance charge for the shipment.
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
    * The monetary value of the insurance charge for the shipment.
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
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
    * Currency code for the insurance charge. Must be
    			three-character ISO code.
    *
    * @return string
    */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
    * Currency code for the insurance charge. Must be
    			three-character ISO code.
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