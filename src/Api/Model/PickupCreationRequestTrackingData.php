<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestTrackingData extends \ArrayObject
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
     * Tracking number for return shipment or forward shipment packages.  Tracking number(s) that have been previously used to pay for on-call pickup cannot be used again.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Tracking number for return shipment or forward shipment packages.  Tracking number(s) that have been previously used to pay for on-call pickup cannot be used again.
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Tracking number for return shipment or forward shipment packages.  Tracking number(s) that have been previously used to pay for on-call pickup cannot be used again.
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}