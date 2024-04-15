<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentExistingShipmentID extends \ArrayObject
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
     * The PRO Number assigned to the shipment.
     *
     * @var string|null
     */
    protected $shipmentNumber;
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @var ExistingShipmentIDConfirmationNumber|null
    */
    protected $confirmationNumber;
    /**
     * The PRO Number assigned to the shipment.
     *
     * @return string|null
     */
    public function getShipmentNumber() : ?string
    {
        return $this->shipmentNumber;
    }
    /**
     * The PRO Number assigned to the shipment.
     *
     * @param string|null $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(?string $shipmentNumber) : self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @return ExistingShipmentIDConfirmationNumber|null
    */
    public function getConfirmationNumber() : ?ExistingShipmentIDConfirmationNumber
    {
        return $this->confirmationNumber;
    }
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @param ExistingShipmentIDConfirmationNumber|null $confirmationNumber
    *
    * @return self
    */
    public function setConfirmationNumber(?ExistingShipmentIDConfirmationNumber $confirmationNumber) : self
    {
        $this->initialized['confirmationNumber'] = true;
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }
}