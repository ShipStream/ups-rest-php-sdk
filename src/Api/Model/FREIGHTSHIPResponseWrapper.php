<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTSHIPResponseWrapper extends \ArrayObject
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
     * Freight Ship Response Container.
     *
     * @var FreightShipResponse|null
     */
    protected $freightShipResponse;
    /**
     * Freight Ship Response Container.
     *
     * @return FreightShipResponse|null
     */
    public function getFreightShipResponse() : ?FreightShipResponse
    {
        return $this->freightShipResponse;
    }
    /**
     * Freight Ship Response Container.
     *
     * @param FreightShipResponse|null $freightShipResponse
     *
     * @return self
     */
    public function setFreightShipResponse(?FreightShipResponse $freightShipResponse) : self
    {
        $this->initialized['freightShipResponse'] = true;
        $this->freightShipResponse = $freightShipResponse;
        return $this;
    }
}