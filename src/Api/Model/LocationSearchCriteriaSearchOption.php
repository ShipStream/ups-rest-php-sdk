<?php

namespace ShipStream\Ups\Api\Model;

class LocationSearchCriteriaSearchOption extends \ArrayObject
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
    * OptionType is a container that indicates the type of search for locations. There are 5 types of search. They are search by: Location, Retail Location, Additional Services, Program Type, and a Service Level Option. 
    If search criteria by Location or Retail Location is not provided the default search of The UPS Store, UPS Center, UPS Drop Box, and Authorized Shipping Outlet location types will be performed.
    *
    * @var SearchOptionOptionType
    */
    protected $optionType;
    /**
     * 
     *
     * @var list<SearchOptionOptionCode>
     */
    protected $optionCode;
    /**
    * The relation container will contain the relation parameter (And/Or) that has to be used among multiple option codes in the location search. 
    
    This is only applicable to option type Additional Services and Program Types. If this container is not present for Additional Services and Program Types, the default relation of And is used.
    *
    * @var SearchOptionRelation
    */
    protected $relation;
    /**
    * OptionType is a container that indicates the type of search for locations. There are 5 types of search. They are search by: Location, Retail Location, Additional Services, Program Type, and a Service Level Option. 
    If search criteria by Location or Retail Location is not provided the default search of The UPS Store, UPS Center, UPS Drop Box, and Authorized Shipping Outlet location types will be performed.
    *
    * @return SearchOptionOptionType
    */
    public function getOptionType() : SearchOptionOptionType
    {
        return $this->optionType;
    }
    /**
    * OptionType is a container that indicates the type of search for locations. There are 5 types of search. They are search by: Location, Retail Location, Additional Services, Program Type, and a Service Level Option. 
    If search criteria by Location or Retail Location is not provided the default search of The UPS Store, UPS Center, UPS Drop Box, and Authorized Shipping Outlet location types will be performed.
    *
    * @param SearchOptionOptionType $optionType
    *
    * @return self
    */
    public function setOptionType(SearchOptionOptionType $optionType) : self
    {
        $this->initialized['optionType'] = true;
        $this->optionType = $optionType;
        return $this;
    }
    /**
     * 
     *
     * @return list<SearchOptionOptionCode>
     */
    public function getOptionCode() : array
    {
        return $this->optionCode;
    }
    /**
     * 
     *
     * @param list<SearchOptionOptionCode> $optionCode
     *
     * @return self
     */
    public function setOptionCode(array $optionCode) : self
    {
        $this->initialized['optionCode'] = true;
        $this->optionCode = $optionCode;
        return $this;
    }
    /**
    * The relation container will contain the relation parameter (And/Or) that has to be used among multiple option codes in the location search. 
    
    This is only applicable to option type Additional Services and Program Types. If this container is not present for Additional Services and Program Types, the default relation of And is used.
    *
    * @return SearchOptionRelation
    */
    public function getRelation() : SearchOptionRelation
    {
        return $this->relation;
    }
    /**
    * The relation container will contain the relation parameter (And/Or) that has to be used among multiple option codes in the location search. 
    
    This is only applicable to option type Additional Services and Program Types. If this container is not present for Additional Services and Program Types, the default relation of And is used.
    *
    * @param SearchOptionRelation $relation
    *
    * @return self
    */
    public function setRelation(SearchOptionRelation $relation) : self
    {
        $this->initialized['relation'] = true;
        $this->relation = $relation;
        return $this;
    }
}