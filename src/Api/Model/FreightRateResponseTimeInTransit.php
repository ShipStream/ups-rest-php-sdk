<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponseTimeInTransit extends \ArrayObject
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
     * Number of days in transit.
     *
     * @var string
     */
    protected $daysInTransit;
    /**
     * Number of days in transit.
     *
     * @return string
     */
    public function getDaysInTransit() : string
    {
        return $this->daysInTransit;
    }
    /**
     * Number of days in transit.
     *
     * @param string $daysInTransit
     *
     * @return self
     */
    public function setDaysInTransit(string $daysInTransit) : self
    {
        $this->initialized['daysInTransit'] = true;
        $this->daysInTransit = $daysInTransit;
        return $this;
    }
}