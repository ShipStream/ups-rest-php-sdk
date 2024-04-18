<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsHazMat extends \ArrayObject
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
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @var string
     */
    protected $packagingTypeQuantity;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    protected $recordIdentifier1;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    protected $recordIdentifier2;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    protected $recordIdentifier3;
    /**
    * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
    
    *
    * @var string
    */
    protected $subRiskClass;
    /**
     * The type of regulated good for an ADR package where ADR is for Europe to Europe ground movement.
     *
     * @var string
     */
    protected $aDRItemNumber;
    /**
    * Required if the field applies to the material by regulation. Field input is Arabic numerals, output is Roman numerals. Will be shown in Roman Numerals.  Valid values:
    - "1" = "I",
    - "2" = "II",
    - "3" = "III",
    - and blank.
    
    *
    * @var string
    */
    protected $aDRPackingGroupLetter;
    /**
     * The technical name (when required) for the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @var string
     */
    protected $technicalName;
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @var string
    */
    protected $hazardLabelRequired;
    /**
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'EQ', 'LQ' or 'FR'
    
    *
    * @var string
    */
    protected $classDivisionNumber;
    /**
     * Optional reference number. It will be displayed only on label.
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * Required if CommodityRegulatedLevelCode = EQ, LQ or FR. The numerical value of the mass capacity of the regulated good.  Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." (Decimal point) and can hold up to 1 decimal place.
     *
     * @var string
     */
    protected $quantity;
    /**
    * Required if CommodityRegulatedLevelCode = LQ, EQ or FR. The unit of measure used for the mass capacity of the regulated good. 
    
    For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @var string
    */
    protected $uOM;
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @var string
     */
    protected $packagingType;
    /**
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
    *
    * @var string
    */
    protected $iDNumber;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.
     *
     * @var string
     */
    protected $properShippingName;
    /**
    * Additional remarks or special provision information. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    
    *
    * @var string
    */
    protected $additionalDescription;
    /**
    * This is the packing group category associated to the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.
     Valid values:
    I
    II
    III
    blank
    *
    * @var string
    */
    protected $packagingGroupType;
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @var string
     */
    protected $packagingInstructionCode;
    /**
    * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.
    
    The following are restricted in the phone number period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
    *
    * @var string
    */
    protected $emergencyPhone;
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
     *
     * @var string
     */
    protected $emergencyContact;
    /**
     * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.
     *
     * @var string
     */
    protected $reportableQuantity;
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. 
    Valid values: 
    ADR = Europe to Europe Ground Movement 
    CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada 
    IATA= Worldwide Air movement 
    TDG= Canada to Canada ground movement or Canada to U.S. standard movement.  Valid values are ADR, CFR, IATA and TDG.
    For multiple Chemical Records per package or multiple packages containing different RegulationSet, RegulationSet of first Chemical Record would be considered for validating and rating the entire shipment.
    *
    * @var string
    */
    protected $regulationSet;
    /**
    * Not applicable for ADR regulation set. Required for any other regulation set. Declares that a package was prepared according to ground passenger aircraft or cargo aircraft only. 
    Valid values: 
    Highway=Highway 
    Ground=Ground 
    PAX=Passenger Aircraft 
    Passenger Aircraft=Passenger Aircraft 
    CAO=Cargo Aircraft Only 
    Cargo Aircraft Only=Cargo Aircraft Only  Valid entries include: Highway, Ground, PAX, Passenger Aircraft, CAO and Cargo Aircraft Only.
    *
    * @var string
    */
    protected $transportationMode;
    /**
    * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ) or Lightly Regulated (LR).  Valid values are LR, FR, LQ and EQ.
    Required for subversion 1701 or greater. LR and EQ are validated if subversion is 1701 or greater. FR, LQ will be validated if subversion is 1807 or greater
    *
    * @var string
    */
    protected $commodityRegulatedLevelCode;
    /**
     * Transport Category.  Valid values are 0 to 4.
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
     * Identifies the Chemical Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $chemicalRecordIdentifier;
    /**
     * Technical name in local language.
     *
     * @var string
     */
    protected $localTechnicalName;
    /**
     * Proper shipping name in local langauge.
     *
     * @var string
     */
    protected $localProperShippingName;
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
     * Reserved for future use.
     *
     * @return string
     */
    public function getRecordIdentifier1() : string
    {
        return $this->recordIdentifier1;
    }
    /**
     * Reserved for future use.
     *
     * @param string $recordIdentifier1
     *
     * @return self
     */
    public function setRecordIdentifier1(string $recordIdentifier1) : self
    {
        $this->initialized['recordIdentifier1'] = true;
        $this->recordIdentifier1 = $recordIdentifier1;
        return $this;
    }
    /**
     * Reserved for future use.
     *
     * @return string
     */
    public function getRecordIdentifier2() : string
    {
        return $this->recordIdentifier2;
    }
    /**
     * Reserved for future use.
     *
     * @param string $recordIdentifier2
     *
     * @return self
     */
    public function setRecordIdentifier2(string $recordIdentifier2) : self
    {
        $this->initialized['recordIdentifier2'] = true;
        $this->recordIdentifier2 = $recordIdentifier2;
        return $this;
    }
    /**
     * Reserved for future use.
     *
     * @return string
     */
    public function getRecordIdentifier3() : string
    {
        return $this->recordIdentifier3;
    }
    /**
     * Reserved for future use.
     *
     * @param string $recordIdentifier3
     *
     * @return self
     */
    public function setRecordIdentifier3(string $recordIdentifier3) : self
    {
        $this->initialized['recordIdentifier3'] = true;
        $this->recordIdentifier3 = $recordIdentifier3;
        return $this;
    }
    /**
    * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
    
    *
    * @return string
    */
    public function getSubRiskClass() : string
    {
        return $this->subRiskClass;
    }
    /**
    * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
    
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
     * The type of regulated good for an ADR package where ADR is for Europe to Europe ground movement.
     *
     * @return string
     */
    public function getADRItemNumber() : string
    {
        return $this->aDRItemNumber;
    }
    /**
     * The type of regulated good for an ADR package where ADR is for Europe to Europe ground movement.
     *
     * @param string $aDRItemNumber
     *
     * @return self
     */
    public function setADRItemNumber(string $aDRItemNumber) : self
    {
        $this->initialized['aDRItemNumber'] = true;
        $this->aDRItemNumber = $aDRItemNumber;
        return $this;
    }
    /**
    * Required if the field applies to the material by regulation. Field input is Arabic numerals, output is Roman numerals. Will be shown in Roman Numerals.  Valid values:
    - "1" = "I",
    - "2" = "II",
    - "3" = "III",
    - and blank.
    
    *
    * @return string
    */
    public function getADRPackingGroupLetter() : string
    {
        return $this->aDRPackingGroupLetter;
    }
    /**
    * Required if the field applies to the material by regulation. Field input is Arabic numerals, output is Roman numerals. Will be shown in Roman Numerals.  Valid values:
    - "1" = "I",
    - "2" = "II",
    - "3" = "III",
    - and blank.
    
    *
    * @param string $aDRPackingGroupLetter
    *
    * @return self
    */
    public function setADRPackingGroupLetter(string $aDRPackingGroupLetter) : self
    {
        $this->initialized['aDRPackingGroupLetter'] = true;
        $this->aDRPackingGroupLetter = $aDRPackingGroupLetter;
        return $this;
    }
    /**
     * The technical name (when required) for the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return string
     */
    public function getTechnicalName() : string
    {
        return $this->technicalName;
    }
    /**
     * The technical name (when required) for the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
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
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @return string
    */
    public function getHazardLabelRequired() : string
    {
        return $this->hazardLabelRequired;
    }
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
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
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'EQ', 'LQ' or 'FR'
    
    *
    * @return string
    */
    public function getClassDivisionNumber() : string
    {
        return $this->classDivisionNumber;
    }
    /**
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'EQ', 'LQ' or 'FR'
    
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
     * Optional reference number. It will be displayed only on label.
     *
     * @return string
     */
    public function getReferenceNumber() : string
    {
        return $this->referenceNumber;
    }
    /**
     * Optional reference number. It will be displayed only on label.
     *
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = EQ, LQ or FR. The numerical value of the mass capacity of the regulated good.  Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." (Decimal point) and can hold up to 1 decimal place.
     *
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = EQ, LQ or FR. The numerical value of the mass capacity of the regulated good.  Should be more than 0.0. Valid characters are 0-9 and "." (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including "." (Decimal point) and can hold up to 1 decimal place.
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
    * Required if CommodityRegulatedLevelCode = LQ, EQ or FR. The unit of measure used for the mass capacity of the regulated good. 
    
    For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @return string
    */
    public function getUOM() : string
    {
        return $this->uOM;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ, EQ or FR. The unit of measure used for the mass capacity of the regulated good. 
    
    For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
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
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
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
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
    *
    * @return string
    */
    public function getIDNumber() : string
    {
        return $this->iDNumber;
    }
    /**
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
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
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.
     *
     * @return string
     */
    public function getProperShippingName() : string
    {
        return $this->properShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.
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
    * Additional remarks or special provision information. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    
    *
    * @return string
    */
    public function getAdditionalDescription() : string
    {
        return $this->additionalDescription;
    }
    /**
    * Additional remarks or special provision information. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    
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
    * This is the packing group category associated to the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.
     Valid values:
    I
    II
    III
    blank
    *
    * @return string
    */
    public function getPackagingGroupType() : string
    {
        return $this->packagingGroupType;
    }
    /**
    * This is the packing group category associated to the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.
     Valid values:
    I
    II
    III
    blank
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
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return string
     */
    public function getPackagingInstructionCode() : string
    {
        return $this->packagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
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
    * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.
    
    The following are restricted in the phone number period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
    *
    * @return string
    */
    public function getEmergencyPhone() : string
    {
        return $this->emergencyPhone;
    }
    /**
    * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.
    
    The following are restricted in the phone number period ".", dash "-", plus sign "+" and conventional parentheses "(" and ")", "EXT" or "OPT"
    
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
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
     *
     * @return string
     */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
     * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
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
     * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.
     *
     * @return string
     */
    public function getReportableQuantity() : string
    {
        return $this->reportableQuantity;
    }
    /**
     * Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.
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
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. 
    Valid values: 
    ADR = Europe to Europe Ground Movement 
    CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada 
    IATA= Worldwide Air movement 
    TDG= Canada to Canada ground movement or Canada to U.S. standard movement.  Valid values are ADR, CFR, IATA and TDG.
    For multiple Chemical Records per package or multiple packages containing different RegulationSet, RegulationSet of first Chemical Record would be considered for validating and rating the entire shipment.
    *
    * @return string
    */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. 
    Valid values: 
    ADR = Europe to Europe Ground Movement 
    CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada 
    IATA= Worldwide Air movement 
    TDG= Canada to Canada ground movement or Canada to U.S. standard movement.  Valid values are ADR, CFR, IATA and TDG.
    For multiple Chemical Records per package or multiple packages containing different RegulationSet, RegulationSet of first Chemical Record would be considered for validating and rating the entire shipment.
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
    * Not applicable for ADR regulation set. Required for any other regulation set. Declares that a package was prepared according to ground passenger aircraft or cargo aircraft only. 
    Valid values: 
    Highway=Highway 
    Ground=Ground 
    PAX=Passenger Aircraft 
    Passenger Aircraft=Passenger Aircraft 
    CAO=Cargo Aircraft Only 
    Cargo Aircraft Only=Cargo Aircraft Only  Valid entries include: Highway, Ground, PAX, Passenger Aircraft, CAO and Cargo Aircraft Only.
    *
    * @return string
    */
    public function getTransportationMode() : string
    {
        return $this->transportationMode;
    }
    /**
    * Not applicable for ADR regulation set. Required for any other regulation set. Declares that a package was prepared according to ground passenger aircraft or cargo aircraft only. 
    Valid values: 
    Highway=Highway 
    Ground=Ground 
    PAX=Passenger Aircraft 
    Passenger Aircraft=Passenger Aircraft 
    CAO=Cargo Aircraft Only 
    Cargo Aircraft Only=Cargo Aircraft Only  Valid entries include: Highway, Ground, PAX, Passenger Aircraft, CAO and Cargo Aircraft Only.
    *
    * @param string $transportationMode
    *
    * @return self
    */
    public function setTransportationMode(string $transportationMode) : self
    {
        $this->initialized['transportationMode'] = true;
        $this->transportationMode = $transportationMode;
        return $this;
    }
    /**
    * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ) or Lightly Regulated (LR).  Valid values are LR, FR, LQ and EQ.
    Required for subversion 1701 or greater. LR and EQ are validated if subversion is 1701 or greater. FR, LQ will be validated if subversion is 1807 or greater
    *
    * @return string
    */
    public function getCommodityRegulatedLevelCode() : string
    {
        return $this->commodityRegulatedLevelCode;
    }
    /**
    * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ) or Lightly Regulated (LR).  Valid values are LR, FR, LQ and EQ.
    Required for subversion 1701 or greater. LR and EQ are validated if subversion is 1701 or greater. FR, LQ will be validated if subversion is 1807 or greater
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
     * Transport Category.  Valid values are 0 to 4.
     *
     * @return string
     */
    public function getTransportCategory() : string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category.  Valid values are 0 to 4.
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
     * Identifies the Chemical Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getChemicalRecordIdentifier() : string
    {
        return $this->chemicalRecordIdentifier;
    }
    /**
     * Identifies the Chemical Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @param string $chemicalRecordIdentifier
     *
     * @return self
     */
    public function setChemicalRecordIdentifier(string $chemicalRecordIdentifier) : self
    {
        $this->initialized['chemicalRecordIdentifier'] = true;
        $this->chemicalRecordIdentifier = $chemicalRecordIdentifier;
        return $this;
    }
    /**
     * Technical name in local language.
     *
     * @return string
     */
    public function getLocalTechnicalName() : string
    {
        return $this->localTechnicalName;
    }
    /**
     * Technical name in local language.
     *
     * @param string $localTechnicalName
     *
     * @return self
     */
    public function setLocalTechnicalName(string $localTechnicalName) : self
    {
        $this->initialized['localTechnicalName'] = true;
        $this->localTechnicalName = $localTechnicalName;
        return $this;
    }
    /**
     * Proper shipping name in local langauge.
     *
     * @return string
     */
    public function getLocalProperShippingName() : string
    {
        return $this->localProperShippingName;
    }
    /**
     * Proper shipping name in local langauge.
     *
     * @param string $localProperShippingName
     *
     * @return self
     */
    public function setLocalProperShippingName(string $localProperShippingName) : self
    {
        $this->initialized['localProperShippingName'] = true;
        $this->localProperShippingName = $localProperShippingName;
        return $this;
    }
}