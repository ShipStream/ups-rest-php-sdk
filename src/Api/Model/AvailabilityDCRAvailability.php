<?php

namespace ShipStream\Ups\Api\Model;

class AvailabilityDCRAvailability extends \ArrayObject
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
     * Presence or absence indicator. Presence means the location is available for DCR/DCO.
     *
     * @var string
     */
    protected $availableIndicator;
    /**
     * Container to hold shipping unavailable reason.
     *
     * @var DCRAvailabilityUnavailableReason
     */
    protected $unavailableReason;
    /**
     * Presence or absence indicator. Presence means the location is available for DCR/DCO.
     *
     * @return string
     */
    public function getAvailableIndicator() : string
    {
        return $this->availableIndicator;
    }
    /**
     * Presence or absence indicator. Presence means the location is available for DCR/DCO.
     *
     * @param string $availableIndicator
     *
     * @return self
     */
    public function setAvailableIndicator(string $availableIndicator) : self
    {
        $this->initialized['availableIndicator'] = true;
        $this->availableIndicator = $availableIndicator;
        return $this;
    }
    /**
     * Container to hold shipping unavailable reason.
     *
     * @return DCRAvailabilityUnavailableReason
     */
    public function getUnavailableReason() : DCRAvailabilityUnavailableReason
    {
        return $this->unavailableReason;
    }
    /**
     * Container to hold shipping unavailable reason.
     *
     * @param DCRAvailabilityUnavailableReason $unavailableReason
     *
     * @return self
     */
    public function setUnavailableReason(DCRAvailabilityUnavailableReason $unavailableReason) : self
    {
        $this->initialized['unavailableReason'] = true;
        $this->unavailableReason = $unavailableReason;
        return $this;
    }
}