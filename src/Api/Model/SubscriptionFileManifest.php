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
     * @var ManifestShipper
     */
    protected $shipper;
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @var ManifestShipTo
     */
    protected $shipTo;
    /**
     * Shipment-level reference numbers.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ManifestReferenceNumber>
     */
    protected $referenceNumber;
    /**
     * Container for service code and description.
     *
     * @var ManifestService
     */
    protected $service;
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @var string
     */
    protected $pickupDate;
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @var string
     */
    protected $scheduledDeliveryDate;
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @var string
     */
    protected $scheduledDeliveryTime;
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. Valid values:
    - 1 = Letter
    - 2 = Document (Non-Letter Document)
    - 3 = Non-Document
    - 4 = Pallet
    
    *
    * @var string
    */
    protected $documentsOnly;
    /**
     * Defines a package.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ManifestPackage>
     */
    protected $package;
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @var ManifestShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @var string
     */
    protected $manufactureCountry;
    /**
     * Harmonized code of the package.
     *
     * @var string
     */
    protected $harmonizedCode;
    /**
     * Information about shipment's customs value.
     *
     * @var ManifestCustomsValue
     */
    protected $customsValue;
    /**
     * User-defined special instructions for delivery.
     *
     * @var string
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
    * @var string
    */
    protected $shipmentChargeType;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var ManifestBillToAccount
     */
    protected $billToAccount;
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @var string
     */
    protected $consigneeBillIndicator;
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @var string
     */
    protected $collectBillIndicator;
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @var string
     */
    protected $locationAssured;
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @var string
     */
    protected $importControl;
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label. LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM Print and Mail Label.
     *
     * @var string
     */
    protected $labelDeliveryMethod;
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @var string
     */
    protected $commercialInvoiceRemoval;
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @var string
     */
    protected $postalServiceTrackingID;
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @var string
     */
    protected $returnsFlexibleAccess;
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @var string
     */
    protected $uPScarbonneutral;
    /**
     * This element will have value "PAC" for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @var string
     */
    protected $product;
    /**
     * UPS Return and Exchange – This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not appear
     *
     * @var string
     */
    protected $uPSReturnsExchange;
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @var string
     */
    protected $liftGateOnDelivery;
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @var string
     */
    protected $liftGateOnPickUp;
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @var string
     */
    protected $pickupPreference;
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @var string
     */
    protected $deliveryPreference;
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @var string
     */
    protected $holdForPickupAtUPSAccessPoint;
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @var ManifestUAPAddress
     */
    protected $uAPAddress;
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @var string
     */
    protected $deliverToAddresseeOnlyIndicator;
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @var string
     */
    protected $uPSAccessPointCODIndicator;
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @var string
     */
    protected $clinicalTrialIndicator;
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @var string
     */
    protected $clinicalTrialIndicationNumber;
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @var string
     */
    protected $categoryAHazardousIndicator;
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @var string
     */
    protected $directDeliveryIndicator;
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @var string
     */
    protected $packageReleaseCodeIndicator;
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @var string
     */
    protected $proactiveResponseIndicator;
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @var string
     */
    protected $whiteGloveDeliveryIndicator;
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @var string
     */
    protected $roomOfChoiceIndicator;
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @var string
     */
    protected $installationDeliveryIndicator;
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @var string
     */
    protected $itemDisposalIndicator;
    /**
     * Lead Tracking Number in shipment
     *
     * @var string
     */
    protected $leadShipmentTrackingNumber;
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @var string
     */
    protected $saturdayNonPremiumCommercialDeliveryIndicator;
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @var string
     */
    protected $sundayNonPremiumCommercialDeliveryIndicator;
    /**
     * "Y" indicates that the UPS Premier accessorial is provided.
     *
     * @var string
     */
    protected $uPSPremierAccessorialIndicator;
    /**
    * Indicates the UPS Premier category applied to the package Valid values:
    - 'PRS' – UPS Premier Silver
    - 'PRG' – UPS Premier Gold
    - 'PRP' - UPS Premier Platinum
    
    *
    * @var string
    */
    protected $uPSPremierCategoryCode;
    /**
     * Shipper's record for a shipment.
     *
     * @return ManifestShipper
     */
    public function getShipper() : ManifestShipper
    {
        return $this->shipper;
    }
    /**
     * Shipper's record for a shipment.
     *
     * @param ManifestShipper $shipper
     *
     * @return self
     */
    public function setShipper(ManifestShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @return ManifestShipTo
     */
    public function getShipTo() : ManifestShipTo
    {
        return $this->shipTo;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @param ManifestShipTo $shipTo
     *
     * @return self
     */
    public function setShipTo(ManifestShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * Shipment-level reference numbers.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ManifestReferenceNumber>
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * Shipment-level reference numbers.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ManifestReferenceNumber> $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Container for service code and description.
     *
     * @return ManifestService
     */
    public function getService() : ManifestService
    {
        return $this->service;
    }
    /**
     * Container for service code and description.
     *
     * @param ManifestService $service
     *
     * @return self
     */
    public function setService(ManifestService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @return string
     */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
     * Should be set equal to the date on while the packages were picked up (may be prior days date if the transmission occurs after midnight). Formatted as YYYYMMDD.
     *
     * @param string $pickupDate
     *
     * @return self
     */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @return string
     */
    public function getScheduledDeliveryDate() : string
    {
        return $this->scheduledDeliveryDate;
    }
    /**
     * The date the shipment originally was scheduled for delivery. Formatted as YYYYMMDD.
     *
     * @param string $scheduledDeliveryDate
     *
     * @return self
     */
    public function setScheduledDeliveryDate(string $scheduledDeliveryDate) : self
    {
        $this->initialized['scheduledDeliveryDate'] = true;
        $this->scheduledDeliveryDate = $scheduledDeliveryDate;
        return $this;
    }
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @return string
     */
    public function getScheduledDeliveryTime() : string
    {
        return $this->scheduledDeliveryTime;
    }
    /**
     * Schedule delivery time. Time format is HHMMSS
     *
     * @param string $scheduledDeliveryTime
     *
     * @return self
     */
    public function setScheduledDeliveryTime(string $scheduledDeliveryTime) : self
    {
        $this->initialized['scheduledDeliveryTime'] = true;
        $this->scheduledDeliveryTime = $scheduledDeliveryTime;
        return $this;
    }
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. Valid values:
    - 1 = Letter
    - 2 = Document (Non-Letter Document)
    - 3 = Non-Document
    - 4 = Pallet
    
    *
    * @return string
    */
    public function getDocumentsOnly() : string
    {
        return $this->documentsOnly;
    }
    /**
    * If the tag is present then the shipment is a document, otherwise the shipment is a non-document. Valid values:
    - 1 = Letter
    - 2 = Document (Non-Letter Document)
    - 3 = Non-Document
    - 4 = Pallet
    
    *
    * @param string $documentsOnly
    *
    * @return self
    */
    public function setDocumentsOnly(string $documentsOnly) : self
    {
        $this->initialized['documentsOnly'] = true;
        $this->documentsOnly = $documentsOnly;
        return $this;
    }
    /**
     * Defines a package.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ManifestPackage>
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * Defines a package.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ManifestPackage> $package
     *
     * @return self
     */
    public function setPackage(array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @return ManifestShipmentServiceOptions
     */
    public function getShipmentServiceOptions() : ManifestShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * Container tag for optional UPS services related to a shipment.
     *
     * @param ManifestShipmentServiceOptions $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(ManifestShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @return string
     */
    public function getManufactureCountry() : string
    {
        return $this->manufactureCountry;
    }
    /**
     * Country or Territory  of Manufacture of the contents of the package.
     *
     * @param string $manufactureCountry
     *
     * @return self
     */
    public function setManufactureCountry(string $manufactureCountry) : self
    {
        $this->initialized['manufactureCountry'] = true;
        $this->manufactureCountry = $manufactureCountry;
        return $this;
    }
    /**
     * Harmonized code of the package.
     *
     * @return string
     */
    public function getHarmonizedCode() : string
    {
        return $this->harmonizedCode;
    }
    /**
     * Harmonized code of the package.
     *
     * @param string $harmonizedCode
     *
     * @return self
     */
    public function setHarmonizedCode(string $harmonizedCode) : self
    {
        $this->initialized['harmonizedCode'] = true;
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Information about shipment's customs value.
     *
     * @return ManifestCustomsValue
     */
    public function getCustomsValue() : ManifestCustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Information about shipment's customs value.
     *
     * @param ManifestCustomsValue $customsValue
     *
     * @return self
     */
    public function setCustomsValue(ManifestCustomsValue $customsValue) : self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * User-defined special instructions for delivery.
     *
     * @return string
     */
    public function getSpecialInstructions() : string
    {
        return $this->specialInstructions;
    }
    /**
     * User-defined special instructions for delivery.
     *
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions) : self
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
    * @return string
    */
    public function getShipmentChargeType() : string
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
    * @param string $shipmentChargeType
    *
    * @return self
    */
    public function setShipmentChargeType(string $shipmentChargeType) : self
    {
        $this->initialized['shipmentChargeType'] = true;
        $this->shipmentChargeType = $shipmentChargeType;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return ManifestBillToAccount
     */
    public function getBillToAccount() : ManifestBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param ManifestBillToAccount $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(ManifestBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @return string
     */
    public function getConsigneeBillIndicator() : string
    {
        return $this->consigneeBillIndicator;
    }
    /**
     * Indicates if consignee will be billed the shipment.
     *
     * @param string $consigneeBillIndicator
     *
     * @return self
     */
    public function setConsigneeBillIndicator(string $consigneeBillIndicator) : self
    {
        $this->initialized['consigneeBillIndicator'] = true;
        $this->consigneeBillIndicator = $consigneeBillIndicator;
        return $this;
    }
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @return string
     */
    public function getCollectBillIndicator() : string
    {
        return $this->collectBillIndicator;
    }
    /**
     * Indicates whether or not to collect bill at time of delivery.
     *
     * @param string $collectBillIndicator
     *
     * @return self
     */
    public function setCollectBillIndicator(string $collectBillIndicator) : self
    {
        $this->initialized['collectBillIndicator'] = true;
        $this->collectBillIndicator = $collectBillIndicator;
        return $this;
    }
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @return string
     */
    public function getLocationAssured() : string
    {
        return $this->locationAssured;
    }
    /**
     * Indicates Location Assured Values: Y - Location Assured accessorial requested
     *
     * @param string $locationAssured
     *
     * @return self
     */
    public function setLocationAssured(string $locationAssured) : self
    {
        $this->initialized['locationAssured'] = true;
        $this->locationAssured = $locationAssured;
        return $this;
    }
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @return string
     */
    public function getImportControl() : string
    {
        return $this->importControl;
    }
    /**
     * Import Control Indication is used to designate that the shipment is an Import Control shipment. If the shipment is an import control shipment then this element will have value. For no import shipment this will not be appear
     *
     * @param string $importControl
     *
     * @return self
     */
    public function setImportControl(string $importControl) : self
    {
        $this->initialized['importControl'] = true;
        $this->importControl = $importControl;
        return $this;
    }
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label. LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM Print and Mail Label.
     *
     * @return string
     */
    public function getLabelDeliveryMethod() : string
    {
        return $this->labelDeliveryMethod;
    }
    /**
     * Indicates Label Delivery Method, Values are: LDE Electronic Label. LDO One Attempt. LDP Print Label. LDT Three Attempt. LPM Print and Mail Label.
     *
     * @param string $labelDeliveryMethod
     *
     * @return self
     */
    public function setLabelDeliveryMethod(string $labelDeliveryMethod) : self
    {
        $this->initialized['labelDeliveryMethod'] = true;
        $this->labelDeliveryMethod = $labelDeliveryMethod;
        return $this;
    }
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @return string
     */
    public function getCommercialInvoiceRemoval() : string
    {
        return $this->commercialInvoiceRemoval;
    }
    /**
     * Commercial Invoice Removal (CIR) is an accessorial or indication that will allow a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee. If shipment is CIR then this element will have value. For no CIR this element will not be appear
     *
     * @param string $commercialInvoiceRemoval
     *
     * @return self
     */
    public function setCommercialInvoiceRemoval(string $commercialInvoiceRemoval) : self
    {
        $this->initialized['commercialInvoiceRemoval'] = true;
        $this->commercialInvoiceRemoval = $commercialInvoiceRemoval;
        return $this;
    }
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @return string
     */
    public function getPostalServiceTrackingID() : string
    {
        return $this->postalServiceTrackingID;
    }
    /**
     * Postal Service Tracking ID transport company tracking number.
     *
     * @param string $postalServiceTrackingID
     *
     * @return self
     */
    public function setPostalServiceTrackingID(string $postalServiceTrackingID) : self
    {
        $this->initialized['postalServiceTrackingID'] = true;
        $this->postalServiceTrackingID = $postalServiceTrackingID;
        return $this;
    }
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @return string
     */
    public function getReturnsFlexibleAccess() : string
    {
        return $this->returnsFlexibleAccess;
    }
    /**
     * (RFA) UPS returns flexible access. This element will appear with value only when returns flexible access uploaded. For no returns flexible access this element will not be appear
     *
     * @param string $returnsFlexibleAccess
     *
     * @return self
     */
    public function setReturnsFlexibleAccess(string $returnsFlexibleAccess) : self
    {
        $this->initialized['returnsFlexibleAccess'] = true;
        $this->returnsFlexibleAccess = $returnsFlexibleAccess;
        return $this;
    }
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @return string
     */
    public function getUPScarbonneutral() : string
    {
        return $this->uPScarbonneutral;
    }
    /**
     * UPS carbon neutral is a term used to reflect a generic term for the tagging to be included on any document, label, e-mail, etc. used to identify that the UPS carbon neutral fee is applied. This element will appear only when shipment is UPS carbon neutral with value. For non UPS carbon neutral shipping this element appear.
     *
     * @param string $uPScarbonneutral
     *
     * @return self
     */
    public function setUPScarbonneutral(string $uPScarbonneutral) : self
    {
        $this->initialized['uPScarbonneutral'] = true;
        $this->uPScarbonneutral = $uPScarbonneutral;
        return $this;
    }
    /**
     * This element will have value "PAC" for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * This element will have value "PAC" for CAR shipments. For no CAR shipments this element will not be appeared.
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * UPS Return and Exchange – This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not appear
     *
     * @return string
     */
    public function getUPSReturnsExchange() : string
    {
        return $this->uPSReturnsExchange;
    }
    /**
     * UPS Return and Exchange – This element will appear with value Y only when UPS Return and Exchange was requested. For no UPS Returns and Exchange then this element will not appear
     *
     * @param string $uPSReturnsExchange
     *
     * @return self
     */
    public function setUPSReturnsExchange(string $uPSReturnsExchange) : self
    {
        $this->initialized['uPSReturnsExchange'] = true;
        $this->uPSReturnsExchange = $uPSReturnsExchange;
        return $this;
    }
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @return string
     */
    public function getLiftGateOnDelivery() : string
    {
        return $this->liftGateOnDelivery;
    }
    /**
     * Lift Gate On Delivery - This element will appear only when Lift Gate For Delivery was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for Delivery was requested, this element will not appear.
     *
     * @param string $liftGateOnDelivery
     *
     * @return self
     */
    public function setLiftGateOnDelivery(string $liftGateOnDelivery) : self
    {
        $this->initialized['liftGateOnDelivery'] = true;
        $this->liftGateOnDelivery = $liftGateOnDelivery;
        return $this;
    }
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @return string
     */
    public function getLiftGateOnPickUp() : string
    {
        return $this->liftGateOnPickUp;
    }
    /**
     * Lift Gate On PickUp - This element will appear only when Lift Gate For PickUp was requested for UPS World Wide Express Freight Shipments. If no Lift Gate for PickUp was requested, this element will not appear.
     *
     * @param string $liftGateOnPickUp
     *
     * @return self
     */
    public function setLiftGateOnPickUp(string $liftGateOnPickUp) : self
    {
        $this->initialized['liftGateOnPickUp'] = true;
        $this->liftGateOnPickUp = $liftGateOnPickUp;
        return $this;
    }
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @return string
     */
    public function getPickupPreference() : string
    {
        return $this->pickupPreference;
    }
    /**
     * Pickup Preference -This element will appear only when Dropoff At UPS Facility was requested for UPS World Wide Express Freight Shipments. If no Dropoff At UPS Facility was requested, this element will not appear.
     *
     * @param string $pickupPreference
     *
     * @return self
     */
    public function setPickupPreference(string $pickupPreference) : self
    {
        $this->initialized['pickupPreference'] = true;
        $this->pickupPreference = $pickupPreference;
        return $this;
    }
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @return string
     */
    public function getDeliveryPreference() : string
    {
        return $this->deliveryPreference;
    }
    /**
     * Delivery Preference - This element will appear only when Hold for pick up was requested for UPS World Wide Express Freight Shipments. If no Hold for pick up was requested, this element will not appear.
     *
     * @param string $deliveryPreference
     *
     * @return self
     */
    public function setDeliveryPreference(string $deliveryPreference) : self
    {
        $this->initialized['deliveryPreference'] = true;
        $this->deliveryPreference = $deliveryPreference;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @return string
     */
    public function getHoldForPickupAtUPSAccessPoint() : string
    {
        return $this->holdForPickupAtUPSAccessPoint;
    }
    /**
     * "Y" Indicates Shipment is Direct to Retail.
     *
     * @param string $holdForPickupAtUPSAccessPoint
     *
     * @return self
     */
    public function setHoldForPickupAtUPSAccessPoint(string $holdForPickupAtUPSAccessPoint) : self
    {
        $this->initialized['holdForPickupAtUPSAccessPoint'] = true;
        $this->holdForPickupAtUPSAccessPoint = $holdForPickupAtUPSAccessPoint;
        return $this;
    }
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @return ManifestUAPAddress
     */
    public function getUAPAddress() : ManifestUAPAddress
    {
        return $this->uAPAddress;
    }
    /**
     * Information about Hold for Pickup UPS Access Point Address
     *
     * @param ManifestUAPAddress $uAPAddress
     *
     * @return self
     */
    public function setUAPAddress(ManifestUAPAddress $uAPAddress) : self
    {
        $this->initialized['uAPAddress'] = true;
        $this->uAPAddress = $uAPAddress;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @return string
     */
    public function getDeliverToAddresseeOnlyIndicator() : string
    {
        return $this->deliverToAddresseeOnlyIndicator;
    }
    /**
     * "Y" Indicates Shipment is Deliver to Addressee.
     *
     * @param string $deliverToAddresseeOnlyIndicator
     *
     * @return self
     */
    public function setDeliverToAddresseeOnlyIndicator(string $deliverToAddresseeOnlyIndicator) : self
    {
        $this->initialized['deliverToAddresseeOnlyIndicator'] = true;
        $this->deliverToAddresseeOnlyIndicator = $deliverToAddresseeOnlyIndicator;
        return $this;
    }
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @return string
     */
    public function getUPSAccessPointCODIndicator() : string
    {
        return $this->uPSAccessPointCODIndicator;
    }
    /**
     * "Y" Indicates Shipment is Cash on Delivery in Direct to Retail
     *
     * @param string $uPSAccessPointCODIndicator
     *
     * @return self
     */
    public function setUPSAccessPointCODIndicator(string $uPSAccessPointCODIndicator) : self
    {
        $this->initialized['uPSAccessPointCODIndicator'] = true;
        $this->uPSAccessPointCODIndicator = $uPSAccessPointCODIndicator;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @return string
     */
    public function getClinicalTrialIndicator() : string
    {
        return $this->clinicalTrialIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Clinical Trial accessorial provided in Manifest. Spaces = Clinical Trial accessorial not provided in Manifest.
     *
     * @param string $clinicalTrialIndicator
     *
     * @return self
     */
    public function setClinicalTrialIndicator(string $clinicalTrialIndicator) : self
    {
        $this->initialized['clinicalTrialIndicator'] = true;
        $this->clinicalTrialIndicator = $clinicalTrialIndicator;
        return $this;
    }
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @return string
     */
    public function getClinicalTrialIndicationNumber() : string
    {
        return $this->clinicalTrialIndicationNumber;
    }
    /**
     * An unique Clinical Trial associated with the shipment provided in Manifest.
     *
     * @param string $clinicalTrialIndicationNumber
     *
     * @return self
     */
    public function setClinicalTrialIndicationNumber(string $clinicalTrialIndicationNumber) : self
    {
        $this->initialized['clinicalTrialIndicationNumber'] = true;
        $this->clinicalTrialIndicationNumber = $clinicalTrialIndicationNumber;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @return string
     */
    public function getCategoryAHazardousIndicator() : string
    {
        return $this->categoryAHazardousIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Category A Hazardous materials accessorial provided in Manifest. Spaces = Category A Hazardous materials accessorial not provided in Manifest.
     *
     * @param string $categoryAHazardousIndicator
     *
     * @return self
     */
    public function setCategoryAHazardousIndicator(string $categoryAHazardousIndicator) : self
    {
        $this->initialized['categoryAHazardousIndicator'] = true;
        $this->categoryAHazardousIndicator = $categoryAHazardousIndicator;
        return $this;
    }
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @return string
     */
    public function getDirectDeliveryIndicator() : string
    {
        return $this->directDeliveryIndicator;
    }
    /**
     * An accessorial Indicator flag: Y = Direct Delivery accessorisal provided in Manifest. Spaces = Direct Delivery accessorial not provided in Manifest.
     *
     * @param string $directDeliveryIndicator
     *
     * @return self
     */
    public function setDirectDeliveryIndicator(string $directDeliveryIndicator) : self
    {
        $this->initialized['directDeliveryIndicator'] = true;
        $this->directDeliveryIndicator = $directDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @return string
     */
    public function getPackageReleaseCodeIndicator() : string
    {
        return $this->packageReleaseCodeIndicator;
    }
    /**
     * "Y" indicates Shipment has PackageReleaseCode Accessorial.
     *
     * @param string $packageReleaseCodeIndicator
     *
     * @return self
     */
    public function setPackageReleaseCodeIndicator(string $packageReleaseCodeIndicator) : self
    {
        $this->initialized['packageReleaseCodeIndicator'] = true;
        $this->packageReleaseCodeIndicator = $packageReleaseCodeIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @return string
     */
    public function getProactiveResponseIndicator() : string
    {
        return $this->proactiveResponseIndicator;
    }
    /**
     * "Y" indicates that a UPS Proactive Response Accessorial is provided.
     *
     * @param string $proactiveResponseIndicator
     *
     * @return self
     */
    public function setProactiveResponseIndicator(string $proactiveResponseIndicator) : self
    {
        $this->initialized['proactiveResponseIndicator'] = true;
        $this->proactiveResponseIndicator = $proactiveResponseIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @return string
     */
    public function getWhiteGloveDeliveryIndicator() : string
    {
        return $this->whiteGloveDeliveryIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods White Glove Delivery Accessorial is provided.
     *
     * @param string $whiteGloveDeliveryIndicator
     *
     * @return self
     */
    public function setWhiteGloveDeliveryIndicator(string $whiteGloveDeliveryIndicator) : self
    {
        $this->initialized['whiteGloveDeliveryIndicator'] = true;
        $this->whiteGloveDeliveryIndicator = $whiteGloveDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @return string
     */
    public function getRoomOfChoiceIndicator() : string
    {
        return $this->roomOfChoiceIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Room of Choice Accessorial is provided.
     *
     * @param string $roomOfChoiceIndicator
     *
     * @return self
     */
    public function setRoomOfChoiceIndicator(string $roomOfChoiceIndicator) : self
    {
        $this->initialized['roomOfChoiceIndicator'] = true;
        $this->roomOfChoiceIndicator = $roomOfChoiceIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @return string
     */
    public function getInstallationDeliveryIndicator() : string
    {
        return $this->installationDeliveryIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Installation Delivery Accessorial is provided.
     *
     * @param string $installationDeliveryIndicator
     *
     * @return self
     */
    public function setInstallationDeliveryIndicator(string $installationDeliveryIndicator) : self
    {
        $this->initialized['installationDeliveryIndicator'] = true;
        $this->installationDeliveryIndicator = $installationDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @return string
     */
    public function getItemDisposalIndicator() : string
    {
        return $this->itemDisposalIndicator;
    }
    /**
     * "Y" indicates that a Heavy Goods Item Disposal Accessorial is provided.
     *
     * @param string $itemDisposalIndicator
     *
     * @return self
     */
    public function setItemDisposalIndicator(string $itemDisposalIndicator) : self
    {
        $this->initialized['itemDisposalIndicator'] = true;
        $this->itemDisposalIndicator = $itemDisposalIndicator;
        return $this;
    }
    /**
     * Lead Tracking Number in shipment
     *
     * @return string
     */
    public function getLeadShipmentTrackingNumber() : string
    {
        return $this->leadShipmentTrackingNumber;
    }
    /**
     * Lead Tracking Number in shipment
     *
     * @param string $leadShipmentTrackingNumber
     *
     * @return self
     */
    public function setLeadShipmentTrackingNumber(string $leadShipmentTrackingNumber) : self
    {
        $this->initialized['leadShipmentTrackingNumber'] = true;
        $this->leadShipmentTrackingNumber = $leadShipmentTrackingNumber;
        return $this;
    }
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @return string
     */
    public function getSaturdayNonPremiumCommercialDeliveryIndicator() : string
    {
        return $this->saturdayNonPremiumCommercialDeliveryIndicator;
    }
    /**
     * "Y"  indicates that a SaturdayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @param string $saturdayNonPremiumCommercialDeliveryIndicator
     *
     * @return self
     */
    public function setSaturdayNonPremiumCommercialDeliveryIndicator(string $saturdayNonPremiumCommercialDeliveryIndicator) : self
    {
        $this->initialized['saturdayNonPremiumCommercialDeliveryIndicator'] = true;
        $this->saturdayNonPremiumCommercialDeliveryIndicator = $saturdayNonPremiumCommercialDeliveryIndicator;
        return $this;
    }
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @return string
     */
    public function getSundayNonPremiumCommercialDeliveryIndicator() : string
    {
        return $this->sundayNonPremiumCommercialDeliveryIndicator;
    }
    /**
     * "Y"  indicates that a SundayNonPremiumCommercialDeliveryIndicator is provided.
     *
     * @param string $sundayNonPremiumCommercialDeliveryIndicator
     *
     * @return self
     */
    public function setSundayNonPremiumCommercialDeliveryIndicator(string $sundayNonPremiumCommercialDeliveryIndicator) : self
    {
        $this->initialized['sundayNonPremiumCommercialDeliveryIndicator'] = true;
        $this->sundayNonPremiumCommercialDeliveryIndicator = $sundayNonPremiumCommercialDeliveryIndicator;
        return $this;
    }
    /**
     * "Y" indicates that the UPS Premier accessorial is provided.
     *
     * @return string
     */
    public function getUPSPremierAccessorialIndicator() : string
    {
        return $this->uPSPremierAccessorialIndicator;
    }
    /**
     * "Y" indicates that the UPS Premier accessorial is provided.
     *
     * @param string $uPSPremierAccessorialIndicator
     *
     * @return self
     */
    public function setUPSPremierAccessorialIndicator(string $uPSPremierAccessorialIndicator) : self
    {
        $this->initialized['uPSPremierAccessorialIndicator'] = true;
        $this->uPSPremierAccessorialIndicator = $uPSPremierAccessorialIndicator;
        return $this;
    }
    /**
    * Indicates the UPS Premier category applied to the package Valid values:
    - 'PRS' – UPS Premier Silver
    - 'PRG' – UPS Premier Gold
    - 'PRP' - UPS Premier Platinum
    
    *
    * @return string
    */
    public function getUPSPremierCategoryCode() : string
    {
        return $this->uPSPremierCategoryCode;
    }
    /**
    * Indicates the UPS Premier category applied to the package Valid values:
    - 'PRS' – UPS Premier Silver
    - 'PRG' – UPS Premier Gold
    - 'PRP' - UPS Premier Platinum
    
    *
    * @param string $uPSPremierCategoryCode
    *
    * @return self
    */
    public function setUPSPremierCategoryCode(string $uPSPremierCategoryCode) : self
    {
        $this->initialized['uPSPremierCategoryCode'] = true;
        $this->uPSPremierCategoryCode = $uPSPremierCategoryCode;
        return $this;
    }
}