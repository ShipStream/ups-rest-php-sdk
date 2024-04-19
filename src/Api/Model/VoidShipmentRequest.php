<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentRequest extends \ArrayObject
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
     * @var VoidShipmentRequestRequest
     */
    protected $request;
    /**
     * The container for the Ship Void Request.
     *
     * @var VoidShipmentRequestVoidShipment
     */
    protected $voidShipment;
    /**
     * Request Container
     *
     * @return VoidShipmentRequestRequest
     */
    public function getRequest() : VoidShipmentRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container
     *
     * @param VoidShipmentRequestRequest $request
     *
     * @return self
     */
    public function setRequest(VoidShipmentRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * The container for the Ship Void Request.
     *
     * @return VoidShipmentRequestVoidShipment
     */
    public function getVoidShipment() : VoidShipmentRequestVoidShipment
    {
        return $this->voidShipment;
    }
    /**
     * The container for the Ship Void Request.
     *
     * @param VoidShipmentRequestVoidShipment $voidShipment
     *
     * @return self
     */
    public function setVoidShipment(VoidShipmentRequestVoidShipment $voidShipment) : self
    {
        $this->initialized['voidShipment'] = true;
        $this->voidShipment = $voidShipment;
        return $this;
    }
}