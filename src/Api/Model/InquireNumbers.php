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
     * @var list<string>
     */
    protected $inquiryNumbers;
    /**
     * 
     *
     * @return list<string>
     */
    public function getInquiryNumbers() : array
    {
        return $this->inquiryNumbers;
    }
    /**
     * 
     *
     * @param list<string> $inquiryNumbers
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