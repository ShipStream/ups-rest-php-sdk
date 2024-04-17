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
     * The physical street address line 1.
     *
     * @var string|null
     */
    protected $addressLine1;
    /**
     * The physical street address line 2.
     *
     * @var string|null
     */
    protected $addressLine2;
    /**
     * The physical street address line 3.
     *
     * @var string|null
     */
    protected $addressLine3;
    /**
     * The physical address city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The physical address country.
     *
     * @var string
     */
    protected $country;
    /**
     * The physical address country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The physical address postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The physical address state or province.
     *
     * @var string|null
     */
    protected $stateProvince;
    /**
     * The physical street address line 1.
     *
     * @return string|null
     */
    public function getAddressLine1() : ?string
    {
        return $this->addressLine1;
    }
    /**
     * The physical street address line 1.
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
     * The physical street address line 2.
     *
     * @return string|null
     */
    public function getAddressLine2() : ?string
    {
        return $this->addressLine2;
    }
    /**
     * The physical street address line 2.
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
     * The physical street address line 3.
     *
     * @return string|null
     */
    public function getAddressLine3() : ?string
    {
        return $this->addressLine3;
    }
    /**
     * The physical street address line 3.
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
     * The physical address city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * The physical address city.
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
     * The physical address country.
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * The physical address country.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * The physical address country code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The physical address country code.
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
    /**
     * The physical address postal code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The physical address postal code.
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
     * The physical address state or province.
     *
     * @return string|null
     */
    public function getStateProvince() : ?string
    {
        return $this->stateProvince;
    }
    /**
     * The physical address state or province.
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