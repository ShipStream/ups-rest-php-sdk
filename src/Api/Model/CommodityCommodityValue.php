<?php

namespace ShipStream\Ups\Api\Model;

class CommodityCommodityValue extends \ArrayObject
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
    * Commodity value currency code type.
    Required when value of commodity is entered.
    Valid value:
    USD - United States Dollar
    *
    * @var string
    */
    protected $currencyCode;
    /**
     * Commodity value amount.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
    * Commodity value currency code type.
    Required when value of commodity is entered.
    Valid value:
    USD - United States Dollar
    *
    * @return string
    */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
    * Commodity value currency code type.
    Required when value of commodity is entered.
    Valid value:
    USD - United States Dollar
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
    /**
     * Commodity value amount.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Commodity value amount.
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
}