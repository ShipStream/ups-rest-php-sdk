<?php

namespace ShipStream\Ups\Api\Model;

class CandidateAddress extends \ArrayObject
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
     * Spelled out country name.
     *
     * @var string|null
     */
    protected $countryName;
    /**
     * Country code, follows ISO-defined country codes.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Present on response when candidate valu ehas a political division 1 value available.
     *
     * @var string|null
     */
    protected $stateProvince;
    /**
     * Present on response when candidate value has a political division 2 value available.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Present on response when candidate value has a political divison 3 value available.
     *
     * @var string|null
     */
    protected $town;
    /**
     * Present on response when candidate has a postal code value available
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Present on response when vandidate value has a postal code range value available, this is the postal range low value.
     *
     * @var string|null
     */
    protected $postalCodeLow;
    /**
     * Present on response when candidate value has a postal code range value available, this is the postal range high value.
     *
     * @var string|null
     */
    protected $postalCodeHigh;
    /**
     * Spelled out country name.
     *
     * @return string|null
     */
    public function getCountryName() : ?string
    {
        return $this->countryName;
    }
    /**
     * Spelled out country name.
     *
     * @param string|null $countryName
     *
     * @return self
     */
    public function setCountryName(?string $countryName) : self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
    /**
     * Country code, follows ISO-defined country codes.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country code, follows ISO-defined country codes.
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
     * Present on response when candidate valu ehas a political division 1 value available.
     *
     * @return string|null
     */
    public function getStateProvince() : ?string
    {
        return $this->stateProvince;
    }
    /**
     * Present on response when candidate valu ehas a political division 1 value available.
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
    /**
     * Present on response when candidate value has a political division 2 value available.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Present on response when candidate value has a political division 2 value available.
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
     * Present on response when candidate value has a political divison 3 value available.
     *
     * @return string|null
     */
    public function getTown() : ?string
    {
        return $this->town;
    }
    /**
     * Present on response when candidate value has a political divison 3 value available.
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
     * Present on response when candidate has a postal code value available
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Present on response when candidate has a postal code value available
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
     * Present on response when vandidate value has a postal code range value available, this is the postal range low value.
     *
     * @return string|null
     */
    public function getPostalCodeLow() : ?string
    {
        return $this->postalCodeLow;
    }
    /**
     * Present on response when vandidate value has a postal code range value available, this is the postal range low value.
     *
     * @param string|null $postalCodeLow
     *
     * @return self
     */
    public function setPostalCodeLow(?string $postalCodeLow) : self
    {
        $this->initialized['postalCodeLow'] = true;
        $this->postalCodeLow = $postalCodeLow;
        return $this;
    }
    /**
     * Present on response when candidate value has a postal code range value available, this is the postal range high value.
     *
     * @return string|null
     */
    public function getPostalCodeHigh() : ?string
    {
        return $this->postalCodeHigh;
    }
    /**
     * Present on response when candidate value has a postal code range value available, this is the postal range high value.
     *
     * @param string|null $postalCodeHigh
     *
     * @return self
     */
    public function setPostalCodeHigh(?string $postalCodeHigh) : self
    {
        $this->initialized['postalCodeHigh'] = true;
        $this->postalCodeHigh = $postalCodeHigh;
        return $this;
    }
}