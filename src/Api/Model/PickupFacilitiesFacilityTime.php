<?php

namespace ShipStream\Ups\Api\Model;

class PickupFacilitiesFacilityTime extends \ArrayObject
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
     * Facility Hours of Operation Container
     *
     * @var PickupFacilitiesFacilityTimeDayOfWeek
     */
    protected $dayOfWeek;
    /**
     * Facility Hours of Operation Container
     *
     * @return PickupFacilitiesFacilityTimeDayOfWeek
     */
    public function getDayOfWeek() : PickupFacilitiesFacilityTimeDayOfWeek
    {
        return $this->dayOfWeek;
    }
    /**
     * Facility Hours of Operation Container
     *
     * @param PickupFacilitiesFacilityTimeDayOfWeek $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(PickupFacilitiesFacilityTimeDayOfWeek $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
}