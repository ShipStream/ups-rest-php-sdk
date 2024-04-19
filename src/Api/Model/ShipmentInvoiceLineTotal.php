<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentInvoiceLineTotal extends \ArrayObject
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
     * Invoice Line Total currency type.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Invoice Line Total amount for the entire shipment.  Valid values are from 1 to 99999999
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * Invoice Line Total currency type.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Invoice Line Total currency type.
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
     * Invoice Line Total amount for the entire shipment.  Valid values are from 1 to 99999999
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Invoice Line Total amount for the entire shipment.  Valid values are from 1 to 99999999
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