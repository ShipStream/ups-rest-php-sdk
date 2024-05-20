<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipmentServiceOptions extends \ArrayObject
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
     * Saturday delivery indicator. The presence indicates Saturday delivery is requested and the absence indicates Saturday delivery is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @var string
     */
    protected $saturdayDeliveryIndicator;
    /**
     * Saturday pickup indicator. The presence indicates Saturday pickup is requested and the absence indicates Saturday pickup is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @var string
     */
    protected $saturdayPickupIndicator;
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @var ShipmentServiceOptionsCOD
     */
    protected $cOD;
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @var ShipmentServiceOptionsAccessPointCOD
    */
    protected $accessPointCOD;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point" package. Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point".
     *
     * @var string
     */
    protected $deliverToAddresseeOnlyIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the ship to address on the shipping label. This accessorial is not valid with Shipment Indication Type "01 - Hold For Pickup At UPS Access Point" and "02 - UPS Access Point™ Delivery".
     *
     * @var string
     */
    protected $directDeliveryOnlyIndicator;
    /**
     * 
     *
     * @var list<ShipmentServiceOptionsNotification>
     */
    protected $notification;
    /**
     * Container for the Label Delivery accessorial. Note - LabelDelivery is not applicable for GFP and Mail Innovations Forward shipment.  Required for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type. Optional for shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement.  If this container is present for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type, either of the LabelLinksIndicator or EMail container should be provided. For shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement, only LabelLinksIndicator is valid option for LabelDelivery container.
     *
     * @var ShipmentServiceOptionsLabelDelivery
     */
    protected $labelDelivery;
    /**
     * International Forms information.
     *
     * @var ShipmentServiceOptionsInternationalForms
     */
    protected $internationalForms;
    /**
    * Delivery Confirmation container.   Valid for forward shipments only.
    
    Refer to Delivery Confirmation Origin-Destination Pairs in the Appendix for a list of valid values.
    *
    * @var ShipmentServiceOptionsDeliveryConfirmation
    */
    protected $deliveryConfirmation;
    /**
     * The flag indicates the ReturnOfDocument accessorial has been requested.  Valid for Poland to Poland forward shipment only.
     *
     * @var string
     */
    protected $returnOfDocumentIndicator;
    /**
     * Indicates that the Shipment is an ImportControl shipment.
     *
     * @var string
     */
    protected $importControlIndicator;
    /**
     * Type of ImportControl Label. This container is applicable only for ImportControl shipments.  This container is applicable only for ImportControl shipments.
     *
     * @var ShipmentServiceOptionsLabelMethod
     */
    protected $labelMethod;
    /**
     * CommercialInvoiceRemovalIndicator allows a shipper to dictate UPS to remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @var string
     */
    protected $commercialInvoiceRemovalIndicator;
    /**
     * UPS carbon neutral indicator presence at shipment level is required to create carbon neutral Shipments.
     *
     * @var string
     */
    protected $uPScarbonneutralIndicator;
    /**
     * 
     *
     * @var list<ShipmentServiceOptionsPreAlertNotification>
     */
    protected $preAlertNotification;
    /**
     * Exchange forward indicator presence at shipment level is required to create exchange forward Shipments.  In the label routing Instruction text will be defaulted to "EXCHANGE-LIKE ITEM ONLY".
     *
     * @var string
     */
    protected $exchangeForwardIndicator;
    /**
     * Hold For Pickup indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @var string
     */
    protected $holdForPickupIndicator;
    /**
     * Drop off At UPS Facility indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @var string
     */
    protected $dropoffAtUPSFacilityIndicator;
    /**
    * Lift Gate For Pick Up indicator. The empty tag means indicator is present.  Lift Gate for Pickup is not allowed with Drop Off At UPS Facility for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @var string
    */
    protected $liftGateForPickUpIndicator;
    /**
    * Lift Gate For Delivery indicator. The empty tag means indicator is present.  Lift Gate for Delivery is not allowed with Hold For Pickup for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At UPS Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @var string
    */
    protected $liftGateForDeliveryIndicator;
    /**
     * The presence of the tag SDLShipmentIndicator indicates Shipment is SDL. SDLShipmentIndicator presence means EEI form/ EEI Filing option required.
     *
     * @var string
     */
    protected $sDLShipmentIndicator;
    /**
     * Package Release code allows the consignee or claimant to pick-up a package at a UPS Access Point™. The shipper must provide the Package Release Code to the consignee so that they can provide the code to the UPS Access Point personnel as another item for authentication before the package is released to them. Package Release Code is only valid with ShipmentIndicationType 01 - Hold for Pickup at UPS Access Point™.  The release code must be between length 4 and 6 and only contain numbers.
     *
     * @var string
     */
    protected $ePRAReleaseCode;
    /**
     * Restricted Articles container.
     *
     * @var ShipmentServiceOptionsRestrictedArticles
     */
    protected $restrictedArticles;
    /**
    * Inside delivery accessory. Valid values:
    01 - White Glove
    02 - Room of Choice
    03 - Installation
    Default is Room of Choice.  Shippers account needs to have a valid contract for Heavy Goods Service.
    *
    * @var string
    */
    protected $insideDelivery;
    /**
     * Presence/Absence indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the customer would like items disposed.  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @var string
     */
    protected $itemDisposal;
    /**
     * Saturday delivery indicator. The presence indicates Saturday delivery is requested and the absence indicates Saturday delivery is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @return string
     */
    public function getSaturdayDeliveryIndicator() : string
    {
        return $this->saturdayDeliveryIndicator;
    }
    /**
     * Saturday delivery indicator. The presence indicates Saturday delivery is requested and the absence indicates Saturday delivery is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @param string $saturdayDeliveryIndicator
     *
     * @return self
     */
    public function setSaturdayDeliveryIndicator(string $saturdayDeliveryIndicator) : self
    {
        $this->initialized['saturdayDeliveryIndicator'] = true;
        $this->saturdayDeliveryIndicator = $saturdayDeliveryIndicator;
        return $this;
    }
    /**
     * Saturday pickup indicator. The presence indicates Saturday pickup is requested and the absence indicates Saturday pickup is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @return string
     */
    public function getSaturdayPickupIndicator() : string
    {
        return $this->saturdayPickupIndicator;
    }
    /**
     * Saturday pickup indicator. The presence indicates Saturday pickup is requested and the absence indicates Saturday pickup is not requested.  This is an empty tag, any value inside is ignored.
     *
     * @param string $saturdayPickupIndicator
     *
     * @return self
     */
    public function setSaturdayPickupIndicator(string $saturdayPickupIndicator) : self
    {
        $this->initialized['saturdayPickupIndicator'] = true;
        $this->saturdayPickupIndicator = $saturdayPickupIndicator;
        return $this;
    }
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @return ShipmentServiceOptionsCOD
     */
    public function getCOD() : ShipmentServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * COD container  Indicates COD is requested. Shipment COD is only available for EU origin countries or territories and for shippers account type Daily Pickup and Drop Shipping. Not available to shipment with return service.
     *
     * @param ShipmentServiceOptionsCOD $cOD
     *
     * @return self
     */
    public function setCOD(ShipmentServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @return ShipmentServiceOptionsAccessPointCOD
    */
    public function getAccessPointCOD() : ShipmentServiceOptionsAccessPointCOD
    {
        return $this->accessPointCOD;
    }
    /**
    * Access Point COD indicates COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Shipment Access Point COD is valid only for countries or territories within E.U. 
    Not valid with (Shipment) COD. 
    Not available to shipment with return service.
    *
    * @param ShipmentServiceOptionsAccessPointCOD $accessPointCOD
    *
    * @return self
    */
    public function setAccessPointCOD(ShipmentServiceOptionsAccessPointCOD $accessPointCOD) : self
    {
        $this->initialized['accessPointCOD'] = true;
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point" package. Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point".
     *
     * @return string
     */
    public function getDeliverToAddresseeOnlyIndicator() : string
    {
        return $this->deliverToAddresseeOnlyIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. DeliverToAddresseeOnlyIndicator is shipper specified restriction that requires the addressee to be the one who takes final delivery of the "Hold For PickUp at UPS Access Point" package. Presence of indicator means shipper restriction will apply to the shipment.  Only valid for Shipment Indication type "01 - Hold For PickUp at UPS Access Point".
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
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the ship to address on the shipping label. This accessorial is not valid with Shipment Indication Type "01 - Hold For Pickup At UPS Access Point" and "02 - UPS Access Point™ Delivery".
     *
     * @return string
     */
    public function getDirectDeliveryOnlyIndicator() : string
    {
        return $this->directDeliveryOnlyIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Direct Delivery Only (DDO) accessorial in a request would ensure that delivery is made only to the ship to address on the shipping label. This accessorial is not valid with Shipment Indication Type "01 - Hold For Pickup At UPS Access Point" and "02 - UPS Access Point™ Delivery".
     *
     * @param string $directDeliveryOnlyIndicator
     *
     * @return self
     */
    public function setDirectDeliveryOnlyIndicator(string $directDeliveryOnlyIndicator) : self
    {
        $this->initialized['directDeliveryOnlyIndicator'] = true;
        $this->directDeliveryOnlyIndicator = $directDeliveryOnlyIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentServiceOptionsNotification>
     */
    public function getNotification() : array
    {
        return $this->notification;
    }
    /**
     * 
     *
     * @param list<ShipmentServiceOptionsNotification> $notification
     *
     * @return self
     */
    public function setNotification(array $notification) : self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * Container for the Label Delivery accessorial. Note - LabelDelivery is not applicable for GFP and Mail Innovations Forward shipment.  Required for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type. Optional for shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement.  If this container is present for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type, either of the LabelLinksIndicator or EMail container should be provided. For shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement, only LabelLinksIndicator is valid option for LabelDelivery container.
     *
     * @return ShipmentServiceOptionsLabelDelivery
     */
    public function getLabelDelivery() : ShipmentServiceOptionsLabelDelivery
    {
        return $this->labelDelivery;
    }
    /**
     * Container for the Label Delivery accessorial. Note - LabelDelivery is not applicable for GFP and Mail Innovations Forward shipment.  Required for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type. Optional for shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement.  If this container is present for shipments with either Electronic Return Label Return Service or ImportControl Electronic LabelMethod type, either of the LabelLinksIndicator or EMail container should be provided. For shipments with Print Return Label Return Service or ImportControl Print LabelMethod type or Forward movement, only LabelLinksIndicator is valid option for LabelDelivery container.
     *
     * @param ShipmentServiceOptionsLabelDelivery $labelDelivery
     *
     * @return self
     */
    public function setLabelDelivery(ShipmentServiceOptionsLabelDelivery $labelDelivery) : self
    {
        $this->initialized['labelDelivery'] = true;
        $this->labelDelivery = $labelDelivery;
        return $this;
    }
    /**
     * International Forms information.
     *
     * @return ShipmentServiceOptionsInternationalForms
     */
    public function getInternationalForms() : ShipmentServiceOptionsInternationalForms
    {
        return $this->internationalForms;
    }
    /**
     * International Forms information.
     *
     * @param ShipmentServiceOptionsInternationalForms $internationalForms
     *
     * @return self
     */
    public function setInternationalForms(ShipmentServiceOptionsInternationalForms $internationalForms) : self
    {
        $this->initialized['internationalForms'] = true;
        $this->internationalForms = $internationalForms;
        return $this;
    }
    /**
    * Delivery Confirmation container.   Valid for forward shipments only.
    
    Refer to Delivery Confirmation Origin-Destination Pairs in the Appendix for a list of valid values.
    *
    * @return ShipmentServiceOptionsDeliveryConfirmation
    */
    public function getDeliveryConfirmation() : ShipmentServiceOptionsDeliveryConfirmation
    {
        return $this->deliveryConfirmation;
    }
    /**
    * Delivery Confirmation container.   Valid for forward shipments only.
    
    Refer to Delivery Confirmation Origin-Destination Pairs in the Appendix for a list of valid values.
    *
    * @param ShipmentServiceOptionsDeliveryConfirmation $deliveryConfirmation
    *
    * @return self
    */
    public function setDeliveryConfirmation(ShipmentServiceOptionsDeliveryConfirmation $deliveryConfirmation) : self
    {
        $this->initialized['deliveryConfirmation'] = true;
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }
    /**
     * The flag indicates the ReturnOfDocument accessorial has been requested.  Valid for Poland to Poland forward shipment only.
     *
     * @return string
     */
    public function getReturnOfDocumentIndicator() : string
    {
        return $this->returnOfDocumentIndicator;
    }
    /**
     * The flag indicates the ReturnOfDocument accessorial has been requested.  Valid for Poland to Poland forward shipment only.
     *
     * @param string $returnOfDocumentIndicator
     *
     * @return self
     */
    public function setReturnOfDocumentIndicator(string $returnOfDocumentIndicator) : self
    {
        $this->initialized['returnOfDocumentIndicator'] = true;
        $this->returnOfDocumentIndicator = $returnOfDocumentIndicator;
        return $this;
    }
    /**
     * Indicates that the Shipment is an ImportControl shipment.
     *
     * @return string
     */
    public function getImportControlIndicator() : string
    {
        return $this->importControlIndicator;
    }
    /**
     * Indicates that the Shipment is an ImportControl shipment.
     *
     * @param string $importControlIndicator
     *
     * @return self
     */
    public function setImportControlIndicator(string $importControlIndicator) : self
    {
        $this->initialized['importControlIndicator'] = true;
        $this->importControlIndicator = $importControlIndicator;
        return $this;
    }
    /**
     * Type of ImportControl Label. This container is applicable only for ImportControl shipments.  This container is applicable only for ImportControl shipments.
     *
     * @return ShipmentServiceOptionsLabelMethod
     */
    public function getLabelMethod() : ShipmentServiceOptionsLabelMethod
    {
        return $this->labelMethod;
    }
    /**
     * Type of ImportControl Label. This container is applicable only for ImportControl shipments.  This container is applicable only for ImportControl shipments.
     *
     * @param ShipmentServiceOptionsLabelMethod $labelMethod
     *
     * @return self
     */
    public function setLabelMethod(ShipmentServiceOptionsLabelMethod $labelMethod) : self
    {
        $this->initialized['labelMethod'] = true;
        $this->labelMethod = $labelMethod;
        return $this;
    }
    /**
     * CommercialInvoiceRemovalIndicator allows a shipper to dictate UPS to remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @return string
     */
    public function getCommercialInvoiceRemovalIndicator() : string
    {
        return $this->commercialInvoiceRemovalIndicator;
    }
    /**
     * CommercialInvoiceRemovalIndicator allows a shipper to dictate UPS to remove the Commercial Invoice from the user's shipment before the shipment is delivered to the ultimate consignee.
     *
     * @param string $commercialInvoiceRemovalIndicator
     *
     * @return self
     */
    public function setCommercialInvoiceRemovalIndicator(string $commercialInvoiceRemovalIndicator) : self
    {
        $this->initialized['commercialInvoiceRemovalIndicator'] = true;
        $this->commercialInvoiceRemovalIndicator = $commercialInvoiceRemovalIndicator;
        return $this;
    }
    /**
     * UPS carbon neutral indicator presence at shipment level is required to create carbon neutral Shipments.
     *
     * @return string
     */
    public function getUPScarbonneutralIndicator() : string
    {
        return $this->uPScarbonneutralIndicator;
    }
    /**
     * UPS carbon neutral indicator presence at shipment level is required to create carbon neutral Shipments.
     *
     * @param string $uPScarbonneutralIndicator
     *
     * @return self
     */
    public function setUPScarbonneutralIndicator(string $uPScarbonneutralIndicator) : self
    {
        $this->initialized['uPScarbonneutralIndicator'] = true;
        $this->uPScarbonneutralIndicator = $uPScarbonneutralIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentServiceOptionsPreAlertNotification>
     */
    public function getPreAlertNotification() : array
    {
        return $this->preAlertNotification;
    }
    /**
     * 
     *
     * @param list<ShipmentServiceOptionsPreAlertNotification> $preAlertNotification
     *
     * @return self
     */
    public function setPreAlertNotification(array $preAlertNotification) : self
    {
        $this->initialized['preAlertNotification'] = true;
        $this->preAlertNotification = $preAlertNotification;
        return $this;
    }
    /**
     * Exchange forward indicator presence at shipment level is required to create exchange forward Shipments.  In the label routing Instruction text will be defaulted to "EXCHANGE-LIKE ITEM ONLY".
     *
     * @return string
     */
    public function getExchangeForwardIndicator() : string
    {
        return $this->exchangeForwardIndicator;
    }
    /**
     * Exchange forward indicator presence at shipment level is required to create exchange forward Shipments.  In the label routing Instruction text will be defaulted to "EXCHANGE-LIKE ITEM ONLY".
     *
     * @param string $exchangeForwardIndicator
     *
     * @return self
     */
    public function setExchangeForwardIndicator(string $exchangeForwardIndicator) : self
    {
        $this->initialized['exchangeForwardIndicator'] = true;
        $this->exchangeForwardIndicator = $exchangeForwardIndicator;
        return $this;
    }
    /**
     * Hold For Pickup indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @return string
     */
    public function getHoldForPickupIndicator() : string
    {
        return $this->holdForPickupIndicator;
    }
    /**
     * Hold For Pickup indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @param string $holdForPickupIndicator
     *
     * @return self
     */
    public function setHoldForPickupIndicator(string $holdForPickupIndicator) : self
    {
        $this->initialized['holdForPickupIndicator'] = true;
        $this->holdForPickupIndicator = $holdForPickupIndicator;
        return $this;
    }
    /**
     * Drop off At UPS Facility indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @return string
     */
    public function getDropoffAtUPSFacilityIndicator() : string
    {
        return $this->dropoffAtUPSFacilityIndicator;
    }
    /**
     * Drop off At UPS Facility indicator. The empty tag means indicator is present.  This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
     *
     * @param string $dropoffAtUPSFacilityIndicator
     *
     * @return self
     */
    public function setDropoffAtUPSFacilityIndicator(string $dropoffAtUPSFacilityIndicator) : self
    {
        $this->initialized['dropoffAtUPSFacilityIndicator'] = true;
        $this->dropoffAtUPSFacilityIndicator = $dropoffAtUPSFacilityIndicator;
        return $this;
    }
    /**
    * Lift Gate For Pick Up indicator. The empty tag means indicator is present.  Lift Gate for Pickup is not allowed with Drop Off At UPS Facility for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @return string
    */
    public function getLiftGateForPickUpIndicator() : string
    {
        return $this->liftGateForPickUpIndicator;
    }
    /**
    * Lift Gate For Pick Up indicator. The empty tag means indicator is present.  Lift Gate for Pickup is not allowed with Drop Off At UPS Facility for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @param string $liftGateForPickUpIndicator
    *
    * @return self
    */
    public function setLiftGateForPickUpIndicator(string $liftGateForPickUpIndicator) : self
    {
        $this->initialized['liftGateForPickUpIndicator'] = true;
        $this->liftGateForPickUpIndicator = $liftGateForPickUpIndicator;
        return $this;
    }
    /**
    * Lift Gate For Delivery indicator. The empty tag means indicator is present.  Lift Gate for Delivery is not allowed with Hold For Pickup for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At UPS Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @return string
    */
    public function getLiftGateForDeliveryIndicator() : string
    {
        return $this->liftGateForDeliveryIndicator;
    }
    /**
    * Lift Gate For Delivery indicator. The empty tag means indicator is present.  Lift Gate for Delivery is not allowed with Hold For Pickup for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    When both Hold for Pickup and Drop Off At UPS Facility are selected, neither of the Lift Gate accessorial (Pick Up or Delivery) are allowed for a UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipment. 
    
    This accessorial is only valid for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday Shipment.
    *
    * @param string $liftGateForDeliveryIndicator
    *
    * @return self
    */
    public function setLiftGateForDeliveryIndicator(string $liftGateForDeliveryIndicator) : self
    {
        $this->initialized['liftGateForDeliveryIndicator'] = true;
        $this->liftGateForDeliveryIndicator = $liftGateForDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag SDLShipmentIndicator indicates Shipment is SDL. SDLShipmentIndicator presence means EEI form/ EEI Filing option required.
     *
     * @return string
     */
    public function getSDLShipmentIndicator() : string
    {
        return $this->sDLShipmentIndicator;
    }
    /**
     * The presence of the tag SDLShipmentIndicator indicates Shipment is SDL. SDLShipmentIndicator presence means EEI form/ EEI Filing option required.
     *
     * @param string $sDLShipmentIndicator
     *
     * @return self
     */
    public function setSDLShipmentIndicator(string $sDLShipmentIndicator) : self
    {
        $this->initialized['sDLShipmentIndicator'] = true;
        $this->sDLShipmentIndicator = $sDLShipmentIndicator;
        return $this;
    }
    /**
     * Package Release code allows the consignee or claimant to pick-up a package at a UPS Access Point™. The shipper must provide the Package Release Code to the consignee so that they can provide the code to the UPS Access Point personnel as another item for authentication before the package is released to them. Package Release Code is only valid with ShipmentIndicationType 01 - Hold for Pickup at UPS Access Point™.  The release code must be between length 4 and 6 and only contain numbers.
     *
     * @return string
     */
    public function getEPRAReleaseCode() : string
    {
        return $this->ePRAReleaseCode;
    }
    /**
     * Package Release code allows the consignee or claimant to pick-up a package at a UPS Access Point™. The shipper must provide the Package Release Code to the consignee so that they can provide the code to the UPS Access Point personnel as another item for authentication before the package is released to them. Package Release Code is only valid with ShipmentIndicationType 01 - Hold for Pickup at UPS Access Point™.  The release code must be between length 4 and 6 and only contain numbers.
     *
     * @param string $ePRAReleaseCode
     *
     * @return self
     */
    public function setEPRAReleaseCode(string $ePRAReleaseCode) : self
    {
        $this->initialized['ePRAReleaseCode'] = true;
        $this->ePRAReleaseCode = $ePRAReleaseCode;
        return $this;
    }
    /**
     * Restricted Articles container.
     *
     * @return ShipmentServiceOptionsRestrictedArticles
     */
    public function getRestrictedArticles() : ShipmentServiceOptionsRestrictedArticles
    {
        return $this->restrictedArticles;
    }
    /**
     * Restricted Articles container.
     *
     * @param ShipmentServiceOptionsRestrictedArticles $restrictedArticles
     *
     * @return self
     */
    public function setRestrictedArticles(ShipmentServiceOptionsRestrictedArticles $restrictedArticles) : self
    {
        $this->initialized['restrictedArticles'] = true;
        $this->restrictedArticles = $restrictedArticles;
        return $this;
    }
    /**
    * Inside delivery accessory. Valid values:
    01 - White Glove
    02 - Room of Choice
    03 - Installation
    Default is Room of Choice.  Shippers account needs to have a valid contract for Heavy Goods Service.
    *
    * @return string
    */
    public function getInsideDelivery() : string
    {
        return $this->insideDelivery;
    }
    /**
    * Inside delivery accessory. Valid values:
    01 - White Glove
    02 - Room of Choice
    03 - Installation
    Default is Room of Choice.  Shippers account needs to have a valid contract for Heavy Goods Service.
    *
    * @param string $insideDelivery
    *
    * @return self
    */
    public function setInsideDelivery(string $insideDelivery) : self
    {
        $this->initialized['insideDelivery'] = true;
        $this->insideDelivery = $insideDelivery;
        return $this;
    }
    /**
     * Presence/Absence indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the customer would like items disposed.  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @return string
     */
    public function getItemDisposal() : string
    {
        return $this->itemDisposal;
    }
    /**
     * Presence/Absence indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the customer would like items disposed.  Shippers account needs to have a valid contract for Heavy Goods Service.
     *
     * @param string $itemDisposal
     *
     * @return self
     */
    public function setItemDisposal(string $itemDisposal) : self
    {
        $this->initialized['itemDisposal'] = true;
        $this->itemDisposal = $itemDisposal;
        return $this;
    }
}