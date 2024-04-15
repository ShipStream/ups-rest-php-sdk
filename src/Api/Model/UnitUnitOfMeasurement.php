<?php

namespace ShipStream\Ups\Api\Model;

class UnitUnitOfMeasurement extends \ArrayObject
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
     * Code for the Unit of measurement of the commodity units.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code for the Unit of measurement of the commodity units.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code for the Unit of measurement of the commodity units.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}