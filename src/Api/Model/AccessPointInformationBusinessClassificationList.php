<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformationBusinessClassificationList extends \ArrayObject
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
     * 
     *
     * @var BusinessClassificationListBusinessClassification[]
     */
    protected $businessClassification;
    /**
     * 
     *
     * @return BusinessClassificationListBusinessClassification[]
     */
    public function getBusinessClassification() : array
    {
        return $this->businessClassification;
    }
    /**
     * 
     *
     * @param BusinessClassificationListBusinessClassification[] $businessClassification
     *
     * @return self
     */
    public function setBusinessClassification(array $businessClassification) : self
    {
        $this->initialized['businessClassification'] = true;
        $this->businessClassification = $businessClassification;
        return $this;
    }
}