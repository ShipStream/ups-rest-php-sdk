<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsSortingAndSegregating extends \ArrayObject
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
     * Quantity of units to be sorted/segregated.
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * Quantity of units to be sorted/segregated.
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * Quantity of units to be sorted/segregated.
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
}