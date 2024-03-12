<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseTrackingCandidate extends \ArrayObject
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
     * Packaging Tracking Number  Only supported for the web small package shipment so only supported 18 digit
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Destination postal code candidate
     *
     * @var string
     */
    protected $destinationPostalCode;
    /**
     * Destination country or territory code candidate, like US = USA, CA = Canada  Must be valid ups country or territory code
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * A range of time the package was picked up.
     *
     * @var TrackingCandidatePickupDateRange
     */
    protected $pickupDateRange;
    /**
     * Packaging Tracking Number  Only supported for the web small package shipment so only supported 18 digit
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Packaging Tracking Number  Only supported for the web small package shipment so only supported 18 digit
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
     * Destination postal code candidate
     *
     * @return string
     */
    public function getDestinationPostalCode() : string
    {
        return $this->destinationPostalCode;
    }
    /**
     * Destination postal code candidate
     *
     * @param string $destinationPostalCode
     *
     * @return self
     */
    public function setDestinationPostalCode(string $destinationPostalCode) : self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * Destination country or territory code candidate, like US = USA, CA = Canada  Must be valid ups country or territory code
     *
     * @return string
     */
    public function getDestinationCountryCode() : string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Destination country or territory code candidate, like US = USA, CA = Canada  Must be valid ups country or territory code
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * A range of time the package was picked up.
     *
     * @return TrackingCandidatePickupDateRange
     */
    public function getPickupDateRange() : TrackingCandidatePickupDateRange
    {
        return $this->pickupDateRange;
    }
    /**
     * A range of time the package was picked up.
     *
     * @param TrackingCandidatePickupDateRange $pickupDateRange
     *
     * @return self
     */
    public function setPickupDateRange(TrackingCandidatePickupDateRange $pickupDateRange) : self
    {
        $this->initialized['pickupDateRange'] = true;
        $this->pickupDateRange = $pickupDateRange;
        return $this;
    }
}