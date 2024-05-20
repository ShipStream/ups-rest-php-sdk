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
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<OperatingHoursStandardHours>
     */
    protected $standardHours;
    /**
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<OperatingHoursStandardHours>
     */
    public function getStandardHours() : array
    {
        return $this->standardHours;
    }
    /**
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<OperatingHoursStandardHours> $standardHours
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