<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequest extends \ArrayObject
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
     * Freight Pickup Request Container.
     *
     * @var FreightPickupRequestRequest|null
     */
    protected $request;
    /**
    * Confirmation number of pickup ground freight shipment to modify.� Only use if requesting a pickup modification.
    If this element is populated, it must contain a valid confirmation number and all previously supplied populated elements in the original request must be present.
    *
    * @var string|null
    */
    protected $pickupRequestConfirmationNumber;
    /**
     * Destinations postal code.
     *
     * @var string|null
     */
    protected $destinationPostalCode;
    /**
     * Destinations country code.
     *
     * @var string|null
     */
    protected $destinationCountryCode;
    /**
     * Requester Container. Also referred to as caller.
     *
     * @var FreightPickupRequestRequester|null
     */
    protected $requester;
    /**
     * ShipFrom Container.
     *
     * @var FreightPickupRequestShipFrom|null
     */
    protected $shipFrom;
    /**
     * ShipTo Container.  Must be populated if request is a Pickup Notifications for LTL request and BOLID does not exist in the request.
     *
     * @var FreightPickupRequestShipTo|null
     */
    protected $shipTo;
    /**
    * Date of the Pickup. 
    Format:YYYYMMDD
    *
    * @var string|null
    */
    protected $pickupDate;
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @var string|null
    */
    protected $earliestTimeReady;
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @var string|null
    */
    protected $latestTimeReady;
    /**
     * ShipmentServiceOptions container.
     *
     * @var FreightPickupRequestShipmentServiceOptions|null
     */
    protected $shipmentServiceOptions;
    /**
     * 
     *
     * @var list<FreightPickupRequestShipmentDetail>|null
     */
    protected $shipmentDetail;
    /**
    * ExistingShipmentID Container.
    Request will contain either ShipmentDetail or ExistingShipmentID container. Not both.
    *
    * @var FreightPickupRequestExistingShipmentID|null
    */
    protected $existingShipmentID;
    /**
     * An identifier associated to the pickup request when the user elects to include Pickup Notifications for LTL.
     *
     * @var FreightPickupRequestPOM|null
     */
    protected $pOM;
    /**
     * Pickup Instructions.
     *
     * @var string|null
     */
    protected $pickupInstructions;
    /**
    * The location of the freight.
    Example: Loading Dock A
    *
    * @var string|null
    */
    protected $additionalComments;
    /**
     * Handling Instructions text
     *
     * @var string|null
     */
    protected $handlingInstructions;
    /**
     * Special Instructions text
     *
     * @var string|null
     */
    protected $specialInstructions;
    /**
     * Delivery Instructions text
     *
     * @var string|null
     */
    protected $deliveryInstructions;
    /**
     * Freight Pickup Request Container.
     *
     * @return FreightPickupRequestRequest|null
     */
    public function getRequest() : ?FreightPickupRequestRequest
    {
        return $this->request;
    }
    /**
     * Freight Pickup Request Container.
     *
     * @param FreightPickupRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?FreightPickupRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
    * Confirmation number of pickup ground freight shipment to modify.� Only use if requesting a pickup modification.
    If this element is populated, it must contain a valid confirmation number and all previously supplied populated elements in the original request must be present.
    *
    * @return string|null
    */
    public function getPickupRequestConfirmationNumber() : ?string
    {
        return $this->pickupRequestConfirmationNumber;
    }
    /**
    * Confirmation number of pickup ground freight shipment to modify.� Only use if requesting a pickup modification.
    If this element is populated, it must contain a valid confirmation number and all previously supplied populated elements in the original request must be present.
    *
    * @param string|null $pickupRequestConfirmationNumber
    *
    * @return self
    */
    public function setPickupRequestConfirmationNumber(?string $pickupRequestConfirmationNumber) : self
    {
        $this->initialized['pickupRequestConfirmationNumber'] = true;
        $this->pickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
        return $this;
    }
    /**
     * Destinations postal code.
     *
     * @return string|null
     */
    public function getDestinationPostalCode() : ?string
    {
        return $this->destinationPostalCode;
    }
    /**
     * Destinations postal code.
     *
     * @param string|null $destinationPostalCode
     *
     * @return self
     */
    public function setDestinationPostalCode(?string $destinationPostalCode) : self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * Destinations country code.
     *
     * @return string|null
     */
    public function getDestinationCountryCode() : ?string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Destinations country code.
     *
     * @param string|null $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(?string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Requester Container. Also referred to as caller.
     *
     * @return FreightPickupRequestRequester|null
     */
    public function getRequester() : ?FreightPickupRequestRequester
    {
        return $this->requester;
    }
    /**
     * Requester Container. Also referred to as caller.
     *
     * @param FreightPickupRequestRequester|null $requester
     *
     * @return self
     */
    public function setRequester(?FreightPickupRequestRequester $requester) : self
    {
        $this->initialized['requester'] = true;
        $this->requester = $requester;
        return $this;
    }
    /**
     * ShipFrom Container.
     *
     * @return FreightPickupRequestShipFrom|null
     */
    public function getShipFrom() : ?FreightPickupRequestShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * ShipFrom Container.
     *
     * @param FreightPickupRequestShipFrom|null $shipFrom
     *
     * @return self
     */
    public function setShipFrom(?FreightPickupRequestShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * ShipTo Container.  Must be populated if request is a Pickup Notifications for LTL request and BOLID does not exist in the request.
     *
     * @return FreightPickupRequestShipTo|null
     */
    public function getShipTo() : ?FreightPickupRequestShipTo
    {
        return $this->shipTo;
    }
    /**
     * ShipTo Container.  Must be populated if request is a Pickup Notifications for LTL request and BOLID does not exist in the request.
     *
     * @param FreightPickupRequestShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?FreightPickupRequestShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
    * Date of the Pickup. 
    Format:YYYYMMDD
    *
    * @return string|null
    */
    public function getPickupDate() : ?string
    {
        return $this->pickupDate;
    }
    /**
    * Date of the Pickup. 
    Format:YYYYMMDD
    *
    * @param string|null $pickupDate
    *
    * @return self
    */
    public function setPickupDate(?string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @return string|null
    */
    public function getEarliestTimeReady() : ?string
    {
        return $this->earliestTimeReady;
    }
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @param string|null $earliestTimeReady
    *
    * @return self
    */
    public function setEarliestTimeReady(?string $earliestTimeReady) : self
    {
        $this->initialized['earliestTimeReady'] = true;
        $this->earliestTimeReady = $earliestTimeReady;
        return $this;
    }
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @return string|null
    */
    public function getLatestTimeReady() : ?string
    {
        return $this->latestTimeReady;
    }
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @param string|null $latestTimeReady
    *
    * @return self
    */
    public function setLatestTimeReady(?string $latestTimeReady) : self
    {
        $this->initialized['latestTimeReady'] = true;
        $this->latestTimeReady = $latestTimeReady;
        return $this;
    }
    /**
     * ShipmentServiceOptions container.
     *
     * @return FreightPickupRequestShipmentServiceOptions|null
     */
    public function getShipmentServiceOptions() : ?FreightPickupRequestShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * ShipmentServiceOptions container.
     *
     * @param FreightPickupRequestShipmentServiceOptions|null $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(?FreightPickupRequestShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightPickupRequestShipmentDetail>|null
     */
    public function getShipmentDetail() : ?array
    {
        return $this->shipmentDetail;
    }
    /**
     * 
     *
     * @param list<FreightPickupRequestShipmentDetail>|null $shipmentDetail
     *
     * @return self
     */
    public function setShipmentDetail(?array $shipmentDetail) : self
    {
        $this->initialized['shipmentDetail'] = true;
        $this->shipmentDetail = $shipmentDetail;
        return $this;
    }
    /**
    * ExistingShipmentID Container.
    Request will contain either ShipmentDetail or ExistingShipmentID container. Not both.
    *
    * @return FreightPickupRequestExistingShipmentID|null
    */
    public function getExistingShipmentID() : ?FreightPickupRequestExistingShipmentID
    {
        return $this->existingShipmentID;
    }
    /**
    * ExistingShipmentID Container.
    Request will contain either ShipmentDetail or ExistingShipmentID container. Not both.
    *
    * @param FreightPickupRequestExistingShipmentID|null $existingShipmentID
    *
    * @return self
    */
    public function setExistingShipmentID(?FreightPickupRequestExistingShipmentID $existingShipmentID) : self
    {
        $this->initialized['existingShipmentID'] = true;
        $this->existingShipmentID = $existingShipmentID;
        return $this;
    }
    /**
     * An identifier associated to the pickup request when the user elects to include Pickup Notifications for LTL.
     *
     * @return FreightPickupRequestPOM|null
     */
    public function getPOM() : ?FreightPickupRequestPOM
    {
        return $this->pOM;
    }
    /**
     * An identifier associated to the pickup request when the user elects to include Pickup Notifications for LTL.
     *
     * @param FreightPickupRequestPOM|null $pOM
     *
     * @return self
     */
    public function setPOM(?FreightPickupRequestPOM $pOM) : self
    {
        $this->initialized['pOM'] = true;
        $this->pOM = $pOM;
        return $this;
    }
    /**
     * Pickup Instructions.
     *
     * @return string|null
     */
    public function getPickupInstructions() : ?string
    {
        return $this->pickupInstructions;
    }
    /**
     * Pickup Instructions.
     *
     * @param string|null $pickupInstructions
     *
     * @return self
     */
    public function setPickupInstructions(?string $pickupInstructions) : self
    {
        $this->initialized['pickupInstructions'] = true;
        $this->pickupInstructions = $pickupInstructions;
        return $this;
    }
    /**
    * The location of the freight.
    Example: Loading Dock A
    *
    * @return string|null
    */
    public function getAdditionalComments() : ?string
    {
        return $this->additionalComments;
    }
    /**
    * The location of the freight.
    Example: Loading Dock A
    *
    * @param string|null $additionalComments
    *
    * @return self
    */
    public function setAdditionalComments(?string $additionalComments) : self
    {
        $this->initialized['additionalComments'] = true;
        $this->additionalComments = $additionalComments;
        return $this;
    }
    /**
     * Handling Instructions text
     *
     * @return string|null
     */
    public function getHandlingInstructions() : ?string
    {
        return $this->handlingInstructions;
    }
    /**
     * Handling Instructions text
     *
     * @param string|null $handlingInstructions
     *
     * @return self
     */
    public function setHandlingInstructions(?string $handlingInstructions) : self
    {
        $this->initialized['handlingInstructions'] = true;
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }
    /**
     * Special Instructions text
     *
     * @return string|null
     */
    public function getSpecialInstructions() : ?string
    {
        return $this->specialInstructions;
    }
    /**
     * Special Instructions text
     *
     * @param string|null $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(?string $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Delivery Instructions text
     *
     * @return string|null
     */
    public function getDeliveryInstructions() : ?string
    {
        return $this->deliveryInstructions;
    }
    /**
     * Delivery Instructions text
     *
     * @param string|null $deliveryInstructions
     *
     * @return self
     */
    public function setDeliveryInstructions(?string $deliveryInstructions) : self
    {
        $this->initialized['deliveryInstructions'] = true;
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }
}