<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsExcessDeclaredValue extends \ArrayObject
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
    * Excess Declared value amount currency type.
    Valid value: USD - United States Dollar
    *
    * @var string|null
    */
    protected $currencyCode;
    /**
     * Excess Declared value amount.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
    * Excess Declared value amount currency type.
    Valid value: USD - United States Dollar
    *
    * @return string|null
    */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
    * Excess Declared value amount currency type.
    Valid value: USD - United States Dollar
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
     * Excess Declared value amount.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * Excess Declared value amount.
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