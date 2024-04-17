<?php

namespace ShipStream\Ups\Api\Model;

class PackageChemicalRecord extends \ArrayObject
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
     * Identifies the Chemcial Record.
     *
     * @var string
     */
    protected $chemicalRecordIdentifier;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @var string
     */
    protected $reportableQuantity;
    /**
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
    
    *
    * @var string
    */
    protected $classDivisionNumber;
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
    
    *
    * @var string
    */
    protected $subRiskClass;
    /**
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
    *
    * @var string
    */
    protected $iDNumber;
    /**
    * This is the packing group category associated to the specified commodity. 
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.  Valid values are: 
    I
    II
    III 
    blank
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
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @var string
    */
    protected $uOM;
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @var string
     */
    protected $packagingInstructionCode;
    /**
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
    *
    * @var string
    */
    protected $properShippingName;
    /**
    * The technical name (when required) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    *
    * @var string
    */
    protected $technicalName;
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Additional information that may be required by regulation about a hazardous material, such as, “Limited Quantity”, DOT-SP numbers, EX numbers.
    
    *
    * @var string
    */
    protected $additionalDescription;
    /**
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
    *
    * @var string
    */
    protected $packagingType;
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @var string
    */
    protected $hazardLabelRequired;
    /**
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
    *
    * @var string
    */
    protected $packagingTypeQuantity;
    /**
    * Indicates the type of commodity.  Valid values: LR, FR, LQ, EQ
    
    FR = Fully Regulated
    LQ = Limited Quantity
    EQ = Excepted Quantity
    LR = Lightly Regulated
    *
    * @var string
    */
    protected $commodityRegulatedLevelCode;
    /**
     * Transport Category.  Valid values: 0 to 4
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
     * Indicates the hazmat shipment/package is all packed in one.
     *
     * @var string
     */
    protected $allPackedInOneIndicator;
    /**
     * Identifies the Chemcial Record.
     *
     * @return string
     */
    public function getChemicalRecordIdentifier() : string
    {
        return $this->chemicalRecordIdentifier;
    }
    /**
     * Identifies the Chemcial Record.
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
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @return string
     */
    public function getReportableQuantity() : string
    {
        return $this->reportableQuantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
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
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
    
    *
    * @return string
    */
    public function getClassDivisionNumber() : string
    {
        return $this->classDivisionNumber;
    }
    /**
    * This is the hazard class associated to the specified commodity.
    
    Required if CommodityRegulatedLevelCode is 'LQ' or 'FR'
    
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
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Secondary hazardous characteristics of a package. (There can be more than one – separate each with a comma).
    
    *
    * @return string
    */
    public function getSubRiskClass() : string
    {
        return $this->subRiskClass;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
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
    * This is the packing group category associated to the specified commodity. 
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.  Valid values are: 
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
    * This is the packing group category associated to the specified commodity. 
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.  Valid values are: 
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
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @return string
    */
    public function getUOM() : string
    {
        return $this->uOM;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
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
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
    *
    * @return string
    */
    public function getProperShippingName() : string
    {
        return $this->properShippingName;
    }
    /**
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
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
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    *
    * @return string
    */
    public function getTechnicalName() : string
    {
        return $this->technicalName;
    }
    /**
    * The technical name (when required) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
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
    
    Additional information that may be required by regulation about a hazardous material, such as, “Limited Quantity”, DOT-SP numbers, EX numbers.
    
    *
    * @return string
    */
    public function getAdditionalDescription() : string
    {
        return $this->additionalDescription;
    }
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Additional information that may be required by regulation about a hazardous material, such as, “Limited Quantity”, DOT-SP numbers, EX numbers.
    
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
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
    *
    * @return string
    */
    public function getPackagingType() : string
    {
        return $this->packagingType;
    }
    /**
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
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
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
    *
    * @return string
    */
    public function getPackagingTypeQuantity() : string
    {
        return $this->packagingTypeQuantity;
    }
    /**
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
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
    * Indicates the type of commodity.  Valid values: LR, FR, LQ, EQ
    
    FR = Fully Regulated
    LQ = Limited Quantity
    EQ = Excepted Quantity
    LR = Lightly Regulated
    *
    * @return string
    */
    public function getCommodityRegulatedLevelCode() : string
    {
        return $this->commodityRegulatedLevelCode;
    }
    /**
    * Indicates the type of commodity.  Valid values: LR, FR, LQ, EQ
    
    FR = Fully Regulated
    LQ = Limited Quantity
    EQ = Excepted Quantity
    LR = Lightly Regulated
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
     * Transport Category.  Valid values: 0 to 4
     *
     * @return string
     */
    public function getTransportCategory() : string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category.  Valid values: 0 to 4
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
     * Indicates the hazmat shipment/package is all packed in one.
     *
     * @return string
     */
    public function getAllPackedInOneIndicator() : string
    {
        return $this->allPackedInOneIndicator;
    }
    /**
     * Indicates the hazmat shipment/package is all packed in one.
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