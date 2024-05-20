<?php

namespace ShipStream\Ups\Api\Model;

class FreightWillCallSearchFacilityAddress extends \ArrayObject
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
     * Facility SLIC. Required for Freight Will call search if FreightWillCallRequestType is 2.
     *
     * @var string
     */
    protected $sLIC;
    /**
     * Address line
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * City. Required for Freight Will call search if FreightWillCallRequestType is 3.
     *
     * @var string
     */
    protected $city;
    /**
     * Postal code. Required for Freight Will call search if FreightWillCallRequestType is 1.
     *
     * @var string
     */
    protected $postalCodePrimaryLow;
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @var string
     */
    protected $postalCodeExtendedLow;
    /**
     * State. Required if FrieghtWillCallRequestType is 3 if State is available.
     *
     * @var string
     */
    protected $state;
    /**
     * Country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Facility SLIC. Required for Freight Will call search if FreightWillCallRequestType is 2.
     *
     * @return string
     */
    public function getSLIC() : string
    {
        return $this->sLIC;
    }
    /**
     * Facility SLIC. Required for Freight Will call search if FreightWillCallRequestType is 2.
     *
     * @param string $sLIC
     *
     * @return self
     */
    public function setSLIC(string $sLIC) : self
    {
        $this->initialized['sLIC'] = true;
        $this->sLIC = $sLIC;
        return $this;
    }
    /**
     * Address line
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address line
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
     * City. Required for Freight Will call search if FreightWillCallRequestType is 3.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * City. Required for Freight Will call search if FreightWillCallRequestType is 3.
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
     * Postal code. Required for Freight Will call search if FreightWillCallRequestType is 1.
     *
     * @return string
     */
    public function getPostalCodePrimaryLow() : string
    {
        return $this->postalCodePrimaryLow;
    }
    /**
     * Postal code. Required for Freight Will call search if FreightWillCallRequestType is 1.
     *
     * @param string $postalCodePrimaryLow
     *
     * @return self
     */
    public function setPostalCodePrimaryLow(string $postalCodePrimaryLow) : self
    {
        $this->initialized['postalCodePrimaryLow'] = true;
        $this->postalCodePrimaryLow = $postalCodePrimaryLow;
        return $this;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @return string
     */
    public function getPostalCodeExtendedLow() : string
    {
        return $this->postalCodeExtendedLow;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @param string $postalCodeExtendedLow
     *
     * @return self
     */
    public function setPostalCodeExtendedLow(string $postalCodeExtendedLow) : self
    {
        $this->initialized['postalCodeExtendedLow'] = true;
        $this->postalCodeExtendedLow = $postalCodeExtendedLow;
        return $this;
    }
    /**
     * State. Required if FrieghtWillCallRequestType is 3 if State is available.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State. Required if FrieghtWillCallRequestType is 3 if State is available.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country or territory code.
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