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
     * Date of package delivery activity. Date format: YYYYMMDD.
     *
     * @var string
     */
    protected $date;
    /**
     * Time of package delivery activity. Time format: HHMMSS
     *
     * @var string
     */
    protected $time;
    /**
     * Date of package delivery activity. Date format: YYYYMMDD.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Date of package delivery activity. Date format: YYYYMMDD.
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
     * Time of package delivery activity. Time format: HHMMSS
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Time of package delivery activity. Time format: HHMMSS
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