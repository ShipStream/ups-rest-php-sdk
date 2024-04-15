<?php

namespace ShipStream\Ups\Api\Model;

class ValidationList extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $invalidFieldList;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $invalidFieldListCodes;
    /**
     * Returned as true when destination address has a candidate list
     *
     * @var bool|null
     */
    protected $destinationAmbiguous;
    /**
     * Returned as true when origina ddress has a candidate list.
     *
     * @var bool|null
     */
    protected $originAmbiguous;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getInvalidFieldList() : ?array
    {
        return $this->invalidFieldList;
    }
    /**
     * 
     *
     * @param list<string>|null $invalidFieldList
     *
     * @return self
     */
    public function setInvalidFieldList(?array $invalidFieldList) : self
    {
        $this->initialized['invalidFieldList'] = true;
        $this->invalidFieldList = $invalidFieldList;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getInvalidFieldListCodes() : ?array
    {
        return $this->invalidFieldListCodes;
    }
    /**
     * 
     *
     * @param list<string>|null $invalidFieldListCodes
     *
     * @return self
     */
    public function setInvalidFieldListCodes(?array $invalidFieldListCodes) : self
    {
        $this->initialized['invalidFieldListCodes'] = true;
        $this->invalidFieldListCodes = $invalidFieldListCodes;
        return $this;
    }
    /**
     * Returned as true when destination address has a candidate list
     *
     * @return bool|null
     */
    public function getDestinationAmbiguous() : ?bool
    {
        return $this->destinationAmbiguous;
    }
    /**
     * Returned as true when destination address has a candidate list
     *
     * @param bool|null $destinationAmbiguous
     *
     * @return self
     */
    public function setDestinationAmbiguous(?bool $destinationAmbiguous) : self
    {
        $this->initialized['destinationAmbiguous'] = true;
        $this->destinationAmbiguous = $destinationAmbiguous;
        return $this;
    }
    /**
     * Returned as true when origina ddress has a candidate list.
     *
     * @return bool|null
     */
    public function getOriginAmbiguous() : ?bool
    {
        return $this->originAmbiguous;
    }
    /**
     * Returned as true when origina ddress has a candidate list.
     *
     * @param bool|null $originAmbiguous
     *
     * @return self
     */
    public function setOriginAmbiguous(?bool $originAmbiguous) : self
    {
        $this->initialized['originAmbiguous'] = true;
        $this->originAmbiguous = $originAmbiguous;
        return $this;
    }
}