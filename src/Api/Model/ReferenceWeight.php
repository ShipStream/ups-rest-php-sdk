<?php

namespace ShipStream\Ups\Api\Model;

class ReferenceWeight extends \ArrayObject
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
     * Reference Weight UnitOfMeasurement Container.
     *
     * @var WeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
    * The value for the total weight associated with this reference.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @var string
    */
    protected $value;
    /**
     * Reference Weight UnitOfMeasurement Container.
     *
     * @return WeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : WeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Reference Weight UnitOfMeasurement Container.
     *
     * @param WeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(WeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
    * The value for the total weight associated with this reference.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @return string
    */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
    * The value for the total weight associated with this reference.
    
    Valid characters: 0-9 and "." (Decimal). 
    Maximum of 2 digits after the decimal. 
    Maximum field length: 16 characters. The decimal ".", does not count as a character.
    Examples:
    ##############.##
    ###############.#
    ################
    *
    * @param string $value
    *
    * @return self
    */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}