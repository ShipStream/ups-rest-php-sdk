<?php

namespace ShipStream\Ups\Api\Model;

class SearchResultsAvailableLocationAttributes extends \ArrayObject
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
     * OptionType is a container that indicates the type of the location attribute that are available. For example if the Option Type is RetailLocation the list of all available retail locations will be returned in 1 or many corresponding OptionCodes.
     *
     * @var AvailableLocationAttributesOptionType|null
     */
    protected $optionType;
    /**
     * Option code is a container that contains the information of a particular retail location type or additional service or program type that is available currently. One or more of this container will be returned to give all the available codes for Retail Type or Additional Services or Program Type.
     *
     * @var AvailableLocationAttributesOptionCode|null
     */
    protected $optionCode;
    /**
     * OptionType is a container that indicates the type of the location attribute that are available. For example if the Option Type is RetailLocation the list of all available retail locations will be returned in 1 or many corresponding OptionCodes.
     *
     * @return AvailableLocationAttributesOptionType|null
     */
    public function getOptionType() : ?AvailableLocationAttributesOptionType
    {
        return $this->optionType;
    }
    /**
     * OptionType is a container that indicates the type of the location attribute that are available. For example if the Option Type is RetailLocation the list of all available retail locations will be returned in 1 or many corresponding OptionCodes.
     *
     * @param AvailableLocationAttributesOptionType|null $optionType
     *
     * @return self
     */
    public function setOptionType(?AvailableLocationAttributesOptionType $optionType) : self
    {
        $this->initialized['optionType'] = true;
        $this->optionType = $optionType;
        return $this;
    }
    /**
     * Option code is a container that contains the information of a particular retail location type or additional service or program type that is available currently. One or more of this container will be returned to give all the available codes for Retail Type or Additional Services or Program Type.
     *
     * @return AvailableLocationAttributesOptionCode|null
     */
    public function getOptionCode() : ?AvailableLocationAttributesOptionCode
    {
        return $this->optionCode;
    }
    /**
     * Option code is a container that contains the information of a particular retail location type or additional service or program type that is available currently. One or more of this container will be returned to give all the available codes for Retail Type or Additional Services or Program Type.
     *
     * @param AvailableLocationAttributesOptionCode|null $optionCode
     *
     * @return self
     */
    public function setOptionCode(?AvailableLocationAttributesOptionCode $optionCode) : self
    {
        $this->initialized['optionCode'] = true;
        $this->optionCode = $optionCode;
        return $this;
    }
}