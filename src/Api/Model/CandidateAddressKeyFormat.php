<?php

namespace ShipStream\Ups\Api\Model;

class CandidateAddressKeyFormat extends \ArrayObject
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
     * Name of business, company or person. Not returned if user selects the RegionalRequestIndicator.
     *
     * @var string|null
     */
    protected $consigneeName;
    /**
     * Name of building. Not returned if user selects the RegionalRequestIndicator.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Address line (street number, street name and street type, and political division 1, political division 2 and postal code) used for street level information. Additional secondary information (apartment, suite, floor, etc.) Applicable to US and PR only.  Not returned if user selects the RegionalRequestIndicator.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * Single entry containing in this order  Political Division 2, Political Division 1 and Post Code Primary Low and/or PostcodeExtendedLow.
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
     * State/Province.  Returned if the location is within a State/Province/Territory. For International: returned if user enters valid Country or Territory Code, and City/postal code and it has a match.  For Domestic addresses, the value must be a valid 2-character value (per US Mail standards).  For International the full State or Province name will be returned.
     *
     * @var string
     */
    protected $politicalDivision1;
    /**
     * Low-end Postal Code. Returned for countries or territories with Postal Codes. May be alphanumeric.
     *
     * @var string
     */
    protected $postcodePrimaryLow;
    /**
     * Low-end extended postal code in a range. Example in quotes: Postal Code 30076-'1234'.  Only returned in candidate list. May be alphanumeric
     *
     * @var string
     */
    protected $postcodeExtendedLow;
    /**
     * Puerto Rico Political Division 3. Only Valid for Puerto Rico.
     *
     * @var string|null
     */
    protected $urbanization;
    /**
     * A country or territory code. Required to be returned.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Name of business, company or person. Not returned if user selects the RegionalRequestIndicator.
     *
     * @return string|null
     */
    public function getConsigneeName() : ?string
    {
        return $this->consigneeName;
    }
    /**
     * Name of business, company or person. Not returned if user selects the RegionalRequestIndicator.
     *
     * @param string|null $consigneeName
     *
     * @return self
     */
    public function setConsigneeName(?string $consigneeName) : self
    {
        $this->initialized['consigneeName'] = true;
        $this->consigneeName = $consigneeName;
        return $this;
    }
    /**
     * Name of building. Not returned if user selects the RegionalRequestIndicator.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Name of building. Not returned if user selects the RegionalRequestIndicator.
     *
     * @param string|null $attentionName
     *
     * @return self
     */
    public function setAttentionName(?string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * Address line (street number, street name and street type, and political division 1, political division 2 and postal code) used for street level information. Additional secondary information (apartment, suite, floor, etc.) Applicable to US and PR only.  Not returned if user selects the RegionalRequestIndicator.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address line (street number, street name and street type, and political division 1, political division 2 and postal code) used for street level information. Additional secondary information (apartment, suite, floor, etc.) Applicable to US and PR only.  Not returned if user selects the RegionalRequestIndicator.
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
     * Single entry containing in this order  Political Division 2, Political Division 1 and Post Code Primary Low and/or PostcodeExtendedLow.
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
     * Single entry containing in this order  Political Division 2, Political Division 1 and Post Code Primary Low and/or PostcodeExtendedLow.
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
     * State/Province.  Returned if the location is within a State/Province/Territory. For International: returned if user enters valid Country or Territory Code, and City/postal code and it has a match.  For Domestic addresses, the value must be a valid 2-character value (per US Mail standards).  For International the full State or Province name will be returned.
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * State/Province.  Returned if the location is within a State/Province/Territory. For International: returned if user enters valid Country or Territory Code, and City/postal code and it has a match.  For Domestic addresses, the value must be a valid 2-character value (per US Mail standards).  For International the full State or Province name will be returned.
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
     * Low-end Postal Code. Returned for countries or territories with Postal Codes. May be alphanumeric.
     *
     * @return string
     */
    public function getPostcodePrimaryLow() : string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Low-end Postal Code. Returned for countries or territories with Postal Codes. May be alphanumeric.
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
     * Low-end extended postal code in a range. Example in quotes: Postal Code 30076-'1234'.  Only returned in candidate list. May be alphanumeric
     *
     * @return string
     */
    public function getPostcodeExtendedLow() : string
    {
        return $this->postcodeExtendedLow;
    }
    /**
     * Low-end extended postal code in a range. Example in quotes: Postal Code 30076-'1234'.  Only returned in candidate list. May be alphanumeric
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
     * @return string|null
     */
    public function getUrbanization() : ?string
    {
        return $this->urbanization;
    }
    /**
     * Puerto Rico Political Division 3. Only Valid for Puerto Rico.
     *
     * @param string|null $urbanization
     *
     * @return self
     */
    public function setUrbanization(?string $urbanization) : self
    {
        $this->initialized['urbanization'] = true;
        $this->urbanization = $urbanization;
        return $this;
    }
    /**
     * A country or territory code. Required to be returned.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * A country or territory code. Required to be returned.
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