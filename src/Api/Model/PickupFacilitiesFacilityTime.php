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
     * @var FacilityTimeDayOfWeek
     */
    protected $dayOfWeek;
    /**
     * Facility Hours of Operation Container
     *
     * @return FacilityTimeDayOfWeek
     */
    public function getDayOfWeek() : FacilityTimeDayOfWeek
    {
        return $this->dayOfWeek;
    }
    /**
     * Facility Hours of Operation Container
     *
     * @param FacilityTimeDayOfWeek $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(FacilityTimeDayOfWeek $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
}