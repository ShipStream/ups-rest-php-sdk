<?php

namespace ShipStream\Ups\Api\Model;

class TimeInTransitResponse extends \ArrayObject
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
     * @var ValidationList
     */
    protected $validationList;
    /**
     * 
     *
     * @var list<CandidateAddress>
     */
    protected $destinationPickList;
    /**
     * 
     *
     * @var list<CandidateAddress>
     */
    protected $originPickList;
    /**
     * 
     *
     * @var EmsResponse
     */
    protected $emsResponse;
    /**
     * 
     *
     * @return ValidationList
     */
    public function getValidationList() : ValidationList
    {
        return $this->validationList;
    }
    /**
     * 
     *
     * @param ValidationList $validationList
     *
     * @return self
     */
    public function setValidationList(ValidationList $validationList) : self
    {
        $this->initialized['validationList'] = true;
        $this->validationList = $validationList;
        return $this;
    }
    /**
     * 
     *
     * @return list<CandidateAddress>
     */
    public function getDestinationPickList() : array
    {
        return $this->destinationPickList;
    }
    /**
     * 
     *
     * @param list<CandidateAddress> $destinationPickList
     *
     * @return self
     */
    public function setDestinationPickList(array $destinationPickList) : self
    {
        $this->initialized['destinationPickList'] = true;
        $this->destinationPickList = $destinationPickList;
        return $this;
    }
    /**
     * 
     *
     * @return list<CandidateAddress>
     */
    public function getOriginPickList() : array
    {
        return $this->originPickList;
    }
    /**
     * 
     *
     * @param list<CandidateAddress> $originPickList
     *
     * @return self
     */
    public function setOriginPickList(array $originPickList) : self
    {
        $this->initialized['originPickList'] = true;
        $this->originPickList = $originPickList;
        return $this;
    }
    /**
     * 
     *
     * @return EmsResponse
     */
    public function getEmsResponse() : EmsResponse
    {
        return $this->emsResponse;
    }
    /**
     * 
     *
     * @param EmsResponse $emsResponse
     *
     * @return self
     */
    public function setEmsResponse(EmsResponse $emsResponse) : self
    {
        $this->initialized['emsResponse'] = true;
        $this->emsResponse = $emsResponse;
        return $this;
    }
}