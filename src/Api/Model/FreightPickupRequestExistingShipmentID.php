<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestExistingShipmentID extends \ArrayObject
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
     * The retrieval key for the stored BOL.
     *
     * @var string|null
     */
    protected $bOLID;
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
     * The retrieval key for the stored BOL.
     *
     * @return string|null
     */
    public function getBOLID() : ?string
    {
        return $this->bOLID;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @param string|null $bOLID
     *
     * @return self
     */
    public function setBOLID(?string $bOLID) : self
    {
        $this->initialized['bOLID'] = true;
        $this->bOLID = $bOLID;
        return $this;
    }
}