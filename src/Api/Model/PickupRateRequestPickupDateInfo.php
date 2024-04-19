<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateRequestPickupDateInfo extends \ArrayObject
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
    * The latest local close time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @var string
    */
    protected $closeTime;
    /**
    * The earliest local ready Time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @var string
    */
    protected $readyTime;
    /**
    * The specific local pickup date. Format: yyyyMMdd
    - yyyy = Year Applicable
    - MM = 01-12
    - dd = 01-31
    *
    * @var string
    */
    protected $pickupDate;
    /**
    * The latest local close time. Format: HHmm
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
    * The latest local close time. Format: HHmm
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
    * The earliest local ready Time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
    *
    * @return string
    */
    public function getReadyTime() : string
    {
        return $this->readyTime;
    }
    /**
    * The earliest local ready Time. Format: HHmm
    - Hour: 0-23
    - Minute: 0-59
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
    * The specific local pickup date. Format: yyyyMMdd
    - yyyy = Year Applicable
    - MM = 01-12
    - dd = 01-31
    *
    * @return string
    */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
    * The specific local pickup date. Format: yyyyMMdd
    - yyyy = Year Applicable
    - MM = 01-12
    - dd = 01-31
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