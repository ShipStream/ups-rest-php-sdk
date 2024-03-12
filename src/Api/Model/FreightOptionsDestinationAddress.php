<?php

namespace ShipStream\Ups\Api\Model;

class FreightOptionsDestinationAddress extends \ArrayObject
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
     * The city of pickup address if available.  It is required for non-postal country Ireland (IE).
     *
     * @var string
     */
    protected $city;
    /**
    * 1. It means district code for Hong Kong (HK)
    2. It means county for Ireland (IE)
    3. It means state or province for all the postal countries  It is required for non-postal countries including HK and IE.
    *
    * @var string
    */
    protected $stateProvince;
    /**
     * Postal Code for postal countries.  It does not apply to non-postal countries such as IE and HK
     *
     * @var string
     */
    protected $postalCode;
    /**
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.  Upper-case two-letter string.
    *
    * @var string
    */
    protected $countryCode;
    /**
     * The city of pickup address if available.  It is required for non-postal country Ireland (IE).
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The city of pickup address if available.  It is required for non-postal country Ireland (IE).
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
    * 1. It means district code for Hong Kong (HK)
    2. It means county for Ireland (IE)
    3. It means state or province for all the postal countries  It is required for non-postal countries including HK and IE.
    *
    * @return string
    */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
    * 1. It means district code for Hong Kong (HK)
    2. It means county for Ireland (IE)
    3. It means state or province for all the postal countries  It is required for non-postal countries including HK and IE.
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
     * Postal Code for postal countries.  It does not apply to non-postal countries such as IE and HK
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal Code for postal countries.  It does not apply to non-postal countries such as IE and HK
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
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.  Upper-case two-letter string.
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * The pickup country or territory code as defined by ISO-3166. 
    Refer to Country or Territory Codes in the Appendix for valid values.  Upper-case two-letter string.
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