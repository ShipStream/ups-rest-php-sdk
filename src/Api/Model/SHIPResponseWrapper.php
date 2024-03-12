<?php

namespace ShipStream\Ups\Api\Model;

class SHIPResponseWrapper extends \ArrayObject
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
     * Shipment Response.
     *
     * @var ShipmentResponse
     */
    protected $shipmentResponse;
    /**
     * Shipment Response.
     *
     * @return ShipmentResponse
     */
    public function getShipmentResponse() : ShipmentResponse
    {
        return $this->shipmentResponse;
    }
    /**
     * Shipment Response.
     *
     * @param ShipmentResponse $shipmentResponse
     *
     * @return self
     */
    public function setShipmentResponse(ShipmentResponse $shipmentResponse) : self
    {
        $this->initialized['shipmentResponse'] = true;
        $this->shipmentResponse = $shipmentResponse;
        return $this;
    }
}