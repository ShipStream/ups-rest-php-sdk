<?php

namespace ShipStream\Ups\Api\Model;

class VOIDSHIPMENTRequestWrapper extends \ArrayObject
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
     * Void Shipment Request Container
     *
     * @var VoidShipmentRequest
     */
    protected $voidShipmentRequest;
    /**
     * Void Shipment Request Container
     *
     * @return VoidShipmentRequest
     */
    public function getVoidShipmentRequest() : VoidShipmentRequest
    {
        return $this->voidShipmentRequest;
    }
    /**
     * Void Shipment Request Container
     *
     * @param VoidShipmentRequest $voidShipmentRequest
     *
     * @return self
     */
    public function setVoidShipmentRequest(VoidShipmentRequest $voidShipmentRequest) : self
    {
        $this->initialized['voidShipmentRequest'] = true;
        $this->voidShipmentRequest = $voidShipmentRequest;
        return $this;
    }
}