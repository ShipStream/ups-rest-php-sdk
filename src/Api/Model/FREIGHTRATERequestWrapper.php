<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTRATERequestWrapper extends \ArrayObject
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
     * Freight Rate Request Container.
     *
     * @var FreightRateRequest|null
     */
    protected $freightRateRequest;
    /**
     * Freight Rate Request Container.
     *
     * @return FreightRateRequest|null
     */
    public function getFreightRateRequest() : ?FreightRateRequest
    {
        return $this->freightRateRequest;
    }
    /**
     * Freight Rate Request Container.
     *
     * @param FreightRateRequest|null $freightRateRequest
     *
     * @return self
     */
    public function setFreightRateRequest(?FreightRateRequest $freightRateRequest) : self
    {
        $this->initialized['freightRateRequest'] = true;
        $this->freightRateRequest = $freightRateRequest;
        return $this;
    }
}