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
     * @var string
     */
    protected $shipmentNumber;
    /**
     * The retrieval key for the stored BOL.
     *
     * @var string
     */
    protected $bOLID;
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
     * The retrieval key for the stored BOL.
     *
     * @return string
     */
    public function getBOLID() : string
    {
        return $this->bOLID;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @param string $bOLID
     *
     * @return self
     */
    public function setBOLID(string $bOLID) : self
    {
        $this->initialized['bOLID'] = true;
        $this->bOLID = $bOLID;
        return $this;
    }
}