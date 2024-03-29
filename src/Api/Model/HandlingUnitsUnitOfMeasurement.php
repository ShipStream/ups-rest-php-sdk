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
     * Code associated with Unit of Measurement for the Adjusted height. Valid value: IN
     *
     * @var string
     */
    protected $code;
    /**
     * Description for UnitOfMeasurement for the adjusted height.
     *
     * @var string
     */
    protected $description;
    /**
     * Code associated with Unit of Measurement for the Adjusted height. Valid value: IN
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code associated with Unit of Measurement for the Adjusted height. Valid value: IN
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
     * Description for UnitOfMeasurement for the adjusted height.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for UnitOfMeasurement for the adjusted height.
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