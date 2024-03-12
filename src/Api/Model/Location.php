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
     * 
     *
     * @var Address
     */
    protected $address;
    /**
     * slic
     *
     * @var string
     */
    protected $slic;
    /**
     * 
     *
     * @return Address
     */
    public function getAddress() : Address
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * slic
     *
     * @return string
     */
    public function getSlic() : string
    {
        return $this->slic;
    }
    /**
     * slic
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