<?php

namespace ShipStream\Ups\Api\Model;

class VOIDSHIPMENTResponseWrapper extends \ArrayObject
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
     * Void Response Container.
     *
     * @var VoidShipmentResponse|null
     */
    protected $voidShipmentResponse;
    /**
     * Void Response Container.
     *
     * @return VoidShipmentResponse|null
     */
    public function getVoidShipmentResponse() : ?VoidShipmentResponse
    {
        return $this->voidShipmentResponse;
    }
    /**
     * Void Response Container.
     *
     * @param VoidShipmentResponse|null $voidShipmentResponse
     *
     * @return self
     */
    public function setVoidShipmentResponse(?VoidShipmentResponse $voidShipmentResponse) : self
    {
        $this->initialized['voidShipmentResponse'] = true;
        $this->voidShipmentResponse = $voidShipmentResponse;
        return $this;
    }
}