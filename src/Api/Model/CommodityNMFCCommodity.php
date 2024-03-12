<?php

namespace ShipStream\Ups\Api\Model;

class CommodityNMFCCommodity extends \ArrayObject
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
    * National Motor Freight Classification Commodity prime code.
    Must be 6 digits representing the NMFC prime code. 
    This field is required if NMFCCommodity/SubCode is supplied.
    *
    * @var string
    */
    protected $primeCode;
    /**
    * National Motor Freight Classification Commodity sub code.
    Must be 2 digits representing the NMFC sub code.
    If this field is supplied, NMFCCommodity/PrimeCode also has to be supplied.
    *
    * @var string
    */
    protected $subCode;
    /**
    * National Motor Freight Classification Commodity prime code.
    Must be 6 digits representing the NMFC prime code. 
    This field is required if NMFCCommodity/SubCode is supplied.
    *
    * @return string
    */
    public function getPrimeCode() : string
    {
        return $this->primeCode;
    }
    /**
    * National Motor Freight Classification Commodity prime code.
    Must be 6 digits representing the NMFC prime code. 
    This field is required if NMFCCommodity/SubCode is supplied.
    *
    * @param string $primeCode
    *
    * @return self
    */
    public function setPrimeCode(string $primeCode) : self
    {
        $this->initialized['primeCode'] = true;
        $this->primeCode = $primeCode;
        return $this;
    }
    /**
    * National Motor Freight Classification Commodity sub code.
    Must be 2 digits representing the NMFC sub code.
    If this field is supplied, NMFCCommodity/PrimeCode also has to be supplied.
    *
    * @return string
    */
    public function getSubCode() : string
    {
        return $this->subCode;
    }
    /**
    * National Motor Freight Classification Commodity sub code.
    Must be 2 digits representing the NMFC sub code.
    If this field is supplied, NMFCCommodity/PrimeCode also has to be supplied.
    *
    * @param string $subCode
    *
    * @return self
    */
    public function setSubCode(string $subCode) : self
    {
        $this->initialized['subCode'] = true;
        $this->subCode = $subCode;
        return $this;
    }
}