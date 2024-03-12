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
     * @var string[]
     */
    protected $addressLine;
    /**
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @var string
     */
    protected $city;
    /**
     * Consignee's state or province code. Required for US or Canada.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Consignee's postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Consignee's country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
    *
    * @var string
    */
    protected $residentialAddressIndicator;
    /**
     * Address Line of the consignee.
     *
     * @return string[]
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the consignee.
     *
     * @param string[] $addressLine
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
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
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
     * Consignee's state or province code. Required for US or Canada.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Consignee's state or province code. Required for US or Canada.
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
     * Consignee's country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Consignee's country or territory code.
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
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
    *
    * @return string
    */
    public function getResidentialAddressIndicator() : string
    {
        return $this->residentialAddressIndicator;
    }
    /**
    * This field is a flag to indicate if the receiver is a residential location. 
    True if ResidentialAddressIndicator tag exists.  This is an empty tag, any value inside is ignored.
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