<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformationAvailability extends \ArrayObject
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
     * Holds status of shipping availability.
     *
     * @var AvailabilityShippingAvailability|null
     */
    protected $shippingAvailability;
    /**
     * Holds status of DCR/DCO�availability.
     *
     * @var AvailabilityDCRAvailability|null
     */
    protected $dCRAvailability;
    /**
     * Holds status of shipping availability.
     *
     * @return AvailabilityShippingAvailability|null
     */
    public function getShippingAvailability() : ?AvailabilityShippingAvailability
    {
        return $this->shippingAvailability;
    }
    /**
     * Holds status of shipping availability.
     *
     * @param AvailabilityShippingAvailability|null $shippingAvailability
     *
     * @return self
     */
    public function setShippingAvailability(?AvailabilityShippingAvailability $shippingAvailability) : self
    {
        $this->initialized['shippingAvailability'] = true;
        $this->shippingAvailability = $shippingAvailability;
        return $this;
    }
    /**
     * Holds status of DCR/DCO�availability.
     *
     * @return AvailabilityDCRAvailability|null
     */
    public function getDCRAvailability() : ?AvailabilityDCRAvailability
    {
        return $this->dCRAvailability;
    }
    /**
     * Holds status of DCR/DCO�availability.
     *
     * @param AvailabilityDCRAvailability|null $dCRAvailability
     *
     * @return self
     */
    public function setDCRAvailability(?AvailabilityDCRAvailability $dCRAvailability) : self
    {
        $this->initialized['dCRAvailability'] = true;
        $this->dCRAvailability = $dCRAvailability;
        return $this;
    }
}