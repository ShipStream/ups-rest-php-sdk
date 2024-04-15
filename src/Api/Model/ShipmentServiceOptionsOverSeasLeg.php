<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsOverSeasLeg extends \ArrayObject
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
     * Dimensions Container.
     *
     * @var OverSeasLegDimensions|null
     */
    protected $dimensions;
    /**
     * Dimensions Value Container.
     *
     * @var OverSeasLegValue|null
     */
    protected $value;
    /**
     * Dimensions Container.
     *
     * @return OverSeasLegDimensions|null
     */
    public function getDimensions() : ?OverSeasLegDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions Container.
     *
     * @param OverSeasLegDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?OverSeasLegDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Dimensions Value Container.
     *
     * @return OverSeasLegValue|null
     */
    public function getValue() : ?OverSeasLegValue
    {
        return $this->value;
    }
    /**
     * Dimensions Value Container.
     *
     * @param OverSeasLegValue|null $value
     *
     * @return self
     */
    public function setValue(?OverSeasLegValue $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}