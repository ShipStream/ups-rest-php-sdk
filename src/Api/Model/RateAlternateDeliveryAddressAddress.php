<?php

namespace ShipStream\Ups\Api\Model;

class RateAlternateDeliveryAddressAddress extends \ArrayObject
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
     * The UPS Access Point's street address, including name and number (when applicable).  Length is not validated.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * UPS Access Point city.
     *
     * @var string
     */
    protected $city;
    /**
     * UPS Access Point State or Province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * UPS Access Point Postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * UPS Access Point country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
     *
     * @var string
     */
    protected $residentialAddressIndicator;
    /**
    * Presence/Absence Indicator. Any value inside is ignored.
    
    This field is a flag to indicate if the Alternate Delivery location is a PO box location.
    
    True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:
    - 01 - Hold for Pickup at UPS Access Point
    - 02 - UPS Access Point™ Delivery
    
    *
    * @var string
    */
    protected $pOBoxIndicator;
    /**
     * The UPS Access Point's street address, including name and number (when applicable).  Length is not validated.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * The UPS Access Point's street address, including name and number (when applicable).  Length is not validated.
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
     * UPS Access Point city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * UPS Access Point city.
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
     * UPS Access Point State or Province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * UPS Access Point State or Province code.
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
     * UPS Access Point Postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * UPS Access Point Postal code.
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
     * UPS Access Point country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * UPS Access Point country or territory code.
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
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
     *
     * @return string
     */
    public function getResidentialAddressIndicator() : string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
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
    /**
    * Presence/Absence Indicator. Any value inside is ignored.
    
    This field is a flag to indicate if the Alternate Delivery location is a PO box location.
    
    True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:
    - 01 - Hold for Pickup at UPS Access Point
    - 02 - UPS Access Point™ Delivery
    
    *
    * @return string
    */
    public function getPOBoxIndicator() : string
    {
        return $this->pOBoxIndicator;
    }
    /**
    * Presence/Absence Indicator. Any value inside is ignored.
    
    This field is a flag to indicate if the Alternate Delivery location is a PO box location.
    
    True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:
    - 01 - Hold for Pickup at UPS Access Point
    - 02 - UPS Access Point™ Delivery
    
    *
    * @param string $pOBoxIndicator
    *
    * @return self
    */
    public function setPOBoxIndicator(string $pOBoxIndicator) : self
    {
        $this->initialized['pOBoxIndicator'] = true;
        $this->pOBoxIndicator = $pOBoxIndicator;
        return $this;
    }
}