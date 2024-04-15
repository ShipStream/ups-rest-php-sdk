<?php

namespace ShipStream\Ups\Api\Model;

class SoldToAddress extends \ArrayObject
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
     * SoldTo location's street address.
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * SoldTo location's city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * SoldTo location's state or province code.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * SoldTo location's town code.
     *
     * @var string|null
     */
    protected $town;
    /**
     * SoldTo location's postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * SoldTo location's country or territory code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * SoldTo location's street address.
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * SoldTo location's street address.
     *
     * @param list<string>|null $addressLine
     *
     * @return self
     */
    public function setAddressLine(?array $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * SoldTo location's city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * SoldTo location's city.
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
     * SoldTo location's state or province code.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * SoldTo location's state or province code.
     *
     * @param string|null $stateProvinceCode
     *
     * @return self
     */
    public function setStateProvinceCode(?string $stateProvinceCode) : self
    {
        $this->initialized['stateProvinceCode'] = true;
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }
    /**
     * SoldTo location's town code.
     *
     * @return string|null
     */
    public function getTown() : ?string
    {
        return $this->town;
    }
    /**
     * SoldTo location's town code.
     *
     * @param string|null $town
     *
     * @return self
     */
    public function setTown(?string $town) : self
    {
        $this->initialized['town'] = true;
        $this->town = $town;
        return $this;
    }
    /**
     * SoldTo location's postal code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * SoldTo location's postal code.
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
     * SoldTo location's country or territory code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * SoldTo location's country or territory code.
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