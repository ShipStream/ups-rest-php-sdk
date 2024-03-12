<?php

namespace ShipStream\Ups\Api\Model;

class FreightOptionsShipmentServiceOptions extends \ArrayObject
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
     * Presence indicates OriginLiftGateRequiredIndicator is present.  Conditionally requirements. Must not be present if DropOffAtUPSFacilityIndicator is true
     *
     * @var string
     */
    protected $originLiftGateIndicator;
    /**
     * Identifies service center location information for Origin List of UPS Facilities.
     *
     * @var string
     */
    protected $dropoffAtUPSFacilityIndicator;
    /**
     * Identifies service center location information for Destination of UPS Facilities.
     *
     * @var string
     */
    protected $holdForPickupIndicator;
    /**
     * Presence indicates OriginLiftGateRequiredIndicator is present.  Conditionally requirements. Must not be present if DropOffAtUPSFacilityIndicator is true
     *
     * @return string
     */
    public function getOriginLiftGateIndicator() : string
    {
        return $this->originLiftGateIndicator;
    }
    /**
     * Presence indicates OriginLiftGateRequiredIndicator is present.  Conditionally requirements. Must not be present if DropOffAtUPSFacilityIndicator is true
     *
     * @param string $originLiftGateIndicator
     *
     * @return self
     */
    public function setOriginLiftGateIndicator(string $originLiftGateIndicator) : self
    {
        $this->initialized['originLiftGateIndicator'] = true;
        $this->originLiftGateIndicator = $originLiftGateIndicator;
        return $this;
    }
    /**
     * Identifies service center location information for Origin List of UPS Facilities.
     *
     * @return string
     */
    public function getDropoffAtUPSFacilityIndicator() : string
    {
        return $this->dropoffAtUPSFacilityIndicator;
    }
    /**
     * Identifies service center location information for Origin List of UPS Facilities.
     *
     * @param string $dropoffAtUPSFacilityIndicator
     *
     * @return self
     */
    public function setDropoffAtUPSFacilityIndicator(string $dropoffAtUPSFacilityIndicator) : self
    {
        $this->initialized['dropoffAtUPSFacilityIndicator'] = true;
        $this->dropoffAtUPSFacilityIndicator = $dropoffAtUPSFacilityIndicator;
        return $this;
    }
    /**
     * Identifies service center location information for Destination of UPS Facilities.
     *
     * @return string
     */
    public function getHoldForPickupIndicator() : string
    {
        return $this->holdForPickupIndicator;
    }
    /**
     * Identifies service center location information for Destination of UPS Facilities.
     *
     * @param string $holdForPickupIndicator
     *
     * @return self
     */
    public function setHoldForPickupIndicator(string $holdForPickupIndicator) : self
    {
        $this->initialized['holdForPickupIndicator'] = true;
        $this->holdForPickupIndicator = $holdForPickupIndicator;
        return $this;
    }
}