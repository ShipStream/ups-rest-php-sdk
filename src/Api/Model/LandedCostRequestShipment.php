<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequestShipment extends \ArrayObject
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
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API and will be  returned with the Landed Cost Quote to indicate which shipment the tariffs apply to. There are similar IDs associated with the Product and Order objects.
     *
     * @var string
     */
    protected $id;
    /**
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendix.
     *
     * @var string
     */
    protected $importCountryCode;
    /**
     * Province/State is supported only for a few countries such as Mexico, Canada, etc. Please check Province list in the Appendix
     *
     * @var string
     */
    protected $importProvince;
    /**
     * Defaults to current date if not provided. Date format: YYYY-MM-DD.
     *
     * @var string
     */
    protected $shipDate;
    /**
    * Supported Incoterm Values:
    1. CFR - Cost & Freight 
    2. CIF - Cost, Insurance & Freight 
    3. CIP - Carriage and Insurance Paid-To 
    4. CPT - Carriage Paid-To 
    5. DAP - Delivered At Place 
    6. DAT - Delivered At Terminal 
    7. DDP - Delivered Duty Paid 
    8. DPU - Delivered at Place Unloaded 
    9. EXW - Ex Works 
    10. FAS - Free Alongside Ship 
    11. FCA - Free Carrier 
    12. FOB - Free On Board (Default)
    *
    * @var string
    */
    protected $incoterms = 'FOB';
    /**
     * Specifies the export/ship-from/origin country of the shipment. Please check country List in the Appendix section.
     **Note:** Export country code must be different from the import country code.
     *
     * @var string
     */
    protected $exportCountryCode;
    /**
    * The modes of transportation (in upper case).
    Supported Values: 
    1. INT_AIR 2. 
    INT_OCEAN 
    3. INT_RAIL 
    4. INT_TRUCK 
    5. DOM_AIR 
    6. DOM_OCEAN 
    7. DOM_RAIL 
    8. DOM_TRUCK 
    
    Default value will vary based on the import country.
    *
    * @var string
    */
    protected $transModes;
    /**
    * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. 
    
    Allowed values:
    1. Any non-negative floating-point number. 
    2. Numeric value with optional decimal value.
    *
    * @var float
    */
    protected $transportCost;
    /**
    * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc.
    
    Supported Shipment Types: 
    1. GIFT 
    2. COMMERCIAL 
    3. SALE 
    4. SAMPLE 
    5. REPAIR 
    6. RETURN 
    7. OTHER 
    
    Default value will vary and based on import country.
    *
    * @var string
    */
    protected $shipmentType;
    /**
     * Array of shipment item objects (commodities), that are in a shipment.
     *
     * @var list<RequestShipmentItems>
     */
    protected $shipmentItems;
    /**
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API and will be  returned with the Landed Cost Quote to indicate which shipment the tariffs apply to. There are similar IDs associated with the Product and Order objects.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API and will be  returned with the Landed Cost Quote to indicate which shipment the tariffs apply to. There are similar IDs associated with the Product and Order objects.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendix.
     *
     * @return string
     */
    public function getImportCountryCode() : string
    {
        return $this->importCountryCode;
    }
    /**
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendix.
     *
     * @param string $importCountryCode
     *
     * @return self
     */
    public function setImportCountryCode(string $importCountryCode) : self
    {
        $this->initialized['importCountryCode'] = true;
        $this->importCountryCode = $importCountryCode;
        return $this;
    }
    /**
     * Province/State is supported only for a few countries such as Mexico, Canada, etc. Please check Province list in the Appendix
     *
     * @return string
     */
    public function getImportProvince() : string
    {
        return $this->importProvince;
    }
    /**
     * Province/State is supported only for a few countries such as Mexico, Canada, etc. Please check Province list in the Appendix
     *
     * @param string $importProvince
     *
     * @return self
     */
    public function setImportProvince(string $importProvince) : self
    {
        $this->initialized['importProvince'] = true;
        $this->importProvince = $importProvince;
        return $this;
    }
    /**
     * Defaults to current date if not provided. Date format: YYYY-MM-DD.
     *
     * @return string
     */
    public function getShipDate() : string
    {
        return $this->shipDate;
    }
    /**
     * Defaults to current date if not provided. Date format: YYYY-MM-DD.
     *
     * @param string $shipDate
     *
     * @return self
     */
    public function setShipDate(string $shipDate) : self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
    * Supported Incoterm Values:
    1. CFR - Cost & Freight 
    2. CIF - Cost, Insurance & Freight 
    3. CIP - Carriage and Insurance Paid-To 
    4. CPT - Carriage Paid-To 
    5. DAP - Delivered At Place 
    6. DAT - Delivered At Terminal 
    7. DDP - Delivered Duty Paid 
    8. DPU - Delivered at Place Unloaded 
    9. EXW - Ex Works 
    10. FAS - Free Alongside Ship 
    11. FCA - Free Carrier 
    12. FOB - Free On Board (Default)
    *
    * @return string
    */
    public function getIncoterms() : string
    {
        return $this->incoterms;
    }
    /**
    * Supported Incoterm Values:
    1. CFR - Cost & Freight 
    2. CIF - Cost, Insurance & Freight 
    3. CIP - Carriage and Insurance Paid-To 
    4. CPT - Carriage Paid-To 
    5. DAP - Delivered At Place 
    6. DAT - Delivered At Terminal 
    7. DDP - Delivered Duty Paid 
    8. DPU - Delivered at Place Unloaded 
    9. EXW - Ex Works 
    10. FAS - Free Alongside Ship 
    11. FCA - Free Carrier 
    12. FOB - Free On Board (Default)
    *
    * @param string $incoterms
    *
    * @return self
    */
    public function setIncoterms(string $incoterms) : self
    {
        $this->initialized['incoterms'] = true;
        $this->incoterms = $incoterms;
        return $this;
    }
    /**
     * Specifies the export/ship-from/origin country of the shipment. Please check country List in the Appendix section.
     **Note:** Export country code must be different from the import country code.
     *
     * @return string
     */
    public function getExportCountryCode() : string
    {
        return $this->exportCountryCode;
    }
    /**
     * Specifies the export/ship-from/origin country of the shipment. Please check country List in the Appendix section.
     **Note:** Export country code must be different from the import country code.
     *
     * @param string $exportCountryCode
     *
     * @return self
     */
    public function setExportCountryCode(string $exportCountryCode) : self
    {
        $this->initialized['exportCountryCode'] = true;
        $this->exportCountryCode = $exportCountryCode;
        return $this;
    }
    /**
    * The modes of transportation (in upper case).
    Supported Values: 
    1. INT_AIR 2. 
    INT_OCEAN 
    3. INT_RAIL 
    4. INT_TRUCK 
    5. DOM_AIR 
    6. DOM_OCEAN 
    7. DOM_RAIL 
    8. DOM_TRUCK 
    
    Default value will vary based on the import country.
    *
    * @return string
    */
    public function getTransModes() : string
    {
        return $this->transModes;
    }
    /**
    * The modes of transportation (in upper case).
    Supported Values: 
    1. INT_AIR 2. 
    INT_OCEAN 
    3. INT_RAIL 
    4. INT_TRUCK 
    5. DOM_AIR 
    6. DOM_OCEAN 
    7. DOM_RAIL 
    8. DOM_TRUCK 
    
    Default value will vary based on the import country.
    *
    * @param string $transModes
    *
    * @return self
    */
    public function setTransModes(string $transModes) : self
    {
        $this->initialized['transModes'] = true;
        $this->transModes = $transModes;
        return $this;
    }
    /**
    * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. 
    
    Allowed values:
    1. Any non-negative floating-point number. 
    2. Numeric value with optional decimal value.
    *
    * @return float
    */
    public function getTransportCost() : float
    {
        return $this->transportCost;
    }
    /**
    * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. 
    
    Allowed values:
    1. Any non-negative floating-point number. 
    2. Numeric value with optional decimal value.
    *
    * @param float $transportCost
    *
    * @return self
    */
    public function setTransportCost(float $transportCost) : self
    {
        $this->initialized['transportCost'] = true;
        $this->transportCost = $transportCost;
        return $this;
    }
    /**
    * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc.
    
    Supported Shipment Types: 
    1. GIFT 
    2. COMMERCIAL 
    3. SALE 
    4. SAMPLE 
    5. REPAIR 
    6. RETURN 
    7. OTHER 
    
    Default value will vary and based on import country.
    *
    * @return string
    */
    public function getShipmentType() : string
    {
        return $this->shipmentType;
    }
    /**
    * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc.
    
    Supported Shipment Types: 
    1. GIFT 
    2. COMMERCIAL 
    3. SALE 
    4. SAMPLE 
    5. REPAIR 
    6. RETURN 
    7. OTHER 
    
    Default value will vary and based on import country.
    *
    * @param string $shipmentType
    *
    * @return self
    */
    public function setShipmentType(string $shipmentType) : self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * Array of shipment item objects (commodities), that are in a shipment.
     *
     * @return list<RequestShipmentItems>
     */
    public function getShipmentItems() : array
    {
        return $this->shipmentItems;
    }
    /**
     * Array of shipment item objects (commodities), that are in a shipment.
     *
     * @param list<RequestShipmentItems> $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(array $shipmentItems) : self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
}