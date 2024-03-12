<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipRequest extends \ArrayObject
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
     * Freight Ship Request Container.
     *
     * @var FreightShipRequestRequest
     */
    protected $request;
    /**
     * Shipment Container.
     *
     * @var FreightShipRequestShipment
     */
    protected $shipment;
    /**
     * Freight Ship Request Container.
     *
     * @return FreightShipRequestRequest
     */
    public function getRequest() : FreightShipRequestRequest
    {
        return $this->request;
    }
    /**
     * Freight Ship Request Container.
     *
     * @param FreightShipRequestRequest $request
     *
     * @return self
     */
    public function setRequest(FreightShipRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipment Container.
     *
     * @return FreightShipRequestShipment
     */
    public function getShipment() : FreightShipRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Shipment Container.
     *
     * @param FreightShipRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(FreightShipRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}