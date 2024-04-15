<?php

namespace ShipStream\Ups\Api\Model;

class FRSPaymentInformationAddress extends \ArrayObject
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
     * The postal code for the Ground Freight Pricing payment information address.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The country or territory code for the Ground Freight Pricing payment information address.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The postal code for the Ground Freight Pricing payment information address.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The postal code for the Ground Freight Pricing payment information address.
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
    /**
     * The country or territory code for the Ground Freight Pricing payment information address.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * The country or territory code for the Ground Freight Pricing payment information address.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}