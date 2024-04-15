<?php

namespace ShipStream\Ups\Api\Model;

class BillReceiverAddress extends \ArrayObject
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
     * The postal code for the UPS accounts pickup address. The pickup postal code was entered in the UPS system when the account was set-up.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The postal code for the UPS accounts pickup address. The pickup postal code was entered in the UPS system when the account was set-up.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The postal code for the UPS accounts pickup address. The pickup postal code was entered in the UPS system when the account was set-up.
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
}