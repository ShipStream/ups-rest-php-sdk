<?php

namespace ShipStream\Ups\Api\Model;

class XAVRequestAddressKeyFormat extends \ArrayObject
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
     * Name of business, company or person. Ignored if user selects the RegionalRequestIndicator.
     *
     * @var string
     */
    protected $consigneeName;
    /**
     * Name of the building. Ignored if user selects the RegionalRequestIndicator.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Address line (street number, street name and street type) used for street level information. Additional secondary information (apartment, suite, floor, etc.). Applicable to US and PR only. Ignored if user selects the RegionalRequestIndicator.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
    * If this node is present the following tags will be ignored:
    
    - Political Division 2
    - Political Division 1
    - PostcodePrimaryLow
    - PostcodeExtendedLow
    
    Valid only for US or PR origins only.  Using this tag for non US/PR origins may cause address format errors.
    
    *
    * @var string
    */
    protected $region;
    /**
     * City or Town name.
     *
     * @var string
     */
    protected $politicalDivision2;
    /**
     * State or Province/Territory name.
     *
     * @var string
     */
    protected $politicalDivision1;
    /**
     * Postal Code.
     *
     * @var string
     */
    protected $postcodePrimaryLow;
    /**
     * 4 digit Postal Code extension. For US use only.
     *
     * @var string
     */
    protected $postcodeExtendedLow;
    /**
     * Puerto Rico Political Division 3. Only Valid for Puerto Rico.
     *
     * @var string
     */
    protected $urbanization;
    /**
     * Country or Territory Code. For a list of valid values, refer to the Address Validation API Supported Countries or Territories table in the Appendix.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Name of business, company or person. Ignored if user selects the RegionalRequestIndicator.
     *
     * @return string
     */
    public function getConsigneeName() : string
    {
        return $this->consigneeName;
    }
    /**
     * Name of business, company or person. Ignored if user selects the RegionalRequestIndicator.
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
     * Name of the building. Ignored if user selects the RegionalRequestIndicator.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Name of the building. Ignored if user selects the RegionalRequestIndicator.
     *
     * @param string $attentionName
     *
     * @return self
     */
    public function setAttentionName(string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * Address line (street number, street name and street type) used for street level information. Additional secondary information (apartment, suite, floor, etc.). Applicable to US and PR only. Ignored if user selects the RegionalRequestIndicator.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address line (street number, street name and street type) used for street level information. Additional secondary information (apartment, suite, floor, etc.). Applicable to US and PR only. Ignored if user selects the RegionalRequestIndicator.
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
    * If this node is present the following tags will be ignored:
    
    - Political Division 2
    - Political Division 1
    - PostcodePrimaryLow
    - PostcodeExtendedLow
    
    Valid only for US or PR origins only.  Using this tag for non US/PR origins may cause address format errors.
    
    *
    * @return string
    */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
    * If this node is present the following tags will be ignored:
    
    - Political Division 2
    - Political Division 1
    - PostcodePrimaryLow
    - PostcodeExtendedLow
    
    Valid only for US or PR origins only.  Using this tag for non US/PR origins may cause address format errors.
    
    *
    * @param string $region
    *
    * @return self
    */
    public function setRegion(string $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * City or Town name.
     *
     * @return string
     */
    public function getPoliticalDivision2() : string
    {
        return $this->politicalDivision2;
    }
    /**
     * City or Town name.
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
     * State or Province/Territory name.
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * State or Province/Territory name.
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
     * Postal Code.
     *
     * @return string
     */
    public function getPostcodePrimaryLow() : string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Postal Code.
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
     * 4 digit Postal Code extension. For US use only.
     *
     * @return string
     */
    public function getPostcodeExtendedLow() : string
    {
        return $this->postcodeExtendedLow;
    }
    /**
     * 4 digit Postal Code extension. For US use only.
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
     * Puerto Rico Political Division 3. Only Valid for Puerto Rico.
     *
     * @return string
     */
    public function getUrbanization() : string
    {
        return $this->urbanization;
    }
    /**
     * Puerto Rico Political Division 3. Only Valid for Puerto Rico.
     *
     * @param string $urbanization
     *
     * @return self
     */
    public function setUrbanization(string $urbanization) : self
    {
        $this->initialized['urbanization'] = true;
        $this->urbanization = $urbanization;
        return $this;
    }
    /**
     * Country or Territory Code. For a list of valid values, refer to the Address Validation API Supported Countries or Territories table in the Appendix.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory Code. For a list of valid values, refer to the Address Validation API Supported Countries or Territories table in the Appendix.
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