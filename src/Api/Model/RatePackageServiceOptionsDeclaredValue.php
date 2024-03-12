<?php

namespace ShipStream\Ups\Api\Model;

class RatePackageServiceOptionsDeclaredValue extends \ArrayObject
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
     * The IATA currency code associated with the declared value amount for the package.  Required if a value for the package declared value amount exists in the MonetaryValue tag. Must match one of the IATA currency codes. Length is not validated. UPS does not support all international currency codes. Refer to Currency Codes in the Appendix for a list of valid codes.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The monetary value for the declared value amount associated with the package.  Max value of 5,000 USD for Local and 50,000 USD for Remote. Absolute maximum value is 21474836.47
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The IATA currency code associated with the declared value amount for the package.  Required if a value for the package declared value amount exists in the MonetaryValue tag. Must match one of the IATA currency codes. Length is not validated. UPS does not support all international currency codes. Refer to Currency Codes in the Appendix for a list of valid codes.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the declared value amount for the package.  Required if a value for the package declared value amount exists in the MonetaryValue tag. Must match one of the IATA currency codes. Length is not validated. UPS does not support all international currency codes. Refer to Currency Codes in the Appendix for a list of valid codes.
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
     * The monetary value for the declared value amount associated with the package.  Max value of 5,000 USD for Local and 50,000 USD for Remote. Absolute maximum value is 21474836.47
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The monetary value for the declared value amount associated with the package.  Max value of 5,000 USD for Local and 50,000 USD for Remote. Absolute maximum value is 21474836.47
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