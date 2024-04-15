<?php

namespace ShipStream\Ups\Api\Model;

class CN22ContentWeightUnitOfMeasurement extends \ArrayObject
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
     * Required if weight is provided, valid values are lbs. and ozs.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Short description for UnitOfMeasurement.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Required if weight is provided, valid values are lbs. and ozs.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Required if weight is provided, valid values are lbs. and ozs.
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
     * Short description for UnitOfMeasurement.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Short description for UnitOfMeasurement.
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