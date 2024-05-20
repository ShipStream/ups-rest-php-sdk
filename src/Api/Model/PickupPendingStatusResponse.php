<?php

namespace ShipStream\Ups\Api\Model;

class PickupPendingStatusResponse extends \ArrayObject
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
     * @var PickupPendingStatusResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @var list<PickupPendingStatusResponsePendingStatus>
     */
    protected $pendingStatus;
    /**
     * Response Container.
     *
     * @return PickupPendingStatusResponseResponse
     */
    public function getResponse() : PickupPendingStatusResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param PickupPendingStatusResponseResponse $response
     *
     * @return self
     */
    public function setResponse(PickupPendingStatusResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupPendingStatusResponsePendingStatus>
     */
    public function getPendingStatus() : array
    {
        return $this->pendingStatus;
    }
    /**
     * 
     *
     * @param list<PickupPendingStatusResponsePendingStatus> $pendingStatus
     *
     * @return self
     */
    public function setPendingStatus(array $pendingStatus) : self
    {
        $this->initialized['pendingStatus'] = true;
        $this->pendingStatus = $pendingStatus;
        return $this;
    }
}