<?php

namespace ShipStream\Ups\Api\Model;

class HazMatHazMatChemicalRecord extends \ArrayObject
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
     * Identifies the Chemcial Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $chemicalRecordIdentifier;
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $classDivisionNumber;
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $iDNumber;
    /**
     * The method of transport by which a shipment is approved to move and the regulations associated with that method.  Only required when the CommodityRegulatedLevelCode is FR or LQ.Valid values: 01 - Highway02 - Ground03 - Passenger Aircraft04 - Cargo Aircraft Only  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package having different TransportationMode, TransportationMode of first ChemicalRecord would be considered for validating and rating the package. All TransportationMode except for '04' are general service offering. If any chemical record contains '04' as TransportationMode, ShipperNumber needs to be authorized to use '04' as TransportationMode.
     *
     * @var string
     */
    protected $transportationMode;
    /**
     * The Regulatory set associated with every regulated shipment. It must be the same across the shipment. Valid values:   ADR -  For Europe to Europe Ground Movement CFR -  For HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA -  For Worldwide Air movement TDG -  For Canada to Canada ground movement or Canada to U.S. standard movement  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package or multiple packages containing different RegulationSet, RegulationSet of first ChemicalRecord would be considered for validating and rating the entire shipment.
     *
     * @var string
     */
    protected $regulationSet;
    /**
     * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is '1', area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $emergencyPhone;
    /**
     * The emergency information, contact name and/or contact number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $emergencyContact;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $reportableQuantity;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $subRiskClass;
    /**
     * This is the packing group category associated to the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.Valid values are:I, II,III,blank.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packagingGroupType;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $quantity;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good. For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $uOM;
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packagingInstructionCode;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $properShippingName;
    /**
     * The technical name (when required) for the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $technicalName;
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.  Applies only if SubVersion is greater than or equal to 1701.
    
    *
    * @var string
    */
    protected $additionalDescription;
    /**
     * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packagingType;
    /**
     * Defines the type of label that is required on the package for the commodity. Not applicable if CommodityRegulatedLevelCode = LR or EQ.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $hazardLabelRequired;
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.Valid values are 1 to 999.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packagingTypeQuantity;
    /**
     * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ), Lightly Regulated (LR). Default value is FR.Valid values are LR, FR, LQ, EQ.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $commodityRegulatedLevelCode;
    /**
     * Transport Category.Valid values are 0 to 4.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $transportCategory;
    /**
     * Defines what is restricted to pass through a tunnel.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $tunnelRestrictionCode;
    /**
     * Identifies the Chemcial Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getChemicalRecordIdentifier() : string
    {
        return $this->chemicalRecordIdentifier;
    }
    /**
     * Identifies the Chemcial Record.  Required if SubVersion is greater than or equal to 1701.
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
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getClassDivisionNumber() : string
    {
        return $this->classDivisionNumber;
    }
    /**
     * This is the hazard class associated to the specified commodity. Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'  Applies only if SubVersion is greater than or equal to 1701.
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
     * This is the ID number (UN/NA/ID) for the specified commodity. Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getIDNumber() : string
    {
        return $this->iDNumber;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  Applies only if SubVersion is greater than or equal to 1701.
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
     * The method of transport by which a shipment is approved to move and the regulations associated with that method.  Only required when the CommodityRegulatedLevelCode is FR or LQ.Valid values: 01 - Highway02 - Ground03 - Passenger Aircraft04 - Cargo Aircraft Only  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package having different TransportationMode, TransportationMode of first ChemicalRecord would be considered for validating and rating the package. All TransportationMode except for '04' are general service offering. If any chemical record contains '04' as TransportationMode, ShipperNumber needs to be authorized to use '04' as TransportationMode.
     *
     * @return string
     */
    public function getTransportationMode() : string
    {
        return $this->transportationMode;
    }
    /**
     * The method of transport by which a shipment is approved to move and the regulations associated with that method.  Only required when the CommodityRegulatedLevelCode is FR or LQ.Valid values: 01 - Highway02 - Ground03 - Passenger Aircraft04 - Cargo Aircraft Only  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package having different TransportationMode, TransportationMode of first ChemicalRecord would be considered for validating and rating the package. All TransportationMode except for '04' are general service offering. If any chemical record contains '04' as TransportationMode, ShipperNumber needs to be authorized to use '04' as TransportationMode.
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
     * The Regulatory set associated with every regulated shipment. It must be the same across the shipment. Valid values:   ADR -  For Europe to Europe Ground Movement CFR -  For HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA -  For Worldwide Air movement TDG -  For Canada to Canada ground movement or Canada to U.S. standard movement  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package or multiple packages containing different RegulationSet, RegulationSet of first ChemicalRecord would be considered for validating and rating the entire shipment.
     *
     * @return string
     */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
     * The Regulatory set associated with every regulated shipment. It must be the same across the shipment. Valid values:   ADR -  For Europe to Europe Ground Movement CFR -  For HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA -  For Worldwide Air movement TDG -  For Canada to Canada ground movement or Canada to U.S. standard movement  Applies only if SubVersion is greater than or equal to 1701. For multiple ChemicalRecords per package or multiple packages containing different RegulationSet, RegulationSet of first ChemicalRecord would be considered for validating and rating the entire shipment.
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
     * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is '1', area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getEmergencyPhone() : string
    {
        return $this->emergencyPhone;
    }
    /**
     * 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is '1', area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  Applies only if SubVersion is greater than or equal to 1701.
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
     * The emergency information, contact name and/or contact number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
     * The emergency information, contact name and/or contact number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.  Applies only if SubVersion is greater than or equal to 1701.
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
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getReportableQuantity() : string
    {
        return $this->reportableQuantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.  Applies only if SubVersion is greater than or equal to 1701.
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
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getSubRiskClass() : string
    {
        return $this->subRiskClass;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).  Applies only if SubVersion is greater than or equal to 1701.
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
     * This is the packing group category associated to the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.Valid values are:I, II,III,blank.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackagingGroupType() : string
    {
        return $this->packagingGroupType;
    }
    /**
     * This is the packing group category associated to the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.Valid values are:I, II,III,blank.   Applies only if SubVersion is greater than or equal to 1701.
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
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.  Applies only if SubVersion is greater than or equal to 1701.
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
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good. For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getUOM() : string
    {
        return $this->uOM;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good. For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.  Applies only if SubVersion is greater than or equal to 1701.
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
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackagingInstructionCode() : string
    {
        return $this->packagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
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
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getProperShippingName() : string
    {
        return $this->properShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.  Applies only if SubVersion is greater than or equal to 1701.
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
     * The technical name (when required) for the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getTechnicalName() : string
    {
        return $this->technicalName;
    }
    /**
     * The technical name (when required) for the specified commodity. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Applies only if SubVersion is greater than or equal to 1701.
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
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.  Applies only if SubVersion is greater than or equal to 1701.
    
    *
    * @return string
    */
    public function getAdditionalDescription() : string
    {
        return $this->additionalDescription;
    }
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.  Applies only if SubVersion is greater than or equal to 1701.
    
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
     * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
     * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Applies only if SubVersion is greater than or equal to 1701.
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
     * Defines the type of label that is required on the package for the commodity. Not applicable if CommodityRegulatedLevelCode = LR or EQ.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getHazardLabelRequired() : string
    {
        return $this->hazardLabelRequired;
    }
    /**
     * Defines the type of label that is required on the package for the commodity. Not applicable if CommodityRegulatedLevelCode = LR or EQ.  Applies only if SubVersion is greater than or equal to 1701.
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
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.Valid values are 1 to 999.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackagingTypeQuantity() : string
    {
        return $this->packagingTypeQuantity;
    }
    /**
     * The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.Valid values are 1 to 999.  Applies only if SubVersion is greater than or equal to 1701.
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
     * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ), Lightly Regulated (LR). Default value is FR.Valid values are LR, FR, LQ, EQ.   Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getCommodityRegulatedLevelCode() : string
    {
        return $this->commodityRegulatedLevelCode;
    }
    /**
     * Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ), Lightly Regulated (LR). Default value is FR.Valid values are LR, FR, LQ, EQ.   Applies only if SubVersion is greater than or equal to 1701.
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
     * Transport Category.Valid values are 0 to 4.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getTransportCategory() : string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category.Valid values are 0 to 4.  Applies only if SubVersion is greater than or equal to 1701.
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
     * Defines what is restricted to pass through a tunnel.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getTunnelRestrictionCode() : string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
     * Defines what is restricted to pass through a tunnel.  Applies only if SubVersion is greater than or equal to 1701.
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
}