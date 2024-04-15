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
     * @var string|null
     */
    protected $chemicalRecordIdentifier;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @var string|null
     */
    protected $reportableQuantity;
    /**
    * This is the hazard class associated to the specified commodity. 
    
    Required if CommodityRegulatedLevelCode is "LQ" or "FR"
    *
    * @var string|null
    */
    protected $classDivisionNumber;
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Secondary hazardous characteristics of a package. (There can be more than one, each separated with a comma).
    *
    * @var string|null
    */
    protected $subRiskClass;
    /**
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
    *
    * @var string|null
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
    * @var string|null
    */
    protected $packagingGroupType;
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @var string|null
     */
    protected $quantity;
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @var string|null
    */
    protected $uOM;
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @var string|null
     */
    protected $packagingInstructionCode;
    /**
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
    *
    * @var string|null
    */
    protected $properShippingName;
    /**
    * The technical name (when required) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    *
    * @var string|null
    */
    protected $technicalName;
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    *
    * @var string|null
    */
    protected $additionalDescription;
    /**
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
    *
    * @var string|null
    */
    protected $packagingType;
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @var string|null
    */
    protected $hazardLabelRequired;
    /**
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
    *
    * @var string|null
    */
    protected $packagingTypeQuantity;
    /**
    * Indicates the type of commodity.  Valid values: LR, FR, LQ, EQ
    
    FR = Fully Regulated
    LQ = Limited Quantity
    EQ = Excepted Quantity
    LR = Lightly Regulated
    *
    * @var string|null
    */
    protected $commodityRegulatedLevelCode;
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @var string|null
     */
    protected $transportCategory;
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @var string|null
     */
    protected $tunnelRestrictionCode;
    /**
     * Indicates the hazmat shipment/package is all packed in one.
     *
     * @var string|null
     */
    protected $allPackedInOneIndicator;
    /**
     * Identifies the Chemcial Record.
     *
     * @return string|null
     */
    public function getChemicalRecordIdentifier() : ?string
    {
        return $this->chemicalRecordIdentifier;
    }
    /**
     * Identifies the Chemcial Record.
     *
     * @param string|null $chemicalRecordIdentifier
     *
     * @return self
     */
    public function setChemicalRecordIdentifier(?string $chemicalRecordIdentifier) : self
    {
        $this->initialized['chemicalRecordIdentifier'] = true;
        $this->chemicalRecordIdentifier = $chemicalRecordIdentifier;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @return string|null
     */
    public function getReportableQuantity() : ?string
    {
        return $this->reportableQuantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, RQ should be entered.
     *
     * @param string|null $reportableQuantity
     *
     * @return self
     */
    public function setReportableQuantity(?string $reportableQuantity) : self
    {
        $this->initialized['reportableQuantity'] = true;
        $this->reportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
    * This is the hazard class associated to the specified commodity. 
    
    Required if CommodityRegulatedLevelCode is "LQ" or "FR"
    *
    * @return string|null
    */
    public function getClassDivisionNumber() : ?string
    {
        return $this->classDivisionNumber;
    }
    /**
    * This is the hazard class associated to the specified commodity. 
    
    Required if CommodityRegulatedLevelCode is "LQ" or "FR"
    *
    * @param string|null $classDivisionNumber
    *
    * @return self
    */
    public function setClassDivisionNumber(?string $classDivisionNumber) : self
    {
        $this->initialized['classDivisionNumber'] = true;
        $this->classDivisionNumber = $classDivisionNumber;
        return $this;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Secondary hazardous characteristics of a package. (There can be more than one, each separated with a comma).
    *
    * @return string|null
    */
    public function getSubRiskClass() : ?string
    {
        return $this->subRiskClass;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Secondary hazardous characteristics of a package. (There can be more than one, each separated with a comma).
    *
    * @param string|null $subRiskClass
    *
    * @return self
    */
    public function setSubRiskClass(?string $subRiskClass) : self
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
    * @return string|null
    */
    public function getIDNumber() : ?string
    {
        return $this->iDNumber;
    }
    /**
    * This is the ID number (UN/NA/ID) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation. 
    
    UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
    *
    * @param string|null $iDNumber
    *
    * @return self
    */
    public function setIDNumber(?string $iDNumber) : self
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
    * @return string|null
    */
    public function getPackagingGroupType() : ?string
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
    * @param string|null $packagingGroupType
    *
    * @return self
    */
    public function setPackagingGroupType(?string $packagingGroupType) : self
    {
        $this->initialized['packagingGroupType'] = true;
        $this->packagingGroupType = $packagingGroupType;
        return $this;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * Required if CommodityRegulatedLevelCode = LQ or FR. The numerical value of the mass capacity of the regulated good.
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @return string|null
    */
    public function getUOM() : ?string
    {
        return $this->uOM;
    }
    /**
    * Required if CommodityRegulatedLevelCode = LQ or FR. The unit of measure used for the mass capacity of the regulated good.
      Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @param string|null $uOM
    *
    * @return self
    */
    public function setUOM(?string $uOM) : self
    {
        $this->initialized['uOM'] = true;
        $this->uOM = $uOM;
        return $this;
    }
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return string|null
     */
    public function getPackagingInstructionCode() : ?string
    {
        return $this->packagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @param string|null $packagingInstructionCode
     *
     * @return self
     */
    public function setPackagingInstructionCode(?string $packagingInstructionCode) : self
    {
        $this->initialized['packagingInstructionCode'] = true;
        $this->packagingInstructionCode = $packagingInstructionCode;
        return $this;
    }
    /**
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
    *
    * @return string|null
    */
    public function getProperShippingName() : ?string
    {
        return $this->properShippingName;
    }
    /**
    * The Proper Shipping Name assigned by ADR, CFR or IATA. 
    
    Required if CommodityRegulatedLevelCode = LR, LQ or FR.
    *
    * @param string|null $properShippingName
    *
    * @return self
    */
    public function setProperShippingName(?string $properShippingName) : self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
    /**
    * The technical name (when required) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    *
    * @return string|null
    */
    public function getTechnicalName() : ?string
    {
        return $this->technicalName;
    }
    /**
    * The technical name (when required) for the specified commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
    *
    * @param string|null $technicalName
    *
    * @return self
    */
    public function setTechnicalName(?string $technicalName) : self
    {
        $this->initialized['technicalName'] = true;
        $this->technicalName = $technicalName;
        return $this;
    }
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    *
    * @return string|null
    */
    public function getAdditionalDescription() : ?string
    {
        return $this->additionalDescription;
    }
    /**
    * Additional remarks or special provision information. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. 
    
    Additional information that may be required by regulation about a hazardous material, such as, "Limited Quantity", DOT-SP numbers, EX numbers.
    *
    * @param string|null $additionalDescription
    *
    * @return self
    */
    public function setAdditionalDescription(?string $additionalDescription) : self
    {
        $this->initialized['additionalDescription'] = true;
        $this->additionalDescription = $additionalDescription;
        return $this;
    }
    /**
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
    *
    * @return string|null
    */
    public function getPackagingType() : ?string
    {
        return $this->packagingType;
    }
    /**
    * The package type code identifying the type of packaging used for the commodity. (Ex: Fiberboard Box). 
    Required if CommodityRegulatedLevelCode = LQ or FR.
    *
    * @param string|null $packagingType
    *
    * @return self
    */
    public function setPackagingType(?string $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @return string|null
    */
    public function getHazardLabelRequired() : ?string
    {
        return $this->hazardLabelRequired;
    }
    /**
    * Defines the type of label that is required on the package for the commodity. 
    
    Not applicable if CommodityRegulatedLevelCode = LR or EQ.
    *
    * @param string|null $hazardLabelRequired
    *
    * @return self
    */
    public function setHazardLabelRequired(?string $hazardLabelRequired) : self
    {
        $this->initialized['hazardLabelRequired'] = true;
        $this->hazardLabelRequired = $hazardLabelRequired;
        return $this;
    }
    /**
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
    *
    * @return string|null
    */
    public function getPackagingTypeQuantity() : ?string
    {
        return $this->packagingTypeQuantity;
    }
    /**
    * The number of pieces of the specific commodity. 
    
    Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values: 1 to 999
    *
    * @param string|null $packagingTypeQuantity
    *
    * @return self
    */
    public function setPackagingTypeQuantity(?string $packagingTypeQuantity) : self
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
    * @return string|null
    */
    public function getCommodityRegulatedLevelCode() : ?string
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
    * @param string|null $commodityRegulatedLevelCode
    *
    * @return self
    */
    public function setCommodityRegulatedLevelCode(?string $commodityRegulatedLevelCode) : self
    {
        $this->initialized['commodityRegulatedLevelCode'] = true;
        $this->commodityRegulatedLevelCode = $commodityRegulatedLevelCode;
        return $this;
    }
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @return string|null
     */
    public function getTransportCategory() : ?string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @param string|null $transportCategory
     *
     * @return self
     */
    public function setTransportCategory(?string $transportCategory) : self
    {
        $this->initialized['transportCategory'] = true;
        $this->transportCategory = $transportCategory;
        return $this;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @return string|null
     */
    public function getTunnelRestrictionCode() : ?string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @param string|null $tunnelRestrictionCode
     *
     * @return self
     */
    public function setTunnelRestrictionCode(?string $tunnelRestrictionCode) : self
    {
        $this->initialized['tunnelRestrictionCode'] = true;
        $this->tunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
     * Indicates the hazmat shipment/package is all packed in one.
     *
     * @return string|null
     */
    public function getAllPackedInOneIndicator() : ?string
    {
        return $this->allPackedInOneIndicator;
    }
    /**
     * Indicates the hazmat shipment/package is all packed in one.
     *
     * @param string|null $allPackedInOneIndicator
     *
     * @return self
     */
    public function setAllPackedInOneIndicator(?string $allPackedInOneIndicator) : self
    {
        $this->initialized['allPackedInOneIndicator'] = true;
        $this->allPackedInOneIndicator = $allPackedInOneIndicator;
        return $this;
    }
}