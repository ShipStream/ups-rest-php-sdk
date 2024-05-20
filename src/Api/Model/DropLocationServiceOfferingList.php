<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationServiceOfferingList extends \ArrayObject
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
     * Container for Service offering code.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ServiceOfferingListServiceOffering>
     */
    protected $serviceOffering;
    /**
     * Container for Service offering code.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ServiceOfferingListServiceOffering>
     */
    public function getServiceOffering() : array
    {
        return $this->serviceOffering;
    }
    /**
     * Container for Service offering code.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ServiceOfferingListServiceOffering> $serviceOffering
     *
     * @return self
     */
    public function setServiceOffering(array $serviceOffering) : self
    {
        $this->initialized['serviceOffering'] = true;
        $this->serviceOffering = $serviceOffering;
        return $this;
    }
}