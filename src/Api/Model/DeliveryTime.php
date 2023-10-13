<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryTime extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $endTime;
    /**
     * 
     *
     * @var string
     */
    protected $startTime;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getEndTime() : string
    {
        return $this->endTime;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
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