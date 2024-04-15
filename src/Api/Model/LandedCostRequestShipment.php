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
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API that will be  returned with the Landed Cost Quote to indicate which shipment  tariffs apply to. There are similar IDs associated with the Product  and Order objects.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendix.
     *
     * @var string|null
     */
    protected $importCountryCode;
    /**
     * Province/State is only supported for a few countries such as Mexico, Canada, etc. Check Province List in the Appendix
     *
     * @var string|null
     */
    protected $importProvince;
    /**
     * Default by current date if not provided. Valid date in YYYY-MM-DD format.
     *
     * @var string|null
     */
    protected $shipDate;
    /**
     * Supported Incoterm Values: 1. CFR Cost & Freight 2. CIF Cost, Insurance & Freight 3. CIP Carriage and Insurance Paid To 4. CPT Carriage Paid To 5. DAP Delivered At Place 6. DAT Delivered At Terminal 7. DDP Delivered Duty Paid 8. DPU Delivered at Place Unloaded 9. EXW Ex Works 10. FAS Free Alongside Ship 11. FCA Free Carrier 12. FOB Free On Board (Default)
     *
     * @var string|null
     */
    protected $incoterms = 'FOB';
    /**
     * Specifies the export/ship from/origin country of the shipment. Check Country List in the Appendix section. Note: Export country code must be different from Import country code
     *
     * @var string|null
     */
    protected $exportCountryCode;
    /**
     * The modes of transportation. [Upper case alphabet]. Supported Values: 1. INT_AIR 2. INT_OCEAN 3. INT_RAIL 4. INT_TRUCK 5. DOM_AIR 6. DOM_OCEAN 7. DOM_RAIL 8. DOM_TRUCK Default value will be varied and based on import country.
     *
     * @var string|null
     */
    protected $transModes;
    /**
     * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. Allowed value: 1. Any non-negative floating-point number. 2. Numeric value with optional decimal value.
     *
     * @var float|null
     */
    protected $transportCost;
    /**
     * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc. Supported Shipment Type: 1. GIFT 2. COMMERCIAL 3. SALE 4. SAMPLE 5. REPAIR 6. RETURN 7. OTHER Default value will be varied and based on import country
     *
     * @var string|null
     */
    protected $shipmentType;
    /**
     * Array of shipment item (commodity) objects that are in a shipment.
     *
     * @var list<RequestShipmentItems>|null
     */
    protected $shipmentItems;
    /**
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API that will be  returned with the Landed Cost Quote to indicate which shipment  tariffs apply to. There are similar IDs associated with the Product  and Order objects.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote. It is an arbitrary string provided by the user of the API that will be  returned with the Landed Cost Quote to indicate which shipment  tariffs apply to. There are similar IDs associated with the Product  and Order objects.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendix.
     *
     * @return string|null
     */
    public function getImportCountryCode() : ?string
    {
        return $this->importCountryCode;
    }
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendix.
     *
     * @param string|null $importCountryCode
     *
     * @return self
     */
    public function setImportCountryCode(?string $importCountryCode) : self
    {
        $this->initialized['importCountryCode'] = true;
        $this->importCountryCode = $importCountryCode;
        return $this;
    }
    /**
     * Province/State is only supported for a few countries such as Mexico, Canada, etc. Check Province List in the Appendix
     *
     * @return string|null
     */
    public function getImportProvince() : ?string
    {
        return $this->importProvince;
    }
    /**
     * Province/State is only supported for a few countries such as Mexico, Canada, etc. Check Province List in the Appendix
     *
     * @param string|null $importProvince
     *
     * @return self
     */
    public function setImportProvince(?string $importProvince) : self
    {
        $this->initialized['importProvince'] = true;
        $this->importProvince = $importProvince;
        return $this;
    }
    /**
     * Default by current date if not provided. Valid date in YYYY-MM-DD format.
     *
     * @return string|null
     */
    public function getShipDate() : ?string
    {
        return $this->shipDate;
    }
    /**
     * Default by current date if not provided. Valid date in YYYY-MM-DD format.
     *
     * @param string|null $shipDate
     *
     * @return self
     */
    public function setShipDate(?string $shipDate) : self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
     * Supported Incoterm Values: 1. CFR Cost & Freight 2. CIF Cost, Insurance & Freight 3. CIP Carriage and Insurance Paid To 4. CPT Carriage Paid To 5. DAP Delivered At Place 6. DAT Delivered At Terminal 7. DDP Delivered Duty Paid 8. DPU Delivered at Place Unloaded 9. EXW Ex Works 10. FAS Free Alongside Ship 11. FCA Free Carrier 12. FOB Free On Board (Default)
     *
     * @return string|null
     */
    public function getIncoterms() : ?string
    {
        return $this->incoterms;
    }
    /**
     * Supported Incoterm Values: 1. CFR Cost & Freight 2. CIF Cost, Insurance & Freight 3. CIP Carriage and Insurance Paid To 4. CPT Carriage Paid To 5. DAP Delivered At Place 6. DAT Delivered At Terminal 7. DDP Delivered Duty Paid 8. DPU Delivered at Place Unloaded 9. EXW Ex Works 10. FAS Free Alongside Ship 11. FCA Free Carrier 12. FOB Free On Board (Default)
     *
     * @param string|null $incoterms
     *
     * @return self
     */
    public function setIncoterms(?string $incoterms) : self
    {
        $this->initialized['incoterms'] = true;
        $this->incoterms = $incoterms;
        return $this;
    }
    /**
     * Specifies the export/ship from/origin country of the shipment. Check Country List in the Appendix section. Note: Export country code must be different from Import country code
     *
     * @return string|null
     */
    public function getExportCountryCode() : ?string
    {
        return $this->exportCountryCode;
    }
    /**
     * Specifies the export/ship from/origin country of the shipment. Check Country List in the Appendix section. Note: Export country code must be different from Import country code
     *
     * @param string|null $exportCountryCode
     *
     * @return self
     */
    public function setExportCountryCode(?string $exportCountryCode) : self
    {
        $this->initialized['exportCountryCode'] = true;
        $this->exportCountryCode = $exportCountryCode;
        return $this;
    }
    /**
     * The modes of transportation. [Upper case alphabet]. Supported Values: 1. INT_AIR 2. INT_OCEAN 3. INT_RAIL 4. INT_TRUCK 5. DOM_AIR 6. DOM_OCEAN 7. DOM_RAIL 8. DOM_TRUCK Default value will be varied and based on import country.
     *
     * @return string|null
     */
    public function getTransModes() : ?string
    {
        return $this->transModes;
    }
    /**
     * The modes of transportation. [Upper case alphabet]. Supported Values: 1. INT_AIR 2. INT_OCEAN 3. INT_RAIL 4. INT_TRUCK 5. DOM_AIR 6. DOM_OCEAN 7. DOM_RAIL 8. DOM_TRUCK Default value will be varied and based on import country.
     *
     * @param string|null $transModes
     *
     * @return self
     */
    public function setTransModes(?string $transModes) : self
    {
        $this->initialized['transModes'] = true;
        $this->transModes = $transModes;
        return $this;
    }
    /**
     * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. Allowed value: 1. Any non-negative floating-point number. 2. Numeric value with optional decimal value.
     *
     * @return float|null
     */
    public function getTransportCost() : ?float
    {
        return $this->transportCost;
    }
    /**
     * Specifies the Freight charge or transport costs, which are used for tariff calculations. Landed cost result might have some dependency on the freight charges in some countries. Therefore, freight amount should be always provided for accurate Landed Cost result. Allowed value: 1. Any non-negative floating-point number. 2. Numeric value with optional decimal value.
     *
     * @param float|null $transportCost
     *
     * @return self
     */
    public function setTransportCost(?float $transportCost) : self
    {
        $this->initialized['transportCost'] = true;
        $this->transportCost = $transportCost;
        return $this;
    }
    /**
     * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc. Supported Shipment Type: 1. GIFT 2. COMMERCIAL 3. SALE 4. SAMPLE 5. REPAIR 6. RETURN 7. OTHER Default value will be varied and based on import country
     *
     * @return string|null
     */
    public function getShipmentType() : ?string
    {
        return $this->shipmentType;
    }
    /**
     * Specifies the shipment type such as Gift, Document, Commercial (Sale), etc. Supported Shipment Type: 1. GIFT 2. COMMERCIAL 3. SALE 4. SAMPLE 5. REPAIR 6. RETURN 7. OTHER Default value will be varied and based on import country
     *
     * @param string|null $shipmentType
     *
     * @return self
     */
    public function setShipmentType(?string $shipmentType) : self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * Array of shipment item (commodity) objects that are in a shipment.
     *
     * @return list<RequestShipmentItems>|null
     */
    public function getShipmentItems() : ?array
    {
        return $this->shipmentItems;
    }
    /**
     * Array of shipment item (commodity) objects that are in a shipment.
     *
     * @param list<RequestShipmentItems>|null $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(?array $shipmentItems) : self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
}