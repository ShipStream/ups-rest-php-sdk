<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateShipFromAddress extends \ArrayObject
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
     * The Ship from street address.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * The Ship from city.
     *
     * @var string
     */
    protected $city;
    /**
     * The Ship from location’s state or province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * The ship from location’s town code.
     *
     * @var string
     */
    protected $town;
    /**
     * The ship from location’s postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The ship from location’s country or territory code..
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The presence of the tag indicates that the ShipFrom address is residential
     *
     * @var string
     */
    protected $residentialAddressIndicator;
    /**
     * The Ship from street address.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * The Ship from street address.
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
     * The Ship from city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The Ship from city.
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
     * The Ship from location’s state or province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The Ship from location’s state or province code.
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
     * The ship from location’s town code.
     *
     * @return string
     */
    public function getTown() : string
    {
        return $this->town;
    }
    /**
     * The ship from location’s town code.
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
     * The ship from location’s postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * The ship from location’s postal code.
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
     * The ship from location’s country or territory code..
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The ship from location’s country or territory code..
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
     * The presence of the tag indicates that the ShipFrom address is residential
     *
     * @return string
     */
    public function getResidentialAddressIndicator() : string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * The presence of the tag indicates that the ShipFrom address is residential
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