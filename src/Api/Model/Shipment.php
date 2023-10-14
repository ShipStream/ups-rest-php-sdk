<?php

namespace ShipStream\Ups\Api\Model;

class Shipment extends \ArrayObject
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
     * inquiryNumber
     *
     * @var string
     */
    protected $inquiryNumber;
    /**
     * 
     *
     * @var Package[]
     */
    protected $package;
    /**
     * userRelation
     *
     * @var string[]
     */
    protected $userRelation;
    /**
     * 
     *
     * @var Warning[]|null
     */
    protected $warnings;
    /**
     * inquiryNumber
     *
     * @return string
     */
    public function getInquiryNumber() : string
    {
        return $this->inquiryNumber;
    }
    /**
     * inquiryNumber
     *
     * @param string $inquiryNumber
     *
     * @return self
     */
    public function setInquiryNumber(string $inquiryNumber) : self
    {
        $this->initialized['inquiryNumber'] = true;
        $this->inquiryNumber = $inquiryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return Package[]
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param Package[] $package
     *
     * @return self
     */
    public function setPackage(array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
    /**
     * userRelation
     *
     * @return string[]
     */
    public function getUserRelation() : array
    {
        return $this->userRelation;
    }
    /**
     * userRelation
     *
     * @param string[] $userRelation
     *
     * @return self
     */
    public function setUserRelation(array $userRelation) : self
    {
        $this->initialized['userRelation'] = true;
        $this->userRelation = $userRelation;
        return $this;
    }
    /**
     * 
     *
     * @return Warning[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param Warning[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}