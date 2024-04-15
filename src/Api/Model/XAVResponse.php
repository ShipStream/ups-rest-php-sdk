<?php

namespace ShipStream\Ups\Api\Model;

class XAVResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var XAVResponseResponse|null
     */
    protected $response;
    /**
     * Indicates query found a valid match.
     *
     * @var string|null
     */
    protected $validAddressIndicator;
    /**
     * Indicates query could not find exact match. Candidate list follows.
     *
     * @var string|null
     */
    protected $ambiguousAddressIndicator;
    /**
     * No Candidate found.
     *
     * @var string|null
     */
    protected $noCandidatesIndicator;
    /**
     * AddressClassification Container.
     *
     * @var XAVResponseAddressClassification|null
     */
    protected $addressClassification;
    /**
     * Candidate Container.
     *
     * @var XAVResponseCandidate|null
     */
    protected $candidate;
    /**
     * Response Container.
     *
     * @return XAVResponseResponse|null
     */
    public function getResponse() : ?XAVResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param XAVResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?XAVResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Indicates query found a valid match.
     *
     * @return string|null
     */
    public function getValidAddressIndicator() : ?string
    {
        return $this->validAddressIndicator;
    }
    /**
     * Indicates query found a valid match.
     *
     * @param string|null $validAddressIndicator
     *
     * @return self
     */
    public function setValidAddressIndicator(?string $validAddressIndicator) : self
    {
        $this->initialized['validAddressIndicator'] = true;
        $this->validAddressIndicator = $validAddressIndicator;
        return $this;
    }
    /**
     * Indicates query could not find exact match. Candidate list follows.
     *
     * @return string|null
     */
    public function getAmbiguousAddressIndicator() : ?string
    {
        return $this->ambiguousAddressIndicator;
    }
    /**
     * Indicates query could not find exact match. Candidate list follows.
     *
     * @param string|null $ambiguousAddressIndicator
     *
     * @return self
     */
    public function setAmbiguousAddressIndicator(?string $ambiguousAddressIndicator) : self
    {
        $this->initialized['ambiguousAddressIndicator'] = true;
        $this->ambiguousAddressIndicator = $ambiguousAddressIndicator;
        return $this;
    }
    /**
     * No Candidate found.
     *
     * @return string|null
     */
    public function getNoCandidatesIndicator() : ?string
    {
        return $this->noCandidatesIndicator;
    }
    /**
     * No Candidate found.
     *
     * @param string|null $noCandidatesIndicator
     *
     * @return self
     */
    public function setNoCandidatesIndicator(?string $noCandidatesIndicator) : self
    {
        $this->initialized['noCandidatesIndicator'] = true;
        $this->noCandidatesIndicator = $noCandidatesIndicator;
        return $this;
    }
    /**
     * AddressClassification Container.
     *
     * @return XAVResponseAddressClassification|null
     */
    public function getAddressClassification() : ?XAVResponseAddressClassification
    {
        return $this->addressClassification;
    }
    /**
     * AddressClassification Container.
     *
     * @param XAVResponseAddressClassification|null $addressClassification
     *
     * @return self
     */
    public function setAddressClassification(?XAVResponseAddressClassification $addressClassification) : self
    {
        $this->initialized['addressClassification'] = true;
        $this->addressClassification = $addressClassification;
        return $this;
    }
    /**
     * Candidate Container.
     *
     * @return XAVResponseCandidate|null
     */
    public function getCandidate() : ?XAVResponseCandidate
    {
        return $this->candidate;
    }
    /**
     * Candidate Container.
     *
     * @param XAVResponseCandidate|null $candidate
     *
     * @return self
     */
    public function setCandidate(?XAVResponseCandidate $candidate) : self
    {
        $this->initialized['candidate'] = true;
        $this->candidate = $candidate;
        return $this;
    }
}