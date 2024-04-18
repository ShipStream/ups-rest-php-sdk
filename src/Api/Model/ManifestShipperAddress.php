<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipperAddress extends \ArrayObject
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
     * Address Line 1 of the Shipper.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Address Line 2 of the Shipper. Usually room/floor information.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Address Line 3 of the shipper. Usually department information.
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Shipper's City.
     *
     * @var string
     */
    protected $city;
    /**
     * Shipper's state or province code. Must be valid US state. If the Shipper's country or territory is US or CA a two character code is required, otherwise the StateProvinceCode is optional.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Shipper's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
     *
     * @var string
     */
    protected $postalCode;
    /**
    * Shipper's country or territory code.
    
    Valid values: CA,MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC and VA
    
    *
    * @var string
    */
    protected $countryCode;
    /**
     * If tag is present, then the address is residential address. Pickup location residential address indicator. The presence indicates residential address, the absence indicates a business address.
     *
     * @var string
     */
    protected $residentialAddressIndicator;
    /**
     * Address Line 1 of the Shipper.
     *
     * @return string
     */
    public function getAddressLine1() : string
    {
        return $this->addressLine1;
    }
    /**
     * Address Line 1 of the Shipper.
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
     * Address Line 2 of the Shipper. Usually room/floor information.
     *
     * @return string
     */
    public function getAddressLine2() : string
    {
        return $this->addressLine2;
    }
    /**
     * Address Line 2 of the Shipper. Usually room/floor information.
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
     * Address Line 3 of the shipper. Usually department information.
     *
     * @return string
     */
    public function getAddressLine3() : string
    {
        return $this->addressLine3;
    }
    /**
     * Address Line 3 of the shipper. Usually department information.
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
     * Shipper's City.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Shipper's City.
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
     * Shipper's state or province code. Must be valid US state. If the Shipper's country or territory is US or CA a two character code is required, otherwise the StateProvinceCode is optional.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Shipper's state or province code. Must be valid US state. If the Shipper's country or territory is US or CA a two character code is required, otherwise the StateProvinceCode is optional.
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
     * Shipper's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Shipper's postal code. If the address is US then 5 or 9 digits are required. CA addresses must provide a 6 character postal code that has the format of A#A#A#, where A is a alphabetic character and # is numeric digit. Otherwise, 1 to 9 alphanumeric characters are allowed.
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
    * Shipper's country or territory code.
    
    Valid values: CA,MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC and VA
    
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Shipper's country or territory code.
    
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
    /**
     * If tag is present, then the address is residential address. Pickup location residential address indicator. The presence indicates residential address, the absence indicates a business address.
     *
     * @return string
     */
    public function getResidentialAddressIndicator() : string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * If tag is present, then the address is residential address. Pickup location residential address indicator. The presence indicates residential address, the absence indicates a business address.
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