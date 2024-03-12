<?php

namespace ShipStream\Ups\Api\Model;

class SHIPRequestWrapper extends \ArrayObject
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
     * Shipment Request.
     *
     * @var ShipmentRequest
     */
    protected $shipmentRequest;
    /**
     * Shipment Request.
     *
     * @return ShipmentRequest
     */
    public function getShipmentRequest() : ShipmentRequest
    {
        return $this->shipmentRequest;
    }
    /**
     * Shipment Request.
     *
     * @param ShipmentRequest $shipmentRequest
     *
     * @return self
     */
    public function setShipmentRequest(ShipmentRequest $shipmentRequest) : self
    {
        $this->initialized['shipmentRequest'] = true;
        $this->shipmentRequest = $shipmentRequest;
        return $this;
    }
}