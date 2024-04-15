<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipmentServiceOptionsDeliveryOptions extends \ArrayObject
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
     * The presence of the tag CallBeforeDeliveryIndicator indicates that the shipment is going to be delivered after calling the consignee.
     *
     * @var string|null
     */
    protected $callBeforeDeliveryIndicator;
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @var string|null
     */
    protected $holidayDeliveryIndicator;
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @var string|null
     */
    protected $insideDeliveryIndicator;
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @var string|null
     */
    protected $residentialDeliveryIndicator;
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @var string|null
     */
    protected $weekendDeliveryIndicator;
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @var string|null
     */
    protected $liftGateRequiredIndicator;
    /**
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @var string|null
     */
    protected $limitedAccessDeliveryIndicator;
    /**
     * The presence of the tag CallBeforeDeliveryIndicator indicates that the shipment is going to be delivered after calling the consignee.
     *
     * @return string|null
     */
    public function getCallBeforeDeliveryIndicator() : ?string
    {
        return $this->callBeforeDeliveryIndicator;
    }
    /**
     * The presence of the tag CallBeforeDeliveryIndicator indicates that the shipment is going to be delivered after calling the consignee.
     *
     * @param string|null $callBeforeDeliveryIndicator
     *
     * @return self
     */
    public function setCallBeforeDeliveryIndicator(?string $callBeforeDeliveryIndicator) : self
    {
        $this->initialized['callBeforeDeliveryIndicator'] = true;
        $this->callBeforeDeliveryIndicator = $callBeforeDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @return string|null
     */
    public function getHolidayDeliveryIndicator() : ?string
    {
        return $this->holidayDeliveryIndicator;
    }
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @param string|null $holidayDeliveryIndicator
     *
     * @return self
     */
    public function setHolidayDeliveryIndicator(?string $holidayDeliveryIndicator) : self
    {
        $this->initialized['holidayDeliveryIndicator'] = true;
        $this->holidayDeliveryIndicator = $holidayDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @return string|null
     */
    public function getInsideDeliveryIndicator() : ?string
    {
        return $this->insideDeliveryIndicator;
    }
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @param string|null $insideDeliveryIndicator
     *
     * @return self
     */
    public function setInsideDeliveryIndicator(?string $insideDeliveryIndicator) : self
    {
        $this->initialized['insideDeliveryIndicator'] = true;
        $this->insideDeliveryIndicator = $insideDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @return string|null
     */
    public function getResidentialDeliveryIndicator() : ?string
    {
        return $this->residentialDeliveryIndicator;
    }
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @param string|null $residentialDeliveryIndicator
     *
     * @return self
     */
    public function setResidentialDeliveryIndicator(?string $residentialDeliveryIndicator) : self
    {
        $this->initialized['residentialDeliveryIndicator'] = true;
        $this->residentialDeliveryIndicator = $residentialDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @return string|null
     */
    public function getWeekendDeliveryIndicator() : ?string
    {
        return $this->weekendDeliveryIndicator;
    }
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @param string|null $weekendDeliveryIndicator
     *
     * @return self
     */
    public function setWeekendDeliveryIndicator(?string $weekendDeliveryIndicator) : self
    {
        $this->initialized['weekendDeliveryIndicator'] = true;
        $this->weekendDeliveryIndicator = $weekendDeliveryIndicator;
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
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @return string|null
     */
    public function getLimitedAccessDeliveryIndicator() : ?string
    {
        return $this->limitedAccessDeliveryIndicator;
    }
    /**
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @param string|null $limitedAccessDeliveryIndicator
     *
     * @return self
     */
    public function setLimitedAccessDeliveryIndicator(?string $limitedAccessDeliveryIndicator) : self
    {
        $this->initialized['limitedAccessDeliveryIndicator'] = true;
        $this->limitedAccessDeliveryIndicator = $limitedAccessDeliveryIndicator;
        return $this;
    }
}