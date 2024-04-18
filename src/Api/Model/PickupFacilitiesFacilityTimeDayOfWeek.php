<?php

namespace ShipStream\Ups\Api\Model;

class PickupFacilitiesFacilityTimeDayOfWeek extends \ArrayObject
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
     * Day of the week. Mon-Sun
     *
     * @var string
     */
    protected $day;
    /**
     * Earliest time that a customer can pick up a package.
     *
     * @var string
     */
    protected $earliestDropOfforPickup;
    /**
     * Latest time that a customer can pick up a package.
     *
     * @var string
     */
    protected $latestDropOfforPickup;
    /**
    * Facility Open Hours. The latest local open time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @var string
    */
    protected $openHours;
    /**
    * Facility Close Hours. The latest local close time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @var string
    */
    protected $closeHours;
    /**
     * Preparation time for hold for pickup  Conditionally required if request is for hold for pickup.
     *
     * @var string
     */
    protected $prepTime;
    /**
     * Latest time a package, requiring preparation can be dropped off (Close time - Prep time).
     *
     * @var string
     */
    protected $lastDrop;
    /**
     * Day of the week. Mon-Sun
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * Day of the week. Mon-Sun
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
    /**
     * Earliest time that a customer can pick up a package.
     *
     * @return string
     */
    public function getEarliestDropOfforPickup() : string
    {
        return $this->earliestDropOfforPickup;
    }
    /**
     * Earliest time that a customer can pick up a package.
     *
     * @param string $earliestDropOfforPickup
     *
     * @return self
     */
    public function setEarliestDropOfforPickup(string $earliestDropOfforPickup) : self
    {
        $this->initialized['earliestDropOfforPickup'] = true;
        $this->earliestDropOfforPickup = $earliestDropOfforPickup;
        return $this;
    }
    /**
     * Latest time that a customer can pick up a package.
     *
     * @return string
     */
    public function getLatestDropOfforPickup() : string
    {
        return $this->latestDropOfforPickup;
    }
    /**
     * Latest time that a customer can pick up a package.
     *
     * @param string $latestDropOfforPickup
     *
     * @return self
     */
    public function setLatestDropOfforPickup(string $latestDropOfforPickup) : self
    {
        $this->initialized['latestDropOfforPickup'] = true;
        $this->latestDropOfforPickup = $latestDropOfforPickup;
        return $this;
    }
    /**
    * Facility Open Hours. The latest local open time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @return string
    */
    public function getOpenHours() : string
    {
        return $this->openHours;
    }
    /**
    * Facility Open Hours. The latest local open time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @param string $openHours
    *
    * @return self
    */
    public function setOpenHours(string $openHours) : self
    {
        $this->initialized['openHours'] = true;
        $this->openHours = $openHours;
        return $this;
    }
    /**
    * Facility Close Hours. The latest local close time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @return string
    */
    public function getCloseHours() : string
    {
        return $this->closeHours;
    }
    /**
    * Facility Close Hours. The latest local close time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @param string $closeHours
    *
    * @return self
    */
    public function setCloseHours(string $closeHours) : self
    {
        $this->initialized['closeHours'] = true;
        $this->closeHours = $closeHours;
        return $this;
    }
    /**
     * Preparation time for hold for pickup  Conditionally required if request is for hold for pickup.
     *
     * @return string
     */
    public function getPrepTime() : string
    {
        return $this->prepTime;
    }
    /**
     * Preparation time for hold for pickup  Conditionally required if request is for hold for pickup.
     *
     * @param string $prepTime
     *
     * @return self
     */
    public function setPrepTime(string $prepTime) : self
    {
        $this->initialized['prepTime'] = true;
        $this->prepTime = $prepTime;
        return $this;
    }
    /**
     * Latest time a package, requiring preparation can be dropped off (Close time - Prep time).
     *
     * @return string
     */
    public function getLastDrop() : string
    {
        return $this->lastDrop;
    }
    /**
     * Latest time a package, requiring preparation can be dropped off (Close time - Prep time).
     *
     * @param string $lastDrop
     *
     * @return self
     */
    public function setLastDrop(string $lastDrop) : self
    {
        $this->initialized['lastDrop'] = true;
        $this->lastDrop = $lastDrop;
        return $this;
    }
}