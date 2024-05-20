<?php

namespace ShipStream\Ups\Api\Model;

class Location extends \ArrayObject
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
     * The container which has the physical address.
     *
     * @var Address|null
     */
    protected $address;
    /**
     * Site Location Indicator Code (SLIC)
     *
     * @var string
     */
    protected $slic;
    /**
     * The container which has the physical address.
     *
     * @return Address|null
     */
    public function getAddress() : ?Address
    {
        return $this->address;
    }
    /**
     * The container which has the physical address.
     *
     * @param Address|null $address
     *
     * @return self
     */
    public function setAddress(?Address $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Site Location Indicator Code (SLIC)
     *
     * @return string
     */
    public function getSlic() : string
    {
        return $this->slic;
    }
    /**
     * Site Location Indicator Code (SLIC)
     *
     * @param string $slic
     *
     * @return self
     */
    public function setSlic(string $slic) : self
    {
        $this->initialized['slic'] = true;
        $this->slic = $slic;
        return $this;
    }
}