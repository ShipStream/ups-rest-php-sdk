<?php

namespace ShipStream\Ups\Api\Model;

class LocationSearchCriteriaOpenTimeCriteria extends \ArrayObject
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
    * Day Of week Code.
    Valid values:
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday
    *
    * @var string|null
    */
    protected $dayOfWeekCode;
    /**
     * From time. Time Format HHMM.
     *
     * @var string|null
     */
    protected $fromTime;
    /**
     * To Time. Time Format HHMM
     *
     * @var string|null
     */
    protected $toTime;
    /**
    * Day Of week Code.
    Valid values:
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday
    *
    * @return string|null
    */
    public function getDayOfWeekCode() : ?string
    {
        return $this->dayOfWeekCode;
    }
    /**
    * Day Of week Code.
    Valid values:
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday
    *
    * @param string|null $dayOfWeekCode
    *
    * @return self
    */
    public function setDayOfWeekCode(?string $dayOfWeekCode) : self
    {
        $this->initialized['dayOfWeekCode'] = true;
        $this->dayOfWeekCode = $dayOfWeekCode;
        return $this;
    }
    /**
     * From time. Time Format HHMM.
     *
     * @return string|null
     */
    public function getFromTime() : ?string
    {
        return $this->fromTime;
    }
    /**
     * From time. Time Format HHMM.
     *
     * @param string|null $fromTime
     *
     * @return self
     */
    public function setFromTime(?string $fromTime) : self
    {
        $this->initialized['fromTime'] = true;
        $this->fromTime = $fromTime;
        return $this;
    }
    /**
     * To Time. Time Format HHMM
     *
     * @return string|null
     */
    public function getToTime() : ?string
    {
        return $this->toTime;
    }
    /**
     * To Time. Time Format HHMM
     *
     * @param string|null $toTime
     *
     * @return self
     */
    public function setToTime(?string $toTime) : self
    {
        $this->initialized['toTime'] = true;
        $this->toTime = $toTime;
        return $this;
    }
}