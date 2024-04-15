<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipShipFromAddress extends \ArrayObject
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
     * The consignee�s street address.
     *
     * @var string|null
     */
    protected $addressLine;
    /**
     * The consignee�s city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The consignee�s state or province code.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * The consignee�s town code.
     *
     * @var string|null
     */
    protected $town;
    /**
     * The consignee�s postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The consignee�s country or territory code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The consignee�s street address.
     *
     * @return string|null
     */
    public function getAddressLine() : ?string
    {
        return $this->addressLine;
    }
    /**
     * The consignee�s street address.
     *
     * @param string|null $addressLine
     *
     * @return self
     */
    public function setAddressLine(?string $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * The consignee�s city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * The consignee�s city.
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
     * The consignee�s state or province code.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The consignee�s state or province code.
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
     * The consignee�s town code.
     *
     * @return string|null
     */
    public function getTown() : ?string
    {
        return $this->town;
    }
    /**
     * The consignee�s town code.
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
     * The consignee�s postal code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The consignee�s postal code.
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
     * The consignee�s country or territory code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * The consignee�s country or territory code.
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