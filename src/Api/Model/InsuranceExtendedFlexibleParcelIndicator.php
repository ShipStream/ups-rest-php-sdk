<?php

namespace ShipStream\Ups\Api\Model;

class InsuranceExtendedFlexibleParcelIndicator extends \ArrayObject
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
     * The IATA currency code associated with the amount for the package.  UPS does not support all international currency codes. Refer to the appendix for a list of valid codes. Valid for UPS World Wide Express Freight shipments.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the amount for the package.  UPS does not support all international currency codes. Refer to the appendix for a list of valid codes. Valid for UPS World Wide Express Freight shipments.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the amount for the package.  UPS does not support all international currency codes. Refer to the appendix for a list of valid codes. Valid for UPS World Wide Express Freight shipments.
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
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
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