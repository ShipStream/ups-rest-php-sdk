<?php

namespace ShipStream\Ups\Api\Model;

class TransportationChargesDiscountAmount extends \ArrayObject
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
     * Discount Amount currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Discount amount monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * Discount Amount currency code.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Discount Amount currency code.
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
     * Discount amount monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Discount amount monetary value.  Valid values are from 0 to 9999999999999999.99
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