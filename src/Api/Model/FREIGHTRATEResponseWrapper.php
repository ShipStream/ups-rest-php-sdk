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
     * @var FreightRateResponse|null
     */
    protected $freightRateResponse;
    /**
     * Freight Rate Response Container.
     *
     * @return FreightRateResponse|null
     */
    public function getFreightRateResponse() : ?FreightRateResponse
    {
        return $this->freightRateResponse;
    }
    /**
     * Freight Rate Response Container.
     *
     * @param FreightRateResponse|null $freightRateResponse
     *
     * @return self
     */
    public function setFreightRateResponse(?FreightRateResponse $freightRateResponse) : self
    {
        $this->initialized['freightRateResponse'] = true;
        $this->freightRateResponse = $freightRateResponse;
        return $this;
    }
}