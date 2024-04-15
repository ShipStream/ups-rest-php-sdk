<?php

namespace ShipStream\Ups\Api\Model;

class Shipment extends \ArrayObject
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
     * inquiryNumber
     *
     * @var string|null
     */
    protected $inquiryNumber;
    /**
     * 
     *
     * @var list<Package>|null
     */
    protected $package;
    /**
     * userRelation
     *
     * @var list<string>|null
     */
    protected $userRelation;
    /**
     * 
     *
     * @var list<Warning>|null
     */
    protected $warnings;
    /**
     * inquiryNumber
     *
     * @return string|null
     */
    public function getInquiryNumber() : ?string
    {
        return $this->inquiryNumber;
    }
    /**
     * inquiryNumber
     *
     * @param string|null $inquiryNumber
     *
     * @return self
     */
    public function setInquiryNumber(?string $inquiryNumber) : self
    {
        $this->initialized['inquiryNumber'] = true;
        $this->inquiryNumber = $inquiryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<Package>|null
     */
    public function getPackage() : ?array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<Package>|null $package
     *
     * @return self
     */
    public function setPackage(?array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
    /**
     * userRelation
     *
     * @return list<string>|null
     */
    public function getUserRelation() : ?array
    {
        return $this->userRelation;
    }
    /**
     * userRelation
     *
     * @param list<string>|null $userRelation
     *
     * @return self
     */
    public function setUserRelation(?array $userRelation) : self
    {
        $this->initialized['userRelation'] = true;
        $this->userRelation = $userRelation;
        return $this;
    }
    /**
     * 
     *
     * @return list<Warning>|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<Warning>|null $warnings
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