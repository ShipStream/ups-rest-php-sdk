<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentTotalWeightUnitOfMeasurement extends \ArrayObject
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
     * The code associated with the unit of measure for the billable weight of a package.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The Description for the Unit Of Measurement.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The code associated with the unit of measure for the billable weight of a package.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The code associated with the unit of measure for the billable weight of a package.
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
     * The Description for the Unit Of Measurement.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The Description for the Unit Of Measurement.
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