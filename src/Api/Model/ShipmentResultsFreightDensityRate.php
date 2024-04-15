<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsFreightDensityRate extends \ArrayObject
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
     * @var string|null
     */
    protected $density;
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @var string|null
     */
    protected $totalCubicFeet;
    /**
     * Density is returned if the Shipper is eligible for Density based rate.
     *
     * @return string|null
     */
    public function getDensity() : ?string
    {
        return $this->density;
    }
    /**
     * Density is returned if the Shipper is eligible for Density based rate.
     *
     * @param string|null $density
     *
     * @return self
     */
    public function setDensity(?string $density) : self
    {
        $this->initialized['density'] = true;
        $this->density = $density;
        return $this;
    }
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @return string|null
     */
    public function getTotalCubicFeet() : ?string
    {
        return $this->totalCubicFeet;
    }
    /**
     * TotalCubic feet is returned if the Shipper is eligible for Density based rate.
     *
     * @param string|null $totalCubicFeet
     *
     * @return self
     */
    public function setTotalCubicFeet(?string $totalCubicFeet) : self
    {
        $this->initialized['totalCubicFeet'] = true;
        $this->totalCubicFeet = $totalCubicFeet;
        return $this;
    }
}