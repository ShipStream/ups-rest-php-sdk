<?php

namespace ShipStream\Ups\Api\Model;

class PackageChemicalRecord extends \ArrayObject
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
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered. Any other value will be interpreted as "Non Reportable" quantity.
     *
     * @var string
     */
    protected $chemicalRecordReportableQuantity;
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is "LQ" or "FR"
     *
     * @var string
     */
    protected $chemicalRecordClassDivisionNumber;
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one, separate each with a comma.)
     *
     * @var string
     */
    protected $chemicalRecordSubRiskClass;
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @var string
     */
    protected $chemicalRecordIDNumber;
    /**
     * This is the packing group category associated to the specified commodity.  Must be shown in Roman Numerals.  Valid values are: I, II, III and blank.
     *
     * @var string
     */
    protected $chemicalRecordPackagingGroupType;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @var string
     */
    protected $chemicalRecordQuantity;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @var string
     */
    protected $chemicalRecordUOM;
    /**
     * The packing instructions related to the chemical record.
     *
     * @var string
     */
    protected $chemicalRecordPackagingInstructionCode;
    /**
    * 24 Hour Emergency Phone Number of the shipper. 
    
    Valid values for this field are (0) through (9) with trailing blanks. 
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number. The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT" The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    *
    * @var string
    */
    protected $chemicalRecordEmergencyPhone;
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @var string
     */
    protected $chemicalRecordEmergencyContact;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @var string
     */
    protected $chemicalRecordProperShippingName;
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @var string
     */
    protected $chemicalRecordTechnicalName;
    /**
     * Additional remarks or special provision information.
     *
     * @var string
     */
    protected $chemicalRecordAdditionalDescription;
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @var string
     */
    protected $chemicalRecordPackagingType;
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @var string
     */
    protected $chemicalRecordHazardLabelRequired;
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @var string
     */
    protected $chemicalRecordPackagingTypeQuantity;
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @var string
     */
    protected $chemicalRecordCommodityRegulatedLevelCode;
    /**
     * Transport Category.   Valid values are 0 to 4.
     *
     * @var string
     */
    protected $chemicalRecordTransportCategory;
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @var string
     */
    protected $chemicalRecordTunnelRestrictionCode;
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @var string
     */
    protected $chemicalRecordQValue;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @var string
     */
    protected $chemicalRecordOverPackedIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @var string
     */
    protected $chemicalRecordAllPackedInOneIndicator;
    /**
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered. Any other value will be interpreted as "Non Reportable" quantity.
     *
     * @return string
     */
    public function getChemicalRecordReportableQuantity() : string
    {
        return $this->chemicalRecordReportableQuantity;
    }
    /**
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered. Any other value will be interpreted as "Non Reportable" quantity.
     *
     * @param string $chemicalRecordReportableQuantity
     *
     * @return self
     */
    public function setChemicalRecordReportableQuantity(string $chemicalRecordReportableQuantity) : self
    {
        $this->initialized['chemicalRecordReportableQuantity'] = true;
        $this->chemicalRecordReportableQuantity = $chemicalRecordReportableQuantity;
        return $this;
    }
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is "LQ" or "FR"
     *
     * @return string
     */
    public function getChemicalRecordClassDivisionNumber() : string
    {
        return $this->chemicalRecordClassDivisionNumber;
    }
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is "LQ" or "FR"
     *
     * @param string $chemicalRecordClassDivisionNumber
     *
     * @return self
     */
    public function setChemicalRecordClassDivisionNumber(string $chemicalRecordClassDivisionNumber) : self
    {
        $this->initialized['chemicalRecordClassDivisionNumber'] = true;
        $this->chemicalRecordClassDivisionNumber = $chemicalRecordClassDivisionNumber;
        return $this;
    }
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one, separate each with a comma.)
     *
     * @return string
     */
    public function getChemicalRecordSubRiskClass() : string
    {
        return $this->chemicalRecordSubRiskClass;
    }
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one, separate each with a comma.)
     *
     * @param string $chemicalRecordSubRiskClass
     *
     * @return self
     */
    public function setChemicalRecordSubRiskClass(string $chemicalRecordSubRiskClass) : self
    {
        $this->initialized['chemicalRecordSubRiskClass'] = true;
        $this->chemicalRecordSubRiskClass = $chemicalRecordSubRiskClass;
        return $this;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @return string
     */
    public function getChemicalRecordIDNumber() : string
    {
        return $this->chemicalRecordIDNumber;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @param string $chemicalRecordIDNumber
     *
     * @return self
     */
    public function setChemicalRecordIDNumber(string $chemicalRecordIDNumber) : self
    {
        $this->initialized['chemicalRecordIDNumber'] = true;
        $this->chemicalRecordIDNumber = $chemicalRecordIDNumber;
        return $this;
    }
    /**
     * This is the packing group category associated to the specified commodity.  Must be shown in Roman Numerals.  Valid values are: I, II, III and blank.
     *
     * @return string
     */
    public function getChemicalRecordPackagingGroupType() : string
    {
        return $this->chemicalRecordPackagingGroupType;
    }
    /**
     * This is the packing group category associated to the specified commodity.  Must be shown in Roman Numerals.  Valid values are: I, II, III and blank.
     *
     * @param string $chemicalRecordPackagingGroupType
     *
     * @return self
     */
    public function setChemicalRecordPackagingGroupType(string $chemicalRecordPackagingGroupType) : self
    {
        $this->initialized['chemicalRecordPackagingGroupType'] = true;
        $this->chemicalRecordPackagingGroupType = $chemicalRecordPackagingGroupType;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @return string
     */
    public function getChemicalRecordQuantity() : string
    {
        return $this->chemicalRecordQuantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @param string $chemicalRecordQuantity
     *
     * @return self
     */
    public function setChemicalRecordQuantity(string $chemicalRecordQuantity) : self
    {
        $this->initialized['chemicalRecordQuantity'] = true;
        $this->chemicalRecordQuantity = $chemicalRecordQuantity;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @return string
     */
    public function getChemicalRecordUOM() : string
    {
        return $this->chemicalRecordUOM;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @param string $chemicalRecordUOM
     *
     * @return self
     */
    public function setChemicalRecordUOM(string $chemicalRecordUOM) : self
    {
        $this->initialized['chemicalRecordUOM'] = true;
        $this->chemicalRecordUOM = $chemicalRecordUOM;
        return $this;
    }
    /**
     * The packing instructions related to the chemical record.
     *
     * @return string
     */
    public function getChemicalRecordPackagingInstructionCode() : string
    {
        return $this->chemicalRecordPackagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record.
     *
     * @param string $chemicalRecordPackagingInstructionCode
     *
     * @return self
     */
    public function setChemicalRecordPackagingInstructionCode(string $chemicalRecordPackagingInstructionCode) : self
    {
        $this->initialized['chemicalRecordPackagingInstructionCode'] = true;
        $this->chemicalRecordPackagingInstructionCode = $chemicalRecordPackagingInstructionCode;
        return $this;
    }
    /**
    * 24 Hour Emergency Phone Number of the shipper. 
    
    Valid values for this field are (0) through (9) with trailing blanks. 
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number. The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT" The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    *
    * @return string
    */
    public function getChemicalRecordEmergencyPhone() : string
    {
        return $this->chemicalRecordEmergencyPhone;
    }
    /**
    * 24 Hour Emergency Phone Number of the shipper. 
    
    Valid values for this field are (0) through (9) with trailing blanks. 
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number. The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT" The following are restricted in the phone number 
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    *
    * @param string $chemicalRecordEmergencyPhone
    *
    * @return self
    */
    public function setChemicalRecordEmergencyPhone(string $chemicalRecordEmergencyPhone) : self
    {
        $this->initialized['chemicalRecordEmergencyPhone'] = true;
        $this->chemicalRecordEmergencyPhone = $chemicalRecordEmergencyPhone;
        return $this;
    }
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @return string
     */
    public function getChemicalRecordEmergencyContact() : string
    {
        return $this->chemicalRecordEmergencyContact;
    }
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @param string $chemicalRecordEmergencyContact
     *
     * @return self
     */
    public function setChemicalRecordEmergencyContact(string $chemicalRecordEmergencyContact) : self
    {
        $this->initialized['chemicalRecordEmergencyContact'] = true;
        $this->chemicalRecordEmergencyContact = $chemicalRecordEmergencyContact;
        return $this;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @return string
     */
    public function getChemicalRecordProperShippingName() : string
    {
        return $this->chemicalRecordProperShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @param string $chemicalRecordProperShippingName
     *
     * @return self
     */
    public function setChemicalRecordProperShippingName(string $chemicalRecordProperShippingName) : self
    {
        $this->initialized['chemicalRecordProperShippingName'] = true;
        $this->chemicalRecordProperShippingName = $chemicalRecordProperShippingName;
        return $this;
    }
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @return string
     */
    public function getChemicalRecordTechnicalName() : string
    {
        return $this->chemicalRecordTechnicalName;
    }
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @param string $chemicalRecordTechnicalName
     *
     * @return self
     */
    public function setChemicalRecordTechnicalName(string $chemicalRecordTechnicalName) : self
    {
        $this->initialized['chemicalRecordTechnicalName'] = true;
        $this->chemicalRecordTechnicalName = $chemicalRecordTechnicalName;
        return $this;
    }
    /**
     * Additional remarks or special provision information.
     *
     * @return string
     */
    public function getChemicalRecordAdditionalDescription() : string
    {
        return $this->chemicalRecordAdditionalDescription;
    }
    /**
     * Additional remarks or special provision information.
     *
     * @param string $chemicalRecordAdditionalDescription
     *
     * @return self
     */
    public function setChemicalRecordAdditionalDescription(string $chemicalRecordAdditionalDescription) : self
    {
        $this->initialized['chemicalRecordAdditionalDescription'] = true;
        $this->chemicalRecordAdditionalDescription = $chemicalRecordAdditionalDescription;
        return $this;
    }
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @return string
     */
    public function getChemicalRecordPackagingType() : string
    {
        return $this->chemicalRecordPackagingType;
    }
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @param string $chemicalRecordPackagingType
     *
     * @return self
     */
    public function setChemicalRecordPackagingType(string $chemicalRecordPackagingType) : self
    {
        $this->initialized['chemicalRecordPackagingType'] = true;
        $this->chemicalRecordPackagingType = $chemicalRecordPackagingType;
        return $this;
    }
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @return string
     */
    public function getChemicalRecordHazardLabelRequired() : string
    {
        return $this->chemicalRecordHazardLabelRequired;
    }
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @param string $chemicalRecordHazardLabelRequired
     *
     * @return self
     */
    public function setChemicalRecordHazardLabelRequired(string $chemicalRecordHazardLabelRequired) : self
    {
        $this->initialized['chemicalRecordHazardLabelRequired'] = true;
        $this->chemicalRecordHazardLabelRequired = $chemicalRecordHazardLabelRequired;
        return $this;
    }
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @return string
     */
    public function getChemicalRecordPackagingTypeQuantity() : string
    {
        return $this->chemicalRecordPackagingTypeQuantity;
    }
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @param string $chemicalRecordPackagingTypeQuantity
     *
     * @return self
     */
    public function setChemicalRecordPackagingTypeQuantity(string $chemicalRecordPackagingTypeQuantity) : self
    {
        $this->initialized['chemicalRecordPackagingTypeQuantity'] = true;
        $this->chemicalRecordPackagingTypeQuantity = $chemicalRecordPackagingTypeQuantity;
        return $this;
    }
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @return string
     */
    public function getChemicalRecordCommodityRegulatedLevelCode() : string
    {
        return $this->chemicalRecordCommodityRegulatedLevelCode;
    }
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @param string $chemicalRecordCommodityRegulatedLevelCode
     *
     * @return self
     */
    public function setChemicalRecordCommodityRegulatedLevelCode(string $chemicalRecordCommodityRegulatedLevelCode) : self
    {
        $this->initialized['chemicalRecordCommodityRegulatedLevelCode'] = true;
        $this->chemicalRecordCommodityRegulatedLevelCode = $chemicalRecordCommodityRegulatedLevelCode;
        return $this;
    }
    /**
     * Transport Category.   Valid values are 0 to 4.
     *
     * @return string
     */
    public function getChemicalRecordTransportCategory() : string
    {
        return $this->chemicalRecordTransportCategory;
    }
    /**
     * Transport Category.   Valid values are 0 to 4.
     *
     * @param string $chemicalRecordTransportCategory
     *
     * @return self
     */
    public function setChemicalRecordTransportCategory(string $chemicalRecordTransportCategory) : self
    {
        $this->initialized['chemicalRecordTransportCategory'] = true;
        $this->chemicalRecordTransportCategory = $chemicalRecordTransportCategory;
        return $this;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @return string
     */
    public function getChemicalRecordTunnelRestrictionCode() : string
    {
        return $this->chemicalRecordTunnelRestrictionCode;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @param string $chemicalRecordTunnelRestrictionCode
     *
     * @return self
     */
    public function setChemicalRecordTunnelRestrictionCode(string $chemicalRecordTunnelRestrictionCode) : self
    {
        $this->initialized['chemicalRecordTunnelRestrictionCode'] = true;
        $this->chemicalRecordTunnelRestrictionCode = $chemicalRecordTunnelRestrictionCode;
        return $this;
    }
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return string
     */
    public function getChemicalRecordQValue() : string
    {
        return $this->chemicalRecordQValue;
    }
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @param string $chemicalRecordQValue
     *
     * @return self
     */
    public function setChemicalRecordQValue(string $chemicalRecordQValue) : self
    {
        $this->initialized['chemicalRecordQValue'] = true;
        $this->chemicalRecordQValue = $chemicalRecordQValue;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @return string
     */
    public function getChemicalRecordOverPackedIndicator() : string
    {
        return $this->chemicalRecordOverPackedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @param string $chemicalRecordOverPackedIndicator
     *
     * @return self
     */
    public function setChemicalRecordOverPackedIndicator(string $chemicalRecordOverPackedIndicator) : self
    {
        $this->initialized['chemicalRecordOverPackedIndicator'] = true;
        $this->chemicalRecordOverPackedIndicator = $chemicalRecordOverPackedIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @return string
     */
    public function getChemicalRecordAllPackedInOneIndicator() : string
    {
        return $this->chemicalRecordAllPackedInOneIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @param string $chemicalRecordAllPackedInOneIndicator
     *
     * @return self
     */
    public function setChemicalRecordAllPackedInOneIndicator(string $chemicalRecordAllPackedInOneIndicator) : self
    {
        $this->initialized['chemicalRecordAllPackedInOneIndicator'] = true;
        $this->chemicalRecordAllPackedInOneIndicator = $chemicalRecordAllPackedInOneIndicator;
        return $this;
    }
}