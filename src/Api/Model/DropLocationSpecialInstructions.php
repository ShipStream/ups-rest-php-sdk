<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationSpecialInstructions extends \ArrayObject
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
     * Walking directions, last 50 feet.
     *
     * @var string
     */
    protected $segment;
    /**
     * Walking directions, last 50 feet.
     *
     * @return string
     */
    public function getSegment() : string
    {
        return $this->segment;
    }
    /**
     * Walking directions, last 50 feet.
     *
     * @param string $segment
     *
     * @return self
     */
    public function setSegment(string $segment) : self
    {
        $this->initialized['segment'] = true;
        $this->segment = $segment;
        return $this;
    }
}