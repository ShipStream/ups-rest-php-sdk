<?php

namespace ShipStream\Ups\Api\Model;

class HandlingUnitsDimensions extends \ArrayObject
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
     * UnitOfMeasurement Container.
     *
     * @var DimensionsUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * The length of the line item used to determine density rate rating.
     *
     * @var string|null
     */
    protected $length;
    /**
     * The width of the line item used to determine the density based rating.
     *
     * @var string|null
     */
    protected $width;
    /**
     * The height of the line item used to determine density based rating.
     *
     * @var string|null
     */
    protected $height;
    /**
     * UnitOfMeasurement Container.
     *
     * @return DimensionsUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?DimensionsUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param DimensionsUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?DimensionsUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * The length of the line item used to determine density rate rating.
     *
     * @return string|null
     */
    public function getLength() : ?string
    {
        return $this->length;
    }
    /**
     * The length of the line item used to determine density rate rating.
     *
     * @param string|null $length
     *
     * @return self
     */
    public function setLength(?string $length) : self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * The width of the line item used to determine the density based rating.
     *
     * @return string|null
     */
    public function getWidth() : ?string
    {
        return $this->width;
    }
    /**
     * The width of the line item used to determine the density based rating.
     *
     * @param string|null $width
     *
     * @return self
     */
    public function setWidth(?string $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The height of the line item used to determine density based rating.
     *
     * @return string|null
     */
    public function getHeight() : ?string
    {
        return $this->height;
    }
    /**
     * The height of the line item used to determine density based rating.
     *
     * @param string|null $height
     *
     * @return self
     */
    public function setHeight(?string $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}