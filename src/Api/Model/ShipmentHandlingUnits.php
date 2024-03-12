<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentHandlingUnits extends \ArrayObject
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
     * Handling Unit Quantity for Density based Rating
     *
     * @var string
     */
    protected $quantity;
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @var HandlingUnitsType
     */
    protected $type;
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @var HandlingUnitsDimensions
     */
    protected $dimensions;
    /**
     * Handling Unit Quantity for Density based Rating
     *
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
     * Handling Unit Quantity for Density based Rating
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @return HandlingUnitsType
     */
    public function getType() : HandlingUnitsType
    {
        return $this->type;
    }
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @param HandlingUnitsType $type
     *
     * @return self
     */
    public function setType(HandlingUnitsType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @return HandlingUnitsDimensions
     */
    public function getDimensions() : HandlingUnitsDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @param HandlingUnitsDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(HandlingUnitsDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}