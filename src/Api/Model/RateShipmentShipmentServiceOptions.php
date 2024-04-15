<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentShipmentServiceOptions extends \ArrayObject
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
     * A flag indicating if the shipment requires a Saturday pickup. True if SaturdayPickupIndicator tag exists; false otherwise. Not available for GFP rating requests.  Empty Tag.
     *
     * @var string|null
     */
    protected $saturdayPickupIndicator;
    /**
     * A flag indicating if a shipment must be delivered on a Saturday. True if SaturdayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @var string|null
     */
    protected $saturdayDeliveryIndicator;
    /**
     * A flag indicating if a shipment must be delivered on a Sunday. True if SundayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @var string|null
     */
    protected $sundayDeliveryIndicator;
    /**
     * If we need diferent available services in response, this option is used for shop request option. SaturdayDeliveryIndicator/ SundayDeliveryIndicator will be ignored in that case.  Valid Values:1- Weekday+Saturday services2- Weekday+Sunday services3- Weekday+Sat services+Sun services
     *
     * @var string|null
     */
    protected $availableServicesOption;
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @var ShipmentServiceOptionsAccessPointCOD|null
    */
    protected $accessPointCOD;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point package.  Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point.
     *
     * @var string|null
     */
    protected $deliverToAddresseeOnlyIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the Ship To address on the shipping label.  This accessorial is not valid with Shipment Indication Types:01 - Hold For Pickup At UPS Access Point 02 - UPS Access Point Delivery"
     *
     * @var string|null
     */
    protected $directDeliveryOnlyIndicator;
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @var ShipmentServiceOptionsCOD|null
     */
    protected $cOD;
    /**
     * Delivery Confirmation Container.  DeliveryConfirmation and C.O.D. are mutually exclusive. Refer to the Appendix for a list of valid origin-destination country or territory pairs associated with each confirmation type.
     *
     * @var RateShipmentServiceOptionsDeliveryConfirmation|null
     */
    protected $deliveryConfirmation;
    /**
     * Return of Documents Indicator - If the flag is present, the shipper has requested the ReturnOfDocument accessorial be added to the shipment  Valid for Poland to Poland shipment.
     *
     * @var string|null
     */
    protected $returnOfDocumentIndicator;
    /**
     * UPS carbon neutral indicator. Indicates the shipment will be rated as carbon neutral.
     *
     * @var string|null
     */
    protected $uPScarbonneutralIndicator;
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $certificateOfOriginIndicator;
    /**
     * Shipment Service Pickup Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @var ShipmentServiceOptionsPickupOptions|null
     */
    protected $pickupOptions;
    /**
     * Shipment Service Delivery Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @var ShipmentServiceOptionsDeliveryOptions|null
     */
    protected $deliveryOptions;
    /**
     * Restricted Articles container.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var RateShipmentServiceOptionsRestrictedArticles|null
     */
    protected $restrictedArticles;
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $shipperExportDeclarationIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. CommercialInvoiceRemovalIndicator - empty tag means indicator is present. CommercialInvoiceRemovalIndicator allows a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @var string|null
     */
    protected $commercialInvoiceRemovalIndicator;
    /**
     * Container for type of Import Control shipments.
     *
     * @var ShipmentServiceOptionsImportControl|null
     */
    protected $importControl;
    /**
     * Container for type of Return Services.
     *
     * @var ShipmentServiceOptionsReturnService|null
     */
    protected $returnService;
    /**
     * Empty Tag means the indicator is present. This field is a flag to indicate if the receiver needs SDL rates in response. True if SDLShipmentIndicator tag exists; false otherwise.  If present, the State Department License (SDL) rates will be returned in the response.This service requires that the account number is enabled for SDL.
     *
     * @var string|null
     */
    protected $sDLShipmentIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. This field is a flag to indicate Package Release Code is requested for shipment. This accessorial is only valid with ShipmentIndicationType "01" - Hold for Pickup at UPS Access Point.
     *
     * @var string|null
     */
    protected $ePRAIndicator;
    /**
     * Inside Delivery accessory. Valide values:                                         01- White Glove                        02 - Room of Choice                   03 - Installation  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @var string|null
     */
    protected $insideDelivery;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. If present, indicates that the customer would like items disposed.   Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @var string|null
     */
    protected $itemDisposalIndicator;
    /**
     * A flag indicating if the shipment requires a Saturday pickup. True if SaturdayPickupIndicator tag exists; false otherwise. Not available for GFP rating requests.  Empty Tag.
     *
     * @return string|null
     */
    public function getSaturdayPickupIndicator() : ?string
    {
        return $this->saturdayPickupIndicator;
    }
    /**
     * A flag indicating if the shipment requires a Saturday pickup. True if SaturdayPickupIndicator tag exists; false otherwise. Not available for GFP rating requests.  Empty Tag.
     *
     * @param string|null $saturdayPickupIndicator
     *
     * @return self
     */
    public function setSaturdayPickupIndicator(?string $saturdayPickupIndicator) : self
    {
        $this->initialized['saturdayPickupIndicator'] = true;
        $this->saturdayPickupIndicator = $saturdayPickupIndicator;
        return $this;
    }
    /**
     * A flag indicating if a shipment must be delivered on a Saturday. True if SaturdayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @return string|null
     */
    public function getSaturdayDeliveryIndicator() : ?string
    {
        return $this->saturdayDeliveryIndicator;
    }
    /**
     * A flag indicating if a shipment must be delivered on a Saturday. True if SaturdayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @param string|null $saturdayDeliveryIndicator
     *
     * @return self
     */
    public function setSaturdayDeliveryIndicator(?string $saturdayDeliveryIndicator) : self
    {
        $this->initialized['saturdayDeliveryIndicator'] = true;
        $this->saturdayDeliveryIndicator = $saturdayDeliveryIndicator;
        return $this;
    }
    /**
     * A flag indicating if a shipment must be delivered on a Sunday. True if SundayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @return string|null
     */
    public function getSundayDeliveryIndicator() : ?string
    {
        return $this->sundayDeliveryIndicator;
    }
    /**
     * A flag indicating if a shipment must be delivered on a Sunday. True if SundayDeliveryIndicator tag exists; false otherwise  Empty Tag.
     *
     * @param string|null $sundayDeliveryIndicator
     *
     * @return self
     */
    public function setSundayDeliveryIndicator(?string $sundayDeliveryIndicator) : self
    {
        $this->initialized['sundayDeliveryIndicator'] = true;
        $this->sundayDeliveryIndicator = $sundayDeliveryIndicator;
        return $this;
    }
    /**
     * If we need diferent available services in response, this option is used for shop request option. SaturdayDeliveryIndicator/ SundayDeliveryIndicator will be ignored in that case.  Valid Values:1- Weekday+Saturday services2- Weekday+Sunday services3- Weekday+Sat services+Sun services
     *
     * @return string|null
     */
    public function getAvailableServicesOption() : ?string
    {
        return $this->availableServicesOption;
    }
    /**
     * If we need diferent available services in response, this option is used for shop request option. SaturdayDeliveryIndicator/ SundayDeliveryIndicator will be ignored in that case.  Valid Values:1- Weekday+Saturday services2- Weekday+Sunday services3- Weekday+Sat services+Sun services
     *
     * @param string|null $availableServicesOption
     *
     * @return self
     */
    public function setAvailableServicesOption(?string $availableServicesOption) : self
    {
        $this->initialized['availableServicesOption'] = true;
        $this->availableServicesOption = $availableServicesOption;
        return $this;
    }
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @return ShipmentServiceOptionsAccessPointCOD|null
    */
    public function getAccessPointCOD() : ?ShipmentServiceOptionsAccessPointCOD
    {
        return $this->accessPointCOD;
    }
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @param ShipmentServiceOptionsAccessPointCOD|null $accessPointCOD
    *
    * @return self
    */
    public function setAccessPointCOD(?ShipmentServiceOptionsAccessPointCOD $accessPointCOD) : self
    {
        $this->initialized['accessPointCOD'] = true;
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point package.  Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point.
     *
     * @return string|null
     */
    public function getDeliverToAddresseeOnlyIndicator() : ?string
    {
        return $this->deliverToAddresseeOnlyIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point package.  Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point.
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
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the Ship To address on the shipping label.  This accessorial is not valid with Shipment Indication Types:01 - Hold For Pickup At UPS Access Point 02 - UPS Access Point Delivery"
     *
     * @return string|null
     */
    public function getDirectDeliveryOnlyIndicator() : ?string
    {
        return $this->directDeliveryOnlyIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the Ship To address on the shipping label.  This accessorial is not valid with Shipment Indication Types:01 - Hold For Pickup At UPS Access Point 02 - UPS Access Point Delivery"
     *
     * @param string|null $directDeliveryOnlyIndicator
     *
     * @return self
     */
    public function setDirectDeliveryOnlyIndicator(?string $directDeliveryOnlyIndicator) : self
    {
        $this->initialized['directDeliveryOnlyIndicator'] = true;
        $this->directDeliveryOnlyIndicator = $directDeliveryOnlyIndicator;
        return $this;
    }
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @return ShipmentServiceOptionsCOD|null
     */
    public function getCOD() : ?ShipmentServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @param ShipmentServiceOptionsCOD|null $cOD
     *
     * @return self
     */
    public function setCOD(?ShipmentServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * Delivery Confirmation Container.  DeliveryConfirmation and C.O.D. are mutually exclusive. Refer to the Appendix for a list of valid origin-destination country or territory pairs associated with each confirmation type.
     *
     * @return RateShipmentServiceOptionsDeliveryConfirmation|null
     */
    public function getDeliveryConfirmation() : ?RateShipmentServiceOptionsDeliveryConfirmation
    {
        return $this->deliveryConfirmation;
    }
    /**
     * Delivery Confirmation Container.  DeliveryConfirmation and C.O.D. are mutually exclusive. Refer to the Appendix for a list of valid origin-destination country or territory pairs associated with each confirmation type.
     *
     * @param RateShipmentServiceOptionsDeliveryConfirmation|null $deliveryConfirmation
     *
     * @return self
     */
    public function setDeliveryConfirmation(?RateShipmentServiceOptionsDeliveryConfirmation $deliveryConfirmation) : self
    {
        $this->initialized['deliveryConfirmation'] = true;
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }
    /**
     * Return of Documents Indicator - If the flag is present, the shipper has requested the ReturnOfDocument accessorial be added to the shipment  Valid for Poland to Poland shipment.
     *
     * @return string|null
     */
    public function getReturnOfDocumentIndicator() : ?string
    {
        return $this->returnOfDocumentIndicator;
    }
    /**
     * Return of Documents Indicator - If the flag is present, the shipper has requested the ReturnOfDocument accessorial be added to the shipment  Valid for Poland to Poland shipment.
     *
     * @param string|null $returnOfDocumentIndicator
     *
     * @return self
     */
    public function setReturnOfDocumentIndicator(?string $returnOfDocumentIndicator) : self
    {
        $this->initialized['returnOfDocumentIndicator'] = true;
        $this->returnOfDocumentIndicator = $returnOfDocumentIndicator;
        return $this;
    }
    /**
     * UPS carbon neutral indicator. Indicates the shipment will be rated as carbon neutral.
     *
     * @return string|null
     */
    public function getUPScarbonneutralIndicator() : ?string
    {
        return $this->uPScarbonneutralIndicator;
    }
    /**
     * UPS carbon neutral indicator. Indicates the shipment will be rated as carbon neutral.
     *
     * @param string|null $uPScarbonneutralIndicator
     *
     * @return self
     */
    public function setUPScarbonneutralIndicator(?string $uPScarbonneutralIndicator) : self
    {
        $this->initialized['uPScarbonneutralIndicator'] = true;
        $this->uPScarbonneutralIndicator = $uPScarbonneutralIndicator;
        return $this;
    }
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getCertificateOfOriginIndicator() : ?string
    {
        return $this->certificateOfOriginIndicator;
    }
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $certificateOfOriginIndicator
     *
     * @return self
     */
    public function setCertificateOfOriginIndicator(?string $certificateOfOriginIndicator) : self
    {
        $this->initialized['certificateOfOriginIndicator'] = true;
        $this->certificateOfOriginIndicator = $certificateOfOriginIndicator;
        return $this;
    }
    /**
     * Shipment Service Pickup Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @return ShipmentServiceOptionsPickupOptions|null
     */
    public function getPickupOptions() : ?ShipmentServiceOptionsPickupOptions
    {
        return $this->pickupOptions;
    }
    /**
     * Shipment Service Pickup Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @param ShipmentServiceOptionsPickupOptions|null $pickupOptions
     *
     * @return self
     */
    public function setPickupOptions(?ShipmentServiceOptionsPickupOptions $pickupOptions) : self
    {
        $this->initialized['pickupOptions'] = true;
        $this->pickupOptions = $pickupOptions;
        return $this;
    }
    /**
     * Shipment Service Delivery Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @return ShipmentServiceOptionsDeliveryOptions|null
     */
    public function getDeliveryOptions() : ?ShipmentServiceOptionsDeliveryOptions
    {
        return $this->deliveryOptions;
    }
    /**
     * Shipment Service Delivery Options Container.  Valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @param ShipmentServiceOptionsDeliveryOptions|null $deliveryOptions
     *
     * @return self
     */
    public function setDeliveryOptions(?ShipmentServiceOptionsDeliveryOptions $deliveryOptions) : self
    {
        $this->initialized['deliveryOptions'] = true;
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }
    /**
     * Restricted Articles container.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return RateShipmentServiceOptionsRestrictedArticles|null
     */
    public function getRestrictedArticles() : ?RateShipmentServiceOptionsRestrictedArticles
    {
        return $this->restrictedArticles;
    }
    /**
     * Restricted Articles container.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param RateShipmentServiceOptionsRestrictedArticles|null $restrictedArticles
     *
     * @return self
     */
    public function setRestrictedArticles(?RateShipmentServiceOptionsRestrictedArticles $restrictedArticles) : self
    {
        $this->initialized['restrictedArticles'] = true;
        $this->restrictedArticles = $restrictedArticles;
        return $this;
    }
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getShipperExportDeclarationIndicator() : ?string
    {
        return $this->shipperExportDeclarationIndicator;
    }
    /**
     * The empty tag in request indicates that customer would be using UPS prepared SED form.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $shipperExportDeclarationIndicator
     *
     * @return self
     */
    public function setShipperExportDeclarationIndicator(?string $shipperExportDeclarationIndicator) : self
    {
        $this->initialized['shipperExportDeclarationIndicator'] = true;
        $this->shipperExportDeclarationIndicator = $shipperExportDeclarationIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. CommercialInvoiceRemovalIndicator - empty tag means indicator is present. CommercialInvoiceRemovalIndicator allows a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @return string|null
     */
    public function getCommercialInvoiceRemovalIndicator() : ?string
    {
        return $this->commercialInvoiceRemovalIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. CommercialInvoiceRemovalIndicator - empty tag means indicator is present. CommercialInvoiceRemovalIndicator allows a shipper to dictate that UPS remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @param string|null $commercialInvoiceRemovalIndicator
     *
     * @return self
     */
    public function setCommercialInvoiceRemovalIndicator(?string $commercialInvoiceRemovalIndicator) : self
    {
        $this->initialized['commercialInvoiceRemovalIndicator'] = true;
        $this->commercialInvoiceRemovalIndicator = $commercialInvoiceRemovalIndicator;
        return $this;
    }
    /**
     * Container for type of Import Control shipments.
     *
     * @return ShipmentServiceOptionsImportControl|null
     */
    public function getImportControl() : ?ShipmentServiceOptionsImportControl
    {
        return $this->importControl;
    }
    /**
     * Container for type of Import Control shipments.
     *
     * @param ShipmentServiceOptionsImportControl|null $importControl
     *
     * @return self
     */
    public function setImportControl(?ShipmentServiceOptionsImportControl $importControl) : self
    {
        $this->initialized['importControl'] = true;
        $this->importControl = $importControl;
        return $this;
    }
    /**
     * Container for type of Return Services.
     *
     * @return ShipmentServiceOptionsReturnService|null
     */
    public function getReturnService() : ?ShipmentServiceOptionsReturnService
    {
        return $this->returnService;
    }
    /**
     * Container for type of Return Services.
     *
     * @param ShipmentServiceOptionsReturnService|null $returnService
     *
     * @return self
     */
    public function setReturnService(?ShipmentServiceOptionsReturnService $returnService) : self
    {
        $this->initialized['returnService'] = true;
        $this->returnService = $returnService;
        return $this;
    }
    /**
     * Empty Tag means the indicator is present. This field is a flag to indicate if the receiver needs SDL rates in response. True if SDLShipmentIndicator tag exists; false otherwise.  If present, the State Department License (SDL) rates will be returned in the response.This service requires that the account number is enabled for SDL.
     *
     * @return string|null
     */
    public function getSDLShipmentIndicator() : ?string
    {
        return $this->sDLShipmentIndicator;
    }
    /**
     * Empty Tag means the indicator is present. This field is a flag to indicate if the receiver needs SDL rates in response. True if SDLShipmentIndicator tag exists; false otherwise.  If present, the State Department License (SDL) rates will be returned in the response.This service requires that the account number is enabled for SDL.
     *
     * @param string|null $sDLShipmentIndicator
     *
     * @return self
     */
    public function setSDLShipmentIndicator(?string $sDLShipmentIndicator) : self
    {
        $this->initialized['sDLShipmentIndicator'] = true;
        $this->sDLShipmentIndicator = $sDLShipmentIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. This field is a flag to indicate Package Release Code is requested for shipment. This accessorial is only valid with ShipmentIndicationType "01" - Hold for Pickup at UPS Access Point.
     *
     * @return string|null
     */
    public function getEPRAIndicator() : ?string
    {
        return $this->ePRAIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. This field is a flag to indicate Package Release Code is requested for shipment. This accessorial is only valid with ShipmentIndicationType "01" - Hold for Pickup at UPS Access Point.
     *
     * @param string|null $ePRAIndicator
     *
     * @return self
     */
    public function setEPRAIndicator(?string $ePRAIndicator) : self
    {
        $this->initialized['ePRAIndicator'] = true;
        $this->ePRAIndicator = $ePRAIndicator;
        return $this;
    }
    /**
     * Inside Delivery accessory. Valide values:                                         01- White Glove                        02 - Room of Choice                   03 - Installation  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @return string|null
     */
    public function getInsideDelivery() : ?string
    {
        return $this->insideDelivery;
    }
    /**
     * Inside Delivery accessory. Valide values:                                         01- White Glove                        02 - Room of Choice                   03 - Installation  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @param string|null $insideDelivery
     *
     * @return self
     */
    public function setInsideDelivery(?string $insideDelivery) : self
    {
        $this->initialized['insideDelivery'] = true;
        $this->insideDelivery = $insideDelivery;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. If present, indicates that the customer would like items disposed.   Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @return string|null
     */
    public function getItemDisposalIndicator() : ?string
    {
        return $this->itemDisposalIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. If present, indicates that the customer would like items disposed.   Shippers account needs to have a valid contract for Heavy Goods Service.
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
}