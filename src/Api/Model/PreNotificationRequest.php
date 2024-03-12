<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationRequest extends \ArrayObject
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
     * Request Container
     *
     * @var PreNotificationRequestRequest
     */
    protected $request;
    /**
     * Shipment Container
     *
     * @var PreNotificationRequestShipment
     */
    protected $shipment;
    /**
     * Request Container
     *
     * @return PreNotificationRequestRequest
     */
    public function getRequest() : PreNotificationRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container
     *
     * @param PreNotificationRequestRequest $request
     *
     * @return self
     */
    public function setRequest(PreNotificationRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipment Container
     *
     * @return PreNotificationRequestShipment
     */
    public function getShipment() : PreNotificationRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Shipment Container
     *
     * @param PreNotificationRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(PreNotificationRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}