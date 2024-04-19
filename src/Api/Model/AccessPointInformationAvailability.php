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
     * @var AvailabilityShippingAvailability
     */
    protected $shippingAvailability;
    /**
     * Holds status of DCR/DCO availability.
     *
     * @var AvailabilityDCRAvailability
     */
    protected $dCRAvailability;
    /**
     * Holds status of shipping availability.
     *
     * @return AvailabilityShippingAvailability
     */
    public function getShippingAvailability() : AvailabilityShippingAvailability
    {
        return $this->shippingAvailability;
    }
    /**
     * Holds status of shipping availability.
     *
     * @param AvailabilityShippingAvailability $shippingAvailability
     *
     * @return self
     */
    public function setShippingAvailability(AvailabilityShippingAvailability $shippingAvailability) : self
    {
        $this->initialized['shippingAvailability'] = true;
        $this->shippingAvailability = $shippingAvailability;
        return $this;
    }
    /**
     * Holds status of DCR/DCO availability.
     *
     * @return AvailabilityDCRAvailability
     */
    public function getDCRAvailability() : AvailabilityDCRAvailability
    {
        return $this->dCRAvailability;
    }
    /**
     * Holds status of DCR/DCO availability.
     *
     * @param AvailabilityDCRAvailability $dCRAvailability
     *
     * @return self
     */
    public function setDCRAvailability(AvailabilityDCRAvailability $dCRAvailability) : self
    {
        $this->initialized['dCRAvailability'] = true;
        $this->dCRAvailability = $dCRAvailability;
        return $this;
    }
}