<?php

namespace ShipStream\Ups\Api\Model;

class SearchOptionOptionCode extends \ArrayObject
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
    * These codes vary by country. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country or territory.
    
    Refer to Location Search Option Codes in the Appendix for additional information.
    
    *
    * @var string
    */
    protected $code;
    /**
    * These codes vary by country. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country or territory.
    
    Refer to Location Search Option Codes in the Appendix for additional information.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * These codes vary by country. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country or territory.
    
    Refer to Location Search Option Codes in the Appendix for additional information.
    
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
}