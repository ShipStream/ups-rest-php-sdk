<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformationBusinessClassificationList extends \ArrayObject
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
     * @var list<BusinessClassificationListBusinessClassification>|null
     */
    protected $businessClassification;
    /**
     * 
     *
     * @return list<BusinessClassificationListBusinessClassification>|null
     */
    public function getBusinessClassification() : ?array
    {
        return $this->businessClassification;
    }
    /**
     * 
     *
     * @param list<BusinessClassificationListBusinessClassification>|null $businessClassification
     *
     * @return self
     */
    public function setBusinessClassification(?array $businessClassification) : self
    {
        $this->initialized['businessClassification'] = true;
        $this->businessClassification = $businessClassification;
        return $this;
    }
}