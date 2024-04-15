<?php

namespace ShipStream\Ups\Api\Model;

class TransportationChargesNetCharge extends \ArrayObject
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
     * Net Charge currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Net charges monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * Net Charge currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Net Charge currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Net charges monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * Net charges monetary value.  Valid values are from 0 to 9999999999999999.99
     *
     * @param string|null $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(?string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
}