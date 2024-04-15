<?php

namespace ShipStream\Ups\Api\Model;

class Address extends \ArrayObject
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
     * addressLine1
     *
     * @var string|null
     */
    protected $addressLine1;
    /**
     * addressLine2
     *
     * @var string|null
     */
    protected $addressLine2;
    /**
     * addressLine3
     *
     * @var string|null
     */
    protected $addressLine3;
    /**
     * city
     *
     * @var string|null
     */
    protected $city;
    /**
     * country
     *
     * @var string|null
     */
    protected $country;
    /**
     * countryCode
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * postalCode
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * stateProvince
     *
     * @var string|null
     */
    protected $stateProvince;
    /**
     * addressLine1
     *
     * @return string|null
     */
    public function getAddressLine1() : ?string
    {
        return $this->addressLine1;
    }
    /**
     * addressLine1
     *
     * @param string|null $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(?string $addressLine1) : self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2() : ?string
    {
        return $this->addressLine2;
    }
    /**
     * addressLine2
     *
     * @param string|null $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(?string $addressLine2) : self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * addressLine3
     *
     * @return string|null
     */
    public function getAddressLine3() : ?string
    {
        return $this->addressLine3;
    }
    /**
     * addressLine3
     *
     * @param string|null $addressLine3
     *
     * @return self
     */
    public function setAddressLine3(?string $addressLine3) : self
    {
        $this->initialized['addressLine3'] = true;
        $this->addressLine3 = $addressLine3;
        return $this;
    }
    /**
     * city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * city
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * country
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * country
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * countryCode
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * countryCode
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
    /**
     * postalCode
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * postalCode
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
     * stateProvince
     *
     * @return string|null
     */
    public function getStateProvince() : ?string
    {
        return $this->stateProvince;
    }
    /**
     * stateProvince
     *
     * @param string|null $stateProvince
     *
     * @return self
     */
    public function setStateProvince(?string $stateProvince) : self
    {
        $this->initialized['stateProvince'] = true;
        $this->stateProvince = $stateProvince;
        return $this;
    }
}