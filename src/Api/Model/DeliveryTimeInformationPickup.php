<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryTimeInformationPickup extends \ArrayObject
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
     * Shipment Date; The Pickup date is a Shipment Date and it is a required input field.  The user is allowed to query up to 35 days into the past and 60 days into the future. Format: YYYYMMDD  If a date is not provided, it will be defaulted to the current system date.
     *
     * @var string
     */
    protected $date;
    /**
     * Reflects the time the package is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  Military Time Format HHMMSS or HHMM.   Invalid pickup time will not be validated.
     *
     * @var string
     */
    protected $time;
    /**
     * Shipment Date; The Pickup date is a Shipment Date and it is a required input field.  The user is allowed to query up to 35 days into the past and 60 days into the future. Format: YYYYMMDD  If a date is not provided, it will be defaulted to the current system date.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Shipment Date; The Pickup date is a Shipment Date and it is a required input field.  The user is allowed to query up to 35 days into the past and 60 days into the future. Format: YYYYMMDD  If a date is not provided, it will be defaulted to the current system date.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Reflects the time the package is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  Military Time Format HHMMSS or HHMM.   Invalid pickup time will not be validated.
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Reflects the time the package is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  Military Time Format HHMMSS or HHMM.   Invalid pickup time will not be validated.
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}