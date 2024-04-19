<?php

namespace ShipStream\Ups\Api\Model;

class LocationAttributeOptionCode extends \ArrayObject
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
    * Only applicabe for OptionType = 03 (Additional Services). Valid values:
    - 06 - Non transportation
    - 07 - Transportation
    
    *
    * @var string
    */
    protected $category;
    /**
     * These codes vary by country or territory. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country. Refer to Location Search Option Codes in the Appendix for additional information.
     *
     * @var string
     */
    protected $code;
    /**
    * Description is only applicable for Location and Retail Location. The description for Program types and additional service is not provided with Location detail.
    
    It is only provided when the request is for 8, 24, 40, 56-All available additional services or 16, 24, 48, 56-all available Program types.
    
    *
    * @var string
    */
    protected $description;
    /**
     * Name will indicate the name of any Additional Services/ Program Types depending on the option code. Text will be displayed in the locale selected.
     *
     * @var string
     */
    protected $name;
    /**
     * TransportationPickUpSchedule container contains details of Latest Drop Off time/Pickup Time for the transportation services (Ground/Air/Standard/Express/International) of the location.
     *
     * @var OptionCodeTransportationPickUpSchedule
     */
    protected $transportationPickUpSchedule;
    /**
    * Only applicabe for OptionType = 03 (Additional Services). Valid values:
    - 06 - Non transportation
    - 07 - Transportation
    
    *
    * @return string
    */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
    * Only applicabe for OptionType = 03 (Additional Services). Valid values:
    - 06 - Non transportation
    - 07 - Transportation
    
    *
    * @param string $category
    *
    * @return self
    */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * These codes vary by country or territory. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country. Refer to Location Search Option Codes in the Appendix for additional information.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * These codes vary by country or territory. It is strongly recommended that clients contact UPS to retrieve the primary search indicator and the valid Location Types and Service Level Options for each country. Refer to Location Search Option Codes in the Appendix for additional information.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
    * Description is only applicable for Location and Retail Location. The description for Program types and additional service is not provided with Location detail.
    
    It is only provided when the request is for 8, 24, 40, 56-All available additional services or 16, 24, 48, 56-all available Program types.
    
    *
    * @return string
    */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
    * Description is only applicable for Location and Retail Location. The description for Program types and additional service is not provided with Location detail.
    
    It is only provided when the request is for 8, 24, 40, 56-All available additional services or 16, 24, 48, 56-all available Program types.
    
    *
    * @param string $description
    *
    * @return self
    */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Name will indicate the name of any Additional Services/ Program Types depending on the option code. Text will be displayed in the locale selected.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name will indicate the name of any Additional Services/ Program Types depending on the option code. Text will be displayed in the locale selected.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * TransportationPickUpSchedule container contains details of Latest Drop Off time/Pickup Time for the transportation services (Ground/Air/Standard/Express/International) of the location.
     *
     * @return OptionCodeTransportationPickUpSchedule
     */
    public function getTransportationPickUpSchedule() : OptionCodeTransportationPickUpSchedule
    {
        return $this->transportationPickUpSchedule;
    }
    /**
     * TransportationPickUpSchedule container contains details of Latest Drop Off time/Pickup Time for the transportation services (Ground/Air/Standard/Express/International) of the location.
     *
     * @param OptionCodeTransportationPickUpSchedule $transportationPickUpSchedule
     *
     * @return self
     */
    public function setTransportationPickUpSchedule(OptionCodeTransportationPickUpSchedule $transportationPickUpSchedule) : self
    {
        $this->initialized['transportationPickUpSchedule'] = true;
        $this->transportationPickUpSchedule = $transportationPickUpSchedule;
        return $this;
    }
}