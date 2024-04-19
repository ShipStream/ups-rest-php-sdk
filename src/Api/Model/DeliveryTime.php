<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryTime extends \ArrayObject
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
     * The end time of a window or the committed time or the delivered time. Only returned when the type is “EDW” or “CDW” or “IDW” or “CMT” or “DEL”. Format: HHMMSS (24 hr)
     *
     * @var string
     */
    protected $endTime;
    /**
     * The start time of a delivery. Only returned when the type is “EDW” or “CDW” or “IDW”. Format: HHMMSS (24 hr).
     *
     * @var string
     */
    protected $startTime;
    /**
    * The date of this delivery detail.
    Valid values:
    
    EOD - End of Day
    CMT - Commit Time
    EDW - Estimated Delivery Window **
    CDW - Confirmed Delivery Window **
    IDW - Imminent Delivery Window **
    DEL - Delivered Time
    *
    * @var string
    */
    protected $type;
    /**
     * The end time of a window or the committed time or the delivered time. Only returned when the type is “EDW” or “CDW” or “IDW” or “CMT” or “DEL”. Format: HHMMSS (24 hr)
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * The end time of a window or the committed time or the delivered time. Only returned when the type is “EDW” or “CDW” or “IDW” or “CMT” or “DEL”. Format: HHMMSS (24 hr)
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime) : self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * The start time of a delivery. Only returned when the type is “EDW” or “CDW” or “IDW”. Format: HHMMSS (24 hr).
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * The start time of a delivery. Only returned when the type is “EDW” or “CDW” or “IDW”. Format: HHMMSS (24 hr).
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
    * The date of this delivery detail.
    Valid values:
    
    EOD - End of Day
    CMT - Commit Time
    EDW - Estimated Delivery Window **
    CDW - Confirmed Delivery Window **
    IDW - Imminent Delivery Window **
    DEL - Delivered Time
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * The date of this delivery detail.
    Valid values:
    
    EOD - End of Day
    CMT - Commit Time
    EDW - Estimated Delivery Window **
    CDW - Confirmed Delivery Window **
    IDW - Imminent Delivery Window **
    DEL - Delivered Time
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}