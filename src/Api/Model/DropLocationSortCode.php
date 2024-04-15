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
     * @var string|null
     */
    protected $hubSortCode;
    /**
     * Holds the value of the facility location code.
     *
     * @var string|null
     */
    protected $freightSortFacilityCode;
    /**
     * Holds the value of the hub sort code or airport code
     *
     * @return string|null
     */
    public function getHubSortCode() : ?string
    {
        return $this->hubSortCode;
    }
    /**
     * Holds the value of the hub sort code or airport code
     *
     * @param string|null $hubSortCode
     *
     * @return self
     */
    public function setHubSortCode(?string $hubSortCode) : self
    {
        $this->initialized['hubSortCode'] = true;
        $this->hubSortCode = $hubSortCode;
        return $this;
    }
    /**
     * Holds the value of the facility location code.
     *
     * @return string|null
     */
    public function getFreightSortFacilityCode() : ?string
    {
        return $this->freightSortFacilityCode;
    }
    /**
     * Holds the value of the facility location code.
     *
     * @param string|null $freightSortFacilityCode
     *
     * @return self
     */
    public function setFreightSortFacilityCode(?string $freightSortFacilityCode) : self
    {
        $this->initialized['freightSortFacilityCode'] = true;
        $this->freightSortFacilityCode = $freightSortFacilityCode;
        return $this;
    }
}