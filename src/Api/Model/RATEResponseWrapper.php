<?php

namespace ShipStream\Ups\Api\Model;

class RATEResponseWrapper extends \ArrayObject
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
     * Rate Response Container.
     *
     * @var RateResponse
     */
    protected $rateResponse;
    /**
     * Rate Response Container.
     *
     * @return RateResponse
     */
    public function getRateResponse() : RateResponse
    {
        return $this->rateResponse;
    }
    /**
     * Rate Response Container.
     *
     * @param RateResponse $rateResponse
     *
     * @return self
     */
    public function setRateResponse(RateResponse $rateResponse) : self
    {
        $this->initialized['rateResponse'] = true;
        $this->rateResponse = $rateResponse;
        return $this;
    }
}