<?php

namespace ShipStream\Ups\Api\Model;

class ChargeCardCardAddress extends \ArrayObject
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
     * Address Lines of the credit card billing address.  Max of three address lines can be provided.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Charge card billing city
     *
     * @var string
     */
    protected $city;
    /**
     * Charge card billing State province code
     *
     * @var string
     */
    protected $stateProvince;
    /**
     * Charge card billing address postal code.  This is a required field for postal countries.
     *
     * @var string
     */
    protected $postalCode;
    /**
    * Charge card billing address country or territory code defined by ISO-3166.
    
    Upper-case two letter string. For Discover card it should be US.
    *
    * @var string
    */
    protected $countryCode;
    /**
     * Address Lines of the credit card billing address.  Max of three address lines can be provided.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address Lines of the credit card billing address.  Max of three address lines can be provided.
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
     * Charge card billing city
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Charge card billing city
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
     * Charge card billing State province code
     *
     * @return string
     */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
     * Charge card billing State province code
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
     * Charge card billing address postal code.  This is a required field for postal countries.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Charge card billing address postal code.  This is a required field for postal countries.
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
    * Charge card billing address country or territory code defined by ISO-3166.
    
    Upper-case two letter string. For Discover card it should be US.
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Charge card billing address country or territory code defined by ISO-3166.
    
    Upper-case two letter string. For Discover card it should be US.
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