<?php

namespace ShipStream\Ups\Api\Model;

class DropOffFacilitiesFacilityTime extends \ArrayObject
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
     * @var FacilityTimeDayOfWeek[]
     */
    protected $dayOfWeek;
    /**
     * 
     *
     * @return FacilityTimeDayOfWeek[]
     */
    public function getDayOfWeek() : array
    {
        return $this->dayOfWeek;
    }
    /**
     * 
     *
     * @param FacilityTimeDayOfWeek[] $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(array $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
}