<?php

namespace ShipStream\Ups\Api\Model;

class RateBillThirdPartyAddress extends \ArrayObject
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
     * The origin street address including name and number (when applicable).
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * Origin city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Origin state code.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Origin postal code. The postal code must be the same as the UPS account pickup address postal code. Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code. If the UPS account's pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits. The character '-' may be used to separate the first five digits and the last four digits. If the UPS account's pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Origin country or territory code. Refer to the Supported Country or Territory Tables located in the Appendix.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The origin street address including name and number (when applicable).
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * The origin street address including name and number (when applicable).
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
     * Origin city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Origin city.
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
     * Origin state code.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Origin state code.
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
     * Origin postal code. The postal code must be the same as the UPS account pickup address postal code. Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code. If the UPS account's pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits. The character '-' may be used to separate the first five digits and the last four digits. If the UPS account's pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Origin postal code. The postal code must be the same as the UPS account pickup address postal code. Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code. If the UPS account's pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits. The character '-' may be used to separate the first five digits and the last four digits. If the UPS account's pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
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
     * Origin country or territory code. Refer to the Supported Country or Territory Tables located in the Appendix.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Origin country or territory code. Refer to the Supported Country or Territory Tables located in the Appendix.
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