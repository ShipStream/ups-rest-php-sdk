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
     * @var string|null
     */
    protected $addressLine;
    /**
     * Facilities City.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Facility state or province code.
     *
     * @var string|null
     */
    protected $stateProvince;
    /**
     * Facility Postal Code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * UPS Pickup facility country or territory code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
    * Indicates if the pickup address is a residential place or not. 
    Valid Values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @var string|null
    */
    protected $residentialIndicator;
    /**
     * Address Line of the Facility.
     *
     * @return string|null
     */
    public function getAddressLine() : ?string
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the Facility.
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
     * Facilities City.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Facilities City.
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
     * Facility state or province code.
     *
     * @return string|null
     */
    public function getStateProvince() : ?string
    {
        return $this->stateProvince;
    }
    /**
     * Facility state or province code.
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
     * Facility Postal Code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Facility Postal Code.
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
     * UPS Pickup facility country or territory code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * UPS Pickup facility country or territory code.
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
    * Indicates if the pickup address is a residential place or not. 
    Valid Values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @return string|null
    */
    public function getResidentialIndicator() : ?string
    {
        return $this->residentialIndicator;
    }
    /**
    * Indicates if the pickup address is a residential place or not. 
    Valid Values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @param string|null $residentialIndicator
    *
    * @return self
    */
    public function setResidentialIndicator(?string $residentialIndicator) : self
    {
        $this->initialized['residentialIndicator'] = true;
        $this->residentialIndicator = $residentialIndicator;
        return $this;
    }
}