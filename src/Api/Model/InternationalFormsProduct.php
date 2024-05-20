<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsProduct extends \ArrayObject
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
     * Description of the product.  Applies to all International Forms. Optional for Partial Invoice. Must be present at least once and can occur for a maximum of 3 times.
     *
     * @var list<string>
     */
    protected $description;
    /**
     * Container tag for the Unit information of each product. (also called as commodity)  Required for Invoice forms and optional for Partial Invoice.
     *
     * @var ProductUnit
     */
    protected $unit;
    /**
     * 6-to-15-alphanumeric commodity code. Customs uses this code to determine what duties should be assessed on the commodity.  Applies to Invoice, Partial Invoice and NAFTA CO. Required for NAFTA CO and optional for Partial Invoice. Should be at least 6 alphanumeric. For NAFTA CO: For each good described in Description of Goods field, identify the H.S. tariff classification to six digits. If the good is subject to a specific rule of origin in Annex 401 that requires eight digits, identify to eight digits, using the H.S. tariff classification of the country or territory into whose territory the good is imported.
     *
     * @var string
     */
    protected $commodityCode;
    /**
     * The part number or reference number for the product contained in the invoice line, as indicated on the customs invoice.  Applies to Invoice and Partial Invoice. Required for Invoice forms and optional for Partial Invoice.
     *
     * @var string
     */
    protected $partNumber;
    /**
     * The country or territory in which the good was manufactured, produced or grown. For detailed information on country or territory of origin, certificate of origin, rules of origin, and any related matters, please refer to the U.S. Customs and Border Protection Web site at www.customs.gov or contact your country or territory's Customs authority.
     *
     * @var string
     */
    protected $originCountryCode;
    /**
     * If present, JNT will be used as the origin of country or territory code on the NAFTA form and the Product/Origincountry or territoryCode tag will be ignored.  Applies to NAFTA CO only.
     *
     * @var string
     */
    protected $jointProductionIndicator;
    /**
    * For each good described in the Description of Goods field, where the good is subject to a regional value content (RVC) requirement, indicate NC if the RVC is calculated according to the net cost method; otherwise, indicate NO. If the RVC is calculated over a period of time then indicate "NC with begin/end date" by passing code "ND"  Applies to NAFTA CO only. Required for NAFTA CO.  Valid values:
    - NC
    - ND
    - NO
    
    *
    * @var string
    */
    protected $netCostCode;
    /**
     * Date Range for regional value content (RVC).  Applies to NAFTA CO only.
     *
     * @var ProductNetCostDateRange
     */
    protected $netCostDateRange;
    /**
    * Indicates the criterion (A through F) for each good described in the Description of Goods field if applicable. 
    
    The rules of origin are contained in Chapter Four and Annex 401. 
    
    Additional rules are described in Annex 703.2 (certain agricultural goods), Annex 300-B, Appendix 6 (certain textile goods) and Annex 308.1 (certain automatic data processing goods and their parts).  Applies to NAFTA CO only.
    *
    * @var string
    */
    protected $preferenceCriteria;
    /**
    * Indicate the following:  Yes - If shipper is the producer of the good. If not, state 02, 03, and 04 depending on whether this certificate was based upon:  
    No [1] - Knowledge of whether the good qualifies as an originating good. 
    No [2] - Reliance on the producers written representation (other than a Certificate of Origin) that the good qualifies as an originating good. 
    No [3] - A completed and signed Certificate for the good voluntarily provided to the exporter by the producer.  Applicable for NAFTA CO and is required. Valid values: Yes, No [1], No [2], and No [3].
    *
    * @var string
    */
    protected $producerInfo;
    /**
     * Any special marks, codes, and numbers that may appear on package.  Applies to CO Only.
     *
     * @var string
     */
    protected $marksAndNumbers;
    /**
     * The total number of packages, cartons, or containers for the commodity.  Applicable for CO and is required. Should be numeric. Valid characters are 0 -9.
     *
     * @var string
     */
    protected $numberOfPackagesPerCommodity;
    /**
     * The shipping weight, including containers, for each commodity with a separate Harmonized Tariff Code / Schedule B Number. This weight does not include carrier equipment.  Applies to CO and EEI forms only. Required for CO and EEI forms.
     *
     * @var ProductProductWeight
     */
    protected $productWeight;
    /**
     * Includes the following information for used self-propelled vehicles as defined in Customs regulations 19 CFR 192.1: The unique Vehicle Identification Number (VIN) in the proper format. Or The Product Identification Number (PIN) for those used self-propelled vehicles for which there are no VINs.  Or the Vehicle Title Number.  Applies to EEI forms only.
     *
     * @var string
     */
    protected $vehicleID;
    /**
     * Container tag for the schedule B information of a commodity.  Applies to EEI forms only. Required for EEI form
     *
     * @var ProductScheduleB
     */
    protected $scheduleB;
    /**
     * Code indicating Domestic: Exports that have been produced, manufactured, or grown in the United States or Puerto Rico. This includes imported merchandise which has been enhanced in value or changed from the form in which imported by further manufacture or processing in the United States or Puerto Rico. Foreign: Merchandise that has entered the United States and is being exported again in the same condition as when imported.   Applies to EEI forms only. Required for EEI form.  Valid values:  D: Domestic; F: Foreign.
     *
     * @var string
     */
    protected $exportType;
    /**
    * This amount will always be USD.  Applies to EEI forms only. Required for EEI form. Valid characters are 0-9 and \'.\' (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including \'.\' and can hold up to 2 decimal places.
    
    Note: This value is calculated based on the Product/Unit/Value and /Product/Unit/Number (Number of Units * Price per Unit). If the total value is incorrect it will be replaced by the actual calculated total value.
    
    *
    * @var string
    */
    protected $sEDTotalValue;
    /**
     * Container tag for determining whether or not to exclude product information from a particular form.  If this container is not present we assume that the DEFAULT is selected which is "none" and all products will appear on all forms.
     *
     * @var ProductExcludeFromForm
     */
    protected $excludeFromForm;
    /**
     * Data Container holding package related information.  Required for packaging list and Air Freight Packing list.
     *
     * @var ProductPackingListInfo
     */
    protected $packingListInfo;
    /**
     * Required for EEI form.  Applies to EEI form only.
     *
     * @var ProductEEIInformation
     */
    protected $eEIInformation;
    /**
     * Description of the product.  Applies to all International Forms. Optional for Partial Invoice. Must be present at least once and can occur for a maximum of 3 times.
     *
     * @return list<string>
     */
    public function getDescription() : array
    {
        return $this->description;
    }
    /**
     * Description of the product.  Applies to all International Forms. Optional for Partial Invoice. Must be present at least once and can occur for a maximum of 3 times.
     *
     * @param list<string> $description
     *
     * @return self
     */
    public function setDescription(array $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Container tag for the Unit information of each product. (also called as commodity)  Required for Invoice forms and optional for Partial Invoice.
     *
     * @return ProductUnit
     */
    public function getUnit() : ProductUnit
    {
        return $this->unit;
    }
    /**
     * Container tag for the Unit information of each product. (also called as commodity)  Required for Invoice forms and optional for Partial Invoice.
     *
     * @param ProductUnit $unit
     *
     * @return self
     */
    public function setUnit(ProductUnit $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * 6-to-15-alphanumeric commodity code. Customs uses this code to determine what duties should be assessed on the commodity.  Applies to Invoice, Partial Invoice and NAFTA CO. Required for NAFTA CO and optional for Partial Invoice. Should be at least 6 alphanumeric. For NAFTA CO: For each good described in Description of Goods field, identify the H.S. tariff classification to six digits. If the good is subject to a specific rule of origin in Annex 401 that requires eight digits, identify to eight digits, using the H.S. tariff classification of the country or territory into whose territory the good is imported.
     *
     * @return string
     */
    public function getCommodityCode() : string
    {
        return $this->commodityCode;
    }
    /**
     * 6-to-15-alphanumeric commodity code. Customs uses this code to determine what duties should be assessed on the commodity.  Applies to Invoice, Partial Invoice and NAFTA CO. Required for NAFTA CO and optional for Partial Invoice. Should be at least 6 alphanumeric. For NAFTA CO: For each good described in Description of Goods field, identify the H.S. tariff classification to six digits. If the good is subject to a specific rule of origin in Annex 401 that requires eight digits, identify to eight digits, using the H.S. tariff classification of the country or territory into whose territory the good is imported.
     *
     * @param string $commodityCode
     *
     * @return self
     */
    public function setCommodityCode(string $commodityCode) : self
    {
        $this->initialized['commodityCode'] = true;
        $this->commodityCode = $commodityCode;
        return $this;
    }
    /**
     * The part number or reference number for the product contained in the invoice line, as indicated on the customs invoice.  Applies to Invoice and Partial Invoice. Required for Invoice forms and optional for Partial Invoice.
     *
     * @return string
     */
    public function getPartNumber() : string
    {
        return $this->partNumber;
    }
    /**
     * The part number or reference number for the product contained in the invoice line, as indicated on the customs invoice.  Applies to Invoice and Partial Invoice. Required for Invoice forms and optional for Partial Invoice.
     *
     * @param string $partNumber
     *
     * @return self
     */
    public function setPartNumber(string $partNumber) : self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;
        return $this;
    }
    /**
     * The country or territory in which the good was manufactured, produced or grown. For detailed information on country or territory of origin, certificate of origin, rules of origin, and any related matters, please refer to the U.S. Customs and Border Protection Web site at www.customs.gov or contact your country or territory's Customs authority.
     *
     * @return string
     */
    public function getOriginCountryCode() : string
    {
        return $this->originCountryCode;
    }
    /**
     * The country or territory in which the good was manufactured, produced or grown. For detailed information on country or territory of origin, certificate of origin, rules of origin, and any related matters, please refer to the U.S. Customs and Border Protection Web site at www.customs.gov or contact your country or territory's Customs authority.
     *
     * @param string $originCountryCode
     *
     * @return self
     */
    public function setOriginCountryCode(string $originCountryCode) : self
    {
        $this->initialized['originCountryCode'] = true;
        $this->originCountryCode = $originCountryCode;
        return $this;
    }
    /**
     * If present, JNT will be used as the origin of country or territory code on the NAFTA form and the Product/Origincountry or territoryCode tag will be ignored.  Applies to NAFTA CO only.
     *
     * @return string
     */
    public function getJointProductionIndicator() : string
    {
        return $this->jointProductionIndicator;
    }
    /**
     * If present, JNT will be used as the origin of country or territory code on the NAFTA form and the Product/Origincountry or territoryCode tag will be ignored.  Applies to NAFTA CO only.
     *
     * @param string $jointProductionIndicator
     *
     * @return self
     */
    public function setJointProductionIndicator(string $jointProductionIndicator) : self
    {
        $this->initialized['jointProductionIndicator'] = true;
        $this->jointProductionIndicator = $jointProductionIndicator;
        return $this;
    }
    /**
    * For each good described in the Description of Goods field, where the good is subject to a regional value content (RVC) requirement, indicate NC if the RVC is calculated according to the net cost method; otherwise, indicate NO. If the RVC is calculated over a period of time then indicate "NC with begin/end date" by passing code "ND"  Applies to NAFTA CO only. Required for NAFTA CO.  Valid values:
    - NC
    - ND
    - NO
    
    *
    * @return string
    */
    public function getNetCostCode() : string
    {
        return $this->netCostCode;
    }
    /**
    * For each good described in the Description of Goods field, where the good is subject to a regional value content (RVC) requirement, indicate NC if the RVC is calculated according to the net cost method; otherwise, indicate NO. If the RVC is calculated over a period of time then indicate "NC with begin/end date" by passing code "ND"  Applies to NAFTA CO only. Required for NAFTA CO.  Valid values:
    - NC
    - ND
    - NO
    
    *
    * @param string $netCostCode
    *
    * @return self
    */
    public function setNetCostCode(string $netCostCode) : self
    {
        $this->initialized['netCostCode'] = true;
        $this->netCostCode = $netCostCode;
        return $this;
    }
    /**
     * Date Range for regional value content (RVC).  Applies to NAFTA CO only.
     *
     * @return ProductNetCostDateRange
     */
    public function getNetCostDateRange() : ProductNetCostDateRange
    {
        return $this->netCostDateRange;
    }
    /**
     * Date Range for regional value content (RVC).  Applies to NAFTA CO only.
     *
     * @param ProductNetCostDateRange $netCostDateRange
     *
     * @return self
     */
    public function setNetCostDateRange(ProductNetCostDateRange $netCostDateRange) : self
    {
        $this->initialized['netCostDateRange'] = true;
        $this->netCostDateRange = $netCostDateRange;
        return $this;
    }
    /**
    * Indicates the criterion (A through F) for each good described in the Description of Goods field if applicable. 
    
    The rules of origin are contained in Chapter Four and Annex 401. 
    
    Additional rules are described in Annex 703.2 (certain agricultural goods), Annex 300-B, Appendix 6 (certain textile goods) and Annex 308.1 (certain automatic data processing goods and their parts).  Applies to NAFTA CO only.
    *
    * @return string
    */
    public function getPreferenceCriteria() : string
    {
        return $this->preferenceCriteria;
    }
    /**
    * Indicates the criterion (A through F) for each good described in the Description of Goods field if applicable. 
    
    The rules of origin are contained in Chapter Four and Annex 401. 
    
    Additional rules are described in Annex 703.2 (certain agricultural goods), Annex 300-B, Appendix 6 (certain textile goods) and Annex 308.1 (certain automatic data processing goods and their parts).  Applies to NAFTA CO only.
    *
    * @param string $preferenceCriteria
    *
    * @return self
    */
    public function setPreferenceCriteria(string $preferenceCriteria) : self
    {
        $this->initialized['preferenceCriteria'] = true;
        $this->preferenceCriteria = $preferenceCriteria;
        return $this;
    }
    /**
    * Indicate the following:  Yes - If shipper is the producer of the good. If not, state 02, 03, and 04 depending on whether this certificate was based upon:  
    No [1] - Knowledge of whether the good qualifies as an originating good. 
    No [2] - Reliance on the producers written representation (other than a Certificate of Origin) that the good qualifies as an originating good. 
    No [3] - A completed and signed Certificate for the good voluntarily provided to the exporter by the producer.  Applicable for NAFTA CO and is required. Valid values: Yes, No [1], No [2], and No [3].
    *
    * @return string
    */
    public function getProducerInfo() : string
    {
        return $this->producerInfo;
    }
    /**
    * Indicate the following:  Yes - If shipper is the producer of the good. If not, state 02, 03, and 04 depending on whether this certificate was based upon:  
    No [1] - Knowledge of whether the good qualifies as an originating good. 
    No [2] - Reliance on the producers written representation (other than a Certificate of Origin) that the good qualifies as an originating good. 
    No [3] - A completed and signed Certificate for the good voluntarily provided to the exporter by the producer.  Applicable for NAFTA CO and is required. Valid values: Yes, No [1], No [2], and No [3].
    *
    * @param string $producerInfo
    *
    * @return self
    */
    public function setProducerInfo(string $producerInfo) : self
    {
        $this->initialized['producerInfo'] = true;
        $this->producerInfo = $producerInfo;
        return $this;
    }
    /**
     * Any special marks, codes, and numbers that may appear on package.  Applies to CO Only.
     *
     * @return string
     */
    public function getMarksAndNumbers() : string
    {
        return $this->marksAndNumbers;
    }
    /**
     * Any special marks, codes, and numbers that may appear on package.  Applies to CO Only.
     *
     * @param string $marksAndNumbers
     *
     * @return self
     */
    public function setMarksAndNumbers(string $marksAndNumbers) : self
    {
        $this->initialized['marksAndNumbers'] = true;
        $this->marksAndNumbers = $marksAndNumbers;
        return $this;
    }
    /**
     * The total number of packages, cartons, or containers for the commodity.  Applicable for CO and is required. Should be numeric. Valid characters are 0 -9.
     *
     * @return string
     */
    public function getNumberOfPackagesPerCommodity() : string
    {
        return $this->numberOfPackagesPerCommodity;
    }
    /**
     * The total number of packages, cartons, or containers for the commodity.  Applicable for CO and is required. Should be numeric. Valid characters are 0 -9.
     *
     * @param string $numberOfPackagesPerCommodity
     *
     * @return self
     */
    public function setNumberOfPackagesPerCommodity(string $numberOfPackagesPerCommodity) : self
    {
        $this->initialized['numberOfPackagesPerCommodity'] = true;
        $this->numberOfPackagesPerCommodity = $numberOfPackagesPerCommodity;
        return $this;
    }
    /**
     * The shipping weight, including containers, for each commodity with a separate Harmonized Tariff Code / Schedule B Number. This weight does not include carrier equipment.  Applies to CO and EEI forms only. Required for CO and EEI forms.
     *
     * @return ProductProductWeight
     */
    public function getProductWeight() : ProductProductWeight
    {
        return $this->productWeight;
    }
    /**
     * The shipping weight, including containers, for each commodity with a separate Harmonized Tariff Code / Schedule B Number. This weight does not include carrier equipment.  Applies to CO and EEI forms only. Required for CO and EEI forms.
     *
     * @param ProductProductWeight $productWeight
     *
     * @return self
     */
    public function setProductWeight(ProductProductWeight $productWeight) : self
    {
        $this->initialized['productWeight'] = true;
        $this->productWeight = $productWeight;
        return $this;
    }
    /**
     * Includes the following information for used self-propelled vehicles as defined in Customs regulations 19 CFR 192.1: The unique Vehicle Identification Number (VIN) in the proper format. Or The Product Identification Number (PIN) for those used self-propelled vehicles for which there are no VINs.  Or the Vehicle Title Number.  Applies to EEI forms only.
     *
     * @return string
     */
    public function getVehicleID() : string
    {
        return $this->vehicleID;
    }
    /**
     * Includes the following information for used self-propelled vehicles as defined in Customs regulations 19 CFR 192.1: The unique Vehicle Identification Number (VIN) in the proper format. Or The Product Identification Number (PIN) for those used self-propelled vehicles for which there are no VINs.  Or the Vehicle Title Number.  Applies to EEI forms only.
     *
     * @param string $vehicleID
     *
     * @return self
     */
    public function setVehicleID(string $vehicleID) : self
    {
        $this->initialized['vehicleID'] = true;
        $this->vehicleID = $vehicleID;
        return $this;
    }
    /**
     * Container tag for the schedule B information of a commodity.  Applies to EEI forms only. Required for EEI form
     *
     * @return ProductScheduleB
     */
    public function getScheduleB() : ProductScheduleB
    {
        return $this->scheduleB;
    }
    /**
     * Container tag for the schedule B information of a commodity.  Applies to EEI forms only. Required for EEI form
     *
     * @param ProductScheduleB $scheduleB
     *
     * @return self
     */
    public function setScheduleB(ProductScheduleB $scheduleB) : self
    {
        $this->initialized['scheduleB'] = true;
        $this->scheduleB = $scheduleB;
        return $this;
    }
    /**
     * Code indicating Domestic: Exports that have been produced, manufactured, or grown in the United States or Puerto Rico. This includes imported merchandise which has been enhanced in value or changed from the form in which imported by further manufacture or processing in the United States or Puerto Rico. Foreign: Merchandise that has entered the United States and is being exported again in the same condition as when imported.   Applies to EEI forms only. Required for EEI form.  Valid values:  D: Domestic; F: Foreign.
     *
     * @return string
     */
    public function getExportType() : string
    {
        return $this->exportType;
    }
    /**
     * Code indicating Domestic: Exports that have been produced, manufactured, or grown in the United States or Puerto Rico. This includes imported merchandise which has been enhanced in value or changed from the form in which imported by further manufacture or processing in the United States or Puerto Rico. Foreign: Merchandise that has entered the United States and is being exported again in the same condition as when imported.   Applies to EEI forms only. Required for EEI form.  Valid values:  D: Domestic; F: Foreign.
     *
     * @param string $exportType
     *
     * @return self
     */
    public function setExportType(string $exportType) : self
    {
        $this->initialized['exportType'] = true;
        $this->exportType = $exportType;
        return $this;
    }
    /**
    * This amount will always be USD.  Applies to EEI forms only. Required for EEI form. Valid characters are 0-9 and \'.\' (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including \'.\' and can hold up to 2 decimal places.
    
    Note: This value is calculated based on the Product/Unit/Value and /Product/Unit/Number (Number of Units * Price per Unit). If the total value is incorrect it will be replaced by the actual calculated total value.
    
    *
    * @return string
    */
    public function getSEDTotalValue() : string
    {
        return $this->sEDTotalValue;
    }
    /**
    * This amount will always be USD.  Applies to EEI forms only. Required for EEI form. Valid characters are 0-9 and \'.\' (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including \'.\' and can hold up to 2 decimal places.
    
    Note: This value is calculated based on the Product/Unit/Value and /Product/Unit/Number (Number of Units * Price per Unit). If the total value is incorrect it will be replaced by the actual calculated total value.
    
    *
    * @param string $sEDTotalValue
    *
    * @return self
    */
    public function setSEDTotalValue(string $sEDTotalValue) : self
    {
        $this->initialized['sEDTotalValue'] = true;
        $this->sEDTotalValue = $sEDTotalValue;
        return $this;
    }
    /**
     * Container tag for determining whether or not to exclude product information from a particular form.  If this container is not present we assume that the DEFAULT is selected which is "none" and all products will appear on all forms.
     *
     * @return ProductExcludeFromForm
     */
    public function getExcludeFromForm() : ProductExcludeFromForm
    {
        return $this->excludeFromForm;
    }
    /**
     * Container tag for determining whether or not to exclude product information from a particular form.  If this container is not present we assume that the DEFAULT is selected which is "none" and all products will appear on all forms.
     *
     * @param ProductExcludeFromForm $excludeFromForm
     *
     * @return self
     */
    public function setExcludeFromForm(ProductExcludeFromForm $excludeFromForm) : self
    {
        $this->initialized['excludeFromForm'] = true;
        $this->excludeFromForm = $excludeFromForm;
        return $this;
    }
    /**
     * Data Container holding package related information.  Required for packaging list and Air Freight Packing list.
     *
     * @return ProductPackingListInfo
     */
    public function getPackingListInfo() : ProductPackingListInfo
    {
        return $this->packingListInfo;
    }
    /**
     * Data Container holding package related information.  Required for packaging list and Air Freight Packing list.
     *
     * @param ProductPackingListInfo $packingListInfo
     *
     * @return self
     */
    public function setPackingListInfo(ProductPackingListInfo $packingListInfo) : self
    {
        $this->initialized['packingListInfo'] = true;
        $this->packingListInfo = $packingListInfo;
        return $this;
    }
    /**
     * Required for EEI form.  Applies to EEI form only.
     *
     * @return ProductEEIInformation
     */
    public function getEEIInformation() : ProductEEIInformation
    {
        return $this->eEIInformation;
    }
    /**
     * Required for EEI form.  Applies to EEI form only.
     *
     * @param ProductEEIInformation $eEIInformation
     *
     * @return self
     */
    public function setEEIInformation(ProductEEIInformation $eEIInformation) : self
    {
        $this->initialized['eEIInformation'] = true;
        $this->eEIInformation = $eEIInformation;
        return $this;
    }
}