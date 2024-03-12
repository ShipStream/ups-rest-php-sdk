<?php

namespace ShipStream\Ups\Api\Model;

class OptionCodeTransportationPickUpSchedule extends \ArrayObject
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
     * @var TransportationPickUpSchedulePickUp[]
     */
    protected $pickUp;
    /**
     * 
     *
     * @return TransportationPickUpSchedulePickUp[]
     */
    public function getPickUp() : array
    {
        return $this->pickUp;
    }
    /**
     * 
     *
     * @param TransportationPickUpSchedulePickUp[] $pickUp
     *
     * @return self
     */
    public function setPickUp(array $pickUp) : self
    {
        $this->initialized['pickUp'] = true;
        $this->pickUp = $pickUp;
        return $this;
    }
}