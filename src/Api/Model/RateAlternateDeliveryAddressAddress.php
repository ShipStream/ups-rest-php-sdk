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
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * UPS Access Point city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * UPS Access Point State or Province code.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Postal Code for UPS accounts billing address.  Postal Code  may be present when the FRS Payment Information type = 02 and type = 03.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Country or Territory code for the  UPS accounts & billing address.  Country or Territory Code is required when the FRS Payment Information type = 02 and type= 03.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
     *
     * @var string|null
     */
    protected $residentialAddressIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a PO box location. True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:01 Hold for Pickup at UPS Access Point02 UPS Access Point Delivery
     *
     * @var string|null
     */
    protected $pOBoxIndicator;
    /**
     * The UPS Access Point's street address, including name and number (when applicable).  Length is not validated.
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * The UPS Access Point's street address, including name and number (when applicable).  Length is not validated.
     *
     * @param list<string>|null $addressLine
     *
     * @return self
     */
    public function setAddressLine(?array $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * UPS Access Point city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * UPS Access Point city.
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
     * UPS Access Point State or Province code.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * UPS Access Point State or Province code.
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
     * Postal Code for UPS accounts billing address.  Postal Code  may be present when the FRS Payment Information type = 02 and type = 03.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Postal Code for UPS accounts billing address.  Postal Code  may be present when the FRS Payment Information type = 02 and type = 03.
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
     * Country or Territory code for the  UPS accounts & billing address.  Country or Territory Code is required when the FRS Payment Information type = 02 and type= 03.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory code for the  UPS accounts & billing address.  Country or Territory Code is required when the FRS Payment Information type = 02 and type= 03.
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
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
     *
     * @return string|null
     */
    public function getResidentialAddressIndicator() : ?string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a residential location. True if ResidentialAddressIndicator tag exists.  For future use.
     *
     * @param string|null $residentialAddressIndicator
     *
     * @return self
     */
    public function setResidentialAddressIndicator(?string $residentialAddressIndicator) : self
    {
        $this->initialized['residentialAddressIndicator'] = true;
        $this->residentialAddressIndicator = $residentialAddressIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a PO box location. True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:01 Hold for Pickup at UPS Access Point02 UPS Access Point Delivery
     *
     * @return string|null
     */
    public function getPOBoxIndicator() : ?string
    {
        return $this->pOBoxIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored.This field is a flag to indicate if the Alternate Delivery location is a PO box location. True if POBoxIndicator tag exists; false otherwise.  Not valid with Shipment Indication Types:01 Hold for Pickup at UPS Access Point02 UPS Access Point Delivery
     *
     * @param string|null $pOBoxIndicator
     *
     * @return self
     */
    public function setPOBoxIndicator(?string $pOBoxIndicator) : self
    {
        $this->initialized['pOBoxIndicator'] = true;
        $this->pOBoxIndicator = $pOBoxIndicator;
        return $this;
    }
}