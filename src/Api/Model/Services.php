<?php

namespace ShipStream\Ups\Api\Model;

class Services extends \ArrayObject
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
    * Service level code 
    
    Valid domestic service codes: "1DMS","1DAS","1DM","1DA","1DP","2DM","2DA","3DS","GND". 
    
     Valid International service codes (not a complete list) ,"01","02","03","05","08","09","10","11","18","19","20","21","22","23","24","25","26","28","29","33","68". 
    *
    * @var string
    */
    protected $serviceLevel;
    /**
     * Service name. Examples are: UPS Next Day Air, UPS Ground, UPS Expedited, UPS Worldwide Express Freight
     *
     * @var string
     */
    protected $serviceLevelDescription;
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
    *
    * @var string
    */
    protected $shipDate;
    /**
    * Scheduled delivery date. 
    
    Valid format: YYYY-MM-DD
    *
    * @var string
    */
    protected $deliveryDate;
    /**
    * Scheduled commit time. 
    
    For international shipments the value always come back from SE (OPSYS data) but for domestic, value may be used from NRF commit time.  
    
    Valid format: HH:MM:SS
    *
    * @var string
    */
    protected $commitTime;
    /**
    * Scheduled Delivery Time, value may be later then commit time. 
    
    Valid format: HH:MM:SS
    *
    * @var string
    */
    protected $deliveryTime;
    /**
    * Three character scheduled delivery day of week. 
    
    Valid values: "MON","TUE","WED","THU","FRI", "SAT"
    *
    * @var string
    */
    protected $deliveryDayOfWeek;
    /**
    * Returns a "1" if the requested shipped on date was changed. This data is available only for international transactions. 
    
    When this flag is set, WWDTDisclaimer.getNextDayDisclaimer method could be called to return the next day disclaimer message.
    *
    * @var string
    */
    protected $nextDayPickupIndicator;
    /**
    * Returns "1" if Saturday Pickup is available for an extra charge otherwise it will return "0". 
    
    When this flag is set, WWDTDisclaimer.getSaturdayPickupDisclaimer method could be called to return the Saturday pickup extra charge message
    *
    * @var string
    */
    protected $saturdayPickupIndicator;
    /**
    * Delivery date of Saturday Delivery 
    
    Valid Format: YYYY-MM-DD
    *
    * @var string
    */
    protected $saturdayDeliveryDate;
    /**
    * Delivery time of Saturday deliver 
    
    Valid format: HH:MM:SS
    *
    * @var string
    */
    protected $saturdayDeliveryTime;
    /**
     * Service remarks text. The contents of this field will represent text that the back end application/function needs to display to clarify the time in transit calculation.
     *
     * @var string
     */
    protected $serviceRemarksText;
    /**
    * Return "1" Guaranteed, or "0" Not Guaranteed based on below conditions: 
    
    If the ship date, delivery date, and system date are not within a defined peak date range, and a value for service guarantee is available in SE (OPSYS data) that will be returned. 
    
    If the ship date or delivery date or system date are within a defined peak date range and the service is within the list of services to remove guarantees for, "0" wil be returned.
    *
    * @var string
    */
    protected $guaranteeIndicator;
    /**
    * Available for International requests. Number of calendar days from origin location to destination location.  TotalTransitDays = BusinessTransitDays + RestDaysCount + HolidayCount. 
    
    Defaults to 0.
    *
    * @var int
    */
    protected $totalTransitDays;
    /**
     * Returns the number of UPS business days from origin location to destination location.
     *
     * @var int
     */
    protected $businessTransitDays;
    /**
    * Returns the number of rest days encountered at the origin location.  this data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @var int
    */
    protected $restDaysCount;
    /**
    * Returns the number of holidays encountered at the origin and destination location, if it effects the time and transit.  This data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @var int
    */
    protected $holidayCount;
    /**
    * Returns the number of delay needed for customs encounter at the origin or destination location.  This data is available only for international transactions.  
    
    Defaults to 0.
    *
    * @var int
    */
    protected $delayCount;
    /**
    * Planned pickup date. 
    
    Note: This value may not equal the shipped on value requested.  This could happen when the requested shipped on date is a holiday or for locations needing 24 hour notice before a pickup could be made.
    *
    * @var string
    */
    protected $pickupDate;
    /**
     * Latest possible pickup time. This data is available only for international transactions. If the package was not actually picked by UPS before this time, the services will not meet the guarantee commitment.
     *
     * @var string
     */
    protected $pickupTime;
    /**
     * Latest time a customer can contact UPS CST to be notified for requesting a pickup. This data is available only for international transactions. If customer does not notify UPS for a pickup before this time, the services will not meet the guarantee commitment.
     *
     * @var string
     */
    protected $cstccutoffTime;
    /**
     * Returns the date proof of delivery information would be available.  This data is available only for international transactions.
     *
     * @var string
     */
    protected $poddate;
    /**
     * Returns the number of days proof of delivery information will be available.  This data is available only for international transactions.
     *
     * @var int
     */
    protected $poddays;
    /**
    * Service level code 
    
    Valid domestic service codes: "1DMS","1DAS","1DM","1DA","1DP","2DM","2DA","3DS","GND". 
    
     Valid International service codes (not a complete list) ,"01","02","03","05","08","09","10","11","18","19","20","21","22","23","24","25","26","28","29","33","68". 
    *
    * @return string
    */
    public function getServiceLevel() : string
    {
        return $this->serviceLevel;
    }
    /**
    * Service level code 
    
    Valid domestic service codes: "1DMS","1DAS","1DM","1DA","1DP","2DM","2DA","3DS","GND". 
    
     Valid International service codes (not a complete list) ,"01","02","03","05","08","09","10","11","18","19","20","21","22","23","24","25","26","28","29","33","68". 
    *
    * @param string $serviceLevel
    *
    * @return self
    */
    public function setServiceLevel(string $serviceLevel) : self
    {
        $this->initialized['serviceLevel'] = true;
        $this->serviceLevel = $serviceLevel;
        return $this;
    }
    /**
     * Service name. Examples are: UPS Next Day Air, UPS Ground, UPS Expedited, UPS Worldwide Express Freight
     *
     * @return string
     */
    public function getServiceLevelDescription() : string
    {
        return $this->serviceLevelDescription;
    }
    /**
     * Service name. Examples are: UPS Next Day Air, UPS Ground, UPS Expedited, UPS Worldwide Express Freight
     *
     * @param string $serviceLevelDescription
     *
     * @return self
     */
    public function setServiceLevelDescription(string $serviceLevelDescription) : self
    {
        $this->initialized['serviceLevelDescription'] = true;
        $this->serviceLevelDescription = $serviceLevelDescription;
        return $this;
    }
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
    *
    * @return string
    */
    public function getShipDate() : string
    {
        return $this->shipDate;
    }
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
    *
    * @param string $shipDate
    *
    * @return self
    */
    public function setShipDate(string $shipDate) : self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
    * Scheduled delivery date. 
    
    Valid format: YYYY-MM-DD
    *
    * @return string
    */
    public function getDeliveryDate() : string
    {
        return $this->deliveryDate;
    }
    /**
    * Scheduled delivery date. 
    
    Valid format: YYYY-MM-DD
    *
    * @param string $deliveryDate
    *
    * @return self
    */
    public function setDeliveryDate(string $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
    * Scheduled commit time. 
    
    For international shipments the value always come back from SE (OPSYS data) but for domestic, value may be used from NRF commit time.  
    
    Valid format: HH:MM:SS
    *
    * @return string
    */
    public function getCommitTime() : string
    {
        return $this->commitTime;
    }
    /**
    * Scheduled commit time. 
    
    For international shipments the value always come back from SE (OPSYS data) but for domestic, value may be used from NRF commit time.  
    
    Valid format: HH:MM:SS
    *
    * @param string $commitTime
    *
    * @return self
    */
    public function setCommitTime(string $commitTime) : self
    {
        $this->initialized['commitTime'] = true;
        $this->commitTime = $commitTime;
        return $this;
    }
    /**
    * Scheduled Delivery Time, value may be later then commit time. 
    
    Valid format: HH:MM:SS
    *
    * @return string
    */
    public function getDeliveryTime() : string
    {
        return $this->deliveryTime;
    }
    /**
    * Scheduled Delivery Time, value may be later then commit time. 
    
    Valid format: HH:MM:SS
    *
    * @param string $deliveryTime
    *
    * @return self
    */
    public function setDeliveryTime(string $deliveryTime) : self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;
        return $this;
    }
    /**
    * Three character scheduled delivery day of week. 
    
    Valid values: "MON","TUE","WED","THU","FRI", "SAT"
    *
    * @return string
    */
    public function getDeliveryDayOfWeek() : string
    {
        return $this->deliveryDayOfWeek;
    }
    /**
    * Three character scheduled delivery day of week. 
    
    Valid values: "MON","TUE","WED","THU","FRI", "SAT"
    *
    * @param string $deliveryDayOfWeek
    *
    * @return self
    */
    public function setDeliveryDayOfWeek(string $deliveryDayOfWeek) : self
    {
        $this->initialized['deliveryDayOfWeek'] = true;
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    /**
    * Returns a "1" if the requested shipped on date was changed. This data is available only for international transactions. 
    
    When this flag is set, WWDTDisclaimer.getNextDayDisclaimer method could be called to return the next day disclaimer message.
    *
    * @return string
    */
    public function getNextDayPickupIndicator() : string
    {
        return $this->nextDayPickupIndicator;
    }
    /**
    * Returns a "1" if the requested shipped on date was changed. This data is available only for international transactions. 
    
    When this flag is set, WWDTDisclaimer.getNextDayDisclaimer method could be called to return the next day disclaimer message.
    *
    * @param string $nextDayPickupIndicator
    *
    * @return self
    */
    public function setNextDayPickupIndicator(string $nextDayPickupIndicator) : self
    {
        $this->initialized['nextDayPickupIndicator'] = true;
        $this->nextDayPickupIndicator = $nextDayPickupIndicator;
        return $this;
    }
    /**
    * Returns "1" if Saturday Pickup is available for an extra charge otherwise it will return "0". 
    
    When this flag is set, WWDTDisclaimer.getSaturdayPickupDisclaimer method could be called to return the Saturday pickup extra charge message
    *
    * @return string
    */
    public function getSaturdayPickupIndicator() : string
    {
        return $this->saturdayPickupIndicator;
    }
    /**
    * Returns "1" if Saturday Pickup is available for an extra charge otherwise it will return "0". 
    
    When this flag is set, WWDTDisclaimer.getSaturdayPickupDisclaimer method could be called to return the Saturday pickup extra charge message
    *
    * @param string $saturdayPickupIndicator
    *
    * @return self
    */
    public function setSaturdayPickupIndicator(string $saturdayPickupIndicator) : self
    {
        $this->initialized['saturdayPickupIndicator'] = true;
        $this->saturdayPickupIndicator = $saturdayPickupIndicator;
        return $this;
    }
    /**
    * Delivery date of Saturday Delivery 
    
    Valid Format: YYYY-MM-DD
    *
    * @return string
    */
    public function getSaturdayDeliveryDate() : string
    {
        return $this->saturdayDeliveryDate;
    }
    /**
    * Delivery date of Saturday Delivery 
    
    Valid Format: YYYY-MM-DD
    *
    * @param string $saturdayDeliveryDate
    *
    * @return self
    */
    public function setSaturdayDeliveryDate(string $saturdayDeliveryDate) : self
    {
        $this->initialized['saturdayDeliveryDate'] = true;
        $this->saturdayDeliveryDate = $saturdayDeliveryDate;
        return $this;
    }
    /**
    * Delivery time of Saturday deliver 
    
    Valid format: HH:MM:SS
    *
    * @return string
    */
    public function getSaturdayDeliveryTime() : string
    {
        return $this->saturdayDeliveryTime;
    }
    /**
    * Delivery time of Saturday deliver 
    
    Valid format: HH:MM:SS
    *
    * @param string $saturdayDeliveryTime
    *
    * @return self
    */
    public function setSaturdayDeliveryTime(string $saturdayDeliveryTime) : self
    {
        $this->initialized['saturdayDeliveryTime'] = true;
        $this->saturdayDeliveryTime = $saturdayDeliveryTime;
        return $this;
    }
    /**
     * Service remarks text. The contents of this field will represent text that the back end application/function needs to display to clarify the time in transit calculation.
     *
     * @return string
     */
    public function getServiceRemarksText() : string
    {
        return $this->serviceRemarksText;
    }
    /**
     * Service remarks text. The contents of this field will represent text that the back end application/function needs to display to clarify the time in transit calculation.
     *
     * @param string $serviceRemarksText
     *
     * @return self
     */
    public function setServiceRemarksText(string $serviceRemarksText) : self
    {
        $this->initialized['serviceRemarksText'] = true;
        $this->serviceRemarksText = $serviceRemarksText;
        return $this;
    }
    /**
    * Return "1" Guaranteed, or "0" Not Guaranteed based on below conditions: 
    
    If the ship date, delivery date, and system date are not within a defined peak date range, and a value for service guarantee is available in SE (OPSYS data) that will be returned. 
    
    If the ship date or delivery date or system date are within a defined peak date range and the service is within the list of services to remove guarantees for, "0" wil be returned.
    *
    * @return string
    */
    public function getGuaranteeIndicator() : string
    {
        return $this->guaranteeIndicator;
    }
    /**
    * Return "1" Guaranteed, or "0" Not Guaranteed based on below conditions: 
    
    If the ship date, delivery date, and system date are not within a defined peak date range, and a value for service guarantee is available in SE (OPSYS data) that will be returned. 
    
    If the ship date or delivery date or system date are within a defined peak date range and the service is within the list of services to remove guarantees for, "0" wil be returned.
    *
    * @param string $guaranteeIndicator
    *
    * @return self
    */
    public function setGuaranteeIndicator(string $guaranteeIndicator) : self
    {
        $this->initialized['guaranteeIndicator'] = true;
        $this->guaranteeIndicator = $guaranteeIndicator;
        return $this;
    }
    /**
    * Available for International requests. Number of calendar days from origin location to destination location.  TotalTransitDays = BusinessTransitDays + RestDaysCount + HolidayCount. 
    
    Defaults to 0.
    *
    * @return int
    */
    public function getTotalTransitDays() : int
    {
        return $this->totalTransitDays;
    }
    /**
    * Available for International requests. Number of calendar days from origin location to destination location.  TotalTransitDays = BusinessTransitDays + RestDaysCount + HolidayCount. 
    
    Defaults to 0.
    *
    * @param int $totalTransitDays
    *
    * @return self
    */
    public function setTotalTransitDays(int $totalTransitDays) : self
    {
        $this->initialized['totalTransitDays'] = true;
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }
    /**
     * Returns the number of UPS business days from origin location to destination location.
     *
     * @return int
     */
    public function getBusinessTransitDays() : int
    {
        return $this->businessTransitDays;
    }
    /**
     * Returns the number of UPS business days from origin location to destination location.
     *
     * @param int $businessTransitDays
     *
     * @return self
     */
    public function setBusinessTransitDays(int $businessTransitDays) : self
    {
        $this->initialized['businessTransitDays'] = true;
        $this->businessTransitDays = $businessTransitDays;
        return $this;
    }
    /**
    * Returns the number of rest days encountered at the origin location.  this data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @return int
    */
    public function getRestDaysCount() : int
    {
        return $this->restDaysCount;
    }
    /**
    * Returns the number of rest days encountered at the origin location.  this data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @param int $restDaysCount
    *
    * @return self
    */
    public function setRestDaysCount(int $restDaysCount) : self
    {
        $this->initialized['restDaysCount'] = true;
        $this->restDaysCount = $restDaysCount;
        return $this;
    }
    /**
    * Returns the number of holidays encountered at the origin and destination location, if it effects the time and transit.  This data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @return int
    */
    public function getHolidayCount() : int
    {
        return $this->holidayCount;
    }
    /**
    * Returns the number of holidays encountered at the origin and destination location, if it effects the time and transit.  This data is available only for international transactions. 
    
    Defaults to 0.
    *
    * @param int $holidayCount
    *
    * @return self
    */
    public function setHolidayCount(int $holidayCount) : self
    {
        $this->initialized['holidayCount'] = true;
        $this->holidayCount = $holidayCount;
        return $this;
    }
    /**
    * Returns the number of delay needed for customs encounter at the origin or destination location.  This data is available only for international transactions.  
    
    Defaults to 0.
    *
    * @return int
    */
    public function getDelayCount() : int
    {
        return $this->delayCount;
    }
    /**
    * Returns the number of delay needed for customs encounter at the origin or destination location.  This data is available only for international transactions.  
    
    Defaults to 0.
    *
    * @param int $delayCount
    *
    * @return self
    */
    public function setDelayCount(int $delayCount) : self
    {
        $this->initialized['delayCount'] = true;
        $this->delayCount = $delayCount;
        return $this;
    }
    /**
    * Planned pickup date. 
    
    Note: This value may not equal the shipped on value requested.  This could happen when the requested shipped on date is a holiday or for locations needing 24 hour notice before a pickup could be made.
    *
    * @return string
    */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
    * Planned pickup date. 
    
    Note: This value may not equal the shipped on value requested.  This could happen when the requested shipped on date is a holiday or for locations needing 24 hour notice before a pickup could be made.
    *
    * @param string $pickupDate
    *
    * @return self
    */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Latest possible pickup time. This data is available only for international transactions. If the package was not actually picked by UPS before this time, the services will not meet the guarantee commitment.
     *
     * @return string
     */
    public function getPickupTime() : string
    {
        return $this->pickupTime;
    }
    /**
     * Latest possible pickup time. This data is available only for international transactions. If the package was not actually picked by UPS before this time, the services will not meet the guarantee commitment.
     *
     * @param string $pickupTime
     *
     * @return self
     */
    public function setPickupTime(string $pickupTime) : self
    {
        $this->initialized['pickupTime'] = true;
        $this->pickupTime = $pickupTime;
        return $this;
    }
    /**
     * Latest time a customer can contact UPS CST to be notified for requesting a pickup. This data is available only for international transactions. If customer does not notify UPS for a pickup before this time, the services will not meet the guarantee commitment.
     *
     * @return string
     */
    public function getCstccutoffTime() : string
    {
        return $this->cstccutoffTime;
    }
    /**
     * Latest time a customer can contact UPS CST to be notified for requesting a pickup. This data is available only for international transactions. If customer does not notify UPS for a pickup before this time, the services will not meet the guarantee commitment.
     *
     * @param string $cstccutoffTime
     *
     * @return self
     */
    public function setCstccutoffTime(string $cstccutoffTime) : self
    {
        $this->initialized['cstccutoffTime'] = true;
        $this->cstccutoffTime = $cstccutoffTime;
        return $this;
    }
    /**
     * Returns the date proof of delivery information would be available.  This data is available only for international transactions.
     *
     * @return string
     */
    public function getPoddate() : string
    {
        return $this->poddate;
    }
    /**
     * Returns the date proof of delivery information would be available.  This data is available only for international transactions.
     *
     * @param string $poddate
     *
     * @return self
     */
    public function setPoddate(string $poddate) : self
    {
        $this->initialized['poddate'] = true;
        $this->poddate = $poddate;
        return $this;
    }
    /**
     * Returns the number of days proof of delivery information will be available.  This data is available only for international transactions.
     *
     * @return int
     */
    public function getPoddays() : int
    {
        return $this->poddays;
    }
    /**
     * Returns the number of days proof of delivery information will be available.  This data is available only for international transactions.
     *
     * @param int $poddays
     *
     * @return self
     */
    public function setPoddays(int $poddays) : self
    {
        $this->initialized['poddays'] = true;
        $this->poddays = $poddays;
        return $this;
    }
}