<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResponseShipmentResults extends \ArrayObject
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
     * Disclaimer would be used to provide more information to shipper regarding the processed shipment. This would be used to notify shipper about possible taxes and duties that might have been added or might apply to the shipment. This field would be returned only if TaxInformationIndicator is present in a request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ShipmentResultsDisclaimer>
     */
    protected $disclaimer;
    /**
     * Shipment charges Container. Shipment charges info.
     *
     * @var ShipmentResultsShipmentCharges
     */
    protected $shipmentCharges;
    /**
     * Negotiated Rates Charge Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @var ShipmentResultsNegotiatedRateCharges|null
     */
    protected $negotiatedRateCharges;
    /**
     * Ground Freight Pricing Shipment data container. Ground Freight Pricing shipment data is only guaranteed to be returned for Ground Freight Pricing shipments only.
     *
     * @var ShipmentResultsFRSShipmentData|null
     */
    protected $fRSShipmentData;
    /**
    * RatingMethod is to indicate whether the Shipment was rated as shipment level or package level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment level
    02 = Package level
    *
    * @var string|null
    */
    protected $ratingMethod;
    /**
    * BillableWeightCalculationMethod is to indicate whether the billable weight calculation method utilized was - the package level or shipment level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment Billable Weight
    02 = Package Billable Weight
    *
    * @var string|null
    */
    protected $billableWeightCalculationMethod;
    /**
     * Billing Weight container.
     *
     * @var ShipmentResultsBillingWeight
     */
    protected $billingWeight;
    /**
     * Returned UPS shipment ID number.1Z Number of the first package in the shipment.
     *
     * @var string|null
     */
    protected $shipmentIdentificationNumber;
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments and would be played back in response for second phase of Mail Innovations Dual Return Shipment.  If the shipment is a Package return shipment, the package tracking number will be concatenated with the system time (in the format YYYY-MM-DDHH.MM.SS.NNN) and followed by service code. 
    
    If the shipment is an MI Returns shipment, the Mail Manifest ID (MMI) will be concatenated with the system time.
    *
    * @var string|null
    */
    protected $mIDualReturnShipmentKey;
    /**
     * Bar Code Image will be returned as Base 64 encoded graphic image. Bar Code Image will be returned if BarCodeImageIndicator or BarCodeAndLabelIndicator is present.
     *
     * @var string|null
     */
    protected $barCodeImage;
    /**
     * Returned Package Information.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ShipmentResultsPackageResults>|null
     */
    protected $packageResults;
    /**
     * Container for the High Value reports when forward shipments have declared value between $999 and $50,000 USD. \nTwo copies of high value report needs to be pointed out.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ShipmentResultsControlLogReceipt>|null
     */
    protected $controlLogReceipt;
    /**
    * Container tag for the International forms image.   Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
    *
    * @var ShipmentResultsForm|null
    */
    protected $form;
    /**
     * The container of the COD Turn In Page.
     *
     * @var ShipmentResultsCODTurnInPage|null
     */
    protected $cODTurnInPage;
    /**
     * Container for the High Value Report generated for ImportControl or Return shipments with high package declared value.
     *
     * @var ShipmentResultsHighValueReport|null
     */
    protected $highValueReport;
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.
    *
    * @var string|null
    */
    protected $labelURL;
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageLabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.  Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @var string|null
    */
    protected $localLanguageLabelURL;
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. ReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.
    *
    * @var string|null
    */
    protected $receiptURL;
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.   Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @var string|null
    */
    protected $localLanguageReceiptURL;
    /**
     * Dangerous Good Paper Image in pdf format. One multipage PDF document will be returned that will contain all required Dangrous Goods shipping paper copies for all Dangerous Goods packages. Only returned when DGSignatoryInfo is present.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<string>|null
     */
    protected $dGPaperImage;
    /**
     * Master Carton ID. MasterCartonID will be return if MasterCartonIndicator is present in request.
     *
     * @var string|null
     */
    protected $masterCartonID;
    /**
     * Informational only
     *
     * @var string|null
     */
    protected $roarRatedIndicator;
    /**
     * Disclaimer would be used to provide more information to shipper regarding the processed shipment. This would be used to notify shipper about possible taxes and duties that might have been added or might apply to the shipment. This field would be returned only if TaxInformationIndicator is present in a request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ShipmentResultsDisclaimer>
     */
    public function getDisclaimer() : array
    {
        return $this->disclaimer;
    }
    /**
     * Disclaimer would be used to provide more information to shipper regarding the processed shipment. This would be used to notify shipper about possible taxes and duties that might have been added or might apply to the shipment. This field would be returned only if TaxInformationIndicator is present in a request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ShipmentResultsDisclaimer> $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(array $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * Shipment charges Container. Shipment charges info.
     *
     * @return ShipmentResultsShipmentCharges
     */
    public function getShipmentCharges() : ShipmentResultsShipmentCharges
    {
        return $this->shipmentCharges;
    }
    /**
     * Shipment charges Container. Shipment charges info.
     *
     * @param ShipmentResultsShipmentCharges $shipmentCharges
     *
     * @return self
     */
    public function setShipmentCharges(ShipmentResultsShipmentCharges $shipmentCharges) : self
    {
        $this->initialized['shipmentCharges'] = true;
        $this->shipmentCharges = $shipmentCharges;
        return $this;
    }
    /**
     * Negotiated Rates Charge Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @return ShipmentResultsNegotiatedRateCharges|null
     */
    public function getNegotiatedRateCharges() : ?ShipmentResultsNegotiatedRateCharges
    {
        return $this->negotiatedRateCharges;
    }
    /**
     * Negotiated Rates Charge Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @param ShipmentResultsNegotiatedRateCharges|null $negotiatedRateCharges
     *
     * @return self
     */
    public function setNegotiatedRateCharges(?ShipmentResultsNegotiatedRateCharges $negotiatedRateCharges) : self
    {
        $this->initialized['negotiatedRateCharges'] = true;
        $this->negotiatedRateCharges = $negotiatedRateCharges;
        return $this;
    }
    /**
     * Ground Freight Pricing Shipment data container. Ground Freight Pricing shipment data is only guaranteed to be returned for Ground Freight Pricing shipments only.
     *
     * @return ShipmentResultsFRSShipmentData|null
     */
    public function getFRSShipmentData() : ?ShipmentResultsFRSShipmentData
    {
        return $this->fRSShipmentData;
    }
    /**
     * Ground Freight Pricing Shipment data container. Ground Freight Pricing shipment data is only guaranteed to be returned for Ground Freight Pricing shipments only.
     *
     * @param ShipmentResultsFRSShipmentData|null $fRSShipmentData
     *
     * @return self
     */
    public function setFRSShipmentData(?ShipmentResultsFRSShipmentData $fRSShipmentData) : self
    {
        $this->initialized['fRSShipmentData'] = true;
        $this->fRSShipmentData = $fRSShipmentData;
        return $this;
    }
    /**
    * RatingMethod is to indicate whether the Shipment was rated as shipment level or package level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment level
    02 = Package level
    *
    * @return string|null
    */
    public function getRatingMethod() : ?string
    {
        return $this->ratingMethod;
    }
    /**
    * RatingMethod is to indicate whether the Shipment was rated as shipment level or package level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment level
    02 = Package level
    *
    * @param string|null $ratingMethod
    *
    * @return self
    */
    public function setRatingMethod(?string $ratingMethod) : self
    {
        $this->initialized['ratingMethod'] = true;
        $this->ratingMethod = $ratingMethod;
        return $this;
    }
    /**
    * BillableWeightCalculationMethod is to indicate whether the billable weight calculation method utilized was - the package level or shipment level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment Billable Weight
    02 = Package Billable Weight
    *
    * @return string|null
    */
    public function getBillableWeightCalculationMethod() : ?string
    {
        return $this->billableWeightCalculationMethod;
    }
    /**
    * BillableWeightCalculationMethod is to indicate whether the billable weight calculation method utilized was - the package level or shipment level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Valid values:
    01 = Shipment Billable Weight
    02 = Package Billable Weight
    *
    * @param string|null $billableWeightCalculationMethod
    *
    * @return self
    */
    public function setBillableWeightCalculationMethod(?string $billableWeightCalculationMethod) : self
    {
        $this->initialized['billableWeightCalculationMethod'] = true;
        $this->billableWeightCalculationMethod = $billableWeightCalculationMethod;
        return $this;
    }
    /**
     * Billing Weight container.
     *
     * @return ShipmentResultsBillingWeight
     */
    public function getBillingWeight() : ShipmentResultsBillingWeight
    {
        return $this->billingWeight;
    }
    /**
     * Billing Weight container.
     *
     * @param ShipmentResultsBillingWeight $billingWeight
     *
     * @return self
     */
    public function setBillingWeight(ShipmentResultsBillingWeight $billingWeight) : self
    {
        $this->initialized['billingWeight'] = true;
        $this->billingWeight = $billingWeight;
        return $this;
    }
    /**
     * Returned UPS shipment ID number.1Z Number of the first package in the shipment.
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber() : ?string
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * Returned UPS shipment ID number.1Z Number of the first package in the shipment.
     *
     * @param string|null $shipmentIdentificationNumber
     *
     * @return self
     */
    public function setShipmentIdentificationNumber(?string $shipmentIdentificationNumber) : self
    {
        $this->initialized['shipmentIdentificationNumber'] = true;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments and would be played back in response for second phase of Mail Innovations Dual Return Shipment.  If the shipment is a Package return shipment, the package tracking number will be concatenated with the system time (in the format YYYY-MM-DDHH.MM.SS.NNN) and followed by service code. 
    
    If the shipment is an MI Returns shipment, the Mail Manifest ID (MMI) will be concatenated with the system time.
    *
    * @return string|null
    */
    public function getMIDualReturnShipmentKey() : ?string
    {
        return $this->mIDualReturnShipmentKey;
    }
    /**
    * MIDualReturnShipmentKey is unique key required to process Mail Innovations Dual Return Shipment. 
    
    The unique identifier (key) would be returned in response of first phase of Mail Innovations Dual Return Shipments. 
    
    This unique identifier (key) would be part of request for second phase of Mail Innovations Dual Return Shipments and would be played back in response for second phase of Mail Innovations Dual Return Shipment.  If the shipment is a Package return shipment, the package tracking number will be concatenated with the system time (in the format YYYY-MM-DDHH.MM.SS.NNN) and followed by service code. 
    
    If the shipment is an MI Returns shipment, the Mail Manifest ID (MMI) will be concatenated with the system time.
    *
    * @param string|null $mIDualReturnShipmentKey
    *
    * @return self
    */
    public function setMIDualReturnShipmentKey(?string $mIDualReturnShipmentKey) : self
    {
        $this->initialized['mIDualReturnShipmentKey'] = true;
        $this->mIDualReturnShipmentKey = $mIDualReturnShipmentKey;
        return $this;
    }
    /**
     * Bar Code Image will be returned as Base 64 encoded graphic image. Bar Code Image will be returned if BarCodeImageIndicator or BarCodeAndLabelIndicator is present.
     *
     * @return string|null
     */
    public function getBarCodeImage() : ?string
    {
        return $this->barCodeImage;
    }
    /**
     * Bar Code Image will be returned as Base 64 encoded graphic image. Bar Code Image will be returned if BarCodeImageIndicator or BarCodeAndLabelIndicator is present.
     *
     * @param string|null $barCodeImage
     *
     * @return self
     */
    public function setBarCodeImage(?string $barCodeImage) : self
    {
        $this->initialized['barCodeImage'] = true;
        $this->barCodeImage = $barCodeImage;
        return $this;
    }
    /**
     * Returned Package Information.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ShipmentResultsPackageResults>|null
     */
    public function getPackageResults() : ?array
    {
        return $this->packageResults;
    }
    /**
     * Returned Package Information.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ShipmentResultsPackageResults>|null $packageResults
     *
     * @return self
     */
    public function setPackageResults(?array $packageResults) : self
    {
        $this->initialized['packageResults'] = true;
        $this->packageResults = $packageResults;
        return $this;
    }
    /**
     * Container for the High Value reports when forward shipments have declared value between $999 and $50,000 USD. \nTwo copies of high value report needs to be pointed out.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ShipmentResultsControlLogReceipt>|null
     */
    public function getControlLogReceipt() : ?array
    {
        return $this->controlLogReceipt;
    }
    /**
     * Container for the High Value reports when forward shipments have declared value between $999 and $50,000 USD. \nTwo copies of high value report needs to be pointed out.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ShipmentResultsControlLogReceipt>|null $controlLogReceipt
     *
     * @return self
     */
    public function setControlLogReceipt(?array $controlLogReceipt) : self
    {
        $this->initialized['controlLogReceipt'] = true;
        $this->controlLogReceipt = $controlLogReceipt;
        return $this;
    }
    /**
    * Container tag for the International forms image.   Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
    *
    * @return ShipmentResultsForm|null
    */
    public function getForm() : ?ShipmentResultsForm
    {
        return $this->form;
    }
    /**
    * Container tag for the International forms image.   Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
    *
    * @param ShipmentResultsForm|null $form
    *
    * @return self
    */
    public function setForm(?ShipmentResultsForm $form) : self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }
    /**
     * The container of the COD Turn In Page.
     *
     * @return ShipmentResultsCODTurnInPage|null
     */
    public function getCODTurnInPage() : ?ShipmentResultsCODTurnInPage
    {
        return $this->cODTurnInPage;
    }
    /**
     * The container of the COD Turn In Page.
     *
     * @param ShipmentResultsCODTurnInPage|null $cODTurnInPage
     *
     * @return self
     */
    public function setCODTurnInPage(?ShipmentResultsCODTurnInPage $cODTurnInPage) : self
    {
        $this->initialized['cODTurnInPage'] = true;
        $this->cODTurnInPage = $cODTurnInPage;
        return $this;
    }
    /**
     * Container for the High Value Report generated for ImportControl or Return shipments with high package declared value.
     *
     * @return ShipmentResultsHighValueReport|null
     */
    public function getHighValueReport() : ?ShipmentResultsHighValueReport
    {
        return $this->highValueReport;
    }
    /**
     * Container for the High Value Report generated for ImportControl or Return shipments with high package declared value.
     *
     * @param ShipmentResultsHighValueReport|null $highValueReport
     *
     * @return self
     */
    public function setHighValueReport(?ShipmentResultsHighValueReport $highValueReport) : self
    {
        $this->initialized['highValueReport'] = true;
        $this->highValueReport = $highValueReport;
        return $this;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.
    *
    * @return string|null
    */
    public function getLabelURL() : ?string
    {
        return $this->labelURL;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.
    *
    * @param string|null $labelURL
    *
    * @return self
    */
    public function setLabelURL(?string $labelURL) : self
    {
        $this->initialized['labelURL'] = true;
        $this->labelURL = $labelURL;
        return $this;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageLabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.  Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @return string|null
    */
    public function getLocalLanguageLabelURL() : ?string
    {
        return $this->localLanguageLabelURL;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageLabelURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment. 
    Forward shipment except for Mail Innovations Forward.  Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @param string|null $localLanguageLabelURL
    *
    * @return self
    */
    public function setLocalLanguageLabelURL(?string $localLanguageLabelURL) : self
    {
        $this->initialized['localLanguageLabelURL'] = true;
        $this->localLanguageLabelURL = $localLanguageLabelURL;
        return $this;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. ReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.
    *
    * @return string|null
    */
    public function getReceiptURL() : ?string
    {
        return $this->receiptURL;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. ReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.
    *
    * @param string|null $receiptURL
    *
    * @return self
    */
    public function setReceiptURL(?string $receiptURL) : self
    {
        $this->initialized['receiptURL'] = true;
        $this->receiptURL = $receiptURL;
        return $this;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.   Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @return string|null
    */
    public function getLocalLanguageReceiptURL() : ?string
    {
        return $this->localLanguageReceiptURL;
    }
    /**
    * URL will point to a page wherein label, receipt and other documents, if applicable, such as HighValueReport, CustomsInvoice and ImportControl instructions can be requested. LocalLanguageReceiptURL is returned only if the LabelLinksIndicator is requested for following shipments:
    Print/Electronic ImportControl shipment
    Print/Electronic Return shipment.   Not returned if LabelLinksIndicator is requested with Locale element.
    *
    * @param string|null $localLanguageReceiptURL
    *
    * @return self
    */
    public function setLocalLanguageReceiptURL(?string $localLanguageReceiptURL) : self
    {
        $this->initialized['localLanguageReceiptURL'] = true;
        $this->localLanguageReceiptURL = $localLanguageReceiptURL;
        return $this;
    }
    /**
     * Dangerous Good Paper Image in pdf format. One multipage PDF document will be returned that will contain all required Dangrous Goods shipping paper copies for all Dangerous Goods packages. Only returned when DGSignatoryInfo is present.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<string>|null
     */
    public function getDGPaperImage() : ?array
    {
        return $this->dGPaperImage;
    }
    /**
     * Dangerous Good Paper Image in pdf format. One multipage PDF document will be returned that will contain all required Dangrous Goods shipping paper copies for all Dangerous Goods packages. Only returned when DGSignatoryInfo is present.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<string>|null $dGPaperImage
     *
     * @return self
     */
    public function setDGPaperImage(?array $dGPaperImage) : self
    {
        $this->initialized['dGPaperImage'] = true;
        $this->dGPaperImage = $dGPaperImage;
        return $this;
    }
    /**
     * Master Carton ID. MasterCartonID will be return if MasterCartonIndicator is present in request.
     *
     * @return string|null
     */
    public function getMasterCartonID() : ?string
    {
        return $this->masterCartonID;
    }
    /**
     * Master Carton ID. MasterCartonID will be return if MasterCartonIndicator is present in request.
     *
     * @param string|null $masterCartonID
     *
     * @return self
     */
    public function setMasterCartonID(?string $masterCartonID) : self
    {
        $this->initialized['masterCartonID'] = true;
        $this->masterCartonID = $masterCartonID;
        return $this;
    }
    /**
     * Informational only
     *
     * @return string|null
     */
    public function getRoarRatedIndicator() : ?string
    {
        return $this->roarRatedIndicator;
    }
    /**
     * Informational only
     *
     * @param string|null $roarRatedIndicator
     *
     * @return self
     */
    public function setRoarRatedIndicator(?string $roarRatedIndicator) : self
    {
        $this->initialized['roarRatedIndicator'] = true;
        $this->roarRatedIndicator = $roarRatedIndicator;
        return $this;
    }
}