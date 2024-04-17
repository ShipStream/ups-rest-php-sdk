<?php

namespace ShipStream\Ups\Api\Model;

class PickUpPickUpDetails extends \ArrayObject
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
     * Pickup time of transportation service for a location in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string
     */
    protected $pickUpTime;
    /**
     * Presence or Absence Indicator. If present, Indicates that there is no pickup time for the day.
     *
     * @var string
     */
    protected $noPickUpIndicator;
    /**
     * Pickup time of transportation service for a location in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string
     */
    public function getPickUpTime() : string
    {
        return $this->pickUpTime;
    }
    /**
     * Pickup time of transportation service for a location in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string $pickUpTime
     *
     * @return self
     */
    public function setPickUpTime(string $pickUpTime) : self
    {
        $this->initialized['pickUpTime'] = true;
        $this->pickUpTime = $pickUpTime;
        return $this;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates that there is no pickup time for the day.
     *
     * @return string
     */
    public function getNoPickUpIndicator() : string
    {
        return $this->noPickUpIndicator;
    }
    /**
     * Presence or Absence Indicator. If present, Indicates that there is no pickup time for the day.
     *
     * @param string $noPickUpIndicator
     *
     * @return self
     */
    public function setNoPickUpIndicator(string $noPickUpIndicator) : self
    {
        $this->initialized['noPickUpIndicator'] = true;
        $this->noPickUpIndicator = $noPickUpIndicator;
        return $this;
    }
}