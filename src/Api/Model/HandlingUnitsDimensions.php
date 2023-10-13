<?php

namespace ShipStream\Ups\Api\Model;

class HandlingUnitsDimensions extends \ArrayObject
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
     * UnitOfMeasurement container.
     *
     * @var HandlingUnitsUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * The length of the line item used to determine dimensional weight.
     *
     * @var string
     */
    protected $length;
    /**
     * The width of the line item used to determine dimensional weight.
     *
     * @var string
     */
    protected $width;
    /**
     * The height of the line item used to determine dimensional weight.
     *
     * @var string
     */
    protected $height;
    /**
     * UnitOfMeasurement container.
     *
     * @return HandlingUnitsUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : HandlingUnitsUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement container.
     *
     * @param HandlingUnitsUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(HandlingUnitsUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * The length of the line item used to determine dimensional weight.
     *
     * @return string
     */
    public function getLength() : string
    {
        return $this->length;
    }
    /**
     * The length of the line item used to determine dimensional weight.
     *
     * @param string $length
     *
     * @return self
     */
    public function setLength(string $length) : self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * The width of the line item used to determine dimensional weight.
     *
     * @return string
     */
    public function getWidth() : string
    {
        return $this->width;
    }
    /**
     * The width of the line item used to determine dimensional weight.
     *
     * @param string $width
     *
     * @return self
     */
    public function setWidth(string $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The height of the line item used to determine dimensional weight.
     *
     * @return string
     */
    public function getHeight() : string
    {
        return $this->height;
    }
    /**
     * The height of the line item used to determine dimensional weight.
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight(string $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}