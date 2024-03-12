<?php

namespace ShipStream\Ups\Api\Model;

class FreightCancelPickupRequest extends \ArrayObject
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
     * Request container.
     *
     * @var FreightCancelPickupRequestRequest
     */
    protected $request;
    /**
     * Confirmation number of the pickup ground freight shipment to cancel.
     *
     * @var string
     */
    protected $pickupRequestConfirmationNumber;
    /**
     * Request container.
     *
     * @return FreightCancelPickupRequestRequest
     */
    public function getRequest() : FreightCancelPickupRequestRequest
    {
        return $this->request;
    }
    /**
     * Request container.
     *
     * @param FreightCancelPickupRequestRequest $request
     *
     * @return self
     */
    public function setRequest(FreightCancelPickupRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Confirmation number of the pickup ground freight shipment to cancel.
     *
     * @return string
     */
    public function getPickupRequestConfirmationNumber() : string
    {
        return $this->pickupRequestConfirmationNumber;
    }
    /**
     * Confirmation number of the pickup ground freight shipment to cancel.
     *
     * @param string $pickupRequestConfirmationNumber
     *
     * @return self
     */
    public function setPickupRequestConfirmationNumber(string $pickupRequestConfirmationNumber) : self
    {
        $this->initialized['pickupRequestConfirmationNumber'] = true;
        $this->pickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
        return $this;
    }
}