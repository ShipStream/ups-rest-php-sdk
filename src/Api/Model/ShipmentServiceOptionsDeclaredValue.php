<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsDeclaredValue extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Declared value amount currency type.
    Valid value: USD - United States Dollar
    *
    * @var string
    */
    protected $currencyCode;
    /**
    * Declared value amount.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @var string
    */
    protected $monetaryValue;
    /**
    * Declared value amount currency type.
    Valid value: USD - United States Dollar
    *
    * @return string
    */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    /**
    * Declared value amount currency type.
    Valid value: USD - United States Dollar
    *
    * @param string $currencyCode
    *
    * @return self
    */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
    * Declared value amount.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @return string
    */
    public function getMonetaryValue(): string
    {
        return $this->monetaryValue;
    }
    /**
    * Declared value amount.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @param string $monetaryValue
    *
    * @return self
    */
    public function setMonetaryValue(string $monetaryValue): self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
}