<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationLocalizedInstruction extends \ArrayObject
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
     * Locale
     *
     * @var string
     */
    protected $locale;
    /**
     * Holds the additional instructions. Text will be displayed in English or the locale given in the request. The max length of the additional instruction text is 750 characters.
     *
     * @var string
     */
    protected $last50ftInstruction;
    /**
     * Locale
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Locale
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
     * Holds the additional instructions. Text will be displayed in English or the locale given in the request. The max length of the additional instruction text is 750 characters.
     *
     * @return string
     */
    public function getLast50ftInstruction() : string
    {
        return $this->last50ftInstruction;
    }
    /**
     * Holds the additional instructions. Text will be displayed in English or the locale given in the request. The max length of the additional instruction text is 750 characters.
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