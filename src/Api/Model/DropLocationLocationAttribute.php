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
     * 
     *
     * @var LocationAttributeOptionType
     */
    protected $optionType;
    /**
    * Option code is a container that contains the information of a particular type of Location or retail location or additional service or program type that the drop location contains.
    
    If the OptionType is Location or Retail Location Type there will be one code since each location has only one location type or retail location type.
    
    If the Option type is additional services or program types there can be one or more option codes.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<LocationAttributeOptionCode>
    */
    protected $optionCode;
    /**
     * 
     *
     * @return LocationAttributeOptionType
     */
    public function getOptionType() : LocationAttributeOptionType
    {
        return $this->optionType;
    }
    /**
     * 
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
    * Option code is a container that contains the information of a particular type of Location or retail location or additional service or program type that the drop location contains.
    
    If the OptionType is Location or Retail Location Type there will be one code since each location has only one location type or retail location type.
    
    If the Option type is additional services or program types there can be one or more option codes.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<LocationAttributeOptionCode>
    */
    public function getOptionCode() : array
    {
        return $this->optionCode;
    }
    /**
    * Option code is a container that contains the information of a particular type of Location or retail location or additional service or program type that the drop location contains.
    
    If the OptionType is Location or Retail Location Type there will be one code since each location has only one location type or retail location type.
    
    If the Option type is additional services or program types there can be one or more option codes.
    
    **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<LocationAttributeOptionCode> $optionCode
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