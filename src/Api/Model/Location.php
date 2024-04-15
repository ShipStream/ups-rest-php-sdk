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
     * @var Address|null
     */
    protected $address;
    /**
     * slic
     *
     * @var string|null
     */
    protected $slic;
    /**
     * 
     *
     * @return Address|null
     */
    public function getAddress() : ?Address
    {
        return $this->address;
    }
    /**
     * 
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
     * slic
     *
     * @return string|null
     */
    public function getSlic() : ?string
    {
        return $this->slic;
    }
    /**
     * slic
     *
     * @param string|null $slic
     *
     * @return self
     */
    public function setSlic(?string $slic) : self
    {
        $this->initialized['slic'] = true;
        $this->slic = $slic;
        return $this;
    }
}