<?php

namespace ShipStream\Ups\Api\Model;

class RateRequestShipment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @var string
     */
    protected $originRecordTransactionTimestamp;
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
    * Ship From Container.  Required for return shipment. 
    
    Required if pickup location is different from the shipper's address.
    *
    * @var ShipmentShipFrom
    */
    protected $shipFrom;
    /**
     * AlternateDeliveryAddress Container.  Alternate Delivery Address (UPS Access Point Address) required if ShipmentIndicationType is 01 or 02.
     *
     * @var ShipmentAlternateDeliveryAddress
     */
    protected $alternateDeliveryAddress;
    /**
     * 
     *
     * @var ShipmentShipmentIndicationType[]
     */
    protected $shipmentIndicationType;
    /**
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @var ShipmentPaymentDetails
     */
    protected $paymentDetails;
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
     * UPS service type.
     *
     * @var ShipmentService
     */
    protected $service;
    /**
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @var string
     */
    protected $numOfPieces;
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @var ShipmentShipmentTotalWeight
     */
    protected $shipmentTotalWeight;
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @var string
     */
    protected $documentsOnlyIndicator;
    /**
     * 
     *
     * @var ShipmentPackage[]
     */
    protected $package;
    /**
     * Container for Shipment Service Options.
     *
     * @var ShipmentShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
     * ShipmentRatingOptions container.
     *
     * @var ShipmentShipmentRatingOptions
     */
    protected $shipmentRatingOptions;
    /**
     * Container to hold InvoiceLineTotal Information.  Required for forward shipments whose origin is the US and destination is Puerto Rico or Canada. Not available for any other shipments. FOR OTHER DESTINATIONS the InvoiceLineTotal in the International Forms Container must be used.
     *
     * @var ShipmentInvoiceLineTotal
     */
    protected $invoiceLineTotal;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @var string
     */
    protected $ratingMethodRequestedIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @var string
     */
    protected $taxInformationIndicator;
    /**
     * PromotionalDiscountInformation container. This container contains discount information that the customer wants to request each time while placing a shipment.
     *
     * @var ShipmentPromotionalDiscountInformation
     */
    protected $promotionalDiscountInformation;
    /**
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @var ShipmentDeliveryTimeInformation
     */
    protected $deliveryTimeInformation;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @var string
     */
    protected $masterCartonIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @var string
     */
    protected $wWEShipmentIndicator;
    /**
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @return string
     */
    public function getOriginRecordTransactionTimestamp() : string
    {
        return $this->originRecordTransactionTimestamp;
    }
    /**
     * The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @param string $originRecordTransactionTimestamp
     *
     * @return self
     */
    public function setOriginRecordTransactionTimestamp(string $originRecordTransactionTimestamp) : self
    {
        $this->initialized['originRecordTransactionTimestamp'] = true;
        $this->originRecordTransactionTimestamp = $originRecordTransactionTimestamp;
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
     * 
     *
     * @return ShipmentShipmentIndicationType[]
     */
    public function getShipmentIndicationType() : array
    {
        return $this->shipmentIndicationType;
    }
    /**
     * 
     *
     * @param ShipmentShipmentIndicationType[] $shipmentIndicationType
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
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @return ShipmentPaymentDetails
     */
    public function getPaymentDetails() : ShipmentPaymentDetails
    {
        return $this->paymentDetails;
    }
    /**
     * Payment details container for detailed shipment charges. The two shipment charges that are available for specification are Transportation charges and Duties and Taxes.  This container is used for Who Pays What functionality.
     *
     * @param ShipmentPaymentDetails $paymentDetails
     *
     * @return self
     */
    public function setPaymentDetails(ShipmentPaymentDetails $paymentDetails) : self
    {
        $this->initialized['paymentDetails'] = true;
        $this->paymentDetails = $paymentDetails;
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
     * UPS service type.
     *
     * @return ShipmentService
     */
    public function getService() : ShipmentService
    {
        return $this->service;
    }
    /**
     * UPS service type.
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
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @return string
     */
    public function getNumOfPieces() : string
    {
        return $this->numOfPieces;
    }
    /**
     * Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @param string $numOfPieces
     *
     * @return self
     */
    public function setNumOfPieces(string $numOfPieces) : self
    {
        $this->initialized['numOfPieces'] = true;
        $this->numOfPieces = $numOfPieces;
        return $this;
    }
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @return ShipmentShipmentTotalWeight
     */
    public function getShipmentTotalWeight() : ShipmentShipmentTotalWeight
    {
        return $this->shipmentTotalWeight;
    }
    /**
     * Shipment Total Weight Container. This container is only applicable for "ratetimeintransit" and "shoptimeintransit" request options.  Required for all international shipments when retreiving time in transit information, including letters and documents shipments.
     *
     * @param ShipmentShipmentTotalWeight $shipmentTotalWeight
     *
     * @return self
     */
    public function setShipmentTotalWeight(ShipmentShipmentTotalWeight $shipmentTotalWeight) : self
    {
        $this->initialized['shipmentTotalWeight'] = true;
        $this->shipmentTotalWeight = $shipmentTotalWeight;
        return $this;
    }
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @return string
     */
    public function getDocumentsOnlyIndicator() : string
    {
        return $this->documentsOnlyIndicator;
    }
    /**
     * Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
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
     * 
     *
     * @return ShipmentPackage[]
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param ShipmentPackage[] $package
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
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @return string
     */
    public function getRatingMethodRequestedIndicator() : string
    {
        return $this->ratingMethodRequestedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
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
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return string
     */
    public function getTaxInformationIndicator() : string
    {
        return $this->taxInformationIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
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
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @return ShipmentDeliveryTimeInformation
     */
    public function getDeliveryTimeInformation() : ShipmentDeliveryTimeInformation
    {
        return $this->deliveryTimeInformation;
    }
    /**
     * Container for requesting Time In Transit Information. Required to view time in transit information.  Required to view any time in transit information.
     *
     * @param ShipmentDeliveryTimeInformation $deliveryTimeInformation
     *
     * @return self
     */
    public function setDeliveryTimeInformation(ShipmentDeliveryTimeInformation $deliveryTimeInformation) : self
    {
        $this->initialized['deliveryTimeInformation'] = true;
        $this->deliveryTimeInformation = $deliveryTimeInformation;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return string
     */
    public function getMasterCartonIndicator() : string
    {
        return $this->masterCartonIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
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
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @return string
     */
    public function getWWEShipmentIndicator() : string
    {
        return $this->wWEShipmentIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @param string $wWEShipmentIndicator
     *
     * @return self
     */
    public function setWWEShipmentIndicator(string $wWEShipmentIndicator) : self
    {
        $this->initialized['wWEShipmentIndicator'] = true;
        $this->wWEShipmentIndicator = $wWEShipmentIndicator;
        return $this;
    }
}