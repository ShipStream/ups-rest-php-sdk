<?php

namespace ShipStream\Ups\Api\Model;

class DropOffFacilitiesLocalizedInstruction extends \ArrayObject
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
     * Locale. Example: en_US
     *
     * @var string
     */
    protected $locale;
    /**
    * Last 50ft instructions that relates to an available facility and depend on the locale passing in request.
    Last 50 feet instruction in the language asked in request or the English for that country.
    *
    * @var string
    */
    protected $last50ftInstruction;
    /**
     * Locale. Example: en_US
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Locale. Example: en_US
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
    * Last 50ft instructions that relates to an available facility and depend on the locale passing in request.
    Last 50 feet instruction in the language asked in request or the English for that country.
    *
    * @return string
    */
    public function getLast50ftInstruction() : string
    {
        return $this->last50ftInstruction;
    }
    /**
    * Last 50ft instructions that relates to an available facility and depend on the locale passing in request.
    Last 50 feet instruction in the language asked in request or the English for that country.
    *
    * @param string $last50ftInstruction
    *
    * @return self
    */
    public function setLast50ftInstruction(string $last50ftInstruction) : self
    {
        $this->initialized['last50ftInstruction'] = true;
        $this->last50ftInstruction = $last50ftInstruction;
        return $this;
    }
}