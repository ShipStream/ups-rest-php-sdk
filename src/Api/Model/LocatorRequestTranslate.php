<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestTranslate extends \ArrayObject
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
    * Locale is the 5 digit combination of 2 character language code and 2 character country or territory code separated by an underscore ('_') character. Will be used to determine what language the response will be sent in. 
    Default value is: en_US. 
    Examples are: fr_CA, es_MX.
    *
    * @var string
    */
    protected $locale;
    /**
    * Locale is the 5 digit combination of 2 character language code and 2 character country or territory code separated by an underscore ('_') character. Will be used to determine what language the response will be sent in. 
    Default value is: en_US. 
    Examples are: fr_CA, es_MX.
    *
    * @return string
    */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
    * Locale is the 5 digit combination of 2 character language code and 2 character country or territory code separated by an underscore ('_') character. Will be used to determine what language the response will be sent in. 
    Default value is: en_US. 
    Examples are: fr_CA, es_MX.
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
}