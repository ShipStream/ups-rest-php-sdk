<?php

namespace ShipStream\Ups\Api\Model;

class TrackResponse extends \ArrayObject
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
     * 
     *
     * @var list<Shipment>
     */
    protected $shipment;
    /**
     * 
     *
     * @return list<Shipment>
     */
    public function getShipment() : array
    {
        return $this->shipment;
    }
    /**
     * 
     *
     * @param list<Shipment> $shipment
     *
     * @return self
     */
    public function setShipment(array $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}