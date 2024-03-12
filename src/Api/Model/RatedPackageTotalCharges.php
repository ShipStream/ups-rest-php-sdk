<?php

namespace ShipStream\Ups\Api\Model;

class RatedPackageTotalCharges extends \ArrayObject
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
     * The IATA currency code associated with the total charges for the package.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The value for the total charges associated with the package.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the total charges for the package.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the total charges for the package.
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
     * The value for the total charges associated with the package.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The value for the total charges associated with the package.
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