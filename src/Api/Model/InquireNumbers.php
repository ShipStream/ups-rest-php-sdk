<?php

namespace ShipStream\Ups\Api\Model;

class InquireNumbers extends \ArrayObject
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
     * 
     *
     * @var string[]
     */
    protected $inquiryNumbers;
    /**
     * 
     *
     * @return string[]
     */
    public function getInquiryNumbers() : array
    {
        return $this->inquiryNumbers;
    }
    /**
     * 
     *
     * @param string[] $inquiryNumbers
     *
     * @return self
     */
    public function setInquiryNumbers(array $inquiryNumbers) : self
    {
        $this->initialized['inquiryNumbers'] = true;
        $this->inquiryNumbers = $inquiryNumbers;
        return $this;
    }
}