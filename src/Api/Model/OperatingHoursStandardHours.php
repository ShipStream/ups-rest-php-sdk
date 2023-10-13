<?php

namespace ShipStream\Ups\Api\Model;

class OperatingHoursStandardHours extends \ArrayObject
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
     * 
     *
     * @var StandardHoursDayOfWeek[]
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
     * 
     *
     * @return StandardHoursDayOfWeek[]
     */
    public function getDayOfWeek() : array
    {
        return $this->dayOfWeek;
    }
    /**
     * 
     *
     * @param StandardHoursDayOfWeek[] $dayOfWeek
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