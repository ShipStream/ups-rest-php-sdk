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
     * @var string
     */
    protected $callBeforeDeliveryIndicator;
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @var string
     */
    protected $holidayDeliveryIndicator;
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @var string
     */
    protected $insideDeliveryIndicator;
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @var string
     */
    protected $residentialDeliveryIndicator;
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @var string
     */
    protected $weekendDeliveryIndicator;
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @var string
     */
    protected $liftGateRequiredIndicator;
    /**
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @var string
     */
    protected $limitedAccessDeliveryIndicator;
    /**
     * The presence of the tag CallBeforeDeliveryIndicator indicates that the shipment is going to be delivered after calling the consignee.
     *
     * @return string
     */
    public function getCallBeforeDeliveryIndicator() : string
    {
        return $this->callBeforeDeliveryIndicator;
    }
    /**
     * The presence of the tag CallBeforeDeliveryIndicator indicates that the shipment is going to be delivered after calling the consignee.
     *
     * @param string $callBeforeDeliveryIndicator
     *
     * @return self
     */
    public function setCallBeforeDeliveryIndicator(string $callBeforeDeliveryIndicator) : self
    {
        $this->initialized['callBeforeDeliveryIndicator'] = true;
        $this->callBeforeDeliveryIndicator = $callBeforeDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @return string
     */
    public function getHolidayDeliveryIndicator() : string
    {
        return $this->holidayDeliveryIndicator;
    }
    /**
     * The presence of the tag HolidayDeliveryIndicator indicates that the shipment is going to be delivered on a holiday.
     *
     * @param string $holidayDeliveryIndicator
     *
     * @return self
     */
    public function setHolidayDeliveryIndicator(string $holidayDeliveryIndicator) : self
    {
        $this->initialized['holidayDeliveryIndicator'] = true;
        $this->holidayDeliveryIndicator = $holidayDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @return string
     */
    public function getInsideDeliveryIndicator() : string
    {
        return $this->insideDeliveryIndicator;
    }
    /**
     * The presence of the tag InsideDeliveryIndicator indicates that the shipment requires an inside delivery.
     *
     * @param string $insideDeliveryIndicator
     *
     * @return self
     */
    public function setInsideDeliveryIndicator(string $insideDeliveryIndicator) : self
    {
        $this->initialized['insideDeliveryIndicator'] = true;
        $this->insideDeliveryIndicator = $insideDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @return string
     */
    public function getResidentialDeliveryIndicator() : string
    {
        return $this->residentialDeliveryIndicator;
    }
    /**
     * The presence of the tag ResidentialDeliveryIndicator indicates that the shipment requires a residential delivery.
     *
     * @param string $residentialDeliveryIndicator
     *
     * @return self
     */
    public function setResidentialDeliveryIndicator(string $residentialDeliveryIndicator) : self
    {
        $this->initialized['residentialDeliveryIndicator'] = true;
        $this->residentialDeliveryIndicator = $residentialDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @return string
     */
    public function getWeekendDeliveryIndicator() : string
    {
        return $this->weekendDeliveryIndicator;
    }
    /**
     * The presence of the tag WeekendDeliveryIndicator indicates that the shipment is going to be delivered on a weekend.
     *
     * @param string $weekendDeliveryIndicator
     *
     * @return self
     */
    public function setWeekendDeliveryIndicator(string $weekendDeliveryIndicator) : self
    {
        $this->initialized['weekendDeliveryIndicator'] = true;
        $this->weekendDeliveryIndicator = $weekendDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @return string
     */
    public function getLiftGateRequiredIndicator() : string
    {
        return $this->liftGateRequiredIndicator;
    }
    /**
     * The presence of the tag LiftGateRequiredIndicator indicates that the shipment requires a lift gate.
     *
     * @param string $liftGateRequiredIndicator
     *
     * @return self
     */
    public function setLiftGateRequiredIndicator(string $liftGateRequiredIndicator) : self
    {
        $this->initialized['liftGateRequiredIndicator'] = true;
        $this->liftGateRequiredIndicator = $liftGateRequiredIndicator;
        return $this;
    }
    /**
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @return string
     */
    public function getLimitedAccessDeliveryIndicator() : string
    {
        return $this->limitedAccessDeliveryIndicator;
    }
    /**
     * The presence of the tag LimitedAccessDeliveryIndicator indicates that there is limited access for delivery.
     *
     * @param string $limitedAccessDeliveryIndicator
     *
     * @return self
     */
    public function setLimitedAccessDeliveryIndicator(string $limitedAccessDeliveryIndicator) : self
    {
        $this->initialized['limitedAccessDeliveryIndicator'] = true;
        $this->limitedAccessDeliveryIndicator = $limitedAccessDeliveryIndicator;
        return $this;
    }
}