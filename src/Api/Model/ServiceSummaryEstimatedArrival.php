<?php

namespace ShipStream\Ups\Api\Model;

class ServiceSummaryEstimatedArrival extends \ArrayObject
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
     * Container for the Time-In-Transit arrival information by service. This is the most accurate delivery information available via the Rating API and will reflect changes in delivery schedules due to peak business seasons or holidays.
     *
     * @var EstimatedArrivalArrival|null
     */
    protected $arrival;
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @var string|null
     */
    protected $businessDaysInTransit;
    /**
     * The date and pick up time container.
     *
     * @var EstimatedArrivalPickup|null
     */
    protected $pickup;
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @var string|null
     */
    protected $dayOfWeek;
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @var string|null
     */
    protected $customerCenterCutoff;
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @var string|null
     */
    protected $delayCount;
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @var string|null
     */
    protected $holidayCount;
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @var string|null
     */
    protected $restDays;
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @var string|null
     */
    protected $totalTransitDays;
    /**
     * Container for the Time-In-Transit arrival information by service. This is the most accurate delivery information available via the Rating API and will reflect changes in delivery schedules due to peak business seasons or holidays.
     *
     * @return EstimatedArrivalArrival|null
     */
    public function getArrival() : ?EstimatedArrivalArrival
    {
        return $this->arrival;
    }
    /**
     * Container for the Time-In-Transit arrival information by service. This is the most accurate delivery information available via the Rating API and will reflect changes in delivery schedules due to peak business seasons or holidays.
     *
     * @param EstimatedArrivalArrival|null $arrival
     *
     * @return self
     */
    public function setArrival(?EstimatedArrivalArrival $arrival) : self
    {
        $this->initialized['arrival'] = true;
        $this->arrival = $arrival;
        return $this;
    }
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @return string|null
     */
    public function getBusinessDaysInTransit() : ?string
    {
        return $this->businessDaysInTransit;
    }
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @param string|null $businessDaysInTransit
     *
     * @return self
     */
    public function setBusinessDaysInTransit(?string $businessDaysInTransit) : self
    {
        $this->initialized['businessDaysInTransit'] = true;
        $this->businessDaysInTransit = $businessDaysInTransit;
        return $this;
    }
    /**
     * The date and pick up time container.
     *
     * @return EstimatedArrivalPickup|null
     */
    public function getPickup() : ?EstimatedArrivalPickup
    {
        return $this->pickup;
    }
    /**
     * The date and pick up time container.
     *
     * @param EstimatedArrivalPickup|null $pickup
     *
     * @return self
     */
    public function setPickup(?EstimatedArrivalPickup $pickup) : self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @return string|null
     */
    public function getDayOfWeek() : ?string
    {
        return $this->dayOfWeek;
    }
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @param string|null $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(?string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @return string|null
     */
    public function getCustomerCenterCutoff() : ?string
    {
        return $this->customerCenterCutoff;
    }
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @param string|null $customerCenterCutoff
     *
     * @return self
     */
    public function setCustomerCenterCutoff(?string $customerCenterCutoff) : self
    {
        $this->initialized['customerCenterCutoff'] = true;
        $this->customerCenterCutoff = $customerCenterCutoff;
        return $this;
    }
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @return string|null
     */
    public function getDelayCount() : ?string
    {
        return $this->delayCount;
    }
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @param string|null $delayCount
     *
     * @return self
     */
    public function setDelayCount(?string $delayCount) : self
    {
        $this->initialized['delayCount'] = true;
        $this->delayCount = $delayCount;
        return $this;
    }
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @return string|null
     */
    public function getHolidayCount() : ?string
    {
        return $this->holidayCount;
    }
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @param string|null $holidayCount
     *
     * @return self
     */
    public function setHolidayCount(?string $holidayCount) : self
    {
        $this->initialized['holidayCount'] = true;
        $this->holidayCount = $holidayCount;
        return $this;
    }
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @return string|null
     */
    public function getRestDays() : ?string
    {
        return $this->restDays;
    }
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @param string|null $restDays
     *
     * @return self
     */
    public function setRestDays(?string $restDays) : self
    {
        $this->initialized['restDays'] = true;
        $this->restDays = $restDays;
        return $this;
    }
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @return string|null
     */
    public function getTotalTransitDays() : ?string
    {
        return $this->totalTransitDays;
    }
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @param string|null $totalTransitDays
     *
     * @return self
     */
    public function setTotalTransitDays(?string $totalTransitDays) : self
    {
        $this->initialized['totalTransitDays'] = true;
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }
}