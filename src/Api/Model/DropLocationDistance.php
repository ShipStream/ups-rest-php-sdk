<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationDistance extends \ArrayObject
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
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
     *
     * @var string
     */
    protected $value;
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @var string
    */
    protected $unitOfMeasurement;
    /**
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @return string
    */
    public function getUnitOfMeasurement() : string
    {
        return $this->unitOfMeasurement;
    }
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @param string $unitOfMeasurement
    *
    * @return self
    */
    public function setUnitOfMeasurement(string $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}