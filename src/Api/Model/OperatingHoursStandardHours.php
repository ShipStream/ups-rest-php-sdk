<?php

namespace ShipStream\Ups\Api\Model;

class OperatingHoursStandardHours extends \ArrayObject
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
    * Hours Type. 
    
    Valid values: 
    10-Regular Operating Hours 
    11-Will Call Hours
    12-Same Day Will Call Hours
    14-Customer PickUp
    50-Drop Off Hours 
    51-Prep Hours
    *
    * @var string
    */
    protected $hoursType;
    /**
     * Container for the Day of Week.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<StandardHoursDayOfWeek>
     */
    protected $dayOfWeek;
    /**
    * Hours Type. 
    
    Valid values: 
    10-Regular Operating Hours 
    11-Will Call Hours
    12-Same Day Will Call Hours
    14-Customer PickUp
    50-Drop Off Hours 
    51-Prep Hours
    *
    * @return string
    */
    public function getHoursType() : string
    {
        return $this->hoursType;
    }
    /**
    * Hours Type. 
    
    Valid values: 
    10-Regular Operating Hours 
    11-Will Call Hours
    12-Same Day Will Call Hours
    14-Customer PickUp
    50-Drop Off Hours 
    51-Prep Hours
    *
    * @param string $hoursType
    *
    * @return self
    */
    public function setHoursType(string $hoursType) : self
    {
        $this->initialized['hoursType'] = true;
        $this->hoursType = $hoursType;
        return $this;
    }
    /**
     * Container for the Day of Week.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<StandardHoursDayOfWeek>
     */
    public function getDayOfWeek() : array
    {
        return $this->dayOfWeek;
    }
    /**
     * Container for the Day of Week.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<StandardHoursDayOfWeek> $dayOfWeek
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