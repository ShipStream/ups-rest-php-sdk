<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsInsuredValue extends \ArrayObject
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
     * Not populated in this release.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The monetary value for the insured value amount associated with the package. Max value of 5,000 USD for Local and 50,000 USD for Remote.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * Not populated in this release.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Not populated in this release.
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
     * The monetary value for the insured value amount associated with the package. Max value of 5,000 USD for Local and 50,000 USD for Remote.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * The monetary value for the insured value amount associated with the package. Max value of 5,000 USD for Local and 50,000 USD for Remote.
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