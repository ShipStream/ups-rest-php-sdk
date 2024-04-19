<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsServiceOptionsCharges extends \ArrayObject
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
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.
     *
     * @var string
     */
    protected $currencyCode;
    /**
    * Package accessorial charges value amount.
    
    Valid values are from 0 to 99999999999999.99
    *
    * @var string
    */
    protected $monetaryValue;
    /**
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.
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
    * Package accessorial charges value amount.
    
    Valid values are from 0 to 99999999999999.99
    *
    * @return string
    */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
    * Package accessorial charges value amount.
    
    Valid values are from 0 to 99999999999999.99
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