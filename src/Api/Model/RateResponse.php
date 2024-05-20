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
     * RatedShipment Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RateResponseRatedShipment>
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
     * RatedShipment Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RateResponseRatedShipment>
     */
    public function getRatedShipment() : array
    {
        return $this->ratedShipment;
    }
    /**
     * RatedShipment Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RateResponseRatedShipment> $ratedShipment
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