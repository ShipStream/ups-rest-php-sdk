<?php

namespace ShipStream\Ups\Api\Model;

class QuantityUnitOfMeasure extends \ArrayObject
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
     * Valid values are: lb or kg.
     *
     * @var string
     */
    protected $unitCode;
    /**
     * Short description of the unit of measurement.
     *
     * @var string
     */
    protected $unitDescription;
    /**
     * Valid values are: lb or kg.
     *
     * @return string
     */
    public function getUnitCode() : string
    {
        return $this->unitCode;
    }
    /**
     * Valid values are: lb or kg.
     *
     * @param string $unitCode
     *
     * @return self
     */
    public function setUnitCode(string $unitCode) : self
    {
        $this->initialized['unitCode'] = true;
        $this->unitCode = $unitCode;
        return $this;
    }
    /**
     * Short description of the unit of measurement.
     *
     * @return string
     */
    public function getUnitDescription() : string
    {
        return $this->unitDescription;
    }
    /**
     * Short description of the unit of measurement.
     *
     * @param string $unitDescription
     *
     * @return self
     */
    public function setUnitDescription(string $unitDescription) : self
    {
        $this->initialized['unitDescription'] = true;
        $this->unitDescription = $unitDescription;
        return $this;
    }
}