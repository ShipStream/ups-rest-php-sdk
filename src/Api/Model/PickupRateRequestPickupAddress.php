<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateRequestPickupAddress extends \ArrayObject
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
    * Detailed street address. 
    For Jan. 2010 release, only one AddressLine is allowed.
    *
    * @var string
    */
    protected $addressLine;
    /**
     * City or equivalent
     *
     * @var string
     */
    protected $city;
    /**
     * State province code or equivalent
     *
     * @var string
     */
    protected $stateProvince;
    /**
     * Postal code for countries with postal codes.
     *
     * @var string
     */
    protected $postalCode;
    /**
    * Upper-case two-char long country code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @var string
    */
    protected $countryCode;
    /**
    * Indicates if the pickup address is commerical or residential.
    Valid values:
    Y = Residential address
    N = Non-residential (Commercial) address (default)
    *
    * @var string
    */
    protected $residentialIndicator;
    /**
    * Detailed street address. 
    For Jan. 2010 release, only one AddressLine is allowed.
    *
    * @return string
    */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
    * Detailed street address. 
    For Jan. 2010 release, only one AddressLine is allowed.
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
     * City or equivalent
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * City or equivalent
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
     * State province code or equivalent
     *
     * @return string
     */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
     * State province code or equivalent
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
     * Postal code for countries with postal codes.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal code for countries with postal codes.
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
    * Upper-case two-char long country code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Upper-case two-char long country code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.
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
    * Indicates if the pickup address is commerical or residential.
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
    * Indicates if the pickup address is commerical or residential.
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