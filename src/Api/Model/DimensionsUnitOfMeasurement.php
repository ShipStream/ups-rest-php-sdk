<?php

namespace ShipStream\Ups\Api\Model;

class DimensionsUnitOfMeasurement extends \ArrayObject
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
     * The code associated with the unit of measure for the billable weight of a shipment.
     *
     * @var string
     */
    protected $code;
    /**
     * The description for the billable weight associated with the shipment.
     *
     * @var string
     */
    protected $description;
    /**
     * The code associated with the unit of measure for the billable weight of a shipment.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The code associated with the unit of measure for the billable weight of a shipment.
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
     * The description for the billable weight associated with the shipment.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description for the billable weight associated with the shipment.
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