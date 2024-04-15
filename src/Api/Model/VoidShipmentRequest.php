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
     * Request Container  N/A
     *
     * @var VoidShipmentRequestRequest|null
     */
    protected $request;
    /**
     * The container for the Ship Void Request.  N/A
     *
     * @var VoidShipmentRequestVoidShipment|null
     */
    protected $voidShipment;
    /**
     * Request Container  N/A
     *
     * @return VoidShipmentRequestRequest|null
     */
    public function getRequest() : ?VoidShipmentRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container  N/A
     *
     * @param VoidShipmentRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?VoidShipmentRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * The container for the Ship Void Request.  N/A
     *
     * @return VoidShipmentRequestVoidShipment|null
     */
    public function getVoidShipment() : ?VoidShipmentRequestVoidShipment
    {
        return $this->voidShipment;
    }
    /**
     * The container for the Ship Void Request.  N/A
     *
     * @param VoidShipmentRequestVoidShipment|null $voidShipment
     *
     * @return self
     */
    public function setVoidShipment(?VoidShipmentRequestVoidShipment $voidShipment) : self
    {
        $this->initialized['voidShipment'] = true;
        $this->voidShipment = $voidShipment;
        return $this;
    }
}