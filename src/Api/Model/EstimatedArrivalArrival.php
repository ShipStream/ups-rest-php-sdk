<?php

namespace ShipStream\Ups\Api\Model;

class EstimatedArrivalArrival extends \ArrayObject
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
     * Scheduled Local Delivery Date. Format: YYYYMMDD
     *
     * @var string|null
     */
    protected $date;
    /**
     * The time UPS will pick up the shipment. This is commit Time. Military Time Format HHMMSS or HHMM
     *
     * @var string|null
     */
    protected $time;
    /**
     * Scheduled Local Delivery Date. Format: YYYYMMDD
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Scheduled Local Delivery Date. Format: YYYYMMDD
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * The time UPS will pick up the shipment. This is commit Time. Military Time Format HHMMSS or HHMM
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * The time UPS will pick up the shipment. This is commit Time. Military Time Format HHMMSS or HHMM
     *
     * @param string|null $time
     *
     * @return self
     */
    public function setTime(?string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
}