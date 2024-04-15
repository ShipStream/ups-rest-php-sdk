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
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
    * Package accessorial charges value amount.   Applicable only for ShipmentResponse and ShipAcceptResponse.
    Valid values are from 0 to 99999999999999.99
    *
    * @var string|null
    */
    protected $monetaryValue;
    /**
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Package accessorial charges currency code type. The currency code used in the Shipment request is returned.   Applicable only for ShipmentResponse and ShipAcceptResponse.
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
    * Package accessorial charges value amount.   Applicable only for ShipmentResponse and ShipAcceptResponse.
    Valid values are from 0 to 99999999999999.99
    *
    * @return string|null
    */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
    * Package accessorial charges value amount.   Applicable only for ShipmentResponse and ShipAcceptResponse.
    Valid values are from 0 to 99999999999999.99
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