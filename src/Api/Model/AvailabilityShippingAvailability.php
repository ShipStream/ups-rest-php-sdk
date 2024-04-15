<?php

namespace ShipStream\Ups\Api\Model;

class AvailabilityShippingAvailability extends \ArrayObject
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
     * Presence or absence indicator. Presence means the location is available for shipping.
     *
     * @var string|null
     */
    protected $availableIndicator;
    /**
     * Container to hold shipping unavailable reason.
     *
     * @var ShippingAvailabilityUnavailableReason|null
     */
    protected $unavailableReason;
    /**
     * Presence or absence indicator. Presence means the location is available for shipping.
     *
     * @return string|null
     */
    public function getAvailableIndicator() : ?string
    {
        return $this->availableIndicator;
    }
    /**
     * Presence or absence indicator. Presence means the location is available for shipping.
     *
     * @param string|null $availableIndicator
     *
     * @return self
     */
    public function setAvailableIndicator(?string $availableIndicator) : self
    {
        $this->initialized['availableIndicator'] = true;
        $this->availableIndicator = $availableIndicator;
        return $this;
    }
    /**
     * Container to hold shipping unavailable reason.
     *
     * @return ShippingAvailabilityUnavailableReason|null
     */
    public function getUnavailableReason() : ?ShippingAvailabilityUnavailableReason
    {
        return $this->unavailableReason;
    }
    /**
     * Container to hold shipping unavailable reason.
     *
     * @param ShippingAvailabilityUnavailableReason|null $unavailableReason
     *
     * @return self
     */
    public function setUnavailableReason(?ShippingAvailabilityUnavailableReason $unavailableReason) : self
    {
        $this->initialized['unavailableReason'] = true;
        $this->unavailableReason = $unavailableReason;
        return $this;
    }
}