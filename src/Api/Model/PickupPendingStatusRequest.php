<?php

namespace ShipStream\Ups\Api\Model;

class PickupPendingStatusRequest extends \ArrayObject
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
     * Common element for all services.
     *
     * @var PickupPendingStatusRequestRequest|null
     */
    protected $request;
    /**
    * Specify the type of pending pickup.
    01 = On-Call Pickup
    *
    * @var string|null
    */
    protected $pickupType;
    /**
     * The specific account number belongs to the shipper
     *
     * @var string|null
     */
    protected $accountNumber;
    /**
     * Common element for all services.
     *
     * @return PickupPendingStatusRequestRequest|null
     */
    public function getRequest() : ?PickupPendingStatusRequestRequest
    {
        return $this->request;
    }
    /**
     * Common element for all services.
     *
     * @param PickupPendingStatusRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?PickupPendingStatusRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
    * Specify the type of pending pickup.
    01 = On-Call Pickup
    *
    * @return string|null
    */
    public function getPickupType() : ?string
    {
        return $this->pickupType;
    }
    /**
    * Specify the type of pending pickup.
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
     * The specific account number belongs to the shipper
     *
     * @return string|null
     */
    public function getAccountNumber() : ?string
    {
        return $this->accountNumber;
    }
    /**
     * The specific account number belongs to the shipper
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}