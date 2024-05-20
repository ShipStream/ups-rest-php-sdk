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
     * PickUp container contains details of day of week and corresponding pickup times for that service.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<TransportationPickUpSchedulePickUp>
     */
    protected $pickUp;
    /**
     * PickUp container contains details of day of week and corresponding pickup times for that service.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<TransportationPickUpSchedulePickUp>
     */
    public function getPickUp() : array
    {
        return $this->pickUp;
    }
    /**
     * PickUp container contains details of day of week and corresponding pickup times for that service.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<TransportationPickUpSchedulePickUp> $pickUp
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