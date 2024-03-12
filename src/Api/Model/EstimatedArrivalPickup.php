<?php

namespace ShipStream\Ups\Api\Model;

class EstimatedArrivalPickup extends \ArrayObject
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
     * The date UPS picks up the package from the origin. Format: YYYYMMDD. In the event the Pickup date differs from the Ship On Date, provided in the request, a warning message will be returned.
     *
     * @var string
     */
    protected $date;
    /**
     * The time UPS will pick up the shipment. Military Time Format HHMMSS or HHMM
     *
     * @var string
     */
    protected $time;
    /**
     * The date UPS picks up the package from the origin. Format: YYYYMMDD. In the event the Pickup date differs from the Ship On Date, provided in the request, a warning message will be returned.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * The date UPS picks up the package from the origin. Format: YYYYMMDD. In the event the Pickup date differs from the Ship On Date, provided in the request, a warning message will be returned.
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
     * The time UPS will pick up the shipment. Military Time Format HHMMSS or HHMM
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * The time UPS will pick up the shipment. Military Time Format HHMMSS or HHMM
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