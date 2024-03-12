<?php

namespace ShipStream\Ups\Api\Model;

class FREIGHTRATEResponseWrapper extends \ArrayObject
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
     * Freight Rate Response Container.
     *
     * @var FreightRateResponse
     */
    protected $freightRateResponse;
    /**
     * Freight Rate Response Container.
     *
     * @return FreightRateResponse
     */
    public function getFreightRateResponse() : FreightRateResponse
    {
        return $this->freightRateResponse;
    }
    /**
     * Freight Rate Response Container.
     *
     * @param FreightRateResponse $freightRateResponse
     *
     * @return self
     */
    public function setFreightRateResponse(FreightRateResponse $freightRateResponse) : self
    {
        $this->initialized['freightRateResponse'] = true;
        $this->freightRateResponse = $freightRateResponse;
        return $this;
    }
}