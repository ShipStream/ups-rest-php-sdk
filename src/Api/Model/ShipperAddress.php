<?php

namespace ShipStream\Ups\Api\Model;

class ShipperAddress extends \ArrayObject
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
    * The Shipper street address including name and number (when applicable). Up to three occurrences are allowed; only the first is printed on the label.
    
    35 characters are accepted, but for the first occurrence, only 30 characters will be printed on the label for return shipments.
    
    *
    * @var list<string>
    */
    protected $addressLine;
    /**
     * Shipper's City.   For forward Shipment 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @var string
     */
    protected $city;
    /**
    * Shipper's state or province code.
    
    For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.  For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account.
    
    *
    * @var string
    */
    protected $stateProvinceCode;
    /**
     * Shipper's postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
    * Shipper's country or territory code.
    
    Refer to country or territory Codes in the Appendix for valid values.
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled.
    
    *
    * @var string
    */
    protected $countryCode;
    /**
    * The Shipper street address including name and number (when applicable). Up to three occurrences are allowed; only the first is printed on the label.
    
    35 characters are accepted, but for the first occurrence, only 30 characters will be printed on the label for return shipments.
    
    *
    * @return list<string>
    */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
    * The Shipper street address including name and number (when applicable). Up to three occurrences are allowed; only the first is printed on the label.
    
    35 characters are accepted, but for the first occurrence, only 30 characters will be printed on the label for return shipments.
    
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
     * Shipper's City.   For forward Shipment 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Shipper's City.   For forward Shipment 30 characters are accepted, but only 15 characters will be printed on the label.
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
    * Shipper's state or province code.
    
    For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.  For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account.
    
    *
    * @return string
    */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
    * Shipper's state or province code.
    
    For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.  For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account.
    
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
     * Shipper's postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Shipper's postal code.
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
    
    Refer to country or territory Codes in the Appendix for valid values.
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled.
    
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Shipper's country or territory code.
    
    Refer to country or territory Codes in the Appendix for valid values.
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled.
    
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