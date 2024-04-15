<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileManifest extends \ArrayObject
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
     * Shipper's record for a shipment.
     *
     * @var ManifestShipper|null
     */
    protected $shipper;
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @var ManifestShipTo|null
     */
    protected $shipTo;
    /**
     * 
     *
     * @var list<ManifestReferenceNumber>|null
     */
    protected $referenceNumber;
    /**
     * Container for service code and description.
     *
     * @var ManifestService|null
     */
    protected $service;
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @var string|null
     */
    protected $pickupDate;
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @var string|null
     */
    protected $scheduledDeliveryDate;
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @var string|null
     */
    protected $scheduledDeliveryTime;
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. 
    Valid values:� 
    1 = Letter
    2 = Document (Non-Letter Document)
    3 = Non-Document
    4 = Pallet
    *
    * @var string|null
    */
    protected $documentsOnly;
    /**
     * 
     *
     * @var list<ManifestPackage>|null
     */
    protected $package;
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @var ManifestShipmentServiceOptions|null
     */
    protected $shipmentServiceOptions;
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @var string|null
     */
    protected $manufactureCountry;
    /**
     * Harmonized code of the package.
     *
     * @var string|null
     */
    protected $harmonizedCode;
    /**
     * Information about shipment's customs value.
     *
     * @var ManifestCustomsValue|null
     */
    protected $customsValue;
    /**
     * User-defined special instructions for delivery.
     *
     * @var string|null
     */
    protected $specialInstructions;
    /**
    * Shipment charge type.
    Valid values:
    C/F - Cost and Freight
    C/B - Consignee Billed Package
    F/C - Freight Collect
    DDP - Delivered Duty Paid
    VAT Unpaid
    FOB - Free On Board
    P/P - Prepaid
    F/D - Free Domicile
    T/P - Third Party Billing
    *
    * @var string|null
    */
    protected $shipmentChargeType;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var ManifestBillToAccount|null
     */
    protected $billToAccount;
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @var string|null
     */
    protected $consigneeBillIndicator;
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @var string|null
     */
    protected $collectBillIndicator;
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @var string|null
     */
    protected $locationAssured;
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @var string|null
     */
    protected $importControl;
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label .LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM� Print and Mail Label.
     *
     * @var string|null
     */
    protected $labelDeliveryMethod;
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @var string|null
     */
    protected $commercialInvoiceRemoval;
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @var string|null
     */
    protected $postalServiceTrackingID;
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @var string|null
     */
    protected $returnsFlexibleAccess;
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @var string|null
     */
    protected $uPScarbonneutral;
    /**
     * This element will have value �PAC� for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @var string|null
     */
    protected $product;
    /**
     * UPS Return and Exchange � This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not be appeared
     *
     * @var string|null
     */
    protected $uPSReturnsExchange;
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @var string|null
     */
    protected $liftGateOnDelivery;
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @var string|null
     */
    protected $liftGateOnPickUp;
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @var string|null
     */
    protected $pickupPreference;
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @var string|null
     */
    protected $deliveryPreference;
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @var string|null
     */
    protected $holdForPickupAtUPSAccessPoint;
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @var ManifestUAPAddress|null
     */
    protected $uAPAddress;
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @var string|null
     */
    protected $deliverToAddresseeOnlyIndicator;
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @var string|null
     */
    protected $uPSAccessPointCODIndicator;
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @var string|null
     */
    protected $clinicalTrialIndicator;
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @var string|null
     */
    protected $clinicalTrialIndicationNumber;
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @var string|null
     */
    protected $categoryAHazardousIndicator;
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @var string|null
     */
    protected $directDeliveryIndicator;
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @var string|null
     */
    protected $packageReleaseCodeIndicator;
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @var string|null
     */
    protected $proactiveResponseIndicator;
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @var string|null
     */
    protected $whiteGloveDeliveryIndicator;
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @var string|null
     */
    protected $roomOfChoiceIndicator;
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @var string|null
     */
    protected $installationDeliveryIndicator;
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @var string|null
     */
    protected $itemDisposalIndicator;
    /**
     * Lead Tracking Number in shipment
     *
     * @var string|null
     */
    protected $leadShipmentTrackingNumber;
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @var string|null
     */
    protected $saturdayNonPremiumCommercialDeliveryIndicator;
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @var string|null
     */
    protected $sundayNonPremiumCommercialDeliveryIndicator;
    /**
     * �Y� indicates that the UPS Premier accessorial is provided.
     *
     * @var string|null
     */
    protected $uPSPremierAccessorialIndicator;
    /**
     * Indicates the UPS Premier category applied to the package Valid values: 'PRS' � UPS Premier Silver, 'PRG' � UPS Premier Gold, 'PRP' - UPS Premier Platinum
     *
     * @var string|null
     */
    protected $uPSPremierCategoryCode;
    /**
     * Shipper's record for a shipment.
     *
     * @return ManifestShipper|null
     */
    public function getShipper() : ?ManifestShipper
    {
        return $this->shipper;
    }
    /**
     * Shipper's record for a shipment.
     *
     * @param ManifestShipper|null $shipper
     *
     * @return self
     */
    public function setShipper(?ManifestShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @return ManifestShipTo|null
     */
    public function getShipTo() : ?ManifestShipTo
    {
        return $this->shipTo;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @param ManifestShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?ManifestShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * 
     *
     * @return list<ManifestReferenceNumber>|null
     */
    public function getReferenceNumber() : ?array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<ManifestReferenceNumber>|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Container for service code and description.
     *
     * @return ManifestService|null
     */
    public function getService() : ?ManifestService
    {
        return $this->service;
    }
    /**
     * Container for service code and description.
     *
     * @param ManifestService|null $service
     *
     * @return self
     */
    public function setService(?ManifestService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @return string|null
     */
    public function getPickupDate() : ?string
    {
        return $this->pickupDate;
    }
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @param string|null $pickupDate
     *
     * @return self
     */
    public function setPickupDate(?string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @return string|null
     */
    public function getScheduledDeliveryDate() : ?string
    {
        return $this->scheduledDeliveryDate;
    }
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @param string|null $scheduledDeliveryDate
     *
     * @return self
     */
    public function setScheduledDeliveryDate(?string $scheduledDeliveryDate) : self
    {
        $this->initialized['scheduledDeliveryDate'] = true;
        $this->scheduledDeliveryDate = $scheduledDeliveryDate;
        return $this;
    }
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @return string|null
     */
    public function getScheduledDeliveryTime() : ?string
    {
        return $this->scheduledDeliveryTime;
    }
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @param string|null $scheduledDeliveryTime
     *
     * @return self
     */
    public function setScheduledDeliveryTime(?string $scheduledDeliveryTime) : self
    {
        $this->initialized['scheduledDeliveryTime'] = true;
        $this->scheduledDeliveryTime = $scheduledDeliveryTime;
        return $this;
    }
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. 
    Valid values:� 
    1 = Letter
    2 = Document (Non-Letter Document)
    3 = Non-Document
    4 = Pallet
    *
    * @return string|null
    */
    public function getDocumentsOnly() : ?string
    {
        return $this->documentsOnly;
    }
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. 
    Valid values:� 
    1 = Letter
    2 = Document (Non-Letter Document)
    3 = Non-Document
    4 = Pallet
    *
    * @param string|null $documentsOnly
    *
    * @return self
    */
    public function setDocumentsOnly(?string $documentsOnly) : self
    {
        $this->initialized['documentsOnly'] = true;
        $this->documentsOnly = $documentsOnly;
        return $this;
    }
    /**
     * 
     *
     * @return list<ManifestPackage>|null
     */
    public function getPackage() : ?array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<ManifestPackage>|null $package
     *
     * @return self
     */
    public function setPackage(?array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @return ManifestShipmentServiceOptions|null
     */
    public function getShipmentServiceOptions() : ?ManifestShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @param ManifestShipmentServiceOptions|null $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(?ManifestShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @return string|null
     */
    public function getManufactureCountry() : ?string
    {
        return $this->manufactureCountry;
    }
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @param string|null $manufactureCountry
     *
     * @return self
     */
    public function setManufactureCountry(?string $manufactureCountry) : self
    {
        $this->initialized['manufactureCountry'] = true;
        $this->manufactureCountry = $manufactureCountry;
        return $this;
    }
    /**
     * Harmonized code of the package.
     *
     * @return string|null
     */
    public function getHarmonizedCode() : ?string
    {
        return $this->harmonizedCode;
    }
    /**
     * Harmonized code of the package.
     *
     * @param string|null $harmonizedCode
     *
     * @return self
     */
    public function setHarmonizedCode(?string $harmonizedCode) : self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Information about shipment's customs value.
     *
     * @return ManifestCustomsValue|null
     */
    public function getCustomsValue() : ?ManifestCustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Information about shipment's customs value.
     *
     * @param ManifestCustomsValue|null $customsValue
     *
     * @return self
     */
    public function setCustomsValue(?ManifestCustomsValue $customsValue) : self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * User-defined special instructions for delivery.
     *
     * @return string|null
     */
    public function getSpecialInstructions() : ?string
    {
        return $this->specialInstructions;
    }
    /**
     * User-defined special instructions for delivery.
     *
     * @param string|null $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(?string $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
    * Shipment charge type.
    Valid values:
    C/F - Cost and Freight
    C/B - Consignee Billed Package
    F/C - Freight Collect
    DDP - Delivered Duty Paid
    VAT Unpaid
    FOB - Free On Board
    P/P - Prepaid
    F/D - Free Domicile
    T/P - Third Party Billing
    *
    * @return string|null
    */
    public function getShipmentChargeType() : ?string
    {
        return $this->shipmentChargeType;
    }
    /**
    * Shipment charge type.
    Valid values:
    C/F - Cost and Freight
    C/B - Consignee Billed Package
    F/C - Freight Collect
    DDP - Delivered Duty Paid
    VAT Unpaid
    FOB - Free On Board
    P/P - Prepaid
    F/D - Free Domicile
    T/P - Third Party Billing
    *
    * @param string|null $shipmentChargeType
    *
    * @return self
    */
    public function setShipmentChargeType(?string $shipmentChargeType) : self
    {
        $this->initialized['shipmentChargeType'] = true;
        $this->shipmentChargeType = $shipmentChargeType;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return ManifestBillToAccount|null
     */
    public function getBillToAccount() : ?ManifestBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param ManifestBillToAccount|null $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(?ManifestBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @return string|null
     */
    public function getConsigneeBillIndicator() : ?string
    {
        return $this->consigneeBillIndicator;
    }
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @param string|null $consigneeBillIndicator
     *
     * @return self
     */
    public function setConsigneeBillIndicator(?string $consigneeBillIndicator) : self
    {
        $this->initialized['consigneeBillIndicator'] = true;
        $this->consigneeBillIndicator = $consigneeBillIndicator;
        return $this;
    }
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @return string|null
     */
    public function getCollectBillIndicator() : ?string
    {
        return $this->collectBillIndicator;
    }
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @param string|null $collectBillIndicator
     *
     * @return self
     */
    public function setCollectBillIndicator(?string $collectBillIndicator) : self
    {
        $this->initialized['collectBillIndicator'] = true;
        $this->collectBillIndicator = $collectBillIndicator;
        return $this;
    }
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @return string|null
     */
    public function getLocationAssured() : ?string
    {
        return $this->locationAssured;
    }
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @param string|null $locationAssured
     *
     * @return self
     */
    public function setLocationAssured(?string $locationAssured) : self
    {
        $this->initialized['locationAssured'] = true;
        $this->locationAssured = $locationAssured;
        return $this;
    }
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @return string|null
     */
    public function getImportControl() : ?string
    {
        return $this->importControl;
    }
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @param string|null $importControl
     *
     * @return self
     */
    public function setImportControl(?string $importControl) : self
    {
        $this->initialized['importControl'] = true;
        $this->importControl = $importControl;
        return $this;
    }
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label .LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM� Print and Mail Label.
     *
     * @return string|null
     */
    public function getLabelDeliveryMethod() : ?string
    {
        return $this->labelDeliveryMethod;
    }
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label .LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM� Print and Mail Label.
     *
     * @param string|null $labelDeliveryMethod
     *
     * @return self
     */
    public function setLabelDeliveryMethod(?string $labelDeliveryMethod) : self
    {
        $this->initialized['labelDeliveryMethod'] = true;
        $this->labelDeliveryMethod = $labelDeliveryMethod;
        return $this;
    }
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @return string|null
     */
    public function getCommercialInvoiceRemoval() : ?string
    {
        return $this->commercialInvoiceRemoval;
    }
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @param string|null $commercialInvoiceRemoval
     *
     * @return self
     */
    public function setCommercialInvoiceRemoval(?string $commercialInvoiceRemoval) : self
    {
        $this->initialized['commercialInvoiceRemoval'] = true;
        $this->commercialInvoiceRemoval = $commercialInvoiceRemoval;
        return $this;
    }
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @return string|null
     */
    public function getPostalServiceTrackingID() : ?string
    {
        return $this->postalServiceTrackingID;
    }
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @param string|null $postalServiceTrackingID
     *
     * @return self
     */
    public function setPostalServiceTrackingID(?string $postalServiceTrackingID) : self
    {
        $this->initialized['postalServiceTrackingID'] = true;
        $this->postalServiceTrackingID = $postalServiceTrackingID;
        return $this;
    }
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @return string|null
     */
    public function getReturnsFlexibleAccess() : ?string
    {
        return $this->returnsFlexibleAccess;
    }
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @param string|null $returnsFlexibleAccess
     *
     * @return self
     */
    public function setReturnsFlexibleAccess(?string $returnsFlexibleAccess) : self
    {
        $this->initialized['returnsFlexibleAccess'] = true;
        $this->returnsFlexibleAccess = $returnsFlexibleAccess;
        return $this;
    }
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @return string|null
     */
    public function getUPScarbonneutral() : ?string
    {
        return $this->uPScarbonneutral;
    }
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @param string|null $uPScarbonneutral
     *
     * @return self
     */
    public function setUPScarbonneutral(?string $uPScarbonneutral) : self
    {
        $this->initialized['uPScarbonneutral'] = true;
        $this->uPScarbonneutral = $uPScarbonneutral;
        return $this;
    }
    /**
     * This element will have value �PAC� for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @return string|null
     */
    public function getProduct() : ?string
    {
        return $this->product;
    }
    /**
     * This element will have value �PAC� for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @param string|null $product
     *
     * @return self
     */
    public function setProduct(?string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * UPS Return and Exchange � This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not be appeared
     *
     * @return string|null
     */
    public function getUPSReturnsExchange() : ?string
    {
        return $this->uPSReturnsExchange;
    }
    /**
     * UPS Return and Exchange � This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not be appeared
     *
     * @param string|null $uPSReturnsExchange
     *
     * @return self
     */
    public function setUPSReturnsExchange(?string $uPSReturnsExchange) : self
    {
        $this->initialized['uPSReturnsExchange'] = true;
        $this->uPSReturnsExchange = $uPSReturnsExchange;
        return $this;
    }
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @return string|null
     */
    public function getLiftGateOnDelivery() : ?string
    {
        return $this->liftGateOnDelivery;
    }
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @param string|null $liftGateOnDelivery
     *
     * @return self
     */
    public function setLiftGateOnDelivery(?string $liftGateOnDelivery) : self
    {
        $this->initialized['liftGateOnDelivery'] = true;
        $this->liftGateOnDelivery = $liftGateOnDelivery;
        return $this;
    }
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @return string|null
     */
    public function getLiftGateOnPickUp() : ?string
    {
        return $this->liftGateOnPickUp;
    }
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @param string|null $liftGateOnPickUp
     *
     * @return self
     */
    public function setLiftGateOnPickUp(?string $liftGateOnPickUp) : self
    {
        $this->initialized['liftGateOnPickUp'] = true;
        $this->liftGateOnPickUp = $liftGateOnPickUp;
        return $this;
    }
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @return string|null
     */
    public function getPickupPreference() : ?string
    {
        return $this->pickupPreference;
    }
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @param string|null $pickupPreference
     *
     * @return self
     */
    public function setPickupPreference(?string $pickupPreference) : self
    {
        $this->initialized['pickupPreference'] = true;
        $this->pickupPreference = $pickupPreference;
        return $this;
    }
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @return string|null
     */
    public function getDeliveryPreference() : ?string
    {
        return $this->deliveryPreference;
    }
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @param string|null $deliveryPreference
     *
     * @return self
     */
    public function setDeliveryPreference(?string $deliveryPreference) : self
    {
        $this->initialized['deliveryPreference'] = true;
        $this->deliveryPreference = $deliveryPreference;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @return string|null
     */
    public function getHoldForPickupAtUPSAccessPoint() : ?string
    {
        return $this->holdForPickupAtUPSAccessPoint;
    }
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @param string|null $holdForPickupAtUPSAccessPoint
     *
     * @return self
     */
    public function setHoldForPickupAtUPSAccessPoint(?string $holdForPickupAtUPSAccessPoint) : self
    {
        $this->initialized['holdForPickupAtUPSAccessPoint'] = true;
        $this->holdForPickupAtUPSAccessPoint = $holdForPickupAtUPSAccessPoint;
        return $this;
    }
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @return ManifestUAPAddress|null
     */
    public function getUAPAddress() : ?ManifestUAPAddress
    {
        return $this->uAPAddress;
    }
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @param ManifestUAPAddress|null $uAPAddress
     *
     * @return self
     */
    public function setUAPAddress(?ManifestUAPAddress $uAPAddress) : self
    {
        $this->initialized['uAPAddress'] = true;
        $this->uAPAddress = $uAPAddress;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @return string|null
     */
    public function getDeliverToAddresseeOnlyIndicator() : ?string
    {
        return $this->deliverToAddresseeOnlyIndicator;
    }
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @param string|null $deliverToAddresseeOnlyIndicator
     *
     * @return self
     */
    public function setDeliverToAddresseeOnlyIndicator(?string $deliverToAddresseeOnlyIndicator) : self
    {
        $this->initialized['deliverToAddresseeOnlyIndicator'] = true;
        $this->deliverToAddresseeOnlyIndicator = $deliverToAddresseeOnlyIndicator;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @return string|null
     */
    public function getUPSAccessPointCODIndicator() : ?string
    {
        return $this->uPSAccessPointCODIndicator;
    }
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @param string|null $uPSAccessPointCODIndicator
     *
     * @return self
     */
    public function setUPSAccessPointCODIndicator(?string $uPSAccessPointCODIndicator) : self
    {
        $this->initialized['uPSAccessPointCODIndicator'] = true;
        $this->uPSAccessPointCODIndicator = $uPSAccessPointCODIndicator;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @return string|null
     */
    public function getClinicalTrialIndicator() : ?string
    {
        return $this->clinicalTrialIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @param string|null $clinicalTrialIndicator
     *
     * @return self
     */
    public function setClinicalTrialIndicator(?string $clinicalTrialIndicator) : self
    {
        $this->initialized['clinicalTrialIndicator'] = true;
        $this->clinicalTrialIndicator = $clinicalTrialIndicator;
        return $this;
    }
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @return string|null
     */
    public function getClinicalTrialIndicationNumber() : ?string
    {
        return $this->clinicalTrialIndicationNumber;
    }
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @param string|null $clinicalTrialIndicationNumber
     *
     * @return self
     */
    public function setClinicalTrialIndicationNumber(?string $clinicalTrialIndicationNumber) : self
    {
        $this->initialized['clinicalTrialIndicationNumber'] = true;
        $this->clinicalTrialIndicationNumber = $clinicalTrialIndicationNumber;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @return string|null
     */
    public function getCategoryAHazardousIndicator() : ?string
    {
        return $this->categoryAHazardousIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @param string|null $categoryAHazardousIndicator
     *
     * @return self
     */
    public function setCategoryAHazardousIndicator(?string $categoryAHazardousIndicator) : self
    {
        $this->initialized['categoryAHazardousIndicator'] = true;
        $this->categoryAHazardousIndicator = $categoryAHazardousIndicator;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @return string|null
     */
    public function getDirectDeliveryIndicator() : ?string
    {
        return $this->directDeliveryIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @param string|null $directDeliveryIndicator
     *
     * @return self
     */
    public function setDirectDeliveryIndicator(?string $directDeliveryIndicator) : self
    {
        $this->initialized['directDeliveryIndicator'] = true;
        $this->directDeliveryIndicator = $directDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @return string|null
     */
    public function getPackageReleaseCodeIndicator() : ?string
    {
        return $this->packageReleaseCodeIndicator;
    }
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @param string|null $packageReleaseCodeIndicator
     *
     * @return self
     */
    public function setPackageReleaseCodeIndicator(?string $packageReleaseCodeIndicator) : self
    {
        $this->initialized['packageReleaseCodeIndicator'] = true;
        $this->packageReleaseCodeIndicator = $packageReleaseCodeIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @return string|null
     */
    public function getProactiveResponseIndicator() : ?string
    {
        return $this->proactiveResponseIndicator;
    }
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @param string|null $proactiveResponseIndicator
     *
     * @return self
     */
    public function setProactiveResponseIndicator(?string $proactiveResponseIndicator) : self
    {
        $this->initialized['proactiveResponseIndicator'] = true;
        $this->proactiveResponseIndicator = $proactiveResponseIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @return string|null
     */
    public function getWhiteGloveDeliveryIndicator() : ?string
    {
        return $this->whiteGloveDeliveryIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @param string|null $whiteGloveDeliveryIndicator
     *
     * @return self
     */
    public function setWhiteGloveDeliveryIndicator(?string $whiteGloveDeliveryIndicator) : self
    {
        $this->initialized['whiteGloveDeliveryIndicator'] = true;
        $this->whiteGloveDeliveryIndicator = $whiteGloveDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @return string|null
     */
    public function getRoomOfChoiceIndicator() : ?string
    {
        return $this->roomOfChoiceIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @param string|null $roomOfChoiceIndicator
     *
     * @return self
     */
    public function setRoomOfChoiceIndicator(?string $roomOfChoiceIndicator) : self
    {
        $this->initialized['roomOfChoiceIndicator'] = true;
        $this->roomOfChoiceIndicator = $roomOfChoiceIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @return string|null
     */
    public function getInstallationDeliveryIndicator() : ?string
    {
        return $this->installationDeliveryIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @param string|null $installationDeliveryIndicator
     *
     * @return self
     */
    public function setInstallationDeliveryIndicator(?string $installationDeliveryIndicator) : self
    {
        $this->initialized['installationDeliveryIndicator'] = true;
        $this->installationDeliveryIndicator = $installationDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @return string|null
     */
    public function getItemDisposalIndicator() : ?string
    {
        return $this->itemDisposalIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @param string|null $itemDisposalIndicator
     *
     * @return self
     */
    public function setItemDisposalIndicator(?string $itemDisposalIndicator) : self
    {
        $this->initialized['itemDisposalIndicator'] = true;
        $this->itemDisposalIndicator = $itemDisposalIndicator;
        return $this;
    }
    /**
     * Lead Tracking Number in shipment
     *
     * @return string|null
     */
    public function getLeadShipmentTrackingNumber() : ?string
    {
        return $this->leadShipmentTrackingNumber;
    }
    /**
     * Lead Tracking Number in shipment
     *
     * @param string|null $leadShipmentTrackingNumber
     *
     * @return self
     */
    public function setLeadShipmentTrackingNumber(?string $leadShipmentTrackingNumber) : self
    {
        $this->initialized['leadShipmentTrackingNumber'] = true;
        $this->leadShipmentTrackingNumber = $leadShipmentTrackingNumber;
        return $this;
    }
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @return string|null
     */
    public function getSaturdayNonPremiumCommercialDeliveryIndicator() : ?string
    {
        return $this->saturdayNonPremiumCommercialDeliveryIndicator;
    }
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @param string|null $saturdayNonPremiumCommercialDeliveryIndicator
     *
     * @return self
     */
    public function setSaturdayNonPremiumCommercialDeliveryIndicator(?string $saturdayNonPremiumCommercialDeliveryIndicator) : self
    {
        $this->initialized['saturdayNonPremiumCommercialDeliveryIndicator'] = true;
        $this->saturdayNonPremiumCommercialDeliveryIndicator = $saturdayNonPremiumCommercialDeliveryIndicator;
        return $this;
    }
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @return string|null
     */
    public function getSundayNonPremiumCommercialDeliveryIndicator() : ?string
    {
        return $this->sundayNonPremiumCommercialDeliveryIndicator;
    }
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @param string|null $sundayNonPremiumCommercialDeliveryIndicator
     *
     * @return self
     */
    public function setSundayNonPremiumCommercialDeliveryIndicator(?string $sundayNonPremiumCommercialDeliveryIndicator) : self
    {
        $this->initialized['sundayNonPremiumCommercialDeliveryIndicator'] = true;
        $this->sundayNonPremiumCommercialDeliveryIndicator = $sundayNonPremiumCommercialDeliveryIndicator;
        return $this;
    }
    /**
     * �Y� indicates that the UPS Premier accessorial is provided.
     *
     * @return string|null
     */
    public function getUPSPremierAccessorialIndicator() : ?string
    {
        return $this->uPSPremierAccessorialIndicator;
    }
    /**
     * �Y� indicates that the UPS Premier accessorial is provided.
     *
     * @param string|null $uPSPremierAccessorialIndicator
     *
     * @return self
     */
    public function setUPSPremierAccessorialIndicator(?string $uPSPremierAccessorialIndicator) : self
    {
        $this->initialized['uPSPremierAccessorialIndicator'] = true;
        $this->uPSPremierAccessorialIndicator = $uPSPremierAccessorialIndicator;
        return $this;
    }
    /**
     * Indicates the UPS Premier category applied to the package Valid values: 'PRS' � UPS Premier Silver, 'PRG' � UPS Premier Gold, 'PRP' - UPS Premier Platinum
     *
     * @return string|null
     */
    public function getUPSPremierCategoryCode() : ?string
    {
        return $this->uPSPremierCategoryCode;
    }
    /**
     * Indicates the UPS Premier category applied to the package Valid values: 'PRS' � UPS Premier Silver, 'PRG' � UPS Premier Gold, 'PRP' - UPS Premier Platinum
     *
     * @param string|null $uPSPremierCategoryCode
     *
     * @return self
     */
    public function setUPSPremierCategoryCode(?string $uPSPremierCategoryCode) : self
    {
        $this->initialized['uPSPremierCategoryCode'] = true;
        $this->uPSPremierCategoryCode = $uPSPremierCategoryCode;
        return $this;
    }
}