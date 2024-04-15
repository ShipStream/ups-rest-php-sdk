<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationDistance extends \ArrayObject
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
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The unit of measurement the user will see for the distance is based on the user input provided in the search request.
     *
     * @var DistanceUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The straight line distance from the origin to the UPS location. Distance value may include one decimal and followed by one decimal place.
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
     * The unit of measurement the user will see for the distance is based on the user input provided in the search request.
     *
     * @return DistanceUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?DistanceUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * The unit of measurement the user will see for the distance is based on the user input provided in the search request.
     *
     * @param DistanceUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?DistanceUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}