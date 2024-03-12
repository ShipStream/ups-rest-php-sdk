<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponseFreightDensityRate extends \ArrayObject
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
     * Density is returned if the Shipper is eligible for Density based rate.
     *
     * @var string
     */
    protected $density;
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @var string
     */
    protected $totalCubicFeet;
    /**
     * Density is returned if the Shipper is eligible for Density based rate.
     *
     * @return string
     */
    public function getDensity() : string
    {
        return $this->density;
    }
    /**
     * Density is returned if the Shipper is eligible for Density based rate.
     *
     * @param string $density
     *
     * @return self
     */
    public function setDensity(string $density) : self
    {
        $this->initialized['density'] = true;
        $this->density = $density;
        return $this;
    }
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @return string
     */
    public function getTotalCubicFeet() : string
    {
        return $this->totalCubicFeet;
    }
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @param string $totalCubicFeet
     *
     * @return self
     */
    public function setTotalCubicFeet(string $totalCubicFeet) : self
    {
        $this->initialized['totalCubicFeet'] = true;
        $this->totalCubicFeet = $totalCubicFeet;
        return $this;
    }
}