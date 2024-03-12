<?php

namespace ShipStream\Ups\Api\Model;

class RatedPackageBaseServiceCharge extends \ArrayObject
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
     * The IATA currency code associated with the base service charge costs for the shipment.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the base service charge costs for the shipment.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the base service charge costs for the shipment.
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
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
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