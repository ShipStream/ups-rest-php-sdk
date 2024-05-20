<?php

namespace ShipStream\Ups\Api\Model;

class LocationSearchCriteriaServiceSearch extends \ArrayObject
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
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @var string
     */
    protected $time;
    /**
     * 
     *
     * @var list<ServiceSearchServiceCode>
     */
    protected $serviceCode;
    /**
     * 
     *
     * @var list<ServiceSearchServiceOptionCode>
     */
    protected $serviceOptionCode;
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
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
    /**
     * 
     *
     * @return list<ServiceSearchServiceCode>
     */
    public function getServiceCode() : array
    {
        return $this->serviceCode;
    }
    /**
     * 
     *
     * @param list<ServiceSearchServiceCode> $serviceCode
     *
     * @return self
     */
    public function setServiceCode(array $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<ServiceSearchServiceOptionCode>
     */
    public function getServiceOptionCode() : array
    {
        return $this->serviceOptionCode;
    }
    /**
     * 
     *
     * @param list<ServiceSearchServiceOptionCode> $serviceOptionCode
     *
     * @return self
     */
    public function setServiceOptionCode(array $serviceOptionCode) : self
    {
        $this->initialized['serviceOptionCode'] = true;
        $this->serviceOptionCode = $serviceOptionCode;
        return $this;
    }
}