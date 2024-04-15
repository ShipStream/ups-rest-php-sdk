<?php

namespace ShipStream\Ups\Api\Model;

class StandardHoursDayOfWeek extends \ArrayObject
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
    * Day of week. 
    Valid values: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @var string|null
    */
    protected $day;
    /**
     * Open time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string|null
     */
    protected $openHours;
    /**
     * Close time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string|null
     */
    protected $closeHours;
    /**
     * LatestDropOffHours for Hour Type 50. Latest Drop Off time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string|null
     */
    protected $latestDropOffHours;
    /**
     * PrepHours for Hour Type 51. Prep Hours of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string|null
     */
    protected $prepHours;
    /**
     * Presence absence Indicator. Indicator present means location is closed.
     *
     * @var string|null
     */
    protected $closedIndicator;
    /**
     * Presence/ Absence Indicator. Presence denotes  for the given day, if the location is open 24 hours. Absence denotes the location is not open for 24 hours on the given day.
     *
     * @var string|null
     */
    protected $open24HoursIndicator;
    /**
    * Day of week. 
    Valid values: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @return string|null
    */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
    * Day of week. 
    Valid values: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @param string|null $day
    *
    * @return self
    */
    public function setDay(?string $day) : self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
    /**
     * Open time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string|null
     */
    public function getOpenHours() : ?string
    {
        return $this->openHours;
    }
    /**
     * Open time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string|null $openHours
     *
     * @return self
     */
    public function setOpenHours(?string $openHours) : self
    {
        $this->initialized['openHours'] = true;
        $this->openHours = $openHours;
        return $this;
    }
    /**
     * Close time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string|null
     */
    public function getCloseHours() : ?string
    {
        return $this->closeHours;
    }
    /**
     * Close time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string|null $closeHours
     *
     * @return self
     */
    public function setCloseHours(?string $closeHours) : self
    {
        $this->initialized['closeHours'] = true;
        $this->closeHours = $closeHours;
        return $this;
    }
    /**
     * LatestDropOffHours for Hour Type 50. Latest Drop Off time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string|null
     */
    public function getLatestDropOffHours() : ?string
    {
        return $this->latestDropOffHours;
    }
    /**
     * LatestDropOffHours for Hour Type 50. Latest Drop Off time of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string|null $latestDropOffHours
     *
     * @return self
     */
    public function setLatestDropOffHours(?string $latestDropOffHours) : self
    {
        $this->initialized['latestDropOffHours'] = true;
        $this->latestDropOffHours = $latestDropOffHours;
        return $this;
    }
    /**
     * PrepHours for Hour Type 51. Prep Hours of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string|null
     */
    public function getPrepHours() : ?string
    {
        return $this->prepHours;
    }
    /**
     * PrepHours for Hour Type 51. Prep Hours of a location in military format (HHMM) e.g. 930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string|null $prepHours
     *
     * @return self
     */
    public function setPrepHours(?string $prepHours) : self
    {
        $this->initialized['prepHours'] = true;
        $this->prepHours = $prepHours;
        return $this;
    }
    /**
     * Presence absence Indicator. Indicator present means location is closed.
     *
     * @return string|null
     */
    public function getClosedIndicator() : ?string
    {
        return $this->closedIndicator;
    }
    /**
     * Presence absence Indicator. Indicator present means location is closed.
     *
     * @param string|null $closedIndicator
     *
     * @return self
     */
    public function setClosedIndicator(?string $closedIndicator) : self
    {
        $this->initialized['closedIndicator'] = true;
        $this->closedIndicator = $closedIndicator;
        return $this;
    }
    /**
     * Presence/ Absence Indicator. Presence denotes  for the given day, if the location is open 24 hours. Absence denotes the location is not open for 24 hours on the given day.
     *
     * @return string|null
     */
    public function getOpen24HoursIndicator() : ?string
    {
        return $this->open24HoursIndicator;
    }
    /**
     * Presence/ Absence Indicator. Presence denotes  for the given day, if the location is open 24 hours. Absence denotes the location is not open for 24 hours on the given day.
     *
     * @param string|null $open24HoursIndicator
     *
     * @return self
     */
    public function setOpen24HoursIndicator(?string $open24HoursIndicator) : self
    {
        $this->initialized['open24HoursIndicator'] = true;
        $this->open24HoursIndicator = $open24HoursIndicator;
        return $this;
    }
}