<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateShipToAddress extends \ArrayObject
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
     * Consignee's street address.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Consignee's city.
     *
     * @var string
     */
    protected $city;
    /**
     * Consignee's state or province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Consignee's town code.
     *
     * @var string
     */
    protected $town;
    /**
     * Consignee's postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Consignee's country or territory code..
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The presence of the tag indicates that the Consignee's address is residential
     *
     * @var string
     */
    protected $residentialAddressIndicator;
    /**
     * Consignee's street address.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Consignee's street address.
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
     * Consignee's city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Consignee's city.
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
     * Consignee's state or province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Consignee's state or province code.
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
     * Consignee's town code.
     *
     * @return string
     */
    public function getTown() : string
    {
        return $this->town;
    }
    /**
     * Consignee's town code.
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
     * Consignee's postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Consignee's postal code.
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
     * Consignee's country or territory code..
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Consignee's country or territory code..
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
     * The presence of the tag indicates that the Consignee's address is residential
     *
     * @return string
     */
    public function getResidentialAddressIndicator() : string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * The presence of the tag indicates that the Consignee's address is residential
     *
     * @param string $residentialAddressIndicator
     *
     * @return self
     */
    public function setResidentialAddressIndicator(string $residentialAddressIndicator) : self
    {
        $this->initialized['residentialAddressIndicator'] = true;
        $this->residentialAddressIndicator = $residentialAddressIndicator;
        return $this;
    }
}