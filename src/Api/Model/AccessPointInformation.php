<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformation extends \ArrayObject
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
     * @var string
     */
    protected $pickupByDate;
    /**
     * 
     *
     * @return string
     */
    public function getPickupByDate() : string
    {
        return $this->pickupByDate;
    }
    /**
     * 
     *
     * @param string $pickupByDate
     *
     * @return self
     */
    public function setPickupByDate(string $pickupByDate) : self
    {
        $this->initialized['pickupByDate'] = true;
        $this->pickupByDate = $pickupByDate;
        return $this;
    }
}