<?php

namespace ShipStream\Ups\Api\Model;

class PickupCancelResponse extends \ArrayObject
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
     * Response Container
     *
     * @var PickupCancelResponseResponse|null
     */
    protected $response;
    /**
    * The type of pickup that has been cancelled.
    01 = On-Call Pickup
    *
    * @var string|null
    */
    protected $pickupType;
    /**
     * The status of Smart Pickup that has been cancelled.
     *
     * @var PickupCancelResponseGWNStatus|null
     */
    protected $gWNStatus;
    /**
     * Response Container
     *
     * @return PickupCancelResponseResponse|null
     */
    public function getResponse() : ?PickupCancelResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container
     *
     * @param PickupCancelResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?PickupCancelResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
    * The type of pickup that has been cancelled.
    01 = On-Call Pickup
    *
    * @return string|null
    */
    public function getPickupType() : ?string
    {
        return $this->pickupType;
    }
    /**
    * The type of pickup that has been cancelled.
    01 = On-Call Pickup
    *
    * @param string|null $pickupType
    *
    * @return self
    */
    public function setPickupType(?string $pickupType) : self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
     * The status of Smart Pickup that has been cancelled.
     *
     * @return PickupCancelResponseGWNStatus|null
     */
    public function getGWNStatus() : ?PickupCancelResponseGWNStatus
    {
        return $this->gWNStatus;
    }
    /**
     * The status of Smart Pickup that has been cancelled.
     *
     * @param PickupCancelResponseGWNStatus|null $gWNStatus
     *
     * @return self
     */
    public function setGWNStatus(?PickupCancelResponseGWNStatus $gWNStatus) : self
    {
        $this->initialized['gWNStatus'] = true;
        $this->gWNStatus = $gWNStatus;
        return $this;
    }
}