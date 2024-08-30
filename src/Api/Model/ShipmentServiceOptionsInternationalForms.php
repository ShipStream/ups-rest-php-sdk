<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsInternationalForms extends \ArrayObject
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
    * Indicates the name of the International Form requested.
    
    Valid values:
    - 01 - Invoice
    - 03 - CO
    - 04 - NAFTA CO
    - 05 - Partial Invoice
    - 06 - Packinglist
    - 07 - Customer Generated Forms
    - 08 – Air Freight Packing List
    - 09 - CN22 Form
    - 10 – UPS Premium Care Form
    - 11 - EEI
    
    For shipment with return service, 05 or 10 are the only valid values.
    
    Note: 01 and 05 are mutually exclusive and 05 are only valid for return shipments only.
    
    *
    * @var list<string>
    */
    protected $formType;
    /**
     * Data container for DocumentID(s).  Required if Form Type is 07.
     *
     * @var InternationalFormsUserCreatedForm
     */
    protected $userCreatedForm;
    /**
     * UPS Premium Care Form is required if UPS Premium Care Indicator is present on a package.  Valid only for Canada to Canada movements.
     *
     * @var InternationalFormsUPSPremiumCareForm
     */
    protected $uPSPremiumCareForm;
    /**
     * Container for the CN22 form.  Required if the customer wants to use the UPS generated CN22.
     *
     * @var InternationalFormsCN22Form
     */
    protected $cN22Form;
    /**
    * Presence of the indicator means user will supply additional document, such as EEI, NAFTA_CO or CO.  This indicator should be set when the shipper intends to utilize UPS paperless invoice functionality AND the shipper has SELF-PREPARED other International Forms (EEI, CO, NAFTACO) to accompany the shipment. 
    It is evaluated only when: 
    1. Account is paperless enabled. 
    2. Movement requires an invoice.
    3. Destination country or territory accepts paperless invoice. 
    4. Invoice data is supplied by the client and the data passes validation.
    *
    * @var string
    */
    protected $additionalDocumentIndicator;
    /**
     * Contains description text which identifies the group of International forms. This element does not appear on the forms.
     *
     * @var string
     */
    protected $formGroupIdName;
    /**
     * EEI Filing option.  Applicable for EEI form and is required.
     *
     * @var InternationalFormsEEIFilingOption
     */
    protected $eEIFilingOption;
    /**
     * Holds the contact information of various parties.  Applicable for EEI and NAFTA CO only. Required for NAFTA CO and EEI. Ultimate consignee contact information is required for EEI.  Producer contact information is required for NAFTA CO
     *
     * @var InternationalFormsContacts
     */
    protected $contacts;
    /**
     * 
     *
     * @var list<InternationalFormsProduct>|null
     */
    protected $product;
    /**
     * Commercial Invoice number assigned by the exporter.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice.
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * Date when the Invoice is created. Ideally this is the same as the ship date.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Required for Invoice form for forward shipments. For shipment with return service, the user input will be ignored, and the field will be blank on the invoice. Format is yyyyMMdd.
     *
     * @var string
     */
    protected $invoiceDate;
    /**
     * The customer's order reference number.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var string
     */
    protected $purchaseOrderNumber;
    /**
    * Indicates the rights to the seller from the buyer. Also, it refers to Terms of Sale.  Applies to Invoice and Partial Invoice forms only. 
    
    Valid values: 
    CFR: Cost and Freight 
    CIF: Cost Insurance and Freight 
    CIP: Carriage and Insurance Paid 
    CPT: Carriage Paid To 
    DAF: Delivered at Frontier 
    DDP: Delivery Duty Paid 
    DDU: Delivery Duty Unpaid 
    DEQ: Delivered Ex Quay 
    DES: Delivered Ex Ship 
    EXW: Ex Works 
    FAS: Free Alongside Ship 
    FCA: Free Carrier 
    FOB: Free On Board
    *
    * @var string
    */
    protected $termsOfShipment;
    /**
    * A reason to export the current international shipment.
    Valid values: SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA, Any other reason.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and Optional for Partial Invoice. No validation.
    *
    * @var string
    */
    protected $reasonForExport;
    /**
     * Any extra information about the current shipment.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var string
     */
    protected $comments;
    /**
     * This is the legal explanation, used by Customs, for the delivering of this shipment. It must be identical to the set of declarations actually used by Customs. Examples of declarations that might be entered in this field are: I hereby certify that the goods covered by this shipment qualify as originating goods for purposes of preferential tariff treatment under the NAFTA. I hereby certify that the information on this invoice is true and correct and the contents and value of this shipment is as stated above.  EEA statement:  The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin.  Applies to Invoice and Partial Invoice forms only. On the invoice for return shipment, the verbiage is as follows (user input is ignored): The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin
     *
     * @var string
     */
    protected $declarationStatement;
    /**
     * Container tag that holds the discount.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var InternationalFormsDiscount
     */
    protected $discount;
    /**
     * Container tag that holds the Freight Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var InternationalFormsFreightCharges
     */
    protected $freightCharges;
    /**
     * Container tag that holds the Insurance Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var InternationalFormsInsuranceCharges
     */
    protected $insuranceCharges;
    /**
     * Container tag that holds the information of amount that covers additional charges not already listed on the invoice.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var InternationalFormsOtherCharges
     */
    protected $otherCharges;
    /**
     * Currency code for all the monetary values of the Invoice form.  Applies to Invoice and Partial Invoice forms only.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * This field should be entered if the  NAFTA Certificate covers multiple shipments of identical goods as described in the Description of Goods field that are imported into a NAFTA country or territory for a specified period of up to one year (the blanket period). The importation of a good for which preferential treatment is claimed based on this certificate must occur between these dates.  Applies to NAFTA CO form only. Required for NAFTA CO.  This is not valid for a paperless shipment.
     *
     * @var InternationalFormsBlanketPeriod
     */
    protected $blanketPeriod;
    /**
     * The date the goods will be exiting the country or territory.  Applies to CO and EEI forms only. Required for CO and EEI forms. Format is yyyyMMdd.
     *
     * @var string
     */
    protected $exportDate;
    /**
    * The name of the carrier that is exporting the shipment. The vessels flag number should also be entered, if the carrier is a vessel.
    
    If value is empty, it will be set to default value as 'UPS' for EEI forms.  Applies to CO and EEI forms only. Required for CO forms.
    
    *
    * @var string
    */
    protected $exportingCarrier;
    /**
     * The four-character Standard Carrier Alpha Code (SCAC) for vessel, rail, and truck shipments. For air shipment, enter the two or three character International Air Transport Association (IATA) code.  Applies to EEI forms only. No Validations.
     *
     * @var string
     */
    protected $carrierID;
    /**
     * The two-character In Bond Code.  Applies to EEI forms only. Required for EEI forms. Valid values for EEI are: 70: Not in bond; 67: IE from a FTZ; 68: T&E from a FTZ.
     *
     * @var string
     */
    protected $inBondCode;
    /**
     * The Import Entry Number when the export transaction is used as proof of export for import transactions (examples: In Bond, Temporary Import Bond or Drawbacks).  Applies to EEI forms only. Conditionally Required for EEI forms when In bond code value is other than 70 (Not In Bond)
     *
     * @var string
     */
    protected $entryNumber;
    /**
     * Contains one of the following:  The two-digit U.S. Postal Service abbreviation for the state from which the goods were shipped to the port of export. The state that is the source for the good with the highest value. The state of consolidation. The Foreign Trade Zone number of the zone from where the exports are leaving.  If the goods were shipped from Puerto Rico, enter PR.  Applies to EEI forms only. Required for EEI.
     *
     * @var string
     */
    protected $pointOfOrigin;
    /**
     * Valid values are : S (for state postal code abbreviation) , F : FTZ Identifier  Applies EEI forms only. Required for EEI form.
     *
     * @var string
     */
    protected $pointOfOriginType;
    /**
     * Mode of transport by which the goods are exported. Valid values: Air, AirContainerized, Auto, FixedTransportInstallations, Mail, PassengerHandcarried, Pedestrian, Rail, Rail, Containerized, RoadOther, SeaBarge, SeaContainerized, SeaNoncontainerized, Truck, TruckContainerized.  Applies to EEI forms only.  Required for EEI.  Only allowed values can be entered. Only 10 Characters can appear on the form. Anything greater than 10 characters will be truncated on the form.
     *
     * @var string
     */
    protected $modeOfTransport;
    /**
     * Should be one of the following-Overland: The U.S. Customs port where the carrier crosses the U.S. border, Vessel and Air: The U.S. Customs port where the goods are loaded on the carrier to be exported from the U.S., Postal: The U.S. Postal Office from where the goods are mailed.  Applies to EEI forms only. No validation is performed.
     *
     * @var string
     */
    protected $portOfExport;
    /**
     * The country or territory and the port where the goods will be unloaded from the exporting carrier. For vessel and air shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @var string
     */
    protected $portOfUnloading;
    /**
     * Pier where goods are loaded. For vessel shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @var string
     */
    protected $loadingPier;
    /**
    * Information about parties to transaction. Use Related, if the parties to the transaction are related. A related party is an export from a U.S. businessperson or business to a foreign business or from a U.S. business to a foreign person or business where the person has at least 10 percent of the voting shares of the business during the fiscal year. If unincorporated, then an equivalent interest in the business.  Applies to EEI forms only.
    
    Valid values:
    - R - Related
    - N - Non-related.
    
    Parties to transaction is required if EEIFilingOption Code is 3 and if valid UPSFiled POA Code present in request.
    
    Default will be set to N - Non-related if invalid code present with length of one.
    
    *
    * @var string
    */
    protected $partiesToTransaction;
    /**
     * If Present, indicates that it is a routed export transaction. A routed export transaction is one, where the foreign principal party in interest authorizes a U.S. forwarding (or other) agent to export the merchandise outside the U.S.  Applies to EEI forms only.
     *
     * @var string
     */
    protected $routedExportTransactionIndicator;
    /**
     * If present indicates that the goods are containerized. This applies to vessel shipments only.  Applies to EEI forms only.
     *
     * @var string
     */
    protected $containerizedIndicator;
    /**
     * The application will automatically provide a copy of the invoice or NAFTA/CO with each response regardless of whether the user has enabled Paperless account. The user now has the option to print or ignore the copy provided.
     *
     * @var string
     */
    protected $overridePaperlessIndicator;
    /**
     * Text for the shipper to add additional information.  Forward shipment only.
     *
     * @var string
     */
    protected $shipperMemo;
    /**
     * This is an empty tag. Presence of the indicator for EEI form means shipment contains hazardous material.
     *
     * @var string
     */
    protected $hazardousMaterialsIndicator;
    /**
    * Indicates the name of the International Form requested.
    
    Valid values:
    - 01 - Invoice
    - 03 - CO
    - 04 - NAFTA CO
    - 05 - Partial Invoice
    - 06 - Packinglist
    - 07 - Customer Generated Forms
    - 08 – Air Freight Packing List
    - 09 - CN22 Form
    - 10 – UPS Premium Care Form
    - 11 - EEI
    
    For shipment with return service, 05 or 10 are the only valid values.
    
    Note: 01 and 05 are mutually exclusive and 05 are only valid for return shipments only.
    
    *
    * @return list<string>
    */
    public function getFormType() : array
    {
        return $this->formType;
    }
    /**
    * Indicates the name of the International Form requested.
    
    Valid values:
    - 01 - Invoice
    - 03 - CO
    - 04 - NAFTA CO
    - 05 - Partial Invoice
    - 06 - Packinglist
    - 07 - Customer Generated Forms
    - 08 – Air Freight Packing List
    - 09 - CN22 Form
    - 10 – UPS Premium Care Form
    - 11 - EEI
    
    For shipment with return service, 05 or 10 are the only valid values.
    
    Note: 01 and 05 are mutually exclusive and 05 are only valid for return shipments only.
    
    *
    * @param list<string> $formType
    *
    * @return self
    */
    public function setFormType(array $formType) : self
    {
        $this->initialized['formType'] = true;
        $this->formType = $formType;
        return $this;
    }
    /**
     * Data container for DocumentID(s).  Required if Form Type is 07.
     *
     * @return InternationalFormsUserCreatedForm
     */
    public function getUserCreatedForm() : InternationalFormsUserCreatedForm
    {
        return $this->userCreatedForm;
    }
    /**
     * Data container for DocumentID(s).  Required if Form Type is 07.
     *
     * @param InternationalFormsUserCreatedForm $userCreatedForm
     *
     * @return self
     */
    public function setUserCreatedForm(InternationalFormsUserCreatedForm $userCreatedForm) : self
    {
        $this->initialized['userCreatedForm'] = true;
        $this->userCreatedForm = $userCreatedForm;
        return $this;
    }
    /**
     * UPS Premium Care Form is required if UPS Premium Care Indicator is present on a package.  Valid only for Canada to Canada movements.
     *
     * @return InternationalFormsUPSPremiumCareForm
     */
    public function getUPSPremiumCareForm() : InternationalFormsUPSPremiumCareForm
    {
        return $this->uPSPremiumCareForm;
    }
    /**
     * UPS Premium Care Form is required if UPS Premium Care Indicator is present on a package.  Valid only for Canada to Canada movements.
     *
     * @param InternationalFormsUPSPremiumCareForm $uPSPremiumCareForm
     *
     * @return self
     */
    public function setUPSPremiumCareForm(InternationalFormsUPSPremiumCareForm $uPSPremiumCareForm) : self
    {
        $this->initialized['uPSPremiumCareForm'] = true;
        $this->uPSPremiumCareForm = $uPSPremiumCareForm;
        return $this;
    }
    /**
     * Container for the CN22 form.  Required if the customer wants to use the UPS generated CN22.
     *
     * @return InternationalFormsCN22Form
     */
    public function getCN22Form() : InternationalFormsCN22Form
    {
        return $this->cN22Form;
    }
    /**
     * Container for the CN22 form.  Required if the customer wants to use the UPS generated CN22.
     *
     * @param InternationalFormsCN22Form $cN22Form
     *
     * @return self
     */
    public function setCN22Form(InternationalFormsCN22Form $cN22Form) : self
    {
        $this->initialized['cN22Form'] = true;
        $this->cN22Form = $cN22Form;
        return $this;
    }
    /**
    * Presence of the indicator means user will supply additional document, such as EEI, NAFTA_CO or CO.  This indicator should be set when the shipper intends to utilize UPS paperless invoice functionality AND the shipper has SELF-PREPARED other International Forms (EEI, CO, NAFTACO) to accompany the shipment. 
    It is evaluated only when: 
    1. Account is paperless enabled. 
    2. Movement requires an invoice.
    3. Destination country or territory accepts paperless invoice. 
    4. Invoice data is supplied by the client and the data passes validation.
    *
    * @return string
    */
    public function getAdditionalDocumentIndicator() : string
    {
        return $this->additionalDocumentIndicator;
    }
    /**
    * Presence of the indicator means user will supply additional document, such as EEI, NAFTA_CO or CO.  This indicator should be set when the shipper intends to utilize UPS paperless invoice functionality AND the shipper has SELF-PREPARED other International Forms (EEI, CO, NAFTACO) to accompany the shipment. 
    It is evaluated only when: 
    1. Account is paperless enabled. 
    2. Movement requires an invoice.
    3. Destination country or territory accepts paperless invoice. 
    4. Invoice data is supplied by the client and the data passes validation.
    *
    * @param string $additionalDocumentIndicator
    *
    * @return self
    */
    public function setAdditionalDocumentIndicator(string $additionalDocumentIndicator) : self
    {
        $this->initialized['additionalDocumentIndicator'] = true;
        $this->additionalDocumentIndicator = $additionalDocumentIndicator;
        return $this;
    }
    /**
     * Contains description text which identifies the group of International forms. This element does not appear on the forms.
     *
     * @return string
     */
    public function getFormGroupIdName() : string
    {
        return $this->formGroupIdName;
    }
    /**
     * Contains description text which identifies the group of International forms. This element does not appear on the forms.
     *
     * @param string $formGroupIdName
     *
     * @return self
     */
    public function setFormGroupIdName(string $formGroupIdName) : self
    {
        $this->initialized['formGroupIdName'] = true;
        $this->formGroupIdName = $formGroupIdName;
        return $this;
    }
    /**
     * EEI Filing option.  Applicable for EEI form and is required.
     *
     * @return InternationalFormsEEIFilingOption
     */
    public function getEEIFilingOption() : InternationalFormsEEIFilingOption
    {
        return $this->eEIFilingOption;
    }
    /**
     * EEI Filing option.  Applicable for EEI form and is required.
     *
     * @param InternationalFormsEEIFilingOption $eEIFilingOption
     *
     * @return self
     */
    public function setEEIFilingOption(InternationalFormsEEIFilingOption $eEIFilingOption) : self
    {
        $this->initialized['eEIFilingOption'] = true;
        $this->eEIFilingOption = $eEIFilingOption;
        return $this;
    }
    /**
     * Holds the contact information of various parties.  Applicable for EEI and NAFTA CO only. Required for NAFTA CO and EEI. Ultimate consignee contact information is required for EEI.  Producer contact information is required for NAFTA CO
     *
     * @return InternationalFormsContacts
     */
    public function getContacts() : InternationalFormsContacts
    {
        return $this->contacts;
    }
    /**
     * Holds the contact information of various parties.  Applicable for EEI and NAFTA CO only. Required for NAFTA CO and EEI. Ultimate consignee contact information is required for EEI.  Producer contact information is required for NAFTA CO
     *
     * @param InternationalFormsContacts $contacts
     *
     * @return self
     */
    public function setContacts(InternationalFormsContacts $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return list<InternationalFormsProduct>|null
     */
    public function getProduct() : ?array
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param list<InternationalFormsProduct>|null $product
     *
     * @return self
     */
    public function setProduct(?array $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Commercial Invoice number assigned by the exporter.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice.
     *
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * Commercial Invoice number assigned by the exporter.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice.
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber) : self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Date when the Invoice is created. Ideally this is the same as the ship date.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Required for Invoice form for forward shipments. For shipment with return service, the user input will be ignored, and the field will be blank on the invoice. Format is yyyyMMdd.
     *
     * @return string
     */
    public function getInvoiceDate() : string
    {
        return $this->invoiceDate;
    }
    /**
     * Date when the Invoice is created. Ideally this is the same as the ship date.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Required for Invoice form for forward shipments. For shipment with return service, the user input will be ignored, and the field will be blank on the invoice. Format is yyyyMMdd.
     *
     * @param string $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(string $invoiceDate) : self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * The customer's order reference number.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return string
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->purchaseOrderNumber;
    }
    /**
     * The customer's order reference number.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param string $purchaseOrderNumber
     *
     * @return self
     */
    public function setPurchaseOrderNumber(string $purchaseOrderNumber) : self
    {
        $this->initialized['purchaseOrderNumber'] = true;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    /**
    * Indicates the rights to the seller from the buyer. Also, it refers to Terms of Sale.  Applies to Invoice and Partial Invoice forms only. 
    
    Valid values: 
    CFR: Cost and Freight 
    CIF: Cost Insurance and Freight 
    CIP: Carriage and Insurance Paid 
    CPT: Carriage Paid To 
    DAF: Delivered at Frontier 
    DDP: Delivery Duty Paid 
    DDU: Delivery Duty Unpaid 
    DEQ: Delivered Ex Quay 
    DES: Delivered Ex Ship 
    EXW: Ex Works 
    FAS: Free Alongside Ship 
    FCA: Free Carrier 
    FOB: Free On Board
    *
    * @return string
    */
    public function getTermsOfShipment() : string
    {
        return $this->termsOfShipment;
    }
    /**
    * Indicates the rights to the seller from the buyer. Also, it refers to Terms of Sale.  Applies to Invoice and Partial Invoice forms only. 
    
    Valid values: 
    CFR: Cost and Freight 
    CIF: Cost Insurance and Freight 
    CIP: Carriage and Insurance Paid 
    CPT: Carriage Paid To 
    DAF: Delivered at Frontier 
    DDP: Delivery Duty Paid 
    DDU: Delivery Duty Unpaid 
    DEQ: Delivered Ex Quay 
    DES: Delivered Ex Ship 
    EXW: Ex Works 
    FAS: Free Alongside Ship 
    FCA: Free Carrier 
    FOB: Free On Board
    *
    * @param string $termsOfShipment
    *
    * @return self
    */
    public function setTermsOfShipment(string $termsOfShipment) : self
    {
        $this->initialized['termsOfShipment'] = true;
        $this->termsOfShipment = $termsOfShipment;
        return $this;
    }
    /**
    * A reason to export the current international shipment.
    Valid values: SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA, Any other reason.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and Optional for Partial Invoice. No validation.
    *
    * @return string
    */
    public function getReasonForExport() : string
    {
        return $this->reasonForExport;
    }
    /**
    * A reason to export the current international shipment.
    Valid values: SALE, GIFT, SAMPLE, RETURN, REPAIR, INTERCOMPANYDATA, Any other reason.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and Optional for Partial Invoice. No validation.
    *
    * @param string $reasonForExport
    *
    * @return self
    */
    public function setReasonForExport(string $reasonForExport) : self
    {
        $this->initialized['reasonForExport'] = true;
        $this->reasonForExport = $reasonForExport;
        return $this;
    }
    /**
     * Any extra information about the current shipment.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * Any extra information about the current shipment.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * This is the legal explanation, used by Customs, for the delivering of this shipment. It must be identical to the set of declarations actually used by Customs. Examples of declarations that might be entered in this field are: I hereby certify that the goods covered by this shipment qualify as originating goods for purposes of preferential tariff treatment under the NAFTA. I hereby certify that the information on this invoice is true and correct and the contents and value of this shipment is as stated above.  EEA statement:  The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin.  Applies to Invoice and Partial Invoice forms only. On the invoice for return shipment, the verbiage is as follows (user input is ignored): The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin
     *
     * @return string
     */
    public function getDeclarationStatement() : string
    {
        return $this->declarationStatement;
    }
    /**
     * This is the legal explanation, used by Customs, for the delivering of this shipment. It must be identical to the set of declarations actually used by Customs. Examples of declarations that might be entered in this field are: I hereby certify that the goods covered by this shipment qualify as originating goods for purposes of preferential tariff treatment under the NAFTA. I hereby certify that the information on this invoice is true and correct and the contents and value of this shipment is as stated above.  EEA statement:  The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin.  Applies to Invoice and Partial Invoice forms only. On the invoice for return shipment, the verbiage is as follows (user input is ignored): The exporter of the products covered by this document declares that except where otherwise clearly indicated these products are of EEA preferential origin
     *
     * @param string $declarationStatement
     *
     * @return self
     */
    public function setDeclarationStatement(string $declarationStatement) : self
    {
        $this->initialized['declarationStatement'] = true;
        $this->declarationStatement = $declarationStatement;
        return $this;
    }
    /**
     * Container tag that holds the discount.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return InternationalFormsDiscount
     */
    public function getDiscount() : InternationalFormsDiscount
    {
        return $this->discount;
    }
    /**
     * Container tag that holds the discount.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param InternationalFormsDiscount $discount
     *
     * @return self
     */
    public function setDiscount(InternationalFormsDiscount $discount) : self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * Container tag that holds the Freight Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return InternationalFormsFreightCharges
     */
    public function getFreightCharges() : InternationalFormsFreightCharges
    {
        return $this->freightCharges;
    }
    /**
     * Container tag that holds the Freight Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param InternationalFormsFreightCharges $freightCharges
     *
     * @return self
     */
    public function setFreightCharges(InternationalFormsFreightCharges $freightCharges) : self
    {
        $this->initialized['freightCharges'] = true;
        $this->freightCharges = $freightCharges;
        return $this;
    }
    /**
     * Container tag that holds the Insurance Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return InternationalFormsInsuranceCharges
     */
    public function getInsuranceCharges() : InternationalFormsInsuranceCharges
    {
        return $this->insuranceCharges;
    }
    /**
     * Container tag that holds the Insurance Charges.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param InternationalFormsInsuranceCharges $insuranceCharges
     *
     * @return self
     */
    public function setInsuranceCharges(InternationalFormsInsuranceCharges $insuranceCharges) : self
    {
        $this->initialized['insuranceCharges'] = true;
        $this->insuranceCharges = $insuranceCharges;
        return $this;
    }
    /**
     * Container tag that holds the information of amount that covers additional charges not already listed on the invoice.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return InternationalFormsOtherCharges
     */
    public function getOtherCharges() : InternationalFormsOtherCharges
    {
        return $this->otherCharges;
    }
    /**
     * Container tag that holds the information of amount that covers additional charges not already listed on the invoice.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param InternationalFormsOtherCharges $otherCharges
     *
     * @return self
     */
    public function setOtherCharges(InternationalFormsOtherCharges $otherCharges) : self
    {
        $this->initialized['otherCharges'] = true;
        $this->otherCharges = $otherCharges;
        return $this;
    }
    /**
     * Currency code for all the monetary values of the Invoice form.  Applies to Invoice and Partial Invoice forms only.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Currency code for all the monetary values of the Invoice form.  Applies to Invoice and Partial Invoice forms only.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * This field should be entered if the  NAFTA Certificate covers multiple shipments of identical goods as described in the Description of Goods field that are imported into a NAFTA country or territory for a specified period of up to one year (the blanket period). The importation of a good for which preferential treatment is claimed based on this certificate must occur between these dates.  Applies to NAFTA CO form only. Required for NAFTA CO.  This is not valid for a paperless shipment.
     *
     * @return InternationalFormsBlanketPeriod
     */
    public function getBlanketPeriod() : InternationalFormsBlanketPeriod
    {
        return $this->blanketPeriod;
    }
    /**
     * This field should be entered if the  NAFTA Certificate covers multiple shipments of identical goods as described in the Description of Goods field that are imported into a NAFTA country or territory for a specified period of up to one year (the blanket period). The importation of a good for which preferential treatment is claimed based on this certificate must occur between these dates.  Applies to NAFTA CO form only. Required for NAFTA CO.  This is not valid for a paperless shipment.
     *
     * @param InternationalFormsBlanketPeriod $blanketPeriod
     *
     * @return self
     */
    public function setBlanketPeriod(InternationalFormsBlanketPeriod $blanketPeriod) : self
    {
        $this->initialized['blanketPeriod'] = true;
        $this->blanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * The date the goods will be exiting the country or territory.  Applies to CO and EEI forms only. Required for CO and EEI forms. Format is yyyyMMdd.
     *
     * @return string
     */
    public function getExportDate() : string
    {
        return $this->exportDate;
    }
    /**
     * The date the goods will be exiting the country or territory.  Applies to CO and EEI forms only. Required for CO and EEI forms. Format is yyyyMMdd.
     *
     * @param string $exportDate
     *
     * @return self
     */
    public function setExportDate(string $exportDate) : self
    {
        $this->initialized['exportDate'] = true;
        $this->exportDate = $exportDate;
        return $this;
    }
    /**
    * The name of the carrier that is exporting the shipment. The vessels flag number should also be entered, if the carrier is a vessel.
    
    If value is empty, it will be set to default value as 'UPS' for EEI forms.  Applies to CO and EEI forms only. Required for CO forms.
    
    *
    * @return string
    */
    public function getExportingCarrier() : string
    {
        return $this->exportingCarrier;
    }
    /**
    * The name of the carrier that is exporting the shipment. The vessels flag number should also be entered, if the carrier is a vessel.
    
    If value is empty, it will be set to default value as 'UPS' for EEI forms.  Applies to CO and EEI forms only. Required for CO forms.
    
    *
    * @param string $exportingCarrier
    *
    * @return self
    */
    public function setExportingCarrier(string $exportingCarrier) : self
    {
        $this->initialized['exportingCarrier'] = true;
        $this->exportingCarrier = $exportingCarrier;
        return $this;
    }
    /**
     * The four-character Standard Carrier Alpha Code (SCAC) for vessel, rail, and truck shipments. For air shipment, enter the two or three character International Air Transport Association (IATA) code.  Applies to EEI forms only. No Validations.
     *
     * @return string
     */
    public function getCarrierID() : string
    {
        return $this->carrierID;
    }
    /**
     * The four-character Standard Carrier Alpha Code (SCAC) for vessel, rail, and truck shipments. For air shipment, enter the two or three character International Air Transport Association (IATA) code.  Applies to EEI forms only. No Validations.
     *
     * @param string $carrierID
     *
     * @return self
     */
    public function setCarrierID(string $carrierID) : self
    {
        $this->initialized['carrierID'] = true;
        $this->carrierID = $carrierID;
        return $this;
    }
    /**
     * The two-character In Bond Code.  Applies to EEI forms only. Required for EEI forms. Valid values for EEI are: 70: Not in bond; 67: IE from a FTZ; 68: T&E from a FTZ.
     *
     * @return string
     */
    public function getInBondCode() : string
    {
        return $this->inBondCode;
    }
    /**
     * The two-character In Bond Code.  Applies to EEI forms only. Required for EEI forms. Valid values for EEI are: 70: Not in bond; 67: IE from a FTZ; 68: T&E from a FTZ.
     *
     * @param string $inBondCode
     *
     * @return self
     */
    public function setInBondCode(string $inBondCode) : self
    {
        $this->initialized['inBondCode'] = true;
        $this->inBondCode = $inBondCode;
        return $this;
    }
    /**
     * The Import Entry Number when the export transaction is used as proof of export for import transactions (examples: In Bond, Temporary Import Bond or Drawbacks).  Applies to EEI forms only. Conditionally Required for EEI forms when In bond code value is other than 70 (Not In Bond)
     *
     * @return string
     */
    public function getEntryNumber() : string
    {
        return $this->entryNumber;
    }
    /**
     * The Import Entry Number when the export transaction is used as proof of export for import transactions (examples: In Bond, Temporary Import Bond or Drawbacks).  Applies to EEI forms only. Conditionally Required for EEI forms when In bond code value is other than 70 (Not In Bond)
     *
     * @param string $entryNumber
     *
     * @return self
     */
    public function setEntryNumber(string $entryNumber) : self
    {
        $this->initialized['entryNumber'] = true;
        $this->entryNumber = $entryNumber;
        return $this;
    }
    /**
     * Contains one of the following:  The two-digit U.S. Postal Service abbreviation for the state from which the goods were shipped to the port of export. The state that is the source for the good with the highest value. The state of consolidation. The Foreign Trade Zone number of the zone from where the exports are leaving.  If the goods were shipped from Puerto Rico, enter PR.  Applies to EEI forms only. Required for EEI.
     *
     * @return string
     */
    public function getPointOfOrigin() : string
    {
        return $this->pointOfOrigin;
    }
    /**
     * Contains one of the following:  The two-digit U.S. Postal Service abbreviation for the state from which the goods were shipped to the port of export. The state that is the source for the good with the highest value. The state of consolidation. The Foreign Trade Zone number of the zone from where the exports are leaving.  If the goods were shipped from Puerto Rico, enter PR.  Applies to EEI forms only. Required for EEI.
     *
     * @param string $pointOfOrigin
     *
     * @return self
     */
    public function setPointOfOrigin(string $pointOfOrigin) : self
    {
        $this->initialized['pointOfOrigin'] = true;
        $this->pointOfOrigin = $pointOfOrigin;
        return $this;
    }
    /**
     * Valid values are : S (for state postal code abbreviation) , F : FTZ Identifier  Applies EEI forms only. Required for EEI form.
     *
     * @return string
     */
    public function getPointOfOriginType() : string
    {
        return $this->pointOfOriginType;
    }
    /**
     * Valid values are : S (for state postal code abbreviation) , F : FTZ Identifier  Applies EEI forms only. Required for EEI form.
     *
     * @param string $pointOfOriginType
     *
     * @return self
     */
    public function setPointOfOriginType(string $pointOfOriginType) : self
    {
        $this->initialized['pointOfOriginType'] = true;
        $this->pointOfOriginType = $pointOfOriginType;
        return $this;
    }
    /**
     * Mode of transport by which the goods are exported. Valid values: Air, AirContainerized, Auto, FixedTransportInstallations, Mail, PassengerHandcarried, Pedestrian, Rail, Rail, Containerized, RoadOther, SeaBarge, SeaContainerized, SeaNoncontainerized, Truck, TruckContainerized.  Applies to EEI forms only.  Required for EEI.  Only allowed values can be entered. Only 10 Characters can appear on the form. Anything greater than 10 characters will be truncated on the form.
     *
     * @return string
     */
    public function getModeOfTransport() : string
    {
        return $this->modeOfTransport;
    }
    /**
     * Mode of transport by which the goods are exported. Valid values: Air, AirContainerized, Auto, FixedTransportInstallations, Mail, PassengerHandcarried, Pedestrian, Rail, Rail, Containerized, RoadOther, SeaBarge, SeaContainerized, SeaNoncontainerized, Truck, TruckContainerized.  Applies to EEI forms only.  Required for EEI.  Only allowed values can be entered. Only 10 Characters can appear on the form. Anything greater than 10 characters will be truncated on the form.
     *
     * @param string $modeOfTransport
     *
     * @return self
     */
    public function setModeOfTransport(string $modeOfTransport) : self
    {
        $this->initialized['modeOfTransport'] = true;
        $this->modeOfTransport = $modeOfTransport;
        return $this;
    }
    /**
     * Should be one of the following-Overland: The U.S. Customs port where the carrier crosses the U.S. border, Vessel and Air: The U.S. Customs port where the goods are loaded on the carrier to be exported from the U.S., Postal: The U.S. Postal Office from where the goods are mailed.  Applies to EEI forms only. No validation is performed.
     *
     * @return string
     */
    public function getPortOfExport() : string
    {
        return $this->portOfExport;
    }
    /**
     * Should be one of the following-Overland: The U.S. Customs port where the carrier crosses the U.S. border, Vessel and Air: The U.S. Customs port where the goods are loaded on the carrier to be exported from the U.S., Postal: The U.S. Postal Office from where the goods are mailed.  Applies to EEI forms only. No validation is performed.
     *
     * @param string $portOfExport
     *
     * @return self
     */
    public function setPortOfExport(string $portOfExport) : self
    {
        $this->initialized['portOfExport'] = true;
        $this->portOfExport = $portOfExport;
        return $this;
    }
    /**
     * The country or territory and the port where the goods will be unloaded from the exporting carrier. For vessel and air shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @return string
     */
    public function getPortOfUnloading() : string
    {
        return $this->portOfUnloading;
    }
    /**
     * The country or territory and the port where the goods will be unloaded from the exporting carrier. For vessel and air shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @param string $portOfUnloading
     *
     * @return self
     */
    public function setPortOfUnloading(string $portOfUnloading) : self
    {
        $this->initialized['portOfUnloading'] = true;
        $this->portOfUnloading = $portOfUnloading;
        return $this;
    }
    /**
     * Pier where goods are loaded. For vessel shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @return string
     */
    public function getLoadingPier() : string
    {
        return $this->loadingPier;
    }
    /**
     * Pier where goods are loaded. For vessel shipments only.  Applies to EEI forms only. No validation is performed.
     *
     * @param string $loadingPier
     *
     * @return self
     */
    public function setLoadingPier(string $loadingPier) : self
    {
        $this->initialized['loadingPier'] = true;
        $this->loadingPier = $loadingPier;
        return $this;
    }
    /**
    * Information about parties to transaction. Use Related, if the parties to the transaction are related. A related party is an export from a U.S. businessperson or business to a foreign business or from a U.S. business to a foreign person or business where the person has at least 10 percent of the voting shares of the business during the fiscal year. If unincorporated, then an equivalent interest in the business.  Applies to EEI forms only.
    
    Valid values:
    - R - Related
    - N - Non-related.
    
    Parties to transaction is required if EEIFilingOption Code is 3 and if valid UPSFiled POA Code present in request.
    
    Default will be set to N - Non-related if invalid code present with length of one.
    
    *
    * @return string
    */
    public function getPartiesToTransaction() : string
    {
        return $this->partiesToTransaction;
    }
    /**
    * Information about parties to transaction. Use Related, if the parties to the transaction are related. A related party is an export from a U.S. businessperson or business to a foreign business or from a U.S. business to a foreign person or business where the person has at least 10 percent of the voting shares of the business during the fiscal year. If unincorporated, then an equivalent interest in the business.  Applies to EEI forms only.
    
    Valid values:
    - R - Related
    - N - Non-related.
    
    Parties to transaction is required if EEIFilingOption Code is 3 and if valid UPSFiled POA Code present in request.
    
    Default will be set to N - Non-related if invalid code present with length of one.
    
    *
    * @param string $partiesToTransaction
    *
    * @return self
    */
    public function setPartiesToTransaction(string $partiesToTransaction) : self
    {
        $this->initialized['partiesToTransaction'] = true;
        $this->partiesToTransaction = $partiesToTransaction;
        return $this;
    }
    /**
     * If Present, indicates that it is a routed export transaction. A routed export transaction is one, where the foreign principal party in interest authorizes a U.S. forwarding (or other) agent to export the merchandise outside the U.S.  Applies to EEI forms only.
     *
     * @return string
     */
    public function getRoutedExportTransactionIndicator() : string
    {
        return $this->routedExportTransactionIndicator;
    }
    /**
     * If Present, indicates that it is a routed export transaction. A routed export transaction is one, where the foreign principal party in interest authorizes a U.S. forwarding (or other) agent to export the merchandise outside the U.S.  Applies to EEI forms only.
     *
     * @param string $routedExportTransactionIndicator
     *
     * @return self
     */
    public function setRoutedExportTransactionIndicator(string $routedExportTransactionIndicator) : self
    {
        $this->initialized['routedExportTransactionIndicator'] = true;
        $this->routedExportTransactionIndicator = $routedExportTransactionIndicator;
        return $this;
    }
    /**
     * If present indicates that the goods are containerized. This applies to vessel shipments only.  Applies to EEI forms only.
     *
     * @return string
     */
    public function getContainerizedIndicator() : string
    {
        return $this->containerizedIndicator;
    }
    /**
     * If present indicates that the goods are containerized. This applies to vessel shipments only.  Applies to EEI forms only.
     *
     * @param string $containerizedIndicator
     *
     * @return self
     */
    public function setContainerizedIndicator(string $containerizedIndicator) : self
    {
        $this->initialized['containerizedIndicator'] = true;
        $this->containerizedIndicator = $containerizedIndicator;
        return $this;
    }
    /**
     * The application will automatically provide a copy of the invoice or NAFTA/CO with each response regardless of whether the user has enabled Paperless account. The user now has the option to print or ignore the copy provided.
     *
     * @return string
     */
    public function getOverridePaperlessIndicator() : string
    {
        return $this->overridePaperlessIndicator;
    }
    /**
     * The application will automatically provide a copy of the invoice or NAFTA/CO with each response regardless of whether the user has enabled Paperless account. The user now has the option to print or ignore the copy provided.
     *
     * @param string $overridePaperlessIndicator
     *
     * @return self
     */
    public function setOverridePaperlessIndicator(string $overridePaperlessIndicator) : self
    {
        $this->initialized['overridePaperlessIndicator'] = true;
        $this->overridePaperlessIndicator = $overridePaperlessIndicator;
        return $this;
    }
    /**
     * Text for the shipper to add additional information.  Forward shipment only.
     *
     * @return string
     */
    public function getShipperMemo() : string
    {
        return $this->shipperMemo;
    }
    /**
     * Text for the shipper to add additional information.  Forward shipment only.
     *
     * @param string $shipperMemo
     *
     * @return self
     */
    public function setShipperMemo(string $shipperMemo) : self
    {
        $this->initialized['shipperMemo'] = true;
        $this->shipperMemo = $shipperMemo;
        return $this;
    }
    /**
     * This is an empty tag. Presence of the indicator for EEI form means shipment contains hazardous material.
     *
     * @return string
     */
    public function getHazardousMaterialsIndicator() : string
    {
        return $this->hazardousMaterialsIndicator;
    }
    /**
     * This is an empty tag. Presence of the indicator for EEI form means shipment contains hazardous material.
     *
     * @param string $hazardousMaterialsIndicator
     *
     * @return self
     */
    public function setHazardousMaterialsIndicator(string $hazardousMaterialsIndicator) : self
    {
        $this->initialized['hazardousMaterialsIndicator'] = true;
        $this->hazardousMaterialsIndicator = $hazardousMaterialsIndicator;
        return $this;
    }
}