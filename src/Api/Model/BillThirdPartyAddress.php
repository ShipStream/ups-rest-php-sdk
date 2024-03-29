<?php

namespace ShipStream\Ups\Api\Model;

class BillThirdPartyAddress extends \ArrayObject
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
     * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The country or territory code for the UPS accounts pickup address.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * The country or territory code for the UPS accounts pickup address.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The country or territory code for the UPS accounts pickup address.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}