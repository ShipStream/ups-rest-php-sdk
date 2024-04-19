<?php

namespace ShipStream\Ups\Api\Model;

class BillThirdPartyAddress extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.  The postal code must be the same as the UPS Bill Third Party account number pickup address postal code.
    
    Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code.
    If the UPS accounts pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits.
    
    The character - may be used to separate the first five digits and the last four digits.
    
    If the UPS accounts pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
    *
    * @var string
    */
    protected $postalCode;
    /**
     * The country or territory code for the UPS accounts pickup address.
     *
     * @var string
     */
    protected $countryCode;
    /**
    * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.  The postal code must be the same as the UPS Bill Third Party account number pickup address postal code.
    
    Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code.
    If the UPS accounts pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits.
    
    The character - may be used to separate the first five digits and the last four digits.
    
    If the UPS accounts pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
    *
    * @return string
    */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
    * The postal code for the UPS accounts pickup address. The pickup postal code is the one that was entered in the UPS system when the account was set-up.  The postal code must be the same as the UPS Bill Third Party account number pickup address postal code.
    
    Required for United States and Canadian UPS accounts and/or if the UPS account pickup address has a postal code.
    If the UPS accounts pickup country or territory is US or Puerto Rico, the postal code is 5 or 9 digits.
    
    The character - may be used to separate the first five digits and the last four digits.
    
    If the UPS accounts pickup country or territory is CA, the postal code is 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
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
     * The country or territory code for the UPS accounts pickup address.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The country or territory code for the UPS accounts pickup address.
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