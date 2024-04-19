<?php

namespace ShipStream\Ups\Api\Model;

class GeocodeCandidateAddressKeyFormat extends \ArrayObject
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
     * Name. Not relevant for candidate list.
     *
     * @var string
     */
    protected $consigneeName;
    /**
     * Address Line Information. The address level or Intersection information must be returned if provided in the request. The AddressLine will be a combination of up to 3 separate address lines, each separated by a new line character.
     *
     * @var string
     */
    protected $addressLine;
    /**
     * Subdivision within a City. e.g., a Barrio.
     *
     * @var string
     */
    protected $politicalDivision3;
    /**
     * City.
     *
     * @var string
     */
    protected $politicalDivision2;
    /**
     * State/Province.
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
     * 4 Digit postal code extension. Valid for US only.
     *
     * @var string
     */
    protected $postcodeExtendedLow;
    /**
     * A country or territory code. Valid values for candidates to be returned are: US-United States (meaning US 50)
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Name. Not relevant for candidate list.
     *
     * @return string
     */
    public function getConsigneeName() : string
    {
        return $this->consigneeName;
    }
    /**
     * Name. Not relevant for candidate list.
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
     * Address Line Information. The address level or Intersection information must be returned if provided in the request. The AddressLine will be a combination of up to 3 separate address lines, each separated by a new line character.
     *
     * @return string
     */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
     * Address Line Information. The address level or Intersection information must be returned if provided in the request. The AddressLine will be a combination of up to 3 separate address lines, each separated by a new line character.
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
     * Subdivision within a City. e.g., a Barrio.
     *
     * @return string
     */
    public function getPoliticalDivision3() : string
    {
        return $this->politicalDivision3;
    }
    /**
     * Subdivision within a City. e.g., a Barrio.
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
     * City.
     *
     * @return string
     */
    public function getPoliticalDivision2() : string
    {
        return $this->politicalDivision2;
    }
    /**
     * City.
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
     * State/Province.
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * State/Province.
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
     * A country or territory code. Valid values for candidates to be returned are: US-United States (meaning US 50)
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * A country or territory code. Valid values for candidates to be returned are: US-United States (meaning US 50)
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