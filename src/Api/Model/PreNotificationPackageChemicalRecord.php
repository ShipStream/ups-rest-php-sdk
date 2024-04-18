<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationPackageChemicalRecord extends \ArrayObject
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
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered.  Any other value will be  interpreted as "Non Reportable" quantity.
     *
     * @var string
     */
    protected $reportableQuantity;
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
     *
     * @var string
     */
    protected $classDivisionNumber;
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma.)
     *
     * @var string
     */
    protected $subRiskClass;
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @var string
     */
    protected $iDNumber;
    /**
    * This is the packing group category associated to the specified commodity. Must be shown in Roman Numerals. Valid values are:
    - I
    - II
    - III
    - blank
    
    *
    * @var string
    */
    protected $packagingGroupType;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @var string
     */
    protected $quantity;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @var string
     */
    protected $uOM;
    /**
     * The packing instructions related to the chemical record.
     *
     * @var string
     */
    protected $packagingInstructionCode;
    /**
    * 24 Hour Emergency Phone Number of the shipper.
    
    Valid values for this field are (0) through (9) with trailing blanks.
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number.                                                                                                                                                                                                                                                                       The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"  The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
    *
    * @var string
    */
    protected $emergencyPhone;
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @var string
     */
    protected $emergencyContact;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @var string
     */
    protected $properShippingName;
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @var string
     */
    protected $technicalName;
    /**
     * Additional remarks or special provision information.
     *
     * @var string
     */
    protected $additionalDescription;
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @var string
     */
    protected $hazardLabelRequired;
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @var string
     */
    protected $packagingTypeQuantity;
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @var string
     */
    protected $commodityRegulatedLevelCode;
    /**
     * Transport Category. Valid values are 0 to 4.
     *
     * @var string
     */
    protected $transportCategory;
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @var string
     */
    protected $tunnelRestrictionCode;
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @var string
     */
    protected $qValue;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @var string
     */
    protected $overPackedIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @var string
     */
    protected $allPackedInOneIndicator;
    /**
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered.  Any other value will be  interpreted as "Non Reportable" quantity.
     *
     * @return string
     */
    public function getReportableQuantity() : string
    {
        return $this->reportableQuantity;
    }
    /**
     * Indicates whether or not a material being transported meets the definition of a hazardous material and meets or exceeds a reportable quantity threshold. If reportable quantity is met, "RQ" should be entered.  Any other value will be  interpreted as "Non Reportable" quantity.
     *
     * @param string $reportableQuantity
     *
     * @return self
     */
    public function setReportableQuantity(string $reportableQuantity) : self
    {
        $this->initialized['reportableQuantity'] = true;
        $this->reportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
     *
     * @return string
     */
    public function getClassDivisionNumber() : string
    {
        return $this->classDivisionNumber;
    }
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
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
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma.)
     *
     * @return string
     */
    public function getSubRiskClass() : string
    {
        return $this->subRiskClass;
    }
    /**
     * Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma.)
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
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @return string
     */
    public function getIDNumber() : string
    {
        return $this->iDNumber;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
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
    * This is the packing group category associated to the specified commodity. Must be shown in Roman Numerals. Valid values are:
    - I
    - II
    - III
    - blank
    
    *
    * @return string
    */
    public function getPackagingGroupType() : string
    {
        return $this->packagingGroupType;
    }
    /**
    * This is the packing group category associated to the specified commodity. Must be shown in Roman Numerals. Valid values are:
    - I
    - II
    - III
    - blank
    
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
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @return string
     */
    public function getUOM() : string
    {
        return $this->uOM;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
     *
     * @param string $uOM
     *
     * @return self
     */
    public function setUOM(string $uOM) : self
    {
        $this->initialized['uOM'] = true;
        $this->uOM = $uOM;
        return $this;
    }
    /**
     * The packing instructions related to the chemical record.
     *
     * @return string
     */
    public function getPackagingInstructionCode() : string
    {
        return $this->packagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record.
     *
     * @param string $packagingInstructionCode
     *
     * @return self
     */
    public function setPackagingInstructionCode(string $packagingInstructionCode) : self
    {
        $this->initialized['packagingInstructionCode'] = true;
        $this->packagingInstructionCode = $packagingInstructionCode;
        return $this;
    }
    /**
    * 24 Hour Emergency Phone Number of the shipper.
    
    Valid values for this field are (0) through (9) with trailing blanks.
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number.                                                                                                                                                                                                                                                                       The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"  The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
    *
    * @return string
    */
    public function getEmergencyPhone() : string
    {
        return $this->emergencyPhone;
    }
    /**
    * 24 Hour Emergency Phone Number of the shipper.
    
    Valid values for this field are (0) through (9) with trailing blanks.
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries the layout is country code, area code, number.                                                                                                                                                                                                                                                                       The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"  The following are restricted in the phone number
    period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
    *
    * @param string $emergencyPhone
    *
    * @return self
    */
    public function setEmergencyPhone(string $emergencyPhone) : self
    {
        $this->initialized['emergencyPhone'] = true;
        $this->emergencyPhone = $emergencyPhone;
        return $this;
    }
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @return string
     */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.
     *
     * @param string $emergencyContact
     *
     * @return self
     */
    public function setEmergencyContact(string $emergencyContact) : self
    {
        $this->initialized['emergencyContact'] = true;
        $this->emergencyContact = $emergencyContact;
        return $this;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @return string
     */
    public function getProperShippingName() : string
    {
        return $this->properShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LQ or FR.
     *
     * @param string $properShippingName
     *
     * @return self
     */
    public function setProperShippingName(string $properShippingName) : self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @return string
     */
    public function getTechnicalName() : string
    {
        return $this->technicalName;
    }
    /**
     * The technical name (when required) for the specified commodity.
     *
     * @param string $technicalName
     *
     * @return self
     */
    public function setTechnicalName(string $technicalName) : self
    {
        $this->initialized['technicalName'] = true;
        $this->technicalName = $technicalName;
        return $this;
    }
    /**
     * Additional remarks or special provision information.
     *
     * @return string
     */
    public function getAdditionalDescription() : string
    {
        return $this->additionalDescription;
    }
    /**
     * Additional remarks or special provision information.
     *
     * @param string $additionalDescription
     *
     * @return self
     */
    public function setAdditionalDescription(string $additionalDescription) : self
    {
        $this->initialized['additionalDescription'] = true;
        $this->additionalDescription = $additionalDescription;
        return $this;
    }
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box).
     *
     * @param string $packagingType
     *
     * @return self
     */
    public function setPackagingType(string $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @return string
     */
    public function getHazardLabelRequired() : string
    {
        return $this->hazardLabelRequired;
    }
    /**
     * Defines the type of label that is required on the package for the commodity.
     *
     * @param string $hazardLabelRequired
     *
     * @return self
     */
    public function setHazardLabelRequired(string $hazardLabelRequired) : self
    {
        $this->initialized['hazardLabelRequired'] = true;
        $this->hazardLabelRequired = $hazardLabelRequired;
        return $this;
    }
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @return string
     */
    public function getPackagingTypeQuantity() : string
    {
        return $this->packagingTypeQuantity;
    }
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @param string $packagingTypeQuantity
     *
     * @return self
     */
    public function setPackagingTypeQuantity(string $packagingTypeQuantity) : self
    {
        $this->initialized['packagingTypeQuantity'] = true;
        $this->packagingTypeQuantity = $packagingTypeQuantity;
        return $this;
    }
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @return string
     */
    public function getCommodityRegulatedLevelCode() : string
    {
        return $this->commodityRegulatedLevelCode;
    }
    /**
     * Indicates the type of commodity, Fully Regulated (FR), Limited Quantity (LQ), Lightly Regulated (LR)  Valid values are LR, FR and LQ.
     *
     * @param string $commodityRegulatedLevelCode
     *
     * @return self
     */
    public function setCommodityRegulatedLevelCode(string $commodityRegulatedLevelCode) : self
    {
        $this->initialized['commodityRegulatedLevelCode'] = true;
        $this->commodityRegulatedLevelCode = $commodityRegulatedLevelCode;
        return $this;
    }
    /**
     * Transport Category. Valid values are 0 to 4.
     *
     * @return string
     */
    public function getTransportCategory() : string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category. Valid values are 0 to 4.
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
     * Defines what is restricted to pass through a tunnel.
     *
     * @return string
     */
    public function getTunnelRestrictionCode() : string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
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
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return string
     */
    public function getQValue() : string
    {
        return $this->qValue;
    }
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA,  Q-Value specifies exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0  Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @param string $qValue
     *
     * @return self
     */
    public function setQValue(string $qValue) : self
    {
        $this->initialized['qValue'] = true;
        $this->qValue = $qValue;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @return string
     */
    public function getOverPackedIndicator() : string
    {
        return $this->overPackedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.
     *
     * @param string $overPackedIndicator
     *
     * @return self
     */
    public function setOverPackedIndicator(string $overPackedIndicator) : self
    {
        $this->initialized['overPackedIndicator'] = true;
        $this->overPackedIndicator = $overPackedIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @return string
     */
    public function getAllPackedInOneIndicator() : string
    {
        return $this->allPackedInOneIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package
     *
     * @param string $allPackedInOneIndicator
     *
     * @return self
     */
    public function setAllPackedInOneIndicator(string $allPackedInOneIndicator) : self
    {
        $this->initialized['allPackedInOneIndicator'] = true;
        $this->allPackedInOneIndicator = $allPackedInOneIndicator;
        return $this;
    }
}