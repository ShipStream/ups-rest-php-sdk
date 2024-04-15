<?php

namespace ShipStream\Ups\Api\Model;

class Weight extends \ArrayObject
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
     * @var string|null
     */
    protected $unitOfMeasurement;
    /**
     * 
     *
     * @var string|null
     */
    protected $weight;
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitOfMeasurement() : ?string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}