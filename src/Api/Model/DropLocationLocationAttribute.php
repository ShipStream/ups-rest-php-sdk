<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationLocationAttribute extends \ArrayObject
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
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @var LocationAttributeOptionType
    */
    protected $optionType;
    /**
     * 
     *
     * @var LocationAttributeOptionCode[]
     */
    protected $optionCode;
    /**
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @return LocationAttributeOptionType
    */
    public function getOptionType() : LocationAttributeOptionType
    {
        return $this->optionType;
    }
    /**
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @param LocationAttributeOptionType $optionType
    *
    * @return self
    */
    public function setOptionType(LocationAttributeOptionType $optionType) : self
    {
        $this->initialized['optionType'] = true;
        $this->optionType = $optionType;
        return $this;
    }
    /**
     * 
     *
     * @return LocationAttributeOptionCode[]
     */
    public function getOptionCode() : array
    {
        return $this->optionCode;
    }
    /**
     * 
     *
     * @param LocationAttributeOptionCode[] $optionCode
     *
     * @return self
     */
    public function setOptionCode(array $optionCode) : self
    {
        $this->initialized['optionCode'] = true;
        $this->optionCode = $optionCode;
        return $this;
    }
}