<?php

namespace ShipStream\Ups\Api\Model;

class RateRequestShipment extends \ArrayObject
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
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @var string|null
     */
    protected $originRecordTransactionTimestamp;
    /**
     * Shipper container. Information associated with the UPS account number.
     *
     * @var RateShipmentShipper|null
     */
    protected $shipper;
    /**
     * Ship To Container  N/A
     *
     * @var RateShipmentShipTo|null
     */
    protected $shipTo;
    /**
     * Ship From Container.  N/A
     *
     * @var RateShipmentShipFrom|null
     */
    protected $shipFrom;
    /**
     * Alternate Delivery Address container. Applies for deliveries to UPS Access Point locations.Required for the following ShipmentIndicationType values:01 - Hold for Pickup at UPS Access Point02 - UPS Access Point Delivery
     *
     * @var RateShipmentAlternateDeliveryAddress|null
     */
    protected $alternateDeliveryAddress;
    /**
     * 
     *
     * @var list<ShipmentShipmentIndicationType>|null
     */
    protected $shipmentIndicationType;
    /**
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @var ShipmentPaymentDetails|null
     */
    protected $paymentDetails;
    /**
     * UPS Ground Freight Pricing (GFP) Payment Information container.  Required only for GFP and when the FRSIndicator is present.
     *
     * @var RateShipmentFRSPaymentInformation|null
     */
    protected $fRSPaymentInformation;
    /**
     * Container to hold Freight Shipment information.
     *
     * @var ShipmentFreightShipmentInformation|null
     */
    protected $freightShipmentInformation;
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @var string|null
     */
    protected $goodsNotInFreeCirculationIndicator;
    /**
     * Service Container.
     *
     * @var ShipmentService|null
     */
    protected $service;
    /**
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @var string|null
     */
    protected $numOfPieces;
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @var ShipmentShipmentTotalWeight|null
     */
    protected $shipmentTotalWeight;
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @var string|null
     */
    protected $documentsOnlyIndicator;
    /**
     * 
     *
     * @var list<RateShipmentPackage>|null
     */
    protected $package;
    /**
     * Shipment level Accessorials are included in this container.  N/A
     *
     * @var RateShipmentShipmentServiceOptions|null
     */
    protected $shipmentServiceOptions;
    /**
     * ShipmentRatingOptions container.
     *
     * @var ShipmentShipmentRatingOptions|null
     */
    protected $shipmentRatingOptions;
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @var ShipmentInvoiceLineTotal|null
     */
    protected $invoiceLineTotal;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @var string|null
     */
    protected $ratingMethodRequestedIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @var string|null
     */
    protected $taxInformationIndicator;
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @var ShipmentPromotionalDiscountInformation|null
     */
    protected $promotionalDiscountInformation;
    /**
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @var ShipmentDeliveryTimeInformation|null
     */
    protected $deliveryTimeInformation;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @var string|null
     */
    protected $masterCartonIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @var string|null
     */
    protected $wWEShipmentIndicator;
    /**
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @return string|null
     */
    public function getOriginRecordTransactionTimestamp() : ?string
    {
        return $this->originRecordTransactionTimestamp;
    }
    /**
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @param string|null $originRecordTransactionTimestamp
     *
     * @return self
     */
    public function setOriginRecordTransactionTimestamp(?string $originRecordTransactionTimestamp) : self
    {
        $this->initialized['originRecordTransactionTimestamp'] = true;
        $this->originRecordTransactionTimestamp = $originRecordTransactionTimestamp;
        return $this;
    }
    /**
     * Shipper container. Information associated with the UPS account number.
     *
     * @return RateShipmentShipper|null
     */
    public function getShipper() : ?RateShipmentShipper
    {
        return $this->shipper;
    }
    /**
     * Shipper container. Information associated with the UPS account number.
     *
     * @param RateShipmentShipper|null $shipper
     *
     * @return self
     */
    public function setShipper(?RateShipmentShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * Ship To Container  N/A
     *
     * @return RateShipmentShipTo|null
     */
    public function getShipTo() : ?RateShipmentShipTo
    {
        return $this->shipTo;
    }
    /**
     * Ship To Container  N/A
     *
     * @param RateShipmentShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?RateShipmentShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * Ship From Container.  N/A
     *
     * @return RateShipmentShipFrom|null
     */
    public function getShipFrom() : ?RateShipmentShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * Ship From Container.  N/A
     *
     * @param RateShipmentShipFrom|null $shipFrom
     *
     * @return self
     */
    public function setShipFrom(?RateShipmentShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * Alternate Delivery Address container. Applies for deliveries to UPS Access Point locations.Required for the following ShipmentIndicationType values:01 - Hold for Pickup at UPS Access Point02 - UPS Access Point Delivery
     *
     * @return RateShipmentAlternateDeliveryAddress|null
     */
    public function getAlternateDeliveryAddress() : ?RateShipmentAlternateDeliveryAddress
    {
        return $this->alternateDeliveryAddress;
    }
    /**
     * Alternate Delivery Address container. Applies for deliveries to UPS Access Point locations.Required for the following ShipmentIndicationType values:01 - Hold for Pickup at UPS Access Point02 - UPS Access Point Delivery
     *
     * @param RateShipmentAlternateDeliveryAddress|null $alternateDeliveryAddress
     *
     * @return self
     */
    public function setAlternateDeliveryAddress(?RateShipmentAlternateDeliveryAddress $alternateDeliveryAddress) : self
    {
        $this->initialized['alternateDeliveryAddress'] = true;
        $this->alternateDeliveryAddress = $alternateDeliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentShipmentIndicationType>|null
     */
    public function getShipmentIndicationType() : ?array
    {
        return $this->shipmentIndicationType;
    }
    /**
     * 
     *
     * @param list<ShipmentShipmentIndicationType>|null $shipmentIndicationType
     *
     * @return self
     */
    public function setShipmentIndicationType(?array $shipmentIndicationType) : self
    {
        $this->initialized['shipmentIndicationType'] = true;
        $this->shipmentIndicationType = $shipmentIndicationType;
        return $this;
    }
    /**
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @return ShipmentPaymentDetails|null
     */
    public function getPaymentDetails() : ?ShipmentPaymentDetails
    {
        return $this->paymentDetails;
    }
    /**
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @param ShipmentPaymentDetails|null $paymentDetails
     *
     * @return self
     */
    public function setPaymentDetails(?ShipmentPaymentDetails $paymentDetails) : self
    {
        $this->initialized['paymentDetails'] = true;
        $this->paymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * UPS Ground Freight Pricing (GFP) Payment Information container.  Required only for GFP and when the FRSIndicator is present.
     *
     * @return RateShipmentFRSPaymentInformation|null
     */
    public function getFRSPaymentInformation() : ?RateShipmentFRSPaymentInformation
    {
        return $this->fRSPaymentInformation;
    }
    /**
     * UPS Ground Freight Pricing (GFP) Payment Information container.  Required only for GFP and when the FRSIndicator is present.
     *
     * @param RateShipmentFRSPaymentInformation|null $fRSPaymentInformation
     *
     * @return self
     */
    public function setFRSPaymentInformation(?RateShipmentFRSPaymentInformation $fRSPaymentInformation) : self
    {
        $this->initialized['fRSPaymentInformation'] = true;
        $this->fRSPaymentInformation = $fRSPaymentInformation;
        return $this;
    }
    /**
     * Container to hold Freight Shipment information.
     *
     * @return ShipmentFreightShipmentInformation|null
     */
    public function getFreightShipmentInformation() : ?ShipmentFreightShipmentInformation
    {
        return $this->freightShipmentInformation;
    }
    /**
     * Container to hold Freight Shipment information.
     *
     * @param ShipmentFreightShipmentInformation|null $freightShipmentInformation
     *
     * @return self
     */
    public function setFreightShipmentInformation(?ShipmentFreightShipmentInformation $freightShipmentInformation) : self
    {
        $this->initialized['freightShipmentInformation'] = true;
        $this->freightShipmentInformation = $freightShipmentInformation;
        return $this;
    }
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @return string|null
     */
    public function getGoodsNotInFreeCirculationIndicator() : ?string
    {
        return $this->goodsNotInFreeCirculationIndicator;
    }
    /**
     * Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @param string|null $goodsNotInFreeCirculationIndicator
     *
     * @return self
     */
    public function setGoodsNotInFreeCirculationIndicator(?string $goodsNotInFreeCirculationIndicator) : self
    {
        $this->initialized['goodsNotInFreeCirculationIndicator'] = true;
        $this->goodsNotInFreeCirculationIndicator = $goodsNotInFreeCirculationIndicator;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return ShipmentService|null
     */
    public function getService() : ?ShipmentService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param ShipmentService|null $service
     *
     * @return self
     */
    public function setService(?ShipmentService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @return string|null
     */
    public function getNumOfPieces() : ?string
    {
        return $this->numOfPieces;
    }
    /**
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @param string|null $numOfPieces
     *
     * @return self
     */
    public function setNumOfPieces(?string $numOfPieces) : self
    {
        $this->initialized['numOfPieces'] = true;
        $this->numOfPieces = $numOfPieces;
        return $this;
    }
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @return ShipmentShipmentTotalWeight|null
     */
    public function getShipmentTotalWeight() : ?ShipmentShipmentTotalWeight
    {
        return $this->shipmentTotalWeight;
    }
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @param ShipmentShipmentTotalWeight|null $shipmentTotalWeight
     *
     * @return self
     */
    public function setShipmentTotalWeight(?ShipmentShipmentTotalWeight $shipmentTotalWeight) : self
    {
        $this->initialized['shipmentTotalWeight'] = true;
        $this->shipmentTotalWeight = $shipmentTotalWeight;
        return $this;
    }
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @return string|null
     */
    public function getDocumentsOnlyIndicator() : ?string
    {
        return $this->documentsOnlyIndicator;
    }
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @param string|null $documentsOnlyIndicator
     *
     * @return self
     */
    public function setDocumentsOnlyIndicator(?string $documentsOnlyIndicator) : self
    {
        $this->initialized['documentsOnlyIndicator'] = true;
        $this->documentsOnlyIndicator = $documentsOnlyIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<RateShipmentPackage>|null
     */
    public function getPackage() : ?array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<RateShipmentPackage>|null $package
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
     * Shipment level Accessorials are included in this container.  N/A
     *
     * @return RateShipmentShipmentServiceOptions|null
     */
    public function getShipmentServiceOptions() : ?RateShipmentShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * Shipment level Accessorials are included in this container.  N/A
     *
     * @param RateShipmentShipmentServiceOptions|null $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(?RateShipmentShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * ShipmentRatingOptions container.
     *
     * @return ShipmentShipmentRatingOptions|null
     */
    public function getShipmentRatingOptions() : ?ShipmentShipmentRatingOptions
    {
        return $this->shipmentRatingOptions;
    }
    /**
     * ShipmentRatingOptions container.
     *
     * @param ShipmentShipmentRatingOptions|null $shipmentRatingOptions
     *
     * @return self
     */
    public function setShipmentRatingOptions(?ShipmentShipmentRatingOptions $shipmentRatingOptions) : self
    {
        $this->initialized['shipmentRatingOptions'] = true;
        $this->shipmentRatingOptions = $shipmentRatingOptions;
        return $this;
    }
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @return ShipmentInvoiceLineTotal|null
     */
    public function getInvoiceLineTotal() : ?ShipmentInvoiceLineTotal
    {
        return $this->invoiceLineTotal;
    }
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @param ShipmentInvoiceLineTotal|null $invoiceLineTotal
     *
     * @return self
     */
    public function setInvoiceLineTotal(?ShipmentInvoiceLineTotal $invoiceLineTotal) : self
    {
        $this->initialized['invoiceLineTotal'] = true;
        $this->invoiceLineTotal = $invoiceLineTotal;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @return string|null
     */
    public function getRatingMethodRequestedIndicator() : ?string
    {
        return $this->ratingMethodRequestedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @param string|null $ratingMethodRequestedIndicator
     *
     * @return self
     */
    public function setRatingMethodRequestedIndicator(?string $ratingMethodRequestedIndicator) : self
    {
        $this->initialized['ratingMethodRequestedIndicator'] = true;
        $this->ratingMethodRequestedIndicator = $ratingMethodRequestedIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return string|null
     */
    public function getTaxInformationIndicator() : ?string
    {
        return $this->taxInformationIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @param string|null $taxInformationIndicator
     *
     * @return self
     */
    public function setTaxInformationIndicator(?string $taxInformationIndicator) : self
    {
        $this->initialized['taxInformationIndicator'] = true;
        $this->taxInformationIndicator = $taxInformationIndicator;
        return $this;
    }
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @return ShipmentPromotionalDiscountInformation|null
     */
    public function getPromotionalDiscountInformation() : ?ShipmentPromotionalDiscountInformation
    {
        return $this->promotionalDiscountInformation;
    }
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @param ShipmentPromotionalDiscountInformation|null $promotionalDiscountInformation
     *
     * @return self
     */
    public function setPromotionalDiscountInformation(?ShipmentPromotionalDiscountInformation $promotionalDiscountInformation) : self
    {
        $this->initialized['promotionalDiscountInformation'] = true;
        $this->promotionalDiscountInformation = $promotionalDiscountInformation;
        return $this;
    }
    /**
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @return ShipmentDeliveryTimeInformation|null
     */
    public function getDeliveryTimeInformation() : ?ShipmentDeliveryTimeInformation
    {
        return $this->deliveryTimeInformation;
    }
    /**
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @param ShipmentDeliveryTimeInformation|null $deliveryTimeInformation
     *
     * @return self
     */
    public function setDeliveryTimeInformation(?ShipmentDeliveryTimeInformation $deliveryTimeInformation) : self
    {
        $this->initialized['deliveryTimeInformation'] = true;
        $this->deliveryTimeInformation = $deliveryTimeInformation;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return string|null
     */
    public function getMasterCartonIndicator() : ?string
    {
        return $this->masterCartonIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @param string|null $masterCartonIndicator
     *
     * @return self
     */
    public function setMasterCartonIndicator(?string $masterCartonIndicator) : self
    {
        $this->initialized['masterCartonIndicator'] = true;
        $this->masterCartonIndicator = $masterCartonIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @return string|null
     */
    public function getWWEShipmentIndicator() : ?string
    {
        return $this->wWEShipmentIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @param string|null $wWEShipmentIndicator
     *
     * @return self
     */
    public function setWWEShipmentIndicator(?string $wWEShipmentIndicator) : self
    {
        $this->initialized['wWEShipmentIndicator'] = true;
        $this->wWEShipmentIndicator = $wWEShipmentIndicator;
        return $this;
    }
}