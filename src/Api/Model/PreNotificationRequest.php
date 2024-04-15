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
     * @var PreNotificationRequestRequest|null
     */
    protected $request;
    /**
     * Shipment Container
     *
     * @var PreNotificationRequestShipment|null
     */
    protected $shipment;
    /**
     * Request Container
     *
     * @return PreNotificationRequestRequest|null
     */
    public function getRequest() : ?PreNotificationRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container
     *
     * @param PreNotificationRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?PreNotificationRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipment Container
     *
     * @return PreNotificationRequestShipment|null
     */
    public function getShipment() : ?PreNotificationRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Shipment Container
     *
     * @param PreNotificationRequestShipment|null $shipment
     *
     * @return self
     */
    public function setShipment(?PreNotificationRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}