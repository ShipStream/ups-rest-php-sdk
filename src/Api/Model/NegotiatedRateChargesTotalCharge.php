<?php

namespace ShipStream\Ups\Api\Model;

class NegotiatedRateChargesTotalCharge extends \ArrayObject
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
     * Total charges currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Total charges monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * Total charges currency code.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Total charges currency code.
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
     * Total charges monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Total charges monetary value.  Valid values are from 0 to 9999999999999999.99
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