<?php

namespace ShipStream\Ups\Api\Model;

class CODCODAmount extends \ArrayObject
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
     * COD amount currency code type.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * COD Amount.  Valid values: 0.01 USD to 50000.00 USD
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * COD amount currency code type.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * COD amount currency code type.
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
     * COD Amount.  Valid values: 0.01 USD to 50000.00 USD
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * COD Amount.  Valid values: 0.01 USD to 50000.00 USD
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