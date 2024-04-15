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
     * @var FreightShipRequestRequest|null
     */
    protected $request;
    /**
     * Shipment Container.
     *
     * @var FreightShipRequestShipment|null
     */
    protected $shipment;
    /**
     * Freight Ship Request Container.
     *
     * @return FreightShipRequestRequest|null
     */
    public function getRequest() : ?FreightShipRequestRequest
    {
        return $this->request;
    }
    /**
     * Freight Ship Request Container.
     *
     * @param FreightShipRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?FreightShipRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipment Container.
     *
     * @return FreightShipRequestShipment|null
     */
    public function getShipment() : ?FreightShipRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Shipment Container.
     *
     * @param FreightShipRequestShipment|null $shipment
     *
     * @return self
     */
    public function setShipment(?FreightShipRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}