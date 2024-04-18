<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestPickupDateInfo extends \ArrayObject
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
    * Pickup location's local close time.
    - User provided Close Time must be later than the Earliest Allowed Customer Close Time.
    - Earliest Allowed Customer Close Time is defined by UPS pickup operation system.
    - CloseTime minus ReadyTime must be greater than the LeadTime.
    - LeadTime is determined by UPS pickup operation system. LeadTime is the minimum amount of time UPS requires between customer's request for a pickup and driver arriving at the location for the pickup.
    
    Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    
    *
    * @var string
    */
    protected $closeTime;
    /**
    * Pickup location's local ready time. 
    ReadyTime means the time when your shipment(s) can be ready for UPS to pick up. 
    - User provided ReadyTime must be earlier than CallByTime. 
    - CallByTime is determined by UPS pickup operation system. CallByTime is the Latest time a Customer can call UPS or self-serve on UPS.com and complete a Pickup Request and UPS can still make the Pickup service request. 
    - If ReadyTime is earlier than current local time, UPS uses the current local time as the ReadyTime.  Format: HHmm
    Hour: 0-23
    Minute: 0-59
    *
    * @var string
    */
    protected $readyTime;
    /**
    * Local pickup date of the location. Format: yyyyMMdd
    - yyyy = Year Appliable
    - MM = 01–12
    - dd = 01–31
    
    *
    * @var string
    */
    protected $pickupDate;
    /**
    * Pickup location's local close time.
    - User provided Close Time must be later than the Earliest Allowed Customer Close Time.
    - Earliest Allowed Customer Close Time is defined by UPS pickup operation system.
    - CloseTime minus ReadyTime must be greater than the LeadTime.
    - LeadTime is determined by UPS pickup operation system. LeadTime is the minimum amount of time UPS requires between customer's request for a pickup and driver arriving at the location for the pickup.
    
    Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    
    *
    * @return string
    */
    public function getCloseTime() : string
    {
        return $this->closeTime;
    }
    /**
    * Pickup location's local close time.
    - User provided Close Time must be later than the Earliest Allowed Customer Close Time.
    - Earliest Allowed Customer Close Time is defined by UPS pickup operation system.
    - CloseTime minus ReadyTime must be greater than the LeadTime.
    - LeadTime is determined by UPS pickup operation system. LeadTime is the minimum amount of time UPS requires between customer's request for a pickup and driver arriving at the location for the pickup.
    
    Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    
    *
    * @param string $closeTime
    *
    * @return self
    */
    public function setCloseTime(string $closeTime) : self
    {
        $this->initialized['closeTime'] = true;
        $this->closeTime = $closeTime;
        return $this;
    }
    /**
    * Pickup location's local ready time. 
    ReadyTime means the time when your shipment(s) can be ready for UPS to pick up. 
    - User provided ReadyTime must be earlier than CallByTime. 
    - CallByTime is determined by UPS pickup operation system. CallByTime is the Latest time a Customer can call UPS or self-serve on UPS.com and complete a Pickup Request and UPS can still make the Pickup service request. 
    - If ReadyTime is earlier than current local time, UPS uses the current local time as the ReadyTime.  Format: HHmm
    Hour: 0-23
    Minute: 0-59
    *
    * @return string
    */
    public function getReadyTime() : string
    {
        return $this->readyTime;
    }
    /**
    * Pickup location's local ready time. 
    ReadyTime means the time when your shipment(s) can be ready for UPS to pick up. 
    - User provided ReadyTime must be earlier than CallByTime. 
    - CallByTime is determined by UPS pickup operation system. CallByTime is the Latest time a Customer can call UPS or self-serve on UPS.com and complete a Pickup Request and UPS can still make the Pickup service request. 
    - If ReadyTime is earlier than current local time, UPS uses the current local time as the ReadyTime.  Format: HHmm
    Hour: 0-23
    Minute: 0-59
    *
    * @param string $readyTime
    *
    * @return self
    */
    public function setReadyTime(string $readyTime) : self
    {
        $this->initialized['readyTime'] = true;
        $this->readyTime = $readyTime;
        return $this;
    }
    /**
    * Local pickup date of the location. Format: yyyyMMdd
    - yyyy = Year Appliable
    - MM = 01–12
    - dd = 01–31
    
    *
    * @return string
    */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
    * Local pickup date of the location. Format: yyyyMMdd
    - yyyy = Year Appliable
    - MM = 01–12
    - dd = 01–31
    
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
}