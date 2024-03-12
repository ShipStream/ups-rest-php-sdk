<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsRate extends \ArrayObject
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
     * Rate Type Container.
     *
     * @var RateType
     */
    protected $type;
    /**
     * Factor Container.
     *
     * @var RateFactor
     */
    protected $factor;
    /**
     * Rate Type Container.
     *
     * @return RateType
     */
    public function getType() : RateType
    {
        return $this->type;
    }
    /**
     * Rate Type Container.
     *
     * @param RateType $type
     *
     * @return self
     */
    public function setType(RateType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Factor Container.
     *
     * @return RateFactor
     */
    public function getFactor() : RateFactor
    {
        return $this->factor;
    }
    /**
     * Factor Container.
     *
     * @param RateFactor $factor
     *
     * @return self
     */
    public function setFactor(RateFactor $factor) : self
    {
        $this->initialized['factor'] = true;
        $this->factor = $factor;
        return $this;
    }
}