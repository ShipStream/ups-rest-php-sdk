<?php

namespace ShipStream\Ups\Api\Model;

class PackageActivity extends \ArrayObject
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
     * Date of package activity (i.e. YYYYMMDD).� If generic record ActivityType is TC then event date is the date of first USPS scan.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Time of package activity(i.e. HHMMSS).� If generic record ActivityType is TC then event time is the time of first USPS scan.
     *
     * @var string|null
     */
    protected $time;
    /**
     * Date of package activity (i.e. YYYYMMDD).� If generic record ActivityType is TC then event date is the date of first USPS scan.
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Date of package activity (i.e. YYYYMMDD).� If generic record ActivityType is TC then event date is the date of first USPS scan.
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
     * Time of package activity(i.e. HHMMSS).� If generic record ActivityType is TC then event time is the time of first USPS scan.
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * Time of package activity(i.e. HHMMSS).� If generic record ActivityType is TC then event time is the time of first USPS scan.
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