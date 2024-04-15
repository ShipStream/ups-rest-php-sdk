<?php

namespace ShipStream\Ups\Api\Model;

class FRSShipmentDataFreightDensityRate extends \ArrayObject
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
     * Density is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 999.9
     *
     * @var string|null
     */
    protected $density;
    /**
     * Total Cubic feet is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 99999.999
     *
     * @var string|null
     */
    protected $totalCubicFeet;
    /**
     * Density is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 999.9
     *
     * @return string|null
     */
    public function getDensity() : ?string
    {
        return $this->density;
    }
    /**
     * Density is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 999.9
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
     * Total Cubic feet is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 99999.999
     *
     * @return string|null
     */
    public function getTotalCubicFeet() : ?string
    {
        return $this->totalCubicFeet;
    }
    /**
     * Total Cubic feet is returned if the Shipper is eligible for Density based rate.   Valid values are 0 to 99999.999
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