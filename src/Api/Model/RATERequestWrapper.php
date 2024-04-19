<?php

namespace ShipStream\Ups\Api\Model;

class RATERequestWrapper extends \ArrayObject
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
     * Rate Request container.
     *
     * @var RateRequest
     */
    protected $rateRequest;
    /**
     * Rate Request container.
     *
     * @return RateRequest
     */
    public function getRateRequest() : RateRequest
    {
        return $this->rateRequest;
    }
    /**
     * Rate Request container.
     *
     * @param RateRequest $rateRequest
     *
     * @return self
     */
    public function setRateRequest(RateRequest $rateRequest) : self
    {
        $this->initialized['rateRequest'] = true;
        $this->rateRequest = $rateRequest;
        return $this;
    }
}