<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipToAddress extends \ArrayObject
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
     * Consignee's name.
     *
     * @var string
     */
    protected $consigneeName;
    /**
     * Address Line 1 of the Consignee.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Address Line 2 of the Consignee.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Address Line 3 of the Consignee.
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Consignee's City.
     *
     * @var string
     */
    protected $city;
    /**
     * Consignee's state or province code. Must be valid US state. If the consignee's country or territory  is US or CA a two character code is required. Otherwise, the StateProvinceCode is optional.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Consignee's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
     *
     * @var string
     */
    protected $postalCode;
    /**
    * Consignee's country or territory  code.
    
    Valid values: CA,MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC and VA
    
    *
    * @var string
    */
    protected $countryCode;
    /**
     * Consignee's name.
     *
     * @return string
     */
    public function getConsigneeName() : string
    {
        return $this->consigneeName;
    }
    /**
     * Consignee's name.
     *
     * @param string $consigneeName
     *
     * @return self
     */
    public function setConsigneeName(string $consigneeName) : self
    {
        $this->initialized['consigneeName'] = true;
        $this->consigneeName = $consigneeName;
        return $this;
    }
    /**
     * Address Line 1 of the Consignee.
     *
     * @return string
     */
    public function getAddressLine1() : string
    {
        return $this->addressLine1;
    }
    /**
     * Address Line 1 of the Consignee.
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1) : self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Address Line 2 of the Consignee.
     *
     * @return string
     */
    public function getAddressLine2() : string
    {
        return $this->addressLine2;
    }
    /**
     * Address Line 2 of the Consignee.
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2) : self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Address Line 3 of the Consignee.
     *
     * @return string
     */
    public function getAddressLine3() : string
    {
        return $this->addressLine3;
    }
    /**
     * Address Line 3 of the Consignee.
     *
     * @param string $addressLine3
     *
     * @return self
     */
    public function setAddressLine3(string $addressLine3) : self
    {
        $this->initialized['addressLine3'] = true;
        $this->addressLine3 = $addressLine3;
        return $this;
    }
    /**
     * Consignee's City.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Consignee's City.
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
     * Consignee's state or province code. Must be valid US state. If the consignee's country or territory  is US or CA a two character code is required. Otherwise, the StateProvinceCode is optional.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Consignee's state or province code. Must be valid US state. If the consignee's country or territory  is US or CA a two character code is required. Otherwise, the StateProvinceCode is optional.
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
     * Consignee's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Consignee's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
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
    * Consignee's country or territory  code.
    
    Valid values: CA,MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC and VA
    
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Consignee's country or territory  code.
    
    Valid values: CA,MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC and VA
    
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