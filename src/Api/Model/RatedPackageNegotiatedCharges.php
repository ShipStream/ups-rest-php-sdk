<?php

namespace ShipStream\Ups\Api\Model;

class RatedPackageNegotiatedCharges extends \ArrayObject
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
     * @var NegotiatedChargesItemizedCharges[]
     */
    protected $itemizedCharges;
    /**
     * 
     *
     * @return NegotiatedChargesItemizedCharges[]
     */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param NegotiatedChargesItemizedCharges[] $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
}