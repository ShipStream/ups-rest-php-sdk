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
     * type
     *
     * @var string|null
     */
    protected $date;
    /**
     * 
     *
     * @var Location|null
     */
    protected $location;
    /**
     * 
     *
     * @var Status|null
     */
    protected $status;
    /**
     * type
     *
     * @var string|null
     */
    protected $time;
    /**
     * type
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * type
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return Location|null
     */
    public function getLocation() : ?Location
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param Location|null $location
     *
     * @return self
     */
    public function setLocation(?Location $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return Status|null
     */
    public function getStatus() : ?Status
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param Status|null $status
     *
     * @return self
     */
    public function setStatus(?Status $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * type
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * type
     *
     * @param string|null $time
     *
     * @return self
     */
    public function setTime(?string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}