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
     * @var EstimatedArrivalArrival
     */
    protected $arrival;
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @var string
     */
    protected $businessDaysInTransit;
    /**
     * The date and pick up time container.
     *
     * @var EstimatedArrivalPickup
     */
    protected $pickup;
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @var string
     */
    protected $customerCenterCutoff;
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @var string
     */
    protected $delayCount;
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @var string
     */
    protected $holidayCount;
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @var string
     */
    protected $restDays;
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @var string
     */
    protected $totalTransitDays;
    /**
     * Container for the Time-In-Transit arrival information by service. This is the most accurate delivery information available via the Rating API and will reflect changes in delivery schedules due to peak business seasons or holidays.
     *
     * @return EstimatedArrivalArrival
     */
    public function getArrival() : EstimatedArrivalArrival
    {
        return $this->arrival;
    }
    /**
     * Container for the Time-In-Transit arrival information by service. This is the most accurate delivery information available via the Rating API and will reflect changes in delivery schedules due to peak business seasons or holidays.
     *
     * @param EstimatedArrivalArrival $arrival
     *
     * @return self
     */
    public function setArrival(EstimatedArrivalArrival $arrival) : self
    {
        $this->initialized['arrival'] = true;
        $this->arrival = $arrival;
        return $this;
    }
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @return string
     */
    public function getBusinessDaysInTransit() : string
    {
        return $this->businessDaysInTransit;
    }
    /**
     * Number of business days from Origin to Destination Locations.
     *
     * @param string $businessDaysInTransit
     *
     * @return self
     */
    public function setBusinessDaysInTransit(string $businessDaysInTransit) : self
    {
        $this->initialized['businessDaysInTransit'] = true;
        $this->businessDaysInTransit = $businessDaysInTransit;
        return $this;
    }
    /**
     * The date and pick up time container.
     *
     * @return EstimatedArrivalPickup
     */
    public function getPickup() : EstimatedArrivalPickup
    {
        return $this->pickup;
    }
    /**
     * The date and pick up time container.
     *
     * @param EstimatedArrivalPickup $pickup
     *
     * @return self
     */
    public function setPickup(EstimatedArrivalPickup $pickup) : self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @return string
     */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
     * Day of week for arrival. Valid values are: MONTUEWEDTHUFRISAT
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @return string
     */
    public function getCustomerCenterCutoff() : string
    {
        return $this->customerCenterCutoff;
    }
    /**
     * Customer Service call time. Returned for domestic as well as international requests.
     *
     * @param string $customerCenterCutoff
     *
     * @return self
     */
    public function setCustomerCenterCutoff(string $customerCenterCutoff) : self
    {
        $this->initialized['customerCenterCutoff'] = true;
        $this->customerCenterCutoff = $customerCenterCutoff;
        return $this;
    }
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @return string
     */
    public function getDelayCount() : string
    {
        return $this->delayCount;
    }
    /**
     * Number of days delayed at customs. Returned for International requests.
     *
     * @param string $delayCount
     *
     * @return self
     */
    public function setDelayCount(string $delayCount) : self
    {
        $this->initialized['delayCount'] = true;
        $this->delayCount = $delayCount;
        return $this;
    }
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @return string
     */
    public function getHolidayCount() : string
    {
        return $this->holidayCount;
    }
    /**
     * Number of National holidays during transit. Returned for International requests.
     *
     * @param string $holidayCount
     *
     * @return self
     */
    public function setHolidayCount(string $holidayCount) : self
    {
        $this->initialized['holidayCount'] = true;
        $this->holidayCount = $holidayCount;
        return $this;
    }
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @return string
     */
    public function getRestDays() : string
    {
        return $this->restDays;
    }
    /**
     * Number of rest days, i.e. non movement. Returned for International requests.
     *
     * @param string $restDays
     *
     * @return self
     */
    public function setRestDays(string $restDays) : self
    {
        $this->initialized['restDays'] = true;
        $this->restDays = $restDays;
        return $this;
    }
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @return string
     */
    public function getTotalTransitDays() : string
    {
        return $this->totalTransitDays;
    }
    /**
     * The total number of days in transit from one location to the next. Returned for International requests.
     *
     * @param string $totalTransitDays
     *
     * @return self
     */
    public function setTotalTransitDays(string $totalTransitDays) : self
    {
        $this->initialized['totalTransitDays'] = true;
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }
}