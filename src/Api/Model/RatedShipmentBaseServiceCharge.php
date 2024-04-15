<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentBaseServiceCharge extends \ArrayObject
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
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the base service charge costs for the shipment.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the base service charge costs for the shipment.
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
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * The base value of the specific service for the shipment. This is equal to transportation charges - fuel surcharges.
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