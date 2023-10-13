<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationServiceOfferingList extends \ArrayObject
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
     * @var ServiceOfferingListServiceOffering[]
     */
    protected $serviceOffering;
    /**
     * 
     *
     * @return ServiceOfferingListServiceOffering[]
     */
    public function getServiceOffering() : array
    {
        return $this->serviceOffering;
    }
    /**
     * 
     *
     * @param ServiceOfferingListServiceOffering[] $serviceOffering
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