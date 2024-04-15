<?php

namespace ShipStream\Ups\Api\Model;

class InsuranceBasicFlexibleParcelIndicator extends \ArrayObject
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
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the amount for the package.  UPS does not support all international currency codes. Refer to the appendix for a list of valid codes. Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the amount for the package.  UPS does not support all international currency codes. Refer to the appendix for a list of valid codes. Valid for UPS World Wide Express Freight shipments.
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
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * The monetary value associated with the package.  Valid for UPS World Wide Express Freight shipments.
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