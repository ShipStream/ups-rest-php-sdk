<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestTrackingDataWithReferenceNumber extends \ArrayObject
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
     * Tracking number for shipment packages.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The reference number associated with the tracking number.
     *
     * @var list<string>
     */
    protected $referenceNumber;
    /**
     * Tracking number for shipment packages.
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Tracking number for shipment packages.
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
    /**
     * The reference number associated with the tracking number.
     *
     * @return list<string>
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * The reference number associated with the tracking number.
     *
     * @param list<string> $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
}