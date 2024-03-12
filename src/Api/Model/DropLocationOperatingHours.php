<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationOperatingHours extends \ArrayObject
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
     * 
     *
     * @var OperatingHoursStandardHours[]
     */
    protected $standardHours;
    /**
     * 
     *
     * @return OperatingHoursStandardHours[]
     */
    public function getStandardHours() : array
    {
        return $this->standardHours;
    }
    /**
     * 
     *
     * @param OperatingHoursStandardHours[] $standardHours
     *
     * @return self
     */
    public function setStandardHours(array $standardHours) : self
    {
        $this->initialized['standardHours'] = true;
        $this->standardHours = $standardHours;
        return $this;
    }
}