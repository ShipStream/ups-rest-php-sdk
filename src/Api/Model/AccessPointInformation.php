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
     * @var string|null
     */
    protected $pickupByDate;
    /**
     * 
     *
     * @return string|null
     */
    public function getPickupByDate() : ?string
    {
        return $this->pickupByDate;
    }
    /**
     * 
     *
     * @param string|null $pickupByDate
     *
     * @return self
     */
    public function setPickupByDate(?string $pickupByDate) : self
    {
        $this->initialized['pickupByDate'] = true;
        $this->pickupByDate = $pickupByDate;
        return $this;
    }
}