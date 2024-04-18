<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequest extends \ArrayObject
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
     * Request Container.
     *
     * @var LabelRecoveryRequestRequest
     */
    protected $request;
    /**
     * Container that is used to define the properties required by the user to print and/ or display the UPS shipping label.  Required for the shipment without return service, or shipment with PRL return service.
     *
     * @var LabelRecoveryRequestLabelSpecification
     */
    protected $labelSpecification;
    /**
    * Translate container allows the user to specify the language he/she would like a specific portion of response to return. 
    The language is specified by the combination of language code and dialect code. 
    Valid combinations are: LanguageCode + DialectCode.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
    Combinations: 
    eng GB = Queen's English 
    Spa 97 = Castilian Spanish 
    ita 97 = Italian 
    fra 97 = France French 
    fra CA = Canadian French 
    deu 97 = German 
    por 97 = Portugal Portuguese 
    nld 97 = Dutch 
    dan 97 = Danish 
    fin 97 = Finnish 
    swe 97 = Swedish 
    eng CA = Canadian English 
    Eng US = US English 
    Default language is Queen's English 
    
    If the Ship from country or territory is Canada, the Language defaults to Canadian English. 
    
    If the ship from country or territory is US, the language defaults to US English.
    
    If shipping from some other country or territory, the language defaults to Queens English.
    *
    * @var LabelRecoveryRequestTranslate
    */
    protected $translate;
    /**
     * Container for the Label Delivery accessorial. One Label Delivery per shipment.
     *
     * @var LabelRecoveryRequestLabelDelivery
     */
    protected $labelDelivery;
    /**
    * Small Package Tracking Number. Required if Mail Innovations Tracking Number or ReferenceNumber/Value and ShipperNumber is not provided.  If only TrackingNumber is provided, the request will be treated as Small Package Shipment. Label Recovery will return label for Small Package Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @var string
    */
    protected $trackingNumber;
    /**
    * Mail Innovations Tracking Number.  Required if Tracking Number or ReferenceNumber/Value is not populated. 
    If only MailInnovationsTrackingNumber is provided, the request will be treated as Single Mail Innovations Return Shipment. Label Recovery will return label for Mail Innovations Return Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @var string
    */
    protected $mailInnovationsTrackingNumber;
    /**
     * Container that holds reference number and shipper number  If tracking number is not present use reference Number
     *
     * @var LabelRecoveryRequestReferenceValues
     */
    protected $referenceValues;
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions, Receipt instructions (if available for given tracking number) and High Value Report (if available for given tracking number) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country code seperated by an underscore ('_') character. Example - de_DE. Please refer to Appendix for supported values for Locale.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
    *
    * @var string
    */
    protected $locale;
    /**
    * UPS Premium Care Form container.  Default is PDF when container is not provided. 
     Valid only for Canada to Canada movements. UPS Premium Care Form will be returned in  both US English and Canadian French language.
    *
    * @var LabelRecoveryRequestUPSPremiumCareForm
    */
    protected $uPSPremiumCareForm;
    /**
     * Request Container.
     *
     * @return LabelRecoveryRequestRequest
     */
    public function getRequest() : LabelRecoveryRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container.
     *
     * @param LabelRecoveryRequestRequest $request
     *
     * @return self
     */
    public function setRequest(LabelRecoveryRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Container that is used to define the properties required by the user to print and/ or display the UPS shipping label.  Required for the shipment without return service, or shipment with PRL return service.
     *
     * @return LabelRecoveryRequestLabelSpecification
     */
    public function getLabelSpecification() : LabelRecoveryRequestLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * Container that is used to define the properties required by the user to print and/ or display the UPS shipping label.  Required for the shipment without return service, or shipment with PRL return service.
     *
     * @param LabelRecoveryRequestLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(LabelRecoveryRequestLabelSpecification $labelSpecification) : self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
    * Translate container allows the user to specify the language he/she would like a specific portion of response to return. 
    The language is specified by the combination of language code and dialect code. 
    Valid combinations are: LanguageCode + DialectCode.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
    Combinations: 
    eng GB = Queen's English 
    Spa 97 = Castilian Spanish 
    ita 97 = Italian 
    fra 97 = France French 
    fra CA = Canadian French 
    deu 97 = German 
    por 97 = Portugal Portuguese 
    nld 97 = Dutch 
    dan 97 = Danish 
    fin 97 = Finnish 
    swe 97 = Swedish 
    eng CA = Canadian English 
    Eng US = US English 
    Default language is Queen's English 
    
    If the Ship from country or territory is Canada, the Language defaults to Canadian English. 
    
    If the ship from country or territory is US, the language defaults to US English.
    
    If shipping from some other country or territory, the language defaults to Queens English.
    *
    * @return LabelRecoveryRequestTranslate
    */
    public function getTranslate() : LabelRecoveryRequestTranslate
    {
        return $this->translate;
    }
    /**
    * Translate container allows the user to specify the language he/she would like a specific portion of response to return. 
    The language is specified by the combination of language code and dialect code. 
    Valid combinations are: LanguageCode + DialectCode.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
    Combinations: 
    eng GB = Queen's English 
    Spa 97 = Castilian Spanish 
    ita 97 = Italian 
    fra 97 = France French 
    fra CA = Canadian French 
    deu 97 = German 
    por 97 = Portugal Portuguese 
    nld 97 = Dutch 
    dan 97 = Danish 
    fin 97 = Finnish 
    swe 97 = Swedish 
    eng CA = Canadian English 
    Eng US = US English 
    Default language is Queen's English 
    
    If the Ship from country or territory is Canada, the Language defaults to Canadian English. 
    
    If the ship from country or territory is US, the language defaults to US English.
    
    If shipping from some other country or territory, the language defaults to Queens English.
    *
    * @param LabelRecoveryRequestTranslate $translate
    *
    * @return self
    */
    public function setTranslate(LabelRecoveryRequestTranslate $translate) : self
    {
        $this->initialized['translate'] = true;
        $this->translate = $translate;
        return $this;
    }
    /**
     * Container for the Label Delivery accessorial. One Label Delivery per shipment.
     *
     * @return LabelRecoveryRequestLabelDelivery
     */
    public function getLabelDelivery() : LabelRecoveryRequestLabelDelivery
    {
        return $this->labelDelivery;
    }
    /**
     * Container for the Label Delivery accessorial. One Label Delivery per shipment.
     *
     * @param LabelRecoveryRequestLabelDelivery $labelDelivery
     *
     * @return self
     */
    public function setLabelDelivery(LabelRecoveryRequestLabelDelivery $labelDelivery) : self
    {
        $this->initialized['labelDelivery'] = true;
        $this->labelDelivery = $labelDelivery;
        return $this;
    }
    /**
    * Small Package Tracking Number. Required if Mail Innovations Tracking Number or ReferenceNumber/Value and ShipperNumber is not provided.  If only TrackingNumber is provided, the request will be treated as Small Package Shipment. Label Recovery will return label for Small Package Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @return string
    */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
    * Small Package Tracking Number. Required if Mail Innovations Tracking Number or ReferenceNumber/Value and ShipperNumber is not provided.  If only TrackingNumber is provided, the request will be treated as Small Package Shipment. Label Recovery will return label for Small Package Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @param string $trackingNumber
    *
    * @return self
    */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
    * Mail Innovations Tracking Number.  Required if Tracking Number or ReferenceNumber/Value is not populated. 
    If only MailInnovationsTrackingNumber is provided, the request will be treated as Single Mail Innovations Return Shipment. Label Recovery will return label for Mail Innovations Return Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @return string
    */
    public function getMailInnovationsTrackingNumber() : string
    {
        return $this->mailInnovationsTrackingNumber;
    }
    /**
    * Mail Innovations Tracking Number.  Required if Tracking Number or ReferenceNumber/Value is not populated. 
    If only MailInnovationsTrackingNumber is provided, the request will be treated as Single Mail Innovations Return Shipment. Label Recovery will return label for Mail Innovations Return Tracking Number.
    If both, TrackingNumber and MailInnovationsTrackingNumber are provided, the request will be treated as Dual Mail Innovations Return Shipment. Label Recovery will return two labels one each for - Small Package Tracking Number and Mail Innovations Return Tracking Number.
    *
    * @param string $mailInnovationsTrackingNumber
    *
    * @return self
    */
    public function setMailInnovationsTrackingNumber(string $mailInnovationsTrackingNumber) : self
    {
        $this->initialized['mailInnovationsTrackingNumber'] = true;
        $this->mailInnovationsTrackingNumber = $mailInnovationsTrackingNumber;
        return $this;
    }
    /**
     * Container that holds reference number and shipper number  If tracking number is not present use reference Number
     *
     * @return LabelRecoveryRequestReferenceValues
     */
    public function getReferenceValues() : LabelRecoveryRequestReferenceValues
    {
        return $this->referenceValues;
    }
    /**
     * Container that holds reference number and shipper number  If tracking number is not present use reference Number
     *
     * @param LabelRecoveryRequestReferenceValues $referenceValues
     *
     * @return self
     */
    public function setReferenceValues(LabelRecoveryRequestReferenceValues $referenceValues) : self
    {
        $this->initialized['referenceValues'] = true;
        $this->referenceValues = $referenceValues;
        return $this;
    }
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions, Receipt instructions (if available for given tracking number) and High Value Report (if available for given tracking number) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country code seperated by an underscore ('_') character. Example - de_DE. Please refer to Appendix for supported values for Locale.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
    *
    * @return string
    */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
    * Represents 5 character ISO Locale that allows the user to request Reference Number Code on Label, Label instructions, Receipt instructions (if available for given tracking number) and High Value Report (if available for given tracking number) in desired language. 
    Locale is specified by the combination of language code and country or territory code - 2 character language code and 2 character country code seperated by an underscore ('_') character. Example - de_DE. Please refer to Appendix for supported values for Locale.  Either Translate container or Locale element can be present in a given request. Both can't be requested together in same request.
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
    * UPS Premium Care Form container.  Default is PDF when container is not provided. 
     Valid only for Canada to Canada movements. UPS Premium Care Form will be returned in  both US English and Canadian French language.
    *
    * @return LabelRecoveryRequestUPSPremiumCareForm
    */
    public function getUPSPremiumCareForm() : LabelRecoveryRequestUPSPremiumCareForm
    {
        return $this->uPSPremiumCareForm;
    }
    /**
    * UPS Premium Care Form container.  Default is PDF when container is not provided. 
     Valid only for Canada to Canada movements. UPS Premium Care Form will be returned in  both US English and Canadian French language.
    *
    * @param LabelRecoveryRequestUPSPremiumCareForm $uPSPremiumCareForm
    *
    * @return self
    */
    public function setUPSPremiumCareForm(LabelRecoveryRequestUPSPremiumCareForm $uPSPremiumCareForm) : self
    {
        $this->initialized['uPSPremiumCareForm'] = true;
        $this->uPSPremiumCareForm = $uPSPremiumCareForm;
        return $this;
    }
}