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
     * @var RateResponseResponse|null
     */
    protected $response;
    /**
     * 
     *
     * @var list<RateResponseRatedShipment>|null
     */
    protected $ratedShipment;
    /**
     * Response Container.
     *
     * @return RateResponseResponse|null
     */
    public function getResponse() : ?RateResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param RateResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?RateResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<RateResponseRatedShipment>|null
     */
    public function getRatedShipment() : ?array
    {
        return $this->ratedShipment;
    }
    /**
     * 
     *
     * @param list<RateResponseRatedShipment>|null $ratedShipment
     *
     * @return self
     */
    public function setRatedShipment(?array $ratedShipment) : self
    {
        $this->initialized['ratedShipment'] = true;
        $this->ratedShipment = $ratedShipment;
        return $this;
    }
}