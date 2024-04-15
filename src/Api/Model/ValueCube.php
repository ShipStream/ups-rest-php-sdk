<?php

namespace ShipStream\Ups\Api\Model;

class ValueCube extends \ArrayObject
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
    * Currency code type for Price per cubic feet.
    Valid value: USD - United States Dollar
    *
    * @var string|null
    */
    protected $currencyCode;
    /**
    * Price per cubic feet.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @var string|null
    */
    protected $monetaryValue;
    /**
    * Currency code type for Price per cubic feet.
    Valid value: USD - United States Dollar
    *
    * @return string|null
    */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
    * Currency code type for Price per cubic feet.
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
    * Price per cubic feet.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @return string|null
    */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
    * Price per cubic feet.
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
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