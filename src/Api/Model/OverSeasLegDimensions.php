<?php

namespace ShipStream\Ups\Api\Model;

class OverSeasLegDimensions extends \ArrayObject
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
    * Represents the size as volume.
    
    Volume being required if height, length, width is not specified. 
    If volume is present then height, length, width is ignored.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @var string|null
    */
    protected $volume;
    /**
     * The height of the line item used to determine density based rating.
     *
     * @var string|null
     */
    protected $height;
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
     * UnitOfMeasurement Container.
     *
     * @var DimensionsUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
    * Represents the size as volume.
    
    Volume being required if height, length, width is not specified. 
    If volume is present then height, length, width is ignored.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @return string|null
    */
    public function getVolume() : ?string
    {
        return $this->volume;
    }
    /**
    * Represents the size as volume.
    
    Volume being required if height, length, width is not specified. 
    If volume is present then height, length, width is ignored.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @param string|null $volume
    *
    * @return self
    */
    public function setVolume(?string $volume) : self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
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
}