<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentServiceOptionsCharges extends \ArrayObject
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
     * The IATA currency code associated with the accessorial charges for the shipment.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The value for the accessorial charges associated with the shipment.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the accessorial charges for the shipment.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the accessorial charges for the shipment.
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
     * The value for the accessorial charges associated with the shipment.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The value for the accessorial charges associated with the shipment.
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