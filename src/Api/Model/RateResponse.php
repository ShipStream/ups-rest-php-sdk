<?php

namespace ShipStream\Ups\Api\Model;

class RateResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var RateResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @var RateResponseRatedShipment[]
     */
    protected $ratedShipment;
    /**
     * Response Container.
     *
     * @return RateResponseResponse
     */
    public function getResponse() : RateResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param RateResponseResponse $response
     *
     * @return self
     */
    public function setResponse(RateResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return RateResponseRatedShipment[]
     */
    public function getRatedShipment() : array
    {
        return $this->ratedShipment;
    }
    /**
     * 
     *
     * @param RateResponseRatedShipment[] $ratedShipment
     *
     * @return self
     */
    public function setRatedShipment(array $ratedShipment) : self
    {
        $this->initialized['ratedShipment'] = true;
        $this->ratedShipment = $ratedShipment;
        return $this;
    }
}