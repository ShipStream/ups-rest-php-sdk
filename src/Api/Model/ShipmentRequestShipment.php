<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentRequestShipment extends \ArrayObject
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
    * The Description of Goods for the shipment. Applies to international and domestic shipments. 
    
    Provide a detailed description of items being shipped for documents and non-documents. 
    
    Examples: "annual reports" and "9 mm steel screws".  Required if all of the listed conditions are true: 
    ShipFrom and ShipTo countries or territories are not the same; The packaging type is not UPS Letter; The ShipFrom and or ShipTo countries or territories are not in the European Union or the ShipFrom and ShipTo countries or territories are both in the European Union and the shipments service type is not UPS Standard.
    *
    * @var string
    */
    protected $description;
    /**
     * Type of Return service. When this container exists, the shipment is a return shipment.
     *
     * @var ShipmentReturnService
     */
    protected $returnService;
    /**
    * Indicates a shipment contains written, typed, or printed communication of no commercial value. 
    
    If DocumentsOnly is not specified then it implies that the shipment contains non documents or documents of commercial value. 
    
    Default is a shipment contains non- documents or documents of commercial value.  This is an empty tag, any value inside is ignored. 
    
    Valid only for shipments with different origin and destination countries or territories. The origin country or territory is not US, and the destination country or territory is not CA, PR or MX.
    *
    * @var string
    */
    protected $documentsOnlyIndicator;
    /**
     * Container for the Shipper's information.
     *
     * @var ShipmentShipper
     */
    protected $shipper;
    /**
     * Ship To Container.
     *
     * @var ShipmentShipTo
     */
    protected $shipTo;
    /**
     * AlternateDeliveryAddress Container.  Alternate Delivery Address (UPS Access Point Address) required if ShipmentIndicationType is 01 or 02.
     *
     * @var ShipmentAlternateDeliveryAddress
     */
    protected $alternateDeliveryAddress;
    /**
    * Ship From Container.  Required for return shipment. 
    
    Required if pickup location is different from the shipper's address.
    *
    * @var ShipmentShipFrom
    */
    protected $shipFrom;
    /**
     * Payment information container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  It is required for non-Ground Freight Pricing shipments only.
     *
     * @var ShipmentPaymentInformation
     */
    protected $paymentInformation;
    /**
     * Container to hold the Payment information for the Ground Freight Pricing Shipments.  Required for Ground Freight Pricing Shipments only.
     *
     * @var ShipmentFRSPaymentInformation
     */
    protected $fRSPaymentInformation;
    /**
     * Container to hold Freight Shipment information.
     *
     * @var ShipmentFreightShipmentInformation
     */
    protected $freightShipmentInformation;
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @var string
     */
    protected $goodsNotInFreeCirculationIndicator;
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @var ShipmentPromotionalDiscountInformation
     */
    protected $promotionalDiscountInformation;
    /**
     * DGSignatoryInfo Container  DGPaperImage will be returned if DGSignatoryInfo container present
     *
     * @var ShipmentDGSignatoryInfo
     */
    protected $dGSignatoryInfo;
    /**
     * ShipmentRatingOptions container.
     *
     * @var ShipmentShipmentRatingOptions
     */
    protected $shipmentRatingOptions;
    /**
     * Movement Reference Number (MRN) information.  Must contain alphanumeric characters only. Must be a length of 18 characters. The 3rd and 4th Characters must be the Shipper country or territory ISO Code.
     *
     * @var string
     */
    protected $movementReferenceNumber;
    /**
     * 
     *
     * @var list<ShipmentReferenceNumber>
     */
    protected $referenceNumber;
    /**
     * Service Container.
     *
     * @var ShipmentService
     */
    protected $service;
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @var ShipmentInvoiceLineTotal
     */
    protected $invoiceLineTotal;
    /**
     * Total number of pieces in all pallets in a UPS Worldwide Express Freight Shipment.  It is required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment. Valid values are 1 to 99999.
     *
     * @var string
     */
    protected $numOfPiecesInShipment;
    /**
    * USPS Endorsement.
    Valid values: 
    1 = Return Service Requested 
    2 = Forwarding Service Requested 
    3 = Address Service Requested 
    4 = Change Service Requested and 
    5 = No Service Selected. 
    Note: For International Mail Innovations shipments use No Service Selected. International Mail Innovations shipments are applicable for Priority Mail Innovations and Mail Innovations Economy Mail Innovations services only.  Required for Mail Innovations forward shipments.
    *
    * @var string
    */
    protected $uSPSEndorsement;
    /**
     * Indicates single label with both MI label and CN22 form.  International CN22 form is required.
     *
     * @var string
     */
    protected $mILabelCN22Indicator;
    /**
    * A component encoded on the barcode of the Mail Innovations label.   Valid values: 
    IR = Irregular
    MA = Machineable
    SubClass is only required if the customer's contract have them subclass the package not UPS.
    *
    * @var string
    */
    protected $subClassification;
    /**
    * Customer assigned identifier for report and billing summarization displays to the right of the Cost Center title.  Required for Mail Innovations Return shipments. It is shown on the bottom of the shipping label as reference 2.
    
    Cost Center length is alphanumeric with a max length of 30 for Mail Innovations forward shipments.
    
    Cost Center length is numeric with a max length of 4 for Mail Innovations Return shipments.
    *
    * @var string
    */
    protected $costCenter;
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the CostCenter field to be barcoded at the bottom of the label.
     *
     * @var string
     */
    protected $costCenterBarcodeIndicator;
    /**
     * Customer-assigned unique piece identifier that returns visibility events.  Required only for Mail Innovations forward shipments. Alpha numeric values only. It is shown on the bottom of the shipping label as reference 1.
     *
     * @var string
     */
    protected $packageID;
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the PackageID field to be barcoded at the bottom of the label.
     *
     * @var string
     */
    protected $packageIDBarcodeIndicator;
    /**
    * Mail classification defined by the USPS.   Valid values: 
    1 = Balloon
    2 = Oversize
    3 = Not Applicable
    *
    * @var string
    */
    protected $irregularIndicator;
    /**
     * 
     *
     * @var list<ShipmentShipmentIndicationType>
     */
    protected $shipmentIndicationType;
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments.
    
    Format: 
    For Package return shipments, the package tracking number is concatenated with the system time (YYYY-MM-DDHH.MM.SS.NNN), followed by service code. 
    
    For MI Return shipments, the Mail Manifest ID (MMI) is concatenated with the system time.  The unique identifier (key) is required to link the package and the Mail Innovations portion of Dual Return shipment. 
    
    If unique identifier (key) is empty in the request for UPS Mail Innovations Return Service, the request will be treated as the first phase of the Mail Innovations Dual Returns Request. 
    
    If the MIDualReturnShipmentIndicator is present with empty or null MIDualReturnShipmentKey in UPS Package Return Shipment, the request will be treated as the first phase of Dual MI Return Label Shipment. 
    
    This field would be ignored if MIDualReturnShipmentIndicator is not present in UPS Package Return Shipment request.
    *
    * @var string
    */
    protected $mIDualReturnShipmentKey;
    /**
    * MIDualReturnShipmentIndicator is an indicator to identify a Package Shipment is part of UPS Mail Innovations Dual Label Shipment. 
    
    Its presence means Package Shipment is part of UPS Mail Innovations Dual Label shipment.  If the indicator is present in Package Shipment request, shipment would be considered as part of a Dual Mail Innovations Returns. 
    
    This indicator is not valid with UPS Mail Innovations Returns Service code.
    *
    * @var string
    */
    protected $mIDualReturnShipmentIndicator;
    /**
    * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator.
    If present, Billable Weight Calculation method information and Rating Method information would be returned in response.
    *
    * @var string
    */
    protected $ratingMethodRequestedIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.
     *
     * @var string
     */
    protected $taxInformationIndicator;
    /**
     * Container for Shipment Service Options.
     *
     * @var ShipmentShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions and Receipt instructions (if applicable) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country or territory code seperated by an underscore ('_') character.  If Locale element is requested along with LabelLinksIndicator, the URL to retrieve Label and Receipts (if applicable) will be returned in the requested Locale. Please note only LabelURL and ReceiptURL (if applicable) will be returned. LocalLanguageLabelURL and LocalLanguageReceiptURL will not be returned if Locale element is present in request.
    Queen's English (en_GB) is the default
    *
    * @var string
    */
    protected $locale;
    /**
    * Shipment Value Threshold Code. 01 = Shipment value is below or equals to threshold value
    02 = Shipment value is above threshold value.     NA = Not Applicable
    *
    * @var string
    */
    protected $shipmentValueThresholdCode;
    /**
     * Master Carton ID. If Economy Service (17 or 72) : Economy Shipment will be associated with given Master Carton ID. If Non-Economy Service: Master Carton Shipment will be created for given Master Carton ID.
     *
     * @var string
     */
    protected $masterCartonID;
    /**
    * Master Carton Indicator. Presence of the indicator means Master Carton ID will be created and returned to client. 
    This is an empty tag, any value inside is ignored.                                                                  MasterCartonIndicator is only valid with Econmoy Shipment (Service Code 17 or 72). Will be ignored if master carton id present.
    *
    * @var string
    */
    protected $masterCartonIndicator;
    /**
     * User can send up to 7 days in the future with current date as day zero. Format: YYYYMMDD
     *
     * @var string
     */
    protected $shipmentDate;
    /**
     * 
     *
     * @var list<ShipmentPackage>
     */
    protected $package;
    /**
    * The Description of Goods for the shipment. Applies to international and domestic shipments. 
    
    Provide a detailed description of items being shipped for documents and non-documents. 
    
    Examples: "annual reports" and "9 mm steel screws".  Required if all of the listed conditions are true: 
    ShipFrom and ShipTo countries or territories are not the same; The packaging type is not UPS Letter; The ShipFrom and or ShipTo countries or territories are not in the European Union or the ShipFrom and ShipTo countries or territories are both in the European Union and the shipments service type is not UPS Standard.
    *
    * @return string
    */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
    * The Description of Goods for the shipment. Applies to international and domestic shipments. 
    
    Provide a detailed description of items being shipped for documents and non-documents. 
    
    Examples: "annual reports" and "9 mm steel screws".  Required if all of the listed conditions are true: 
    ShipFrom and ShipTo countries or territories are not the same; The packaging type is not UPS Letter; The ShipFrom and or ShipTo countries or territories are not in the European Union or the ShipFrom and ShipTo countries or territories are both in the European Union and the shipments service type is not UPS Standard.
    *
    * @param string $description
    *
    * @return self
    */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Type of Return service. When this container exists, the shipment is a return shipment.
     *
     * @return ShipmentReturnService
     */
    public function getReturnService() : ShipmentReturnService
    {
        return $this->returnService;
    }
    /**
     * Type of Return service. When this container exists, the shipment is a return shipment.
     *
     * @param ShipmentReturnService $returnService
     *
     * @return self
     */
    public function setReturnService(ShipmentReturnService $returnService) : self
    {
        $this->initialized['returnService'] = true;
        $this->returnService = $returnService;
        return $this;
    }
    /**
    * Indicates a shipment contains written, typed, or printed communication of no commercial value. 
    
    If DocumentsOnly is not specified then it implies that the shipment contains non documents or documents of commercial value. 
    
    Default is a shipment contains non- documents or documents of commercial value.  This is an empty tag, any value inside is ignored. 
    
    Valid only for shipments with different origin and destination countries or territories. The origin country or territory is not US, and the destination country or territory is not CA, PR or MX.
    *
    * @return string
    */
    public function getDocumentsOnlyIndicator() : string
    {
        return $this->documentsOnlyIndicator;
    }
    /**
    * Indicates a shipment contains written, typed, or printed communication of no commercial value. 
    
    If DocumentsOnly is not specified then it implies that the shipment contains non documents or documents of commercial value. 
    
    Default is a shipment contains non- documents or documents of commercial value.  This is an empty tag, any value inside is ignored. 
    
    Valid only for shipments with different origin and destination countries or territories. The origin country or territory is not US, and the destination country or territory is not CA, PR or MX.
    *
    * @param string $documentsOnlyIndicator
    *
    * @return self
    */
    public function setDocumentsOnlyIndicator(string $documentsOnlyIndicator) : self
    {
        $this->initialized['documentsOnlyIndicator'] = true;
        $this->documentsOnlyIndicator = $documentsOnlyIndicator;
        return $this;
    }
    /**
     * Container for the Shipper's information.
     *
     * @return ShipmentShipper
     */
    public function getShipper() : ShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Container for the Shipper's information.
     *
     * @param ShipmentShipper $shipper
     *
     * @return self
     */
    public function setShipper(ShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Ship To Container.
     *
     * @return ShipmentShipTo
     */
    public function getShipTo() : ShipmentShipTo
    {
        return $this->shipTo;
    }
    /**
     * Ship To Container.
     *
     * @param ShipmentShipTo $shipTo
     *
     * @return self
     */
    public function setShipTo(ShipmentShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * AlternateDeliveryAddress Container.  Alternate Delivery Address (UPS Access Point Address) required if ShipmentIndicationType is 01 or 02.
     *
     * @return ShipmentAlternateDeliveryAddress
     */
    public function getAlternateDeliveryAddress() : ShipmentAlternateDeliveryAddress
    {
        return $this->alternateDeliveryAddress;
    }
    /**
     * AlternateDeliveryAddress Container.  Alternate Delivery Address (UPS Access Point Address) required if ShipmentIndicationType is 01 or 02.
     *
     * @param ShipmentAlternateDeliveryAddress $alternateDeliveryAddress
     *
     * @return self
     */
    public function setAlternateDeliveryAddress(ShipmentAlternateDeliveryAddress $alternateDeliveryAddress) : self
    {
        $this->initialized['alternateDeliveryAddress'] = true;
        $this->alternateDeliveryAddress = $alternateDeliveryAddress;
        return $this;
    }
    /**
    * Ship From Container.  Required for return shipment. 
    
    Required if pickup location is different from the shipper's address.
    *
    * @return ShipmentShipFrom
    */
    public function getShipFrom() : ShipmentShipFrom
    {
        return $this->shipFrom;
    }
    /**
    * Ship From Container.  Required for return shipment. 
    
    Required if pickup location is different from the shipper's address.
    *
    * @param ShipmentShipFrom $shipFrom
    *
    * @return self
    */
    public function setShipFrom(ShipmentShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * Payment information container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  It is required for non-Ground Freight Pricing shipments only.
     *
     * @return ShipmentPaymentInformation
     */
    public function getPaymentInformation() : ShipmentPaymentInformation
    {
        return $this->paymentInformation;
    }
    /**
     * Payment information container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  It is required for non-Ground Freight Pricing shipments only.
     *
     * @param ShipmentPaymentInformation $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(ShipmentPaymentInformation $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * Container to hold the Payment information for the Ground Freight Pricing Shipments.  Required for Ground Freight Pricing Shipments only.
     *
     * @return ShipmentFRSPaymentInformation
     */
    public function getFRSPaymentInformation() : ShipmentFRSPaymentInformation
    {
        return $this->fRSPaymentInformation;
    }
    /**
     * Container to hold the Payment information for the Ground Freight Pricing Shipments.  Required for Ground Freight Pricing Shipments only.
     *
     * @param ShipmentFRSPaymentInformation $fRSPaymentInformation
     *
     * @return self
     */
    public function setFRSPaymentInformation(ShipmentFRSPaymentInformation $fRSPaymentInformation) : self
    {
        $this->initialized['fRSPaymentInformation'] = true;
        $this->fRSPaymentInformation = $fRSPaymentInformation;
        return $this;
    }
    /**
     * Container to hold Freight Shipment information.
     *
     * @return ShipmentFreightShipmentInformation
     */
    public function getFreightShipmentInformation() : ShipmentFreightShipmentInformation
    {
        return $this->freightShipmentInformation;
    }
    /**
     * Container to hold Freight Shipment information.
     *
     * @param ShipmentFreightShipmentInformation $freightShipmentInformation
     *
     * @return self
     */
    public function setFreightShipmentInformation(ShipmentFreightShipmentInformation $freightShipmentInformation) : self
    {
        $this->initialized['freightShipmentInformation'] = true;
        $this->freightShipmentInformation = $freightShipmentInformation;
        return $this;
    }
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @return string
     */
    public function getGoodsNotInFreeCirculationIndicator() : string
    {
        return $this->goodsNotInFreeCirculationIndicator;
    }
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @param string $goodsNotInFreeCirculationIndicator
     *
     * @return self
     */
    public function setGoodsNotInFreeCirculationIndicator(string $goodsNotInFreeCirculationIndicator) : self
    {
        $this->initialized['goodsNotInFreeCirculationIndicator'] = true;
        $this->goodsNotInFreeCirculationIndicator = $goodsNotInFreeCirculationIndicator;
        return $this;
    }
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @return ShipmentPromotionalDiscountInformation
     */
    public function getPromotionalDiscountInformation() : ShipmentPromotionalDiscountInformation
    {
        return $this->promotionalDiscountInformation;
    }
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @param ShipmentPromotionalDiscountInformation $promotionalDiscountInformation
     *
     * @return self
     */
    public function setPromotionalDiscountInformation(ShipmentPromotionalDiscountInformation $promotionalDiscountInformation) : self
    {
        $this->initialized['promotionalDiscountInformation'] = true;
        $this->promotionalDiscountInformation = $promotionalDiscountInformation;
        return $this;
    }
    /**
     * DGSignatoryInfo Container  DGPaperImage will be returned if DGSignatoryInfo container present
     *
     * @return ShipmentDGSignatoryInfo
     */
    public function getDGSignatoryInfo() : ShipmentDGSignatoryInfo
    {
        return $this->dGSignatoryInfo;
    }
    /**
     * DGSignatoryInfo Container  DGPaperImage will be returned if DGSignatoryInfo container present
     *
     * @param ShipmentDGSignatoryInfo $dGSignatoryInfo
     *
     * @return self
     */
    public function setDGSignatoryInfo(ShipmentDGSignatoryInfo $dGSignatoryInfo) : self
    {
        $this->initialized['dGSignatoryInfo'] = true;
        $this->dGSignatoryInfo = $dGSignatoryInfo;
        return $this;
    }
    /**
     * ShipmentRatingOptions container.
     *
     * @return ShipmentShipmentRatingOptions
     */
    public function getShipmentRatingOptions() : ShipmentShipmentRatingOptions
    {
        return $this->shipmentRatingOptions;
    }
    /**
     * ShipmentRatingOptions container.
     *
     * @param ShipmentShipmentRatingOptions $shipmentRatingOptions
     *
     * @return self
     */
    public function setShipmentRatingOptions(ShipmentShipmentRatingOptions $shipmentRatingOptions) : self
    {
        $this->initialized['shipmentRatingOptions'] = true;
        $this->shipmentRatingOptions = $shipmentRatingOptions;
        return $this;
    }
    /**
     * Movement Reference Number (MRN) information.  Must contain alphanumeric characters only. Must be a length of 18 characters. The 3rd and 4th Characters must be the Shipper country or territory ISO Code.
     *
     * @return string
     */
    public function getMovementReferenceNumber() : string
    {
        return $this->movementReferenceNumber;
    }
    /**
     * Movement Reference Number (MRN) information.  Must contain alphanumeric characters only. Must be a length of 18 characters. The 3rd and 4th Characters must be the Shipper country or territory ISO Code.
     *
     * @param string $movementReferenceNumber
     *
     * @return self
     */
    public function setMovementReferenceNumber(string $movementReferenceNumber) : self
    {
        $this->initialized['movementReferenceNumber'] = true;
        $this->movementReferenceNumber = $movementReferenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentReferenceNumber>
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<ShipmentReferenceNumber> $referenceNumber
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
     * Service Container.
     *
     * @return ShipmentService
     */
    public function getService() : ShipmentService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param ShipmentService $service
     *
     * @return self
     */
    public function setService(ShipmentService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @return ShipmentInvoiceLineTotal
     */
    public function getInvoiceLineTotal() : ShipmentInvoiceLineTotal
    {
        return $this->invoiceLineTotal;
    }
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @param ShipmentInvoiceLineTotal $invoiceLineTotal
     *
     * @return self
     */
    public function setInvoiceLineTotal(ShipmentInvoiceLineTotal $invoiceLineTotal) : self
    {
        $this->initialized['invoiceLineTotal'] = true;
        $this->invoiceLineTotal = $invoiceLineTotal;
        return $this;
    }
    /**
     * Total number of pieces in all pallets in a UPS Worldwide Express Freight Shipment.  It is required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment. Valid values are 1 to 99999.
     *
     * @return string
     */
    public function getNumOfPiecesInShipment() : string
    {
        return $this->numOfPiecesInShipment;
    }
    /**
     * Total number of pieces in all pallets in a UPS Worldwide Express Freight Shipment.  It is required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment. Valid values are 1 to 99999.
     *
     * @param string $numOfPiecesInShipment
     *
     * @return self
     */
    public function setNumOfPiecesInShipment(string $numOfPiecesInShipment) : self
    {
        $this->initialized['numOfPiecesInShipment'] = true;
        $this->numOfPiecesInShipment = $numOfPiecesInShipment;
        return $this;
    }
    /**
    * USPS Endorsement.
    Valid values: 
    1 = Return Service Requested 
    2 = Forwarding Service Requested 
    3 = Address Service Requested 
    4 = Change Service Requested and 
    5 = No Service Selected. 
    Note: For International Mail Innovations shipments use No Service Selected. International Mail Innovations shipments are applicable for Priority Mail Innovations and Mail Innovations Economy Mail Innovations services only.  Required for Mail Innovations forward shipments.
    *
    * @return string
    */
    public function getUSPSEndorsement() : string
    {
        return $this->uSPSEndorsement;
    }
    /**
    * USPS Endorsement.
    Valid values: 
    1 = Return Service Requested 
    2 = Forwarding Service Requested 
    3 = Address Service Requested 
    4 = Change Service Requested and 
    5 = No Service Selected. 
    Note: For International Mail Innovations shipments use No Service Selected. International Mail Innovations shipments are applicable for Priority Mail Innovations and Mail Innovations Economy Mail Innovations services only.  Required for Mail Innovations forward shipments.
    *
    * @param string $uSPSEndorsement
    *
    * @return self
    */
    public function setUSPSEndorsement(string $uSPSEndorsement) : self
    {
        $this->initialized['uSPSEndorsement'] = true;
        $this->uSPSEndorsement = $uSPSEndorsement;
        return $this;
    }
    /**
     * Indicates single label with both MI label and CN22 form.  International CN22 form is required.
     *
     * @return string
     */
    public function getMILabelCN22Indicator() : string
    {
        return $this->mILabelCN22Indicator;
    }
    /**
     * Indicates single label with both MI label and CN22 form.  International CN22 form is required.
     *
     * @param string $mILabelCN22Indicator
     *
     * @return self
     */
    public function setMILabelCN22Indicator(string $mILabelCN22Indicator) : self
    {
        $this->initialized['mILabelCN22Indicator'] = true;
        $this->mILabelCN22Indicator = $mILabelCN22Indicator;
        return $this;
    }
    /**
    * A component encoded on the barcode of the Mail Innovations label.   Valid values: 
    IR = Irregular
    MA = Machineable
    SubClass is only required if the customer's contract have them subclass the package not UPS.
    *
    * @return string
    */
    public function getSubClassification() : string
    {
        return $this->subClassification;
    }
    /**
    * A component encoded on the barcode of the Mail Innovations label.   Valid values: 
    IR = Irregular
    MA = Machineable
    SubClass is only required if the customer's contract have them subclass the package not UPS.
    *
    * @param string $subClassification
    *
    * @return self
    */
    public function setSubClassification(string $subClassification) : self
    {
        $this->initialized['subClassification'] = true;
        $this->subClassification = $subClassification;
        return $this;
    }
    /**
    * Customer assigned identifier for report and billing summarization displays to the right of the Cost Center title.  Required for Mail Innovations Return shipments. It is shown on the bottom of the shipping label as reference 2.
    
    Cost Center length is alphanumeric with a max length of 30 for Mail Innovations forward shipments.
    
    Cost Center length is numeric with a max length of 4 for Mail Innovations Return shipments.
    *
    * @return string
    */
    public function getCostCenter() : string
    {
        return $this->costCenter;
    }
    /**
    * Customer assigned identifier for report and billing summarization displays to the right of the Cost Center title.  Required for Mail Innovations Return shipments. It is shown on the bottom of the shipping label as reference 2.
    
    Cost Center length is alphanumeric with a max length of 30 for Mail Innovations forward shipments.
    
    Cost Center length is numeric with a max length of 4 for Mail Innovations Return shipments.
    *
    * @param string $costCenter
    *
    * @return self
    */
    public function setCostCenter(string $costCenter) : self
    {
        $this->initialized['costCenter'] = true;
        $this->costCenter = $costCenter;
        return $this;
    }
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the CostCenter field to be barcoded at the bottom of the label.
     *
     * @return string
     */
    public function getCostCenterBarcodeIndicator() : string
    {
        return $this->costCenterBarcodeIndicator;
    }
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the CostCenter field to be barcoded at the bottom of the label.
     *
     * @param string $costCenterBarcodeIndicator
     *
     * @return self
     */
    public function setCostCenterBarcodeIndicator(string $costCenterBarcodeIndicator) : self
    {
        $this->initialized['costCenterBarcodeIndicator'] = true;
        $this->costCenterBarcodeIndicator = $costCenterBarcodeIndicator;
        return $this;
    }
    /**
     * Customer-assigned unique piece identifier that returns visibility events.  Required only for Mail Innovations forward shipments. Alpha numeric values only. It is shown on the bottom of the shipping label as reference 1.
     *
     * @return string
     */
    public function getPackageID() : string
    {
        return $this->packageID;
    }
    /**
     * Customer-assigned unique piece identifier that returns visibility events.  Required only for Mail Innovations forward shipments. Alpha numeric values only. It is shown on the bottom of the shipping label as reference 1.
     *
     * @param string $packageID
     *
     * @return self
     */
    public function setPackageID(string $packageID) : self
    {
        $this->initialized['packageID'] = true;
        $this->packageID = $packageID;
        return $this;
    }
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the PackageID field to be barcoded at the bottom of the label.
     *
     * @return string
     */
    public function getPackageIDBarcodeIndicator() : string
    {
        return $this->packageIDBarcodeIndicator;
    }
    /**
     * Presence/Absence indicator. Presence of this indicator means that the customer is requesting for the PackageID field to be barcoded at the bottom of the label.
     *
     * @param string $packageIDBarcodeIndicator
     *
     * @return self
     */
    public function setPackageIDBarcodeIndicator(string $packageIDBarcodeIndicator) : self
    {
        $this->initialized['packageIDBarcodeIndicator'] = true;
        $this->packageIDBarcodeIndicator = $packageIDBarcodeIndicator;
        return $this;
    }
    /**
    * Mail classification defined by the USPS.   Valid values: 
    1 = Balloon
    2 = Oversize
    3 = Not Applicable
    *
    * @return string
    */
    public function getIrregularIndicator() : string
    {
        return $this->irregularIndicator;
    }
    /**
    * Mail classification defined by the USPS.   Valid values: 
    1 = Balloon
    2 = Oversize
    3 = Not Applicable
    *
    * @param string $irregularIndicator
    *
    * @return self
    */
    public function setIrregularIndicator(string $irregularIndicator) : self
    {
        $this->initialized['irregularIndicator'] = true;
        $this->irregularIndicator = $irregularIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentShipmentIndicationType>
     */
    public function getShipmentIndicationType() : array
    {
        return $this->shipmentIndicationType;
    }
    /**
     * 
     *
     * @param list<ShipmentShipmentIndicationType> $shipmentIndicationType
     *
     * @return self
     */
    public function setShipmentIndicationType(array $shipmentIndicationType) : self
    {
        $this->initialized['shipmentIndicationType'] = true;
        $this->shipmentIndicationType = $shipmentIndicationType;
        return $this;
    }
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments.
    
    Format: 
    For Package return shipments, the package tracking number is concatenated with the system time (YYYY-MM-DDHH.MM.SS.NNN), followed by service code. 
    
    For MI Return shipments, the Mail Manifest ID (MMI) is concatenated with the system time.  The unique identifier (key) is required to link the package and the Mail Innovations portion of Dual Return shipment. 
    
    If unique identifier (key) is empty in the request for UPS Mail Innovations Return Service, the request will be treated as the first phase of the Mail Innovations Dual Returns Request. 
    
    If the MIDualReturnShipmentIndicator is present with empty or null MIDualReturnShipmentKey in UPS Package Return Shipment, the request will be treated as the first phase of Dual MI Return Label Shipment. 
    
    This field would be ignored if MIDualReturnShipmentIndicator is not present in UPS Package Return Shipment request.
    *
    * @return string
    */
    public function getMIDualReturnShipmentKey() : string
    {
        return $this->mIDualReturnShipmentKey;
    }
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments.
    
    Format: 
    For Package return shipments, the package tracking number is concatenated with the system time (YYYY-MM-DDHH.MM.SS.NNN), followed by service code. 
    
    For MI Return shipments, the Mail Manifest ID (MMI) is concatenated with the system time.  The unique identifier (key) is required to link the package and the Mail Innovations portion of Dual Return shipment. 
    
    If unique identifier (key) is empty in the request for UPS Mail Innovations Return Service, the request will be treated as the first phase of the Mail Innovations Dual Returns Request. 
    
    If the MIDualReturnShipmentIndicator is present with empty or null MIDualReturnShipmentKey in UPS Package Return Shipment, the request will be treated as the first phase of Dual MI Return Label Shipment. 
    
    This field would be ignored if MIDualReturnShipmentIndicator is not present in UPS Package Return Shipment request.
    *
    * @param string $mIDualReturnShipmentKey
    *
    * @return self
    */
    public function setMIDualReturnShipmentKey(string $mIDualReturnShipmentKey) : self
    {
        $this->initialized['mIDualReturnShipmentKey'] = true;
        $this->mIDualReturnShipmentKey = $mIDualReturnShipmentKey;
        return $this;
    }
    /**
    * MIDualReturnShipmentIndicator is an indicator to identify a Package Shipment is part of UPS Mail Innovations Dual Label Shipment. 
    
    Its presence means Package Shipment is part of UPS Mail Innovations Dual Label shipment.  If the indicator is present in Package Shipment request, shipment would be considered as part of a Dual Mail Innovations Returns. 
    
    This indicator is not valid with UPS Mail Innovations Returns Service code.
    *
    * @return string
    */
    public function getMIDualReturnShipmentIndicator() : string
    {
        return $this->mIDualReturnShipmentIndicator;
    }
    /**
    * MIDualReturnShipmentIndicator is an indicator to identify a Package Shipment is part of UPS Mail Innovations Dual Label Shipment. 
    
    Its presence means Package Shipment is part of UPS Mail Innovations Dual Label shipment.  If the indicator is present in Package Shipment request, shipment would be considered as part of a Dual Mail Innovations Returns. 
    
    This indicator is not valid with UPS Mail Innovations Returns Service code.
    *
    * @param string $mIDualReturnShipmentIndicator
    *
    * @return self
    */
    public function setMIDualReturnShipmentIndicator(string $mIDualReturnShipmentIndicator) : self
    {
        $this->initialized['mIDualReturnShipmentIndicator'] = true;
        $this->mIDualReturnShipmentIndicator = $mIDualReturnShipmentIndicator;
        return $this;
    }
    /**
    * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator.
    If present, Billable Weight Calculation method information and Rating Method information would be returned in response.
    *
    * @return string
    */
    public function getRatingMethodRequestedIndicator() : string
    {
        return $this->ratingMethodRequestedIndicator;
    }
    /**
    * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator.
    If present, Billable Weight Calculation method information and Rating Method information would be returned in response.
    *
    * @param string $ratingMethodRequestedIndicator
    *
    * @return self
    */
    public function setRatingMethodRequestedIndicator(string $ratingMethodRequestedIndicator) : self
    {
        $this->initialized['ratingMethodRequestedIndicator'] = true;
        $this->ratingMethodRequestedIndicator = $ratingMethodRequestedIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.
     *
     * @return string
     */
    public function getTaxInformationIndicator() : string
    {
        return $this->taxInformationIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.
     *
     * @param string $taxInformationIndicator
     *
     * @return self
     */
    public function setTaxInformationIndicator(string $taxInformationIndicator) : self
    {
        $this->initialized['taxInformationIndicator'] = true;
        $this->taxInformationIndicator = $taxInformationIndicator;
        return $this;
    }
    /**
     * Container for Shipment Service Options.
     *
     * @return ShipmentShipmentServiceOptions
     */
    public function getShipmentServiceOptions() : ShipmentShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * Container for Shipment Service Options.
     *
     * @param ShipmentShipmentServiceOptions $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(ShipmentShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions and Receipt instructions (if applicable) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country or territory code seperated by an underscore ('_') character.  If Locale element is requested along with LabelLinksIndicator, the URL to retrieve Label and Receipts (if applicable) will be returned in the requested Locale. Please note only LabelURL and ReceiptURL (if applicable) will be returned. LocalLanguageLabelURL and LocalLanguageReceiptURL will not be returned if Locale element is present in request.
    Queen's English (en_GB) is the default
    *
    * @return string
    */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions and Receipt instructions (if applicable) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country or territory code seperated by an underscore ('_') character.  If Locale element is requested along with LabelLinksIndicator, the URL to retrieve Label and Receipts (if applicable) will be returned in the requested Locale. Please note only LabelURL and ReceiptURL (if applicable) will be returned. LocalLanguageLabelURL and LocalLanguageReceiptURL will not be returned if Locale element is present in request.
    Queen's English (en_GB) is the default
    *
    * @param string $locale
    *
    * @return self
    */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
    * Shipment Value Threshold Code. 01 = Shipment value is below or equals to threshold value
    02 = Shipment value is above threshold value.     NA = Not Applicable
    *
    * @return string
    */
    public function getShipmentValueThresholdCode() : string
    {
        return $this->shipmentValueThresholdCode;
    }
    /**
    * Shipment Value Threshold Code. 01 = Shipment value is below or equals to threshold value
    02 = Shipment value is above threshold value.     NA = Not Applicable
    *
    * @param string $shipmentValueThresholdCode
    *
    * @return self
    */
    public function setShipmentValueThresholdCode(string $shipmentValueThresholdCode) : self
    {
        $this->initialized['shipmentValueThresholdCode'] = true;
        $this->shipmentValueThresholdCode = $shipmentValueThresholdCode;
        return $this;
    }
    /**
     * Master Carton ID. If Economy Service (17 or 72) : Economy Shipment will be associated with given Master Carton ID. If Non-Economy Service: Master Carton Shipment will be created for given Master Carton ID.
     *
     * @return string
     */
    public function getMasterCartonID() : string
    {
        return $this->masterCartonID;
    }
    /**
     * Master Carton ID. If Economy Service (17 or 72) : Economy Shipment will be associated with given Master Carton ID. If Non-Economy Service: Master Carton Shipment will be created for given Master Carton ID.
     *
     * @param string $masterCartonID
     *
     * @return self
     */
    public function setMasterCartonID(string $masterCartonID) : self
    {
        $this->initialized['masterCartonID'] = true;
        $this->masterCartonID = $masterCartonID;
        return $this;
    }
    /**
    * Master Carton Indicator. Presence of the indicator means Master Carton ID will be created and returned to client. 
    This is an empty tag, any value inside is ignored.                                                                  MasterCartonIndicator is only valid with Econmoy Shipment (Service Code 17 or 72). Will be ignored if master carton id present.
    *
    * @return string
    */
    public function getMasterCartonIndicator() : string
    {
        return $this->masterCartonIndicator;
    }
    /**
    * Master Carton Indicator. Presence of the indicator means Master Carton ID will be created and returned to client. 
    This is an empty tag, any value inside is ignored.                                                                  MasterCartonIndicator is only valid with Econmoy Shipment (Service Code 17 or 72). Will be ignored if master carton id present.
    *
    * @param string $masterCartonIndicator
    *
    * @return self
    */
    public function setMasterCartonIndicator(string $masterCartonIndicator) : self
    {
        $this->initialized['masterCartonIndicator'] = true;
        $this->masterCartonIndicator = $masterCartonIndicator;
        return $this;
    }
    /**
     * User can send up to 7 days in the future with current date as day zero. Format: YYYYMMDD
     *
     * @return string
     */
    public function getShipmentDate() : string
    {
        return $this->shipmentDate;
    }
    /**
     * User can send up to 7 days in the future with current date as day zero. Format: YYYYMMDD
     *
     * @param string $shipmentDate
     *
     * @return self
     */
    public function setShipmentDate(string $shipmentDate) : self
    {
        $this->initialized['shipmentDate'] = true;
        $this->shipmentDate = $shipmentDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentPackage>
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<ShipmentPackage> $package
     *
     * @return self
     */
    public function setPackage(array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
}