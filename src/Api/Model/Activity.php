<?php

namespace ShipStream\Ups\Api\Model;

class Activity extends \ArrayObject
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
     * type
     *
     * @var string
     */
    protected $date;
    /**
     * 
     *
     * @var Location
     */
    protected $location;
    /**
     * 
     *
     * @var Status
     */
    protected $status;
    /**
     * type
     *
     * @var string
     */
    protected $time;
    /**
     * type
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * type
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
     * 
     *
     * @return Status
     */
    public function getStatus() : Status
    {
        return $this->status;
    }
    /**
     * 
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
     * type
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * type
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