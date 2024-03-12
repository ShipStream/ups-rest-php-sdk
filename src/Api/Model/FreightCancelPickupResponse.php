<?php

namespace ShipStream\Ups\Api\Model;

class FreightCancelPickupResponse extends \ArrayObject
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
     * Response container.
     *
     * @var FreightCancelPickupResponseResponse
     */
    protected $response;
    /**
     * Container which stores the response status
     *
     * @var FreightCancelStatus
     */
    protected $freightCancelStatus;
    /**
     * Response container.
     *
     * @return FreightCancelPickupResponseResponse
     */
    public function getResponse() : FreightCancelPickupResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param FreightCancelPickupResponseResponse $response
     *
     * @return self
     */
    public function setResponse(FreightCancelPickupResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Container which stores the response status
     *
     * @return FreightCancelStatus
     */
    public function getFreightCancelStatus() : FreightCancelStatus
    {
        return $this->freightCancelStatus;
    }
    /**
     * Container which stores the response status
     *
     * @param FreightCancelStatus $freightCancelStatus
     *
     * @return self
     */
    public function setFreightCancelStatus(FreightCancelStatus $freightCancelStatus) : self
    {
        $this->initialized['freightCancelStatus'] = true;
        $this->freightCancelStatus = $freightCancelStatus;
        return $this;
    }
}