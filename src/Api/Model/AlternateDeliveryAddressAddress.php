<?php

namespace ShipStream\Ups\Api\Model;

class AlternateDeliveryAddressAddress extends \ArrayObject
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
     * Address Line of the Retail Location.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Retail Location City.
     *
     * @var string
     */
    protected $city;
    /**
    * Retail Location state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/Canadian Province code.
    
    If the country or territory is Ireland, the StateProvinceCode will contain the county.
    
    *
    * @var string
    */
    protected $stateProvinceCode;
    /**
     * If the Alternate Delivery Address country or territory is US or Puerto Rico, 5 or 9 digits are required. The character - may be used to separate the first five digits and the last four digits. If the Alternate Delivery Address country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit. Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Retail Location country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Address Line of the Retail Location.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the Retail Location.
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
     * Retail Location City.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Retail Location City.
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
    * Retail Location state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/Canadian Province code.
    
    If the country or territory is Ireland, the StateProvinceCode will contain the county.
    
    *
    * @return string
    */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
    * Retail Location state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/Canadian Province code.
    
    If the country or territory is Ireland, the StateProvinceCode will contain the county.
    
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
     * If the Alternate Delivery Address country or territory is US or Puerto Rico, 5 or 9 digits are required. The character - may be used to separate the first five digits and the last four digits. If the Alternate Delivery Address country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit. Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * If the Alternate Delivery Address country or territory is US or Puerto Rico, 5 or 9 digits are required. The character - may be used to separate the first five digits and the last four digits. If the Alternate Delivery Address country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit. Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
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
     * Retail Location country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Retail Location country or territory code.
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