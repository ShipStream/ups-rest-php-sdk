<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentHandlingUnitTwo extends \ArrayObject
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
     * Quantity of the handling unit.
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * HandlingUnit Type Container.
     *
     * @var HandlingUnitTwoType|null
     */
    protected $type;
    /**
     * Quantity of the handling unit.
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * Quantity of the handling unit.
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * HandlingUnit Type Container.
     *
     * @return HandlingUnitTwoType|null
     */
    public function getType() : ?HandlingUnitTwoType
    {
        return $this->type;
    }
    /**
     * HandlingUnit Type Container.
     *
     * @param HandlingUnitTwoType|null $type
     *
     * @return self
     */
    public function setType(?HandlingUnitTwoType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}