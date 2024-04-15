<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalDataProperShippingNameDetail extends \ArrayObject
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
     * The Proper Shipping Name assigned by ADR, CFR or IATA.
     *
     * @var string|null
     */
    protected $properShippingName;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA.
     *
     * @return string|null
     */
    public function getProperShippingName() : ?string
    {
        return $this->properShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA.
     *
     * @param string|null $properShippingName
     *
     * @return self
     */
    public function setProperShippingName(?string $properShippingName) : self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
}