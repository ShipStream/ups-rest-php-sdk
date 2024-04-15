<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTSHIPRequestWrapper extends \ArrayObject
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
     * 
     *
     * @var FreightShipRequest|null
     */
    protected $freightShipRequest;
    /**
     * 
     *
     * @return FreightShipRequest|null
     */
    public function getFreightShipRequest() : ?FreightShipRequest
    {
        return $this->freightShipRequest;
    }
    /**
     * 
     *
     * @param FreightShipRequest|null $freightShipRequest
     *
     * @return self
     */
    public function setFreightShipRequest(?FreightShipRequest $freightShipRequest) : self
    {
        $this->initialized['freightShipRequest'] = true;
        $this->freightShipRequest = $freightShipRequest;
        return $this;
    }
}