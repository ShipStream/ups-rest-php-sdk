<?php

namespace ShipStream\Ups\Api\Model;

class ShipToAddress extends \ArrayObject
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
     * Address Line of the consignee.
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Consignee's state or province code. Required for US or Canada.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Consignee's postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Consignee's country or territory code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
    *
    * @var string|null
    */
    protected $residentialAddressIndicator;
    /**
     * Address Line of the consignee.
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the consignee.
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
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
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
     * Consignee's state or province code. Required for US or Canada.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Consignee's state or province code. Required for US or Canada.
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
     * Consignee's postal code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Consignee's postal code.
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
     * Consignee's country or territory code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Consignee's country or territory code.
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
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
    *
    * @return string|null
    */
    public function getResidentialAddressIndicator() : ?string
    {
        return $this->residentialAddressIndicator;
    }
    /**
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
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
}