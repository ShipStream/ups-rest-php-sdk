<?php

namespace ShipStream\Ups\Api\Model;

class IncludeCriteriaServiceOfferingList extends \ArrayObject
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
     * @var list<ServiceOfferingListServiceOffering>|null
     */
    protected $serviceOffering;
    /**
     * 
     *
     * @return list<ServiceOfferingListServiceOffering>|null
     */
    public function getServiceOffering() : ?array
    {
        return $this->serviceOffering;
    }
    /**
     * 
     *
     * @param list<ServiceOfferingListServiceOffering>|null $serviceOffering
     *
     * @return self
     */
    public function setServiceOffering(?array $serviceOffering) : self
    {
        $this->initialized['serviceOffering'] = true;
        $this->serviceOffering = $serviceOffering;
        return $this;
    }
}