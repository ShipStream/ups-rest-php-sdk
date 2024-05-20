<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckShipmentPackage extends \ArrayObject
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
     * Identifies the package containing Dangerous Goods.
     *
     * @var string
     */
    protected $packageIdentifier;
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @var PackagePackageWeight
     */
    protected $packageWeight;
    /**
     * This is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Valid values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @var string
     */
    protected $qValue;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is over pack.
     *
     * @var string
     */
    protected $overPackedIndicator;
    /**
    * The method of transport by which a shipment is approved to move and the regulations associated with that method.  
    
    Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, and PAX.
    *
    * @var string
    */
    protected $transportationMode;
    /**
    * 24 Hour Emergency Phone Number of the shipper. 
    
    Valid values for this field are (0) through (9) with trailing blanks. 
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  The Emergency Phone Number can only include the following allowable characters  
    “period “.”, dash “-“, plus sign “+” and conventional parentheses “(“ and “)”, “EXT or OPT”
    
    Required when (TDG regulation set and CommodityRegulatedLevelCode = FR)
    
    *
    * @var string
    */
    protected $emergencyPhone;
    /**
    * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhone.
    
    The information is required if there is a value in the EmergencyPhone field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
    *
    * @var string
    */
    protected $emergencyContact;
    /**
     * 
     *
     * @var list<PackageChemicalRecord>
     */
    protected $chemicalRecord;
    /**
     * Identifies the package containing Dangerous Goods.
     *
     * @return string
     */
    public function getPackageIdentifier() : string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.
     *
     * @param string $packageIdentifier
     *
     * @return self
     */
    public function setPackageIdentifier(string $packageIdentifier) : self
    {
        $this->initialized['packageIdentifier'] = true;
        $this->packageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @return PackagePackageWeight
     */
    public function getPackageWeight() : PackagePackageWeight
    {
        return $this->packageWeight;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @param PackagePackageWeight $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(PackagePackageWeight $packageWeight) : self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * This is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Valid values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return string
     */
    public function getQValue() : string
    {
        return $this->qValue;
    }
    /**
     * This is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Valid values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
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
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is over pack.
     *
     * @return string
     */
    public function getOverPackedIndicator() : string
    {
        return $this->overPackedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is over pack.
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
    * The method of transport by which a shipment is approved to move and the regulations associated with that method.  
    
    Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, and PAX.
    *
    * @return string
    */
    public function getTransportationMode() : string
    {
        return $this->transportationMode;
    }
    /**
    * The method of transport by which a shipment is approved to move and the regulations associated with that method.  
    
    Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, and PAX.
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
    * 24 Hour Emergency Phone Number of the shipper. 
    
    Valid values for this field are (0) through (9) with trailing blanks. 
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  The Emergency Phone Number can only include the following allowable characters  
    “period “.”, dash “-“, plus sign “+” and conventional parentheses “(“ and “)”, “EXT or OPT”
    
    Required when (TDG regulation set and CommodityRegulatedLevelCode = FR)
    
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
    
    For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  The Emergency Phone Number can only include the following allowable characters  
    “period “.”, dash “-“, plus sign “+” and conventional parentheses “(“ and “)”, “EXT or OPT”
    
    Required when (TDG regulation set and CommodityRegulatedLevelCode = FR)
    
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
    * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhone.
    
    The information is required if there is a value in the EmergencyPhone field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
    *
    * @return string
    */
    public function getEmergencyContact() : string
    {
        return $this->emergencyContact;
    }
    /**
    * The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhone.
    
    The information is required if there is a value in the EmergencyPhone field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
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
     * 
     *
     * @return list<PackageChemicalRecord>
     */
    public function getChemicalRecord() : array
    {
        return $this->chemicalRecord;
    }
    /**
     * 
     *
     * @param list<PackageChemicalRecord> $chemicalRecord
     *
     * @return self
     */
    public function setChemicalRecord(array $chemicalRecord) : self
    {
        $this->initialized['chemicalRecord'] = true;
        $this->chemicalRecord = $chemicalRecord;
        return $this;
    }
}