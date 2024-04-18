<?php

namespace ShipStream\Ups\Api\Model;

class PickupFacilitiesAddress extends \ArrayObject
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
     * Address Line of the Facility.
     *
     * @var string
     */
    protected $addressLine;
    /**
     * Facilities City.
     *
     * @var string
     */
    protected $city;
    /**
     * Facility state or province code.
     *
     * @var string
     */
    protected $stateProvince;
    /**
     * Facility Postal Code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * UPS Pickup facility country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
    * Indicates if the pickup location is commerical or residential.
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @var string
    */
    protected $residentialIndicator;
    /**
     * Address Line of the Facility.
     *
     * @return string
     */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the Facility.
     *
     * @param string $addressLine
     *
     * @return self
     */
    public function setAddressLine(string $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * Facilities City.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Facilities City.
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
     * Facility state or province code.
     *
     * @return string
     */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
     * Facility state or province code.
     *
     * @param string $stateProvince
     *
     * @return self
     */
    public function setStateProvince(string $stateProvince) : self
    {
        $this->initialized['stateProvince'] = true;
        $this->stateProvince = $stateProvince;
        return $this;
    }
    /**
     * Facility Postal Code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Facility Postal Code.
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
     * UPS Pickup facility country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * UPS Pickup facility country or territory code.
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
    * Indicates if the pickup location is commerical or residential.
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @return string
    */
    public function getResidentialIndicator() : string
    {
        return $this->residentialIndicator;
    }
    /**
    * Indicates if the pickup location is commerical or residential.
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @param string $residentialIndicator
    *
    * @return self
    */
    public function setResidentialIndicator(string $residentialIndicator) : self
    {
        $this->initialized['residentialIndicator'] = true;
        $this->residentialIndicator = $residentialIndicator;
        return $this;
    }
}