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
     * Address Line of the consignee. Only first two Address Lines will be printed on the label.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Consignee's city. 30 characters are accepted, but only 15 characters will be printed on the label.
     *
     * @var string
     */
    protected $city;
    /**
    * Consignee's state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/ Canadian Province code.
    
    If the country or territory is Ireland, the StateProvinceCode will contain the county.
    
    *
    * @var string
    */
    protected $stateProvinceCode;
    /**
    * Consignee's postal code.  If the ShipTo country or territory is US or Puerto Rico, 5 or 9 digits are required.
    
    If the ShipTo country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
    Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
    
    *
    * @var string
    */
    protected $postalCode;
    /**
    * Consignee's country or territory code.  Must be a valid UPS Billing country or territory code.
    For Return Shipment the country or territory code must meet the following conditions:
    - At least two of the following country or territory codes are the same: ShipTo, ShipFrom, and Shipper.
    - None of the following country or territory codes are the same and are a member of the EU: ShipTo, ShipFrom, and Shipper.
    - If any of the two following country or territory codes: ShipTo/ ShipFrom/ Shipper are members in EU otherwise check if the shipper has Third country or territory Contract.
    
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
     * Address Line of the consignee. Only first two Address Lines will be printed on the label.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address Line of the consignee. Only first two Address Lines will be printed on the label.
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
    * Consignee's state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/ Canadian Province code.
    
    If the country or territory is Ireland, the StateProvinceCode will contain the county.
    
    *
    * @return string
    */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
    * Consignee's state or province code. Required for US or Canada.  If destination is US or CA, then the value must be a valid US State/ Canadian Province code.
    
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
    * Consignee's postal code.  If the ShipTo country or territory is US or Puerto Rico, 5 or 9 digits are required.
    
    If the ShipTo country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
    Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
    
    *
    * @return string
    */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
    * Consignee's postal code.  If the ShipTo country or territory is US or Puerto Rico, 5 or 9 digits are required.
    
    If the ShipTo country or territory is CA, then the postal code is required and must be 6 alphanumeric characters whose format is A#A#A# where A is an uppercase letter and # is a digit.
    
    Otherwise optional. For all other countries or territories the postal code is optional and must be no more than 9 alphanumeric characters long.
    
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
    * Consignee's country or territory code.  Must be a valid UPS Billing country or territory code.
    For Return Shipment the country or territory code must meet the following conditions:
    - At least two of the following country or territory codes are the same: ShipTo, ShipFrom, and Shipper.
    - None of the following country or territory codes are the same and are a member of the EU: ShipTo, ShipFrom, and Shipper.
    - If any of the two following country or territory codes: ShipTo/ ShipFrom/ Shipper are members in EU otherwise check if the shipper has Third country or territory Contract.
    
    *
    * @return string
    */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
    * Consignee's country or territory code.  Must be a valid UPS Billing country or territory code.
    For Return Shipment the country or territory code must meet the following conditions:
    - At least two of the following country or territory codes are the same: ShipTo, ShipFrom, and Shipper.
    - None of the following country or territory codes are the same and are a member of the EU: ShipTo, ShipFrom, and Shipper.
    - If any of the two following country or territory codes: ShipTo/ ShipFrom/ Shipper are members in EU otherwise check if the shipper has Third country or territory Contract.
    
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