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
     * @var string|null
     */
    protected $time;
    /**
     * 
     *
     * @var list<ServiceSearchServiceCode>|null
     */
    protected $serviceCode;
    /**
     * 
     *
     * @var list<ServiceSearchServiceOptionCode>|null
     */
    protected $serviceOptionCode;
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
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
    /**
     * 
     *
     * @return list<ServiceSearchServiceCode>|null
     */
    public function getServiceCode() : ?array
    {
        return $this->serviceCode;
    }
    /**
     * 
     *
     * @param list<ServiceSearchServiceCode>|null $serviceCode
     *
     * @return self
     */
    public function setServiceCode(?array $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<ServiceSearchServiceOptionCode>|null
     */
    public function getServiceOptionCode() : ?array
    {
        return $this->serviceOptionCode;
    }
    /**
     * 
     *
     * @param list<ServiceSearchServiceOptionCode>|null $serviceOptionCode
     *
     * @return self
     */
    public function setServiceOptionCode(?array $serviceOptionCode) : self
    {
        $this->initialized['serviceOptionCode'] = true;
        $this->serviceOptionCode = $serviceOptionCode;
        return $this;
    }
}