<?php

namespace ShipStream\Ups\Api\Model;

class HandlingChargeAmount extends \ArrayObject
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
     * Handling charge amount currency type.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
    * Handling Charge amount.
    Negative value allowed.
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
     * Handling charge amount currency type.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Handling charge amount currency type.
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
    * Handling Charge amount.
    Negative value allowed.
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
    * Handling Charge amount.
    Negative value allowed.
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