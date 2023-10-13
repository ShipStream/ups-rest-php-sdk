<?php

namespace ShipStream\Ups\Api\Model;

class UPSPremiumCareFormLanguageForUPSPremiumCare extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Languages for UPS Premium Care Form. Two languages are required for UPS Premium Care Form.   Valid values: 
    eng = US English
    fra = Canadian French
    *
    * @var string[]
    */
    protected $language;
    /**
    * Languages for UPS Premium Care Form. Two languages are required for UPS Premium Care Form.   Valid values: 
    eng = US English
    fra = Canadian French
    *
    * @return string[]
    */
    public function getLanguage() : array
    {
        return $this->language;
    }
    /**
    * Languages for UPS Premium Care Form. Two languages are required for UPS Premium Care Form.   Valid values: 
    eng = US English
    fra = Canadian French
    *
    * @param string[] $language
    *
    * @return self
    */
    public function setLanguage(array $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}