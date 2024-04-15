<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationLocationAttribute extends \ArrayObject
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
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @var LocationAttributeOptionType|null
    */
    protected $optionType;
    /**
     * 
     *
     * @var list<LocationAttributeOptionCode>|null
     */
    protected $optionCode;
    /**
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @return LocationAttributeOptionType|null
    */
    public function getOptionType() : ?LocationAttributeOptionType
    {
        return $this->optionType;
    }
    /**
    * OptionType is a container that indicates the type of the location attribute. 
    There are 4 types of attributes. 
    They are: Location, Retail Location, Additional Services and Program Type.
    *
    * @param LocationAttributeOptionType|null $optionType
    *
    * @return self
    */
    public function setOptionType(?LocationAttributeOptionType $optionType) : self
    {
        $this->initialized['optionType'] = true;
        $this->optionType = $optionType;
        return $this;
    }
    /**
     * 
     *
     * @return list<LocationAttributeOptionCode>|null
     */
    public function getOptionCode() : ?array
    {
        return $this->optionCode;
    }
    /**
     * 
     *
     * @param list<LocationAttributeOptionCode>|null $optionCode
     *
     * @return self
     */
    public function setOptionCode(?array $optionCode) : self
    {
        $this->initialized['optionCode'] = true;
        $this->optionCode = $optionCode;
        return $this;
    }
}