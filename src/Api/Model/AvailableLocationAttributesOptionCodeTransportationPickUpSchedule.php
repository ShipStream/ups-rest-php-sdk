<?php

namespace ShipStream\Ups\Api\Model;

class AvailableLocationAttributesOptionCodeTransportationPickUpSchedule extends \ArrayObject
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
     * Container to hold information regarding pickup day of the week and details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<AvailableLocationAttributesTransportationPickUpSchedulePickUp>
     */
    protected $pickUp;
    /**
     * Container to hold information regarding pickup day of the week and details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<AvailableLocationAttributesTransportationPickUpSchedulePickUp>
     */
    public function getPickUp() : array
    {
        return $this->pickUp;
    }
    /**
     * Container to hold information regarding pickup day of the week and details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<AvailableLocationAttributesTransportationPickUpSchedulePickUp> $pickUp
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