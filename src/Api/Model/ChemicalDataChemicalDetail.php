<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalDataChemicalDetail extends \ArrayObject
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
    * The Regulatory set associated with every regulated shipment.   Possible values are ADR, 49CFR, IATA. It will be returned if applies for a given chemical record.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada,  
    IATA= Worldwide Air movement.
    *
    * @var string
    */
    protected $regulationSet;
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  It will be returned if applies for a given chemical record.
     *
     * @var string
     */
    protected $iDNumber;
    /**
     * Free form text containing the full name that are used to describe a regulated chemical record.  It will be returned if applies for a given chemical record.
     *
     * @var string
     */
    protected $hazardousMaterialsDescription;
    /**
     * This is the hazard class associated to the specified commodity.  It will be returned if applies for a given chemical record.
     *
     * @var string
     */
    protected $classDivisionNumber;
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  It will be returned if applies for a given chemical record.
     *
     * @var string
     */
    protected $subRiskClass;
    /**
     * This is the packing group category associated to the specified commodity. This code represents the potential degree of danger represented by a regulated commodity being transported.  It will be returned if applies for a given chemical record.
     *
     * @var string
     */
    protected $packagingGroupType;
    /**
    * Indicates whether or not related entity requires special permit in order to transport the chemical.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    AIR
    GND
    BOTH
    *
    * @var string
    */
    protected $specialPermit;
    /**
    * Indicates whether TechnicalName is required or not.  It will be returned if applies for a given chemical record.
    
    Y = TechnicalName is required.
    N = TechnicalName is not required.
    *
    * @var string
    */
    protected $technicalNameRequiredIndicator;
    /**
    * Indicates whether or not additional text is required for the shipping papers for the related entity.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    N = No, additional information for the shipping papers are not required.
    Y = Yes, additional information for the shipping papers are required.
    *
    * @var string
    */
    protected $additionalShippingInformationRequiredIndicator;
    /**
    * Defines what is restricted to pass through a tunnel.  EXAMPLES OF VALUES:
    (B),(D),(E),(B/D),(B/E),(C,D),(C/E),(D/E),Blank
    *
    * @var string
    */
    protected $tunnelRestrictionCode;
    /**
    * Code representing a category of transportation, assigned by a regulation set for each regulated commodity. Each value of this category is associated with a multiplier that is used to calculate a value.This value is then used to determine the placarding to be place on the vehicle or container that holds the related regulated commodity  EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @var string
    */
    protected $transportCategory;
    /**
    * The quantity that represents a multiplication factor used to calculate a value to determine the placarding to be place on the vehicle or container that holds the related regulated commodity. This factor is associated with a code value represented by Regulated Commodity Transport Category Code.   EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @var string
    */
    protected $transportMultiplierQuantity;
    /**
    * ChannelTunnelAcceptedIndicator indicates if the chemical is accepted through channel tunnel or not  Y= Accepted through channel tunnel
    N=Not accepted through channel tunnel
    *
    * @var string
    */
    protected $channelTunnelAcceptedIndicator;
    /**
    * A set of chemical records in HMMS that correspond to a sub-set of chemicals for a regulation set, or the entire set of chemicals for a regulation set  EXAMPLES OF VALUES:
    FREIGHT
    TDG
    IATA US DOMESTIC AIR
    49CFR
    ADR
    IATA INTERNATIONAL AIR
    *
    * @var string
    */
    protected $chemicalType;
    /**
    * CAToUSShipmentAllowedIndicator indicates whether this checmical is allowed from CA to US
    Applicable only for TDG shipments  Y = Permitted from CA to US
    N = Not Permitted from CA to US
    *
    * @var string
    */
    protected $cAToUSShipmentAllowedIndicator;
    /**
    * The Regulatory set associated with every regulated shipment.   Possible values are ADR, 49CFR, IATA. It will be returned if applies for a given chemical record.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada,  
    IATA= Worldwide Air movement.
    *
    * @return string
    */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment.   Possible values are ADR, 49CFR, IATA. It will be returned if applies for a given chemical record.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada,  
    IATA= Worldwide Air movement.
    *
    * @param string $regulationSet
    *
    * @return self
    */
    public function setRegulationSet(string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  It will be returned if applies for a given chemical record.
     *
     * @return string
     */
    public function getIDNumber() : string
    {
        return $this->iDNumber;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  It will be returned if applies for a given chemical record.
     *
     * @param string $iDNumber
     *
     * @return self
     */
    public function setIDNumber(string $iDNumber) : self
    {
        $this->initialized['iDNumber'] = true;
        $this->iDNumber = $iDNumber;
        return $this;
    }
    /**
     * Free form text containing the full name that are used to describe a regulated chemical record.  It will be returned if applies for a given chemical record.
     *
     * @return string
     */
    public function getHazardousMaterialsDescription() : string
    {
        return $this->hazardousMaterialsDescription;
    }
    /**
     * Free form text containing the full name that are used to describe a regulated chemical record.  It will be returned if applies for a given chemical record.
     *
     * @param string $hazardousMaterialsDescription
     *
     * @return self
     */
    public function setHazardousMaterialsDescription(string $hazardousMaterialsDescription) : self
    {
        $this->initialized['hazardousMaterialsDescription'] = true;
        $this->hazardousMaterialsDescription = $hazardousMaterialsDescription;
        return $this;
    }
    /**
     * This is the hazard class associated to the specified commodity.  It will be returned if applies for a given chemical record.
     *
     * @return string
     */
    public function getClassDivisionNumber() : string
    {
        return $this->classDivisionNumber;
    }
    /**
     * This is the hazard class associated to the specified commodity.  It will be returned if applies for a given chemical record.
     *
     * @param string $classDivisionNumber
     *
     * @return self
     */
    public function setClassDivisionNumber(string $classDivisionNumber) : self
    {
        $this->initialized['classDivisionNumber'] = true;
        $this->classDivisionNumber = $classDivisionNumber;
        return $this;
    }
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  It will be returned if applies for a given chemical record.
     *
     * @return string
     */
    public function getSubRiskClass() : string
    {
        return $this->subRiskClass;
    }
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  It will be returned if applies for a given chemical record.
     *
     * @param string $subRiskClass
     *
     * @return self
     */
    public function setSubRiskClass(string $subRiskClass) : self
    {
        $this->initialized['subRiskClass'] = true;
        $this->subRiskClass = $subRiskClass;
        return $this;
    }
    /**
     * This is the packing group category associated to the specified commodity. This code represents the potential degree of danger represented by a regulated commodity being transported.  It will be returned if applies for a given chemical record.
     *
     * @return string
     */
    public function getPackagingGroupType() : string
    {
        return $this->packagingGroupType;
    }
    /**
     * This is the packing group category associated to the specified commodity. This code represents the potential degree of danger represented by a regulated commodity being transported.  It will be returned if applies for a given chemical record.
     *
     * @param string $packagingGroupType
     *
     * @return self
     */
    public function setPackagingGroupType(string $packagingGroupType) : self
    {
        $this->initialized['packagingGroupType'] = true;
        $this->packagingGroupType = $packagingGroupType;
        return $this;
    }
    /**
    * Indicates whether or not related entity requires special permit in order to transport the chemical.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    AIR
    GND
    BOTH
    *
    * @return string
    */
    public function getSpecialPermit() : string
    {
        return $this->specialPermit;
    }
    /**
    * Indicates whether or not related entity requires special permit in order to transport the chemical.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    AIR
    GND
    BOTH
    *
    * @param string $specialPermit
    *
    * @return self
    */
    public function setSpecialPermit(string $specialPermit) : self
    {
        $this->initialized['specialPermit'] = true;
        $this->specialPermit = $specialPermit;
        return $this;
    }
    /**
    * Indicates whether TechnicalName is required or not.  It will be returned if applies for a given chemical record.
    
    Y = TechnicalName is required.
    N = TechnicalName is not required.
    *
    * @return string
    */
    public function getTechnicalNameRequiredIndicator() : string
    {
        return $this->technicalNameRequiredIndicator;
    }
    /**
    * Indicates whether TechnicalName is required or not.  It will be returned if applies for a given chemical record.
    
    Y = TechnicalName is required.
    N = TechnicalName is not required.
    *
    * @param string $technicalNameRequiredIndicator
    *
    * @return self
    */
    public function setTechnicalNameRequiredIndicator(string $technicalNameRequiredIndicator) : self
    {
        $this->initialized['technicalNameRequiredIndicator'] = true;
        $this->technicalNameRequiredIndicator = $technicalNameRequiredIndicator;
        return $this;
    }
    /**
    * Indicates whether or not additional text is required for the shipping papers for the related entity.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    N = No, additional information for the shipping papers are not required.
    Y = Yes, additional information for the shipping papers are required.
    *
    * @return string
    */
    public function getAdditionalShippingInformationRequiredIndicator() : string
    {
        return $this->additionalShippingInformationRequiredIndicator;
    }
    /**
    * Indicates whether or not additional text is required for the shipping papers for the related entity.   It will be returned if applies for a given chemical record.
    
    Valid values: 
    N = No, additional information for the shipping papers are not required.
    Y = Yes, additional information for the shipping papers are required.
    *
    * @param string $additionalShippingInformationRequiredIndicator
    *
    * @return self
    */
    public function setAdditionalShippingInformationRequiredIndicator(string $additionalShippingInformationRequiredIndicator) : self
    {
        $this->initialized['additionalShippingInformationRequiredIndicator'] = true;
        $this->additionalShippingInformationRequiredIndicator = $additionalShippingInformationRequiredIndicator;
        return $this;
    }
    /**
    * Defines what is restricted to pass through a tunnel.  EXAMPLES OF VALUES:
    (B),(D),(E),(B/D),(B/E),(C,D),(C/E),(D/E),Blank
    *
    * @return string
    */
    public function getTunnelRestrictionCode() : string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
    * Defines what is restricted to pass through a tunnel.  EXAMPLES OF VALUES:
    (B),(D),(E),(B/D),(B/E),(C,D),(C/E),(D/E),Blank
    *
    * @param string $tunnelRestrictionCode
    *
    * @return self
    */
    public function setTunnelRestrictionCode(string $tunnelRestrictionCode) : self
    {
        $this->initialized['tunnelRestrictionCode'] = true;
        $this->tunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
    * Code representing a category of transportation, assigned by a regulation set for each regulated commodity. Each value of this category is associated with a multiplier that is used to calculate a value.This value is then used to determine the placarding to be place on the vehicle or container that holds the related regulated commodity  EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @return string
    */
    public function getTransportCategory() : string
    {
        return $this->transportCategory;
    }
    /**
    * Code representing a category of transportation, assigned by a regulation set for each regulated commodity. Each value of this category is associated with a multiplier that is used to calculate a value.This value is then used to determine the placarding to be place on the vehicle or container that holds the related regulated commodity  EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @param string $transportCategory
    *
    * @return self
    */
    public function setTransportCategory(string $transportCategory) : self
    {
        $this->initialized['transportCategory'] = true;
        $this->transportCategory = $transportCategory;
        return $this;
    }
    /**
    * The quantity that represents a multiplication factor used to calculate a value to determine the placarding to be place on the vehicle or container that holds the related regulated commodity. This factor is associated with a code value represented by Regulated Commodity Transport Category Code.   EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @return string
    */
    public function getTransportMultiplierQuantity() : string
    {
        return $this->transportMultiplierQuantity;
    }
    /**
    * The quantity that represents a multiplication factor used to calculate a value to determine the placarding to be place on the vehicle or container that holds the related regulated commodity. This factor is associated with a code value represented by Regulated Commodity Transport Category Code.   EXAMPLES OF VALUES:
    0 = No multiplier - must use placarding
    1 = Use a multiplier of 50
    2 = Use a multiplier of 3
    3 = Use a multiplier of 1
    4 = Use a multiplier of 0 - do not apply a placard
    *
    * @param string $transportMultiplierQuantity
    *
    * @return self
    */
    public function setTransportMultiplierQuantity(string $transportMultiplierQuantity) : self
    {
        $this->initialized['transportMultiplierQuantity'] = true;
        $this->transportMultiplierQuantity = $transportMultiplierQuantity;
        return $this;
    }
    /**
    * ChannelTunnelAcceptedIndicator indicates if the chemical is accepted through channel tunnel or not  Y= Accepted through channel tunnel
    N=Not accepted through channel tunnel
    *
    * @return string
    */
    public function getChannelTunnelAcceptedIndicator() : string
    {
        return $this->channelTunnelAcceptedIndicator;
    }
    /**
    * ChannelTunnelAcceptedIndicator indicates if the chemical is accepted through channel tunnel or not  Y= Accepted through channel tunnel
    N=Not accepted through channel tunnel
    *
    * @param string $channelTunnelAcceptedIndicator
    *
    * @return self
    */
    public function setChannelTunnelAcceptedIndicator(string $channelTunnelAcceptedIndicator) : self
    {
        $this->initialized['channelTunnelAcceptedIndicator'] = true;
        $this->channelTunnelAcceptedIndicator = $channelTunnelAcceptedIndicator;
        return $this;
    }
    /**
    * A set of chemical records in HMMS that correspond to a sub-set of chemicals for a regulation set, or the entire set of chemicals for a regulation set  EXAMPLES OF VALUES:
    FREIGHT
    TDG
    IATA US DOMESTIC AIR
    49CFR
    ADR
    IATA INTERNATIONAL AIR
    *
    * @return string
    */
    public function getChemicalType() : string
    {
        return $this->chemicalType;
    }
    /**
    * A set of chemical records in HMMS that correspond to a sub-set of chemicals for a regulation set, or the entire set of chemicals for a regulation set  EXAMPLES OF VALUES:
    FREIGHT
    TDG
    IATA US DOMESTIC AIR
    49CFR
    ADR
    IATA INTERNATIONAL AIR
    *
    * @param string $chemicalType
    *
    * @return self
    */
    public function setChemicalType(string $chemicalType) : self
    {
        $this->initialized['chemicalType'] = true;
        $this->chemicalType = $chemicalType;
        return $this;
    }
    /**
    * CAToUSShipmentAllowedIndicator indicates whether this checmical is allowed from CA to US
    Applicable only for TDG shipments  Y = Permitted from CA to US
    N = Not Permitted from CA to US
    *
    * @return string
    */
    public function getCAToUSShipmentAllowedIndicator() : string
    {
        return $this->cAToUSShipmentAllowedIndicator;
    }
    /**
    * CAToUSShipmentAllowedIndicator indicates whether this checmical is allowed from CA to US
    Applicable only for TDG shipments  Y = Permitted from CA to US
    N = Not Permitted from CA to US
    *
    * @param string $cAToUSShipmentAllowedIndicator
    *
    * @return self
    */
    public function setCAToUSShipmentAllowedIndicator(string $cAToUSShipmentAllowedIndicator) : self
    {
        $this->initialized['cAToUSShipmentAllowedIndicator'] = true;
        $this->cAToUSShipmentAllowedIndicator = $cAToUSShipmentAllowedIndicator;
        return $this;
    }
}