<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipRequestShipment extends \ArrayObject
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
     * ShipFrom Container.
     *
     * @var FreightShipShipmentShipFrom
     */
    protected $shipFrom;
    /**
    * Shipper�s six digit account number.
    Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML.
    *
    * @var string
    */
    protected $shipperNumber;
    /**
     * ShipTo Container.
     *
     * @var FreightShipShipmentShipTo
     */
    protected $shipTo;
    /**
     * Payment Information Container.
     *
     * @var FreightShipShipmentPaymentInformation
     */
    protected $paymentInformation;
    /**
     * Service Container.
     *
     * @var ShipmentService
     */
    protected $service;
    /**
    * HandlingUnit Container.
    Required for Ground Shipments.
    *
    * @var ShipmentHandlingUnitOne
    */
    protected $handlingUnitOne;
    /**
     * HandlingUnit Container.
     *
     * @var ShipmentHandlingUnitTwo
     */
    protected $handlingUnitTwo;
    /**
     * ExistingShipmentID Container.
     *
     * @var ShipmentExistingShipmentID
     */
    protected $existingShipmentID;
    /**
    * General purpose instructions to the driver.  
    Example: Call 30 minutes before
    *
    * @var string
    */
    protected $handlingInstructions;
    /**
     * Delivery Instructions.
     *
     * @var string
     */
    protected $deliveryInstructions;
    /**
     * Pickup Instructions.
     *
     * @var string
     */
    protected $pickupInstructions;
    /**
     * 
     *
     * @var list<ShipmentCommodity>
     */
    protected $commodity;
    /**
     * 
     *
     * @var list<ShipmentReference>
     */
    protected $reference;
    /**
     * ShipmentServiceOptions Container.
     *
     * @var FreightShipShipmentShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
     * PickupRequest Container.
     *
     * @var ShipmentPickupRequest
     */
    protected $pickupRequest;
    /**
     * Documents Container.
     *
     * @var ShipmentDocuments
     */
    protected $documents;
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned if available.
     *
     * @var string
     */
    protected $timeInTransitIndicator;
    /**
     * Handling Unit for Density based Rating.
     *
     * @var ShipmentHandlingUnits
     */
    protected $handlingUnits;
    /**
     * The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested.
     *
     * @var string
     */
    protected $densityEligibleIndicator;
    /**
     * ShipFrom Container.
     *
     * @return FreightShipShipmentShipFrom
     */
    public function getShipFrom() : FreightShipShipmentShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * ShipFrom Container.
     *
     * @param FreightShipShipmentShipFrom $shipFrom
     *
     * @return self
     */
    public function setShipFrom(FreightShipShipmentShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
    * Shipper�s six digit account number.
    Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML.
    *
    * @return string
    */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
    * Shipper�s six digit account number.
    Size must be six alphanumeric characters. Must be associated with the User Id specified in the Access Request XML.
    *
    * @param string $shipperNumber
    *
    * @return self
    */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * ShipTo Container.
     *
     * @return FreightShipShipmentShipTo
     */
    public function getShipTo() : FreightShipShipmentShipTo
    {
        return $this->shipTo;
    }
    /**
     * ShipTo Container.
     *
     * @param FreightShipShipmentShipTo $shipTo
     *
     * @return self
     */
    public function setShipTo(FreightShipShipmentShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * Payment Information Container.
     *
     * @return FreightShipShipmentPaymentInformation
     */
    public function getPaymentInformation() : FreightShipShipmentPaymentInformation
    {
        return $this->paymentInformation;
    }
    /**
     * Payment Information Container.
     *
     * @param FreightShipShipmentPaymentInformation $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(FreightShipShipmentPaymentInformation $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
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
    * HandlingUnit Container.
    Required for Ground Shipments.
    *
    * @return ShipmentHandlingUnitOne
    */
    public function getHandlingUnitOne() : ShipmentHandlingUnitOne
    {
        return $this->handlingUnitOne;
    }
    /**
    * HandlingUnit Container.
    Required for Ground Shipments.
    *
    * @param ShipmentHandlingUnitOne $handlingUnitOne
    *
    * @return self
    */
    public function setHandlingUnitOne(ShipmentHandlingUnitOne $handlingUnitOne) : self
    {
        $this->initialized['handlingUnitOne'] = true;
        $this->handlingUnitOne = $handlingUnitOne;
        return $this;
    }
    /**
     * HandlingUnit Container.
     *
     * @return ShipmentHandlingUnitTwo
     */
    public function getHandlingUnitTwo() : ShipmentHandlingUnitTwo
    {
        return $this->handlingUnitTwo;
    }
    /**
     * HandlingUnit Container.
     *
     * @param ShipmentHandlingUnitTwo $handlingUnitTwo
     *
     * @return self
     */
    public function setHandlingUnitTwo(ShipmentHandlingUnitTwo $handlingUnitTwo) : self
    {
        $this->initialized['handlingUnitTwo'] = true;
        $this->handlingUnitTwo = $handlingUnitTwo;
        return $this;
    }
    /**
     * ExistingShipmentID Container.
     *
     * @return ShipmentExistingShipmentID
     */
    public function getExistingShipmentID() : ShipmentExistingShipmentID
    {
        return $this->existingShipmentID;
    }
    /**
     * ExistingShipmentID Container.
     *
     * @param ShipmentExistingShipmentID $existingShipmentID
     *
     * @return self
     */
    public function setExistingShipmentID(ShipmentExistingShipmentID $existingShipmentID) : self
    {
        $this->initialized['existingShipmentID'] = true;
        $this->existingShipmentID = $existingShipmentID;
        return $this;
    }
    /**
    * General purpose instructions to the driver.  
    Example: Call 30 minutes before
    *
    * @return string
    */
    public function getHandlingInstructions() : string
    {
        return $this->handlingInstructions;
    }
    /**
    * General purpose instructions to the driver.  
    Example: Call 30 minutes before
    *
    * @param string $handlingInstructions
    *
    * @return self
    */
    public function setHandlingInstructions(string $handlingInstructions) : self
    {
        $this->initialized['handlingInstructions'] = true;
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }
    /**
     * Delivery Instructions.
     *
     * @return string
     */
    public function getDeliveryInstructions() : string
    {
        return $this->deliveryInstructions;
    }
    /**
     * Delivery Instructions.
     *
     * @param string $deliveryInstructions
     *
     * @return self
     */
    public function setDeliveryInstructions(string $deliveryInstructions) : self
    {
        $this->initialized['deliveryInstructions'] = true;
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Pickup Instructions.
     *
     * @return string
     */
    public function getPickupInstructions() : string
    {
        return $this->pickupInstructions;
    }
    /**
     * Pickup Instructions.
     *
     * @param string $pickupInstructions
     *
     * @return self
     */
    public function setPickupInstructions(string $pickupInstructions) : self
    {
        $this->initialized['pickupInstructions'] = true;
        $this->pickupInstructions = $pickupInstructions;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentCommodity>
     */
    public function getCommodity() : array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<ShipmentCommodity> $commodity
     *
     * @return self
     */
    public function setCommodity(array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentReference>
     */
    public function getReference() : array
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param list<ShipmentReference> $reference
     *
     * @return self
     */
    public function setReference(array $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @return FreightShipShipmentShipmentServiceOptions
     */
    public function getShipmentServiceOptions() : FreightShipShipmentShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @param FreightShipShipmentShipmentServiceOptions $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(FreightShipShipmentShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * PickupRequest Container.
     *
     * @return ShipmentPickupRequest
     */
    public function getPickupRequest() : ShipmentPickupRequest
    {
        return $this->pickupRequest;
    }
    /**
     * PickupRequest Container.
     *
     * @param ShipmentPickupRequest $pickupRequest
     *
     * @return self
     */
    public function setPickupRequest(ShipmentPickupRequest $pickupRequest) : self
    {
        $this->initialized['pickupRequest'] = true;
        $this->pickupRequest = $pickupRequest;
        return $this;
    }
    /**
     * Documents Container.
     *
     * @return ShipmentDocuments
     */
    public function getDocuments() : ShipmentDocuments
    {
        return $this->documents;
    }
    /**
     * Documents Container.
     *
     * @param ShipmentDocuments $documents
     *
     * @return self
     */
    public function setDocuments(ShipmentDocuments $documents) : self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned if available.
     *
     * @return string
     */
    public function getTimeInTransitIndicator() : string
    {
        return $this->timeInTransitIndicator;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned if available.
     *
     * @param string $timeInTransitIndicator
     *
     * @return self
     */
    public function setTimeInTransitIndicator(string $timeInTransitIndicator) : self
    {
        $this->initialized['timeInTransitIndicator'] = true;
        $this->timeInTransitIndicator = $timeInTransitIndicator;
        return $this;
    }
    /**
     * Handling Unit for Density based Rating.
     *
     * @return ShipmentHandlingUnits
     */
    public function getHandlingUnits() : ShipmentHandlingUnits
    {
        return $this->handlingUnits;
    }
    /**
     * Handling Unit for Density based Rating.
     *
     * @param ShipmentHandlingUnits $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(ShipmentHandlingUnits $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested.
     *
     * @return string
     */
    public function getDensityEligibleIndicator() : string
    {
        return $this->densityEligibleIndicator;
    }
    /**
     * The presence of the tag DensityEligibleIndicator indicates that the density based rate is requested.
     *
     * @param string $densityEligibleIndicator
     *
     * @return self
     */
    public function setDensityEligibleIndicator(string $densityEligibleIndicator) : self
    {
        $this->initialized['densityEligibleIndicator'] = true;
        $this->densityEligibleIndicator = $densityEligibleIndicator;
        return $this;
    }
}