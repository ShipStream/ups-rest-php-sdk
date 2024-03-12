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
     * @var string
     */
    protected $shipmentNumber;
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @var ExistingShipmentIDConfirmationNumber
    */
    protected $confirmationNumber;
    /**
     * The PRO Number assigned to the shipment.
     *
     * @return string
     */
    public function getShipmentNumber() : string
    {
        return $this->shipmentNumber;
    }
    /**
     * The PRO Number assigned to the shipment.
     *
     * @param string $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(string $shipmentNumber) : self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @return ExistingShipmentIDConfirmationNumber
    */
    public function getConfirmationNumber() : ExistingShipmentIDConfirmationNumber
    {
        return $this->confirmationNumber;
    }
    /**
    * Container for the existing shipment pickup confirmation number.
    Required only for Shipment Updates.
    *
    * @param ExistingShipmentIDConfirmationNumber $confirmationNumber
    *
    * @return self
    */
    public function setConfirmationNumber(ExistingShipmentIDConfirmationNumber $confirmationNumber) : self
    {
        $this->initialized['confirmationNumber'] = true;
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }
}