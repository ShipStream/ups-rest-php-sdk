<?php

namespace ShipStream\Ups\Api\Model;

class PalletInformationDimensions extends \ArrayObject
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
     * @var DimensionsUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Dimension length of pallet.
     *
     * @var string
     */
    protected $length;
    /**
     * Dimension width of pallet.
     *
     * @var string
     */
    protected $width;
    /**
     * Dimension height of pallet.
     *
     * @var string
     */
    protected $height;
    /**
     * UnitOfMeasurement Container.
     *
     * @return DimensionsUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : DimensionsUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param DimensionsUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(DimensionsUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Dimension length of pallet.
     *
     * @return string
     */
    public function getLength() : string
    {
        return $this->length;
    }
    /**
     * Dimension length of pallet.
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
     * Dimension width of pallet.
     *
     * @return string
     */
    public function getWidth() : string
    {
        return $this->width;
    }
    /**
     * Dimension width of pallet.
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
     * Dimension height of pallet.
     *
     * @return string
     */
    public function getHeight() : string
    {
        return $this->height;
    }
    /**
     * Dimension height of pallet.
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