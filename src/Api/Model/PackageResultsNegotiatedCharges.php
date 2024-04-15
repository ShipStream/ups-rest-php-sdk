<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsNegotiatedCharges extends \ArrayObject
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
     * @var list<NegotiatedChargesItemizedCharges>|null
     */
    protected $itemizedCharges;
    /**
     * 
     *
     * @return list<NegotiatedChargesItemizedCharges>|null
     */
    public function getItemizedCharges() : ?array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param list<NegotiatedChargesItemizedCharges>|null $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(?array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
}