<?php

namespace ShipStream\Ups\Api\Model;

class RemitToAddress extends \ArrayObject
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
     * Payee Street address for the COD charges.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Payee city code for the COD charges.
     *
     * @var string
     */
    protected $city;
    /**
     * Payee state or province code for the COD charges.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Payee town code for the COD charges.
     *
     * @var string
     */
    protected $town;
    /**
     * Payee postal code for the COD charges.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Payee country or territory code for the COD charges.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Payee Street address for the COD charges.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Payee Street address for the COD charges.
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
     * Payee city code for the COD charges.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Payee city code for the COD charges.
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
     * Payee state or province code for the COD charges.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Payee state or province code for the COD charges.
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
     * Payee town code for the COD charges.
     *
     * @return string
     */
    public function getTown() : string
    {
        return $this->town;
    }
    /**
     * Payee town code for the COD charges.
     *
     * @param string $town
     *
     * @return self
     */
    public function setTown(string $town) : self
    {
        $this->initialized['town'] = true;
        $this->town = $town;
        return $this;
    }
    /**
     * Payee postal code for the COD charges.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Payee postal code for the COD charges.
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
     * Payee country or territory code for the COD charges.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Payee country or territory code for the COD charges.
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