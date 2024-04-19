<?php

namespace ShipStream\Ups\Api\Model;

class HandlingUnitsUnitOfMeasurement extends \ArrayObject
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
     * Code for UnitOfMeasurement for the line item dimension. Valid value is IN
     *
     * @var string
     */
    protected $code;
    /**
     * Description for UnitOfMeasurement for the line item dimension.
     *
     * @var string
     */
    protected $description;
    /**
     * Code for UnitOfMeasurement for the line item dimension. Valid value is IN
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code for UnitOfMeasurement for the line item dimension. Valid value is IN
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description for UnitOfMeasurement for the line item dimension.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for UnitOfMeasurement for the line item dimension.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}