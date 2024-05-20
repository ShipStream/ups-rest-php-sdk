<?php

namespace ShipStream\Ups\Api\Model;

class UPSPremiumCareFormLanguageForUPSPremiumCare extends \ArrayObject
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
    * Languages for UPS Premium Care Form. Two languages are required for UPS Premium Care Form.   Valid values: 
    eng = US English
    fra = Canadian French
    *
    * @var list<string>
    */
    protected $language;
    /**
    * Languages for UPS Premium Care Form. Two languages are required for UPS Premium Care Form.   Valid values: 
    eng = US English
    fra = Canadian French
    *
    * @return list<string>
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
    * @param list<string> $language
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