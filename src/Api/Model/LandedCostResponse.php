<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponse extends \ArrayObject
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
     * Every Landed Cost response must be based on a shipment.
     *
     * @var LandedCostResponseShipment
     */
    protected $shipment;
    /**
     * Every Landed Cost response must be based on a shipment.
     *
     * @return LandedCostResponseShipment
     */
    public function getShipment() : LandedCostResponseShipment
    {
        return $this->shipment;
    }
    /**
     * Every Landed Cost response must be based on a shipment.
     *
     * @param LandedCostResponseShipment $shipment
     *
     * @return self
     */
    public function setShipment(LandedCostResponseShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}