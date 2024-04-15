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
     * @var ValidationList|null
     */
    protected $validationList;
    /**
     * 
     *
     * @var list<CandidateAddress>|null
     */
    protected $destinationPickList;
    /**
     * 
     *
     * @var list<CandidateAddress>|null
     */
    protected $originPickList;
    /**
     * 
     *
     * @var EmsResponse|null
     */
    protected $emsResponse;
    /**
     * 
     *
     * @return ValidationList|null
     */
    public function getValidationList() : ?ValidationList
    {
        return $this->validationList;
    }
    /**
     * 
     *
     * @param ValidationList|null $validationList
     *
     * @return self
     */
    public function setValidationList(?ValidationList $validationList) : self
    {
        $this->initialized['validationList'] = true;
        $this->validationList = $validationList;
        return $this;
    }
    /**
     * 
     *
     * @return list<CandidateAddress>|null
     */
    public function getDestinationPickList() : ?array
    {
        return $this->destinationPickList;
    }
    /**
     * 
     *
     * @param list<CandidateAddress>|null $destinationPickList
     *
     * @return self
     */
    public function setDestinationPickList(?array $destinationPickList) : self
    {
        $this->initialized['destinationPickList'] = true;
        $this->destinationPickList = $destinationPickList;
        return $this;
    }
    /**
     * 
     *
     * @return list<CandidateAddress>|null
     */
    public function getOriginPickList() : ?array
    {
        return $this->originPickList;
    }
    /**
     * 
     *
     * @param list<CandidateAddress>|null $originPickList
     *
     * @return self
     */
    public function setOriginPickList(?array $originPickList) : self
    {
        $this->initialized['originPickList'] = true;
        $this->originPickList = $originPickList;
        return $this;
    }
    /**
     * 
     *
     * @return EmsResponse|null
     */
    public function getEmsResponse() : ?EmsResponse
    {
        return $this->emsResponse;
    }
    /**
     * 
     *
     * @param EmsResponse|null $emsResponse
     *
     * @return self
     */
    public function setEmsResponse(?EmsResponse $emsResponse) : self
    {
        $this->initialized['emsResponse'] = true;
        $this->emsResponse = $emsResponse;
        return $this;
    }
}