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
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
     *
     * @var string
     */
    protected $weight;
    /**
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
     *
     * @return string
     */
    public function getUnitOfMeasurement() : string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
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
    /**
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * The weight units of measurement. Valid values: 'LBS' - pounds. 'KGS' - kilograms.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}