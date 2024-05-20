<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupShipToAddress extends \ArrayObject
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
     * The Ship to street address.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * The Ship to city.
     *
     * @var string
     */
    protected $city;
    /**
     * The Ship to location�s state or province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * The ship to location�s postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The ship to location�s country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The Ship to street address.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * The Ship to street address.
     *
     * @param list<string> $addressLine
     *
     * @return self
     */
    public function setAddressLine(array $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * The Ship to city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The Ship to city.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * The Ship to location�s state or province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The Ship to location�s state or province code.
     *
     * @param string $stateProvinceCode
     *
     * @return self
     */
    public function setStateProvinceCode(string $stateProvinceCode) : self
    {
        $this->initialized['stateProvinceCode'] = true;
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }
    /**
     * The ship to location�s postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * The ship to location�s postal code.
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
     * The ship to location�s country code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The ship to location�s country code.
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