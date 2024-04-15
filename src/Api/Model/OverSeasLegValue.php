<?php

namespace ShipStream\Ups\Api\Model;

class OverSeasLegValue extends \ArrayObject
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
    * Dimensions Value Cube Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @var ValueCube|null
    */
    protected $cube;
    /**
    * Dimensions Value CWT Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @var ValueCWT|null
    */
    protected $cWT;
    /**
    * Dimensions Value Cube Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @return ValueCube|null
    */
    public function getCube() : ?ValueCube
    {
        return $this->cube;
    }
    /**
    * Dimensions Value Cube Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @param ValueCube|null $cube
    *
    * @return self
    */
    public function setCube(?ValueCube $cube) : self
    {
        $this->initialized['cube'] = true;
        $this->cube = $cube;
        return $this;
    }
    /**
    * Dimensions Value CWT Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @return ValueCWT|null
    */
    public function getCWT() : ?ValueCWT
    {
        return $this->cWT;
    }
    /**
    * Dimensions Value CWT Container.
    Request should contain PricerPerCubicFoot, PricerPerCWT, or both.
    *
    * @param ValueCWT|null $cWT
    *
    * @return self
    */
    public function setCWT(?ValueCWT $cWT) : self
    {
        $this->initialized['cWT'] = true;
        $this->cWT = $cWT;
        return $this;
    }
}