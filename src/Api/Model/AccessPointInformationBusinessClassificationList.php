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
     * Container to hold Business classification of UPS access point.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<BusinessClassificationListBusinessClassification>
     */
    protected $businessClassification;
    /**
     * Container to hold Business classification of UPS access point.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<BusinessClassificationListBusinessClassification>
     */
    public function getBusinessClassification() : array
    {
        return $this->businessClassification;
    }
    /**
     * Container to hold Business classification of UPS access point.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<BusinessClassificationListBusinessClassification> $businessClassification
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