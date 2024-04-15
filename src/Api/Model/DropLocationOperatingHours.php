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
     * @var list<OperatingHoursStandardHours>|null
     */
    protected $standardHours;
    /**
     * 
     *
     * @return list<OperatingHoursStandardHours>|null
     */
    public function getStandardHours() : ?array
    {
        return $this->standardHours;
    }
    /**
     * 
     *
     * @param list<OperatingHoursStandardHours>|null $standardHours
     *
     * @return self
     */
    public function setStandardHours(?array $standardHours) : self
    {
        $this->initialized['standardHours'] = true;
        $this->standardHours = $standardHours;
        return $this;
    }
}