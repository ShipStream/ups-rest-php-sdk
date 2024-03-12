<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentResponsePackageLevelResult extends \ArrayObject
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
     * The package's identification number
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Contains the status code tags.
     *
     * @var PackageLevelResultStatus
     */
    protected $status;
    /**
     * The package's identification number
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * The package's identification number
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
     * Contains the status code tags.
     *
     * @return PackageLevelResultStatus
     */
    public function getStatus() : PackageLevelResultStatus
    {
        return $this->status;
    }
    /**
     * Contains the status code tags.
     *
     * @param PackageLevelResultStatus $status
     *
     * @return self
     */
    public function setStatus(PackageLevelResultStatus $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}