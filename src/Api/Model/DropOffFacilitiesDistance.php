<?php

namespace ShipStream\Ups\Api\Model;

class DropOffFacilitiesDistance extends \ArrayObject
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
    * Distance from origin address. Distance based on distance UOM in request.
    Numeric value up to 200 and .2� decimal positions  Distance will be retuned for�drop off location search by proximity order.
    *
    * @var string|null
    */
    protected $value;
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @var string|null
    */
    protected $unitOfMeasurement;
    /**
    * Distance from origin address. Distance based on distance UOM in request.
    Numeric value up to 200 and .2� decimal positions  Distance will be retuned for�drop off location search by proximity order.
    *
    * @return string|null
    */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
    * Distance from origin address. Distance based on distance UOM in request.
    Numeric value up to 200 and .2� decimal positions  Distance will be retuned for�drop off location search by proximity order.
    *
    * @param string|null $value
    *
    * @return self
    */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @return string|null
    */
    public function getUnitOfMeasurement() : ?string
    {
        return $this->unitOfMeasurement;
    }
    /**
    * Unit Of Measure.
    Example: MI or KM
    *
    * @param string|null $unitOfMeasurement
    *
    * @return self
    */
    public function setUnitOfMeasurement(?string $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}