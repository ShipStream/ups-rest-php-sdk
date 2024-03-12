<?php

namespace ShipStream\Ups\Api\Model;

class CommodityDimensions extends \ArrayObject
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
    * The length of the line item used to determine dimensional weight.
    Valid characters: 0-9 and "." (Decimal point). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @var string
    */
    protected $length;
    /**
    * The width of the line item used to determine dimensional weight. 
    Format: See Length Description.
    *
    * @var string
    */
    protected $width;
    /**
    * The height of the line item used to determine dimensional weight.
    Format: See Length Description.
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
    * The length of the line item used to determine dimensional weight.
    Valid characters: 0-9 and "." (Decimal point). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @return string
    */
    public function getLength() : string
    {
        return $this->length;
    }
    /**
    * The length of the line item used to determine dimensional weight.
    Valid characters: 0-9 and "." (Decimal point). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
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
    Format: See Length Description.
    *
    * @return string
    */
    public function getWidth() : string
    {
        return $this->width;
    }
    /**
    * The width of the line item used to determine dimensional weight. 
    Format: See Length Description.
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
    Format: See Length Description.
    *
    * @return string
    */
    public function getHeight() : string
    {
        return $this->height;
    }
    /**
    * The height of the line item used to determine dimensional weight.
    Format: See Length Description.
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