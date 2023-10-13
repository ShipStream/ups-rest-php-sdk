<?php

namespace ShipStream\Ups\Api\Model;

class XAVResponseCandidate extends \ArrayObject
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
     * AddressClassification Container.
     *
     * @var CandidateAddressClassification|null
     */
    protected $addressClassification;
    /**
     * 
     *
     * @var CandidateAddressKeyFormat[]
     */
    protected $addressKeyFormat;
    /**
     * AddressClassification Container.
     *
     * @return CandidateAddressClassification|null
     */
    public function getAddressClassification() : ?CandidateAddressClassification
    {
        return $this->addressClassification;
    }
    /**
     * AddressClassification Container.
     *
     * @param CandidateAddressClassification|null $addressClassification
     *
     * @return self
     */
    public function setAddressClassification(?CandidateAddressClassification $addressClassification) : self
    {
        $this->initialized['addressClassification'] = true;
        $this->addressClassification = $addressClassification;
        return $this;
    }
    /**
     * 
     *
     * @return CandidateAddressKeyFormat[]
     */
    public function getAddressKeyFormat() : array
    {
        return $this->addressKeyFormat;
    }
    /**
     * 
     *
     * @param CandidateAddressKeyFormat[] $addressKeyFormat
     *
     * @return self
     */
    public function setAddressKeyFormat(array $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
}