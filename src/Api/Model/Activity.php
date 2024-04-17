<?php

namespace ShipStream\Ups\Api\Model;

class Activity extends \ArrayObject
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
     * The date of the activity. Format: YYYYMMDD
     *
     * @var string
     */
    protected $date;
    /**
     * gmtDate
     *
     * @var string
     */
    protected $gmtDate;
    /**
     * gmtOffset
     *
     * @var string
     */
    protected $gmtOffset;
    /**
     * gmtTime
     *
     * @var string
     */
    protected $gmtTime;
    /**
     * 
     *
     * @var Location
     */
    protected $location;
    /**
     * The container which has the current package status
     *
     * @var Status
     */
    protected $status;
    /**
     * The time of the activity. Format: HHMMSS (24 hr)
     *
     * @var string
     */
    protected $time;
    /**
     * The date of the activity. Format: YYYYMMDD
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date of the activity. Format: YYYYMMDD
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * gmtDate
     *
     * @return string
     */
    public function getGmtDate() : string
    {
        return $this->gmtDate;
    }
    /**
     * gmtDate
     *
     * @param string $gmtDate
     *
     * @return self
     */
    public function setGmtDate(string $gmtDate) : self
    {
        $this->initialized['gmtDate'] = true;
        $this->gmtDate = $gmtDate;
        return $this;
    }
    /**
     * gmtOffset
     *
     * @return string
     */
    public function getGmtOffset() : string
    {
        return $this->gmtOffset;
    }
    /**
     * gmtOffset
     *
     * @param string $gmtOffset
     *
     * @return self
     */
    public function setGmtOffset(string $gmtOffset) : self
    {
        $this->initialized['gmtOffset'] = true;
        $this->gmtOffset = $gmtOffset;
        return $this;
    }
    /**
     * gmtTime
     *
     * @return string
     */
    public function getGmtTime() : string
    {
        return $this->gmtTime;
    }
    /**
     * gmtTime
     *
     * @param string $gmtTime
     *
     * @return self
     */
    public function setGmtTime(string $gmtTime) : self
    {
        $this->initialized['gmtTime'] = true;
        $this->gmtTime = $gmtTime;
        return $this;
    }
    /**
     * 
     *
     * @return Location
     */
    public function getLocation() : Location
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param Location $location
     *
     * @return self
     */
    public function setLocation(Location $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * The container which has the current package status
     *
     * @return Status
     */
    public function getStatus() : Status
    {
        return $this->status;
    }
    /**
     * The container which has the current package status
     *
     * @param Status $status
     *
     * @return self
     */
    public function setStatus(Status $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The time of the activity. Format: HHMMSS (24 hr)
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * The time of the activity. Format: HHMMSS (24 hr)
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}