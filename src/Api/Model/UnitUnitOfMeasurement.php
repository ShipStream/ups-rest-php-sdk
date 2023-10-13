<?php

namespace ShipStream\Ups\Api\Model;

class UnitUnitOfMeasurement extends \ArrayObject
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
     * Code for the Unit of measurement of the commodity units.
     *
     * @var string
     */
    protected $code;
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
     *
     * @var string
     */
    protected $description;
    /**
     * Code for the Unit of measurement of the commodity units.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code for the Unit of measurement of the commodity units.
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
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
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