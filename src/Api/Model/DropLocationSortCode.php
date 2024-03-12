<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationSortCode extends \ArrayObject
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
     * Holds the value of the hub sort code or airport code
     *
     * @var string
     */
    protected $hubSortCode;
    /**
     * Holds the value of the facility location code.
     *
     * @var string
     */
    protected $freightSortFacilityCode;
    /**
     * Holds the value of the hub sort code or airport code
     *
     * @return string
     */
    public function getHubSortCode() : string
    {
        return $this->hubSortCode;
    }
    /**
     * Holds the value of the hub sort code or airport code
     *
     * @param string $hubSortCode
     *
     * @return self
     */
    public function setHubSortCode(string $hubSortCode) : self
    {
        $this->initialized['hubSortCode'] = true;
        $this->hubSortCode = $hubSortCode;
        return $this;
    }
    /**
     * Holds the value of the facility location code.
     *
     * @return string
     */
    public function getFreightSortFacilityCode() : string
    {
        return $this->freightSortFacilityCode;
    }
    /**
     * Holds the value of the facility location code.
     *
     * @param string $freightSortFacilityCode
     *
     * @return self
     */
    public function setFreightSortFacilityCode(string $freightSortFacilityCode) : self
    {
        $this->initialized['freightSortFacilityCode'] = true;
        $this->freightSortFacilityCode = $freightSortFacilityCode;
        return $this;
    }
}