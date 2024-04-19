<?php

namespace ShipStream\Ups\Api\Model;

class OriginAddressAddressKeyFormat extends \ArrayObject
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
     * Name. Not relevant for this tool
     *
     * @var string
     */
    protected $consigneeName;
    /**
     * Address Line Information. The user may submit street level address information or provide Intersection information.
     *
     * @var string
     */
    protected $addressLine;
    /**
     * Additional Address Line Information.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Additional Address Line Information.
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Barrio or other sub-division of City
     *
     * @var string
     */
    protected $politicalDivision3;
    /**
     * City or Town.
     *
     * @var string
     */
    protected $politicalDivision2;
    /**
     * State or province
     *
     * @var string
     */
    protected $politicalDivision1;
    /**
     * Main postal code. Required if the user does not submit the City, State/Province address combination.
     *
     * @var string
     */
    protected $postcodePrimaryLow;
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @var string
     */
    protected $postcodeExtendedLow;
    /**
     * Two-character country or territory abbreviation
     *
     * @var string
     */
    protected $countryCode;
    /**
    * Single line search information. Can contain values of origin address in a single line. Will override other origin address information.
    
    Conditionally Required for Non-Postal Code Countries. Applicable Country Ireland (IE)
    
    SingleLineAddress used for the lookup
    
    SingleLineAddress (Format - CSV) (\"Values:\" + postalCode + city + state + address + landmark	+ phoneNumber)
    
    *
    * @var string
    */
    protected $singleLineAddress;
    /**
     * Name. Not relevant for this tool
     *
     * @return string
     */
    public function getConsigneeName() : string
    {
        return $this->consigneeName;
    }
    /**
     * Name. Not relevant for this tool
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
     * Address Line Information. The user may submit street level address information or provide Intersection information.
     *
     * @return string
     */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
     * Address Line Information. The user may submit street level address information or provide Intersection information.
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
     * Additional Address Line Information.
     *
     * @return string
     */
    public function getAddressLine2() : string
    {
        return $this->addressLine2;
    }
    /**
     * Additional Address Line Information.
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
     * Additional Address Line Information.
     *
     * @return string
     */
    public function getAddressLine3() : string
    {
        return $this->addressLine3;
    }
    /**
     * Additional Address Line Information.
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
     * Barrio or other sub-division of City
     *
     * @return string
     */
    public function getPoliticalDivision3() : string
    {
        return $this->politicalDivision3;
    }
    /**
     * Barrio or other sub-division of City
     *
     * @param string $politicalDivision3
     *
     * @return self
     */
    public function setPoliticalDivision3(string $politicalDivision3) : self
    {
        $this->initialized['politicalDivision3'] = true;
        $this->politicalDivision3 = $politicalDivision3;
        return $this;
    }
    /**
     * City or Town.
     *
     * @return string
     */
    public function getPoliticalDivision2() : string
    {
        return $this->politicalDivision2;
    }
    /**
     * City or Town.
     *
     * @param string $politicalDivision2
     *
     * @return self
     */
    public function setPoliticalDivision2(string $politicalDivision2) : self
    {
        $this->initialized['politicalDivision2'] = true;
        $this->politicalDivision2 = $politicalDivision2;
        return $this;
    }
    /**
     * State or province
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * State or province
     *
     * @param string $politicalDivision1
     *
     * @return self
     */
    public function setPoliticalDivision1(string $politicalDivision1) : self
    {
        $this->initialized['politicalDivision1'] = true;
        $this->politicalDivision1 = $politicalDivision1;
        return $this;
    }
    /**
     * Main postal code. Required if the user does not submit the City, State/Province address combination.
     *
     * @return string
     */
    public function getPostcodePrimaryLow() : string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Main postal code. Required if the user does not submit the City, State/Province address combination.
     *
     * @param string $postcodePrimaryLow
     *
     * @return self
     */
    public function setPostcodePrimaryLow(string $postcodePrimaryLow) : self
    {
        $this->initialized['postcodePrimaryLow'] = true;
        $this->postcodePrimaryLow = $postcodePrimaryLow;
        return $this;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @return string
     */
    public function getPostcodeExtendedLow() : string
    {
        return $this->postcodeExtendedLow;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @param string $postcodeExtendedLow
     *
     * @return self
     */
    public function setPostcodeExtendedLow(string $postcodeExtendedLow) : self
    {
        $this->initialized['postcodeExtendedLow'] = true;
        $this->postcodeExtendedLow = $postcodeExtendedLow;
        return $this;
    }
    /**
     * Two-character country or territory abbreviation
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Two-character country or territory abbreviation
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
    * Single line search information. Can contain values of origin address in a single line. Will override other origin address information.
    
    Conditionally Required for Non-Postal Code Countries. Applicable Country Ireland (IE)
    
    SingleLineAddress used for the lookup
    
    SingleLineAddress (Format - CSV) (\"Values:\" + postalCode + city + state + address + landmark	+ phoneNumber)
    
    *
    * @return string
    */
    public function getSingleLineAddress() : string
    {
        return $this->singleLineAddress;
    }
    /**
    * Single line search information. Can contain values of origin address in a single line. Will override other origin address information.
    
    Conditionally Required for Non-Postal Code Countries. Applicable Country Ireland (IE)
    
    SingleLineAddress used for the lookup
    
    SingleLineAddress (Format - CSV) (\"Values:\" + postalCode + city + state + address + landmark	+ phoneNumber)
    
    *
    * @param string $singleLineAddress
    *
    * @return self
    */
    public function setSingleLineAddress(string $singleLineAddress) : self
    {
        $this->initialized['singleLineAddress'] = true;
        $this->singleLineAddress = $singleLineAddress;
        return $this;
    }
}