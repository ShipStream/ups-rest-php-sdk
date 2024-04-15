<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipmentServiceOptionsPickupOptions extends \ArrayObject
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
     * The presence of the tag HolidayPickupIndicator indicates that the shipment requires a holiday pickup.
     *
     * @var string|null
     */
    protected $holidayPickupIndicator;
    /**
     * The presence of the tag InsidePickupIndicator indicates that the shipment requires an inside pickup.
     *
     * @var string|null
     */
    protected $insidePickupIndicator;
    /**
     * The presence of the tag ResidentialPickupIndicator indicates that the shipment requires a residential pickup.
     *
     * @var string|null
     */
    protected $residentialPickupIndicator;
    /**
     * The presence of the tag WeekendPickupIndicator indicates that the shipment requires a weekend pickup.
     *
     * @var string|null
     */
    protected $weekendPickupIndicator;
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @var string|null
     */
    protected $liftGateRequiredIndicator;
    /**
     * The presence of the tag LimitedAccessPickupIndicator indicates that there is limited access for pickups.
     *
     * @var string|null
     */
    protected $limitedAccessPickupIndicator;
    /**
     * The presence of the tag HolidayPickupIndicator indicates that the shipment requires a holiday pickup.
     *
     * @return string|null
     */
    public function getHolidayPickupIndicator() : ?string
    {
        return $this->holidayPickupIndicator;
    }
    /**
     * The presence of the tag HolidayPickupIndicator indicates that the shipment requires a holiday pickup.
     *
     * @param string|null $holidayPickupIndicator
     *
     * @return self
     */
    public function setHolidayPickupIndicator(?string $holidayPickupIndicator) : self
    {
        $this->initialized['holidayPickupIndicator'] = true;
        $this->holidayPickupIndicator = $holidayPickupIndicator;
        return $this;
    }
    /**
     * The presence of the tag InsidePickupIndicator indicates that the shipment requires an inside pickup.
     *
     * @return string|null
     */
    public function getInsidePickupIndicator() : ?string
    {
        return $this->insidePickupIndicator;
    }
    /**
     * The presence of the tag InsidePickupIndicator indicates that the shipment requires an inside pickup.
     *
     * @param string|null $insidePickupIndicator
     *
     * @return self
     */
    public function setInsidePickupIndicator(?string $insidePickupIndicator) : self
    {
        $this->initialized['insidePickupIndicator'] = true;
        $this->insidePickupIndicator = $insidePickupIndicator;
        return $this;
    }
    /**
     * The presence of the tag ResidentialPickupIndicator indicates that the shipment requires a residential pickup.
     *
     * @return string|null
     */
    public function getResidentialPickupIndicator() : ?string
    {
        return $this->residentialPickupIndicator;
    }
    /**
     * The presence of the tag ResidentialPickupIndicator indicates that the shipment requires a residential pickup.
     *
     * @param string|null $residentialPickupIndicator
     *
     * @return self
     */
    public function setResidentialPickupIndicator(?string $residentialPickupIndicator) : self
    {
        $this->initialized['residentialPickupIndicator'] = true;
        $this->residentialPickupIndicator = $residentialPickupIndicator;
        return $this;
    }
    /**
     * The presence of the tag WeekendPickupIndicator indicates that the shipment requires a weekend pickup.
     *
     * @return string|null
     */
    public function getWeekendPickupIndicator() : ?string
    {
        return $this->weekendPickupIndicator;
    }
    /**
     * The presence of the tag WeekendPickupIndicator indicates that the shipment requires a weekend pickup.
     *
     * @param string|null $weekendPickupIndicator
     *
     * @return self
     */
    public function setWeekendPickupIndicator(?string $weekendPickupIndicator) : self
    {
        $this->initialized['weekendPickupIndicator'] = true;
        $this->weekendPickupIndicator = $weekendPickupIndicator;
        return $this;
    }
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @return string|null
     */
    public function getLiftGateRequiredIndicator() : ?string
    {
        return $this->liftGateRequiredIndicator;
    }
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @param string|null $liftGateRequiredIndicator
     *
     * @return self
     */
    public function setLiftGateRequiredIndicator(?string $liftGateRequiredIndicator) : self
    {
        $this->initialized['liftGateRequiredIndicator'] = true;
        $this->liftGateRequiredIndicator = $liftGateRequiredIndicator;
        return $this;
    }
    /**
     * The presence of the tag LimitedAccessPickupIndicator indicates that there is limited access for pickups.
     *
     * @return string|null
     */
    public function getLimitedAccessPickupIndicator() : ?string
    {
        return $this->limitedAccessPickupIndicator;
    }
    /**
     * The presence of the tag LimitedAccessPickupIndicator indicates that there is limited access for pickups.
     *
     * @param string|null $limitedAccessPickupIndicator
     *
     * @return self
     */
    public function setLimitedAccessPickupIndicator(?string $limitedAccessPickupIndicator) : self
    {
        $this->initialized['limitedAccessPickupIndicator'] = true;
        $this->limitedAccessPickupIndicator = $limitedAccessPickupIndicator;
        return $this;
    }
}