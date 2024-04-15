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
     * Name. (Also includes the building name)Return if available.
     *
     * @var string|null
     */
    protected $consigneeName;
    /**
     * Address Line Information of the UPS location The address level or Intersection information. Only two address lines will be returned. The second line may contain such information as the building name, the suite, and room.
     *
     * @var string|null
     */
    protected $addressLine;
    /**
     * Subdivision within a City.� e.g., a Barrio.
     *
     * @var string|null
     */
    protected $politicalDivision3;
    /**
     * City.
     *
     * @var string|null
     */
    protected $politicalDivision2;
    /**
     * State/Province.
     *
     * @var string|null
     */
    protected $politicalDivision1;
    /**
     * Postal Code.
     *
     * @var string|null
     */
    protected $postcodePrimaryLow;
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @var string|null
     */
    protected $postcodeExtendedLow;
    /**
     * A country or territory code. Valid values to be returned are: US-United States (meaning US 50).
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Name. (Also includes the building name)Return if available.
     *
     * @return string|null
     */
    public function getConsigneeName() : ?string
    {
        return $this->consigneeName;
    }
    /**
     * Name. (Also includes the building name)Return if available.
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
     * Address Line Information of the UPS location The address level or Intersection information. Only two address lines will be returned. The second line may contain such information as the building name, the suite, and room.
     *
     * @return string|null
     */
    public function getAddressLine() : ?string
    {
        return $this->addressLine;
    }
    /**
     * Address Line Information of the UPS location The address level or Intersection information. Only two address lines will be returned. The second line may contain such information as the building name, the suite, and room.
     *
     * @param string|null $addressLine
     *
     * @return self
     */
    public function setAddressLine(?string $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * Subdivision within a City.� e.g., a Barrio.
     *
     * @return string|null
     */
    public function getPoliticalDivision3() : ?string
    {
        return $this->politicalDivision3;
    }
    /**
     * Subdivision within a City.� e.g., a Barrio.
     *
     * @param string|null $politicalDivision3
     *
     * @return self
     */
    public function setPoliticalDivision3(?string $politicalDivision3) : self
    {
        $this->initialized['politicalDivision3'] = true;
        $this->politicalDivision3 = $politicalDivision3;
        return $this;
    }
    /**
     * City.
     *
     * @return string|null
     */
    public function getPoliticalDivision2() : ?string
    {
        return $this->politicalDivision2;
    }
    /**
     * City.
     *
     * @param string|null $politicalDivision2
     *
     * @return self
     */
    public function setPoliticalDivision2(?string $politicalDivision2) : self
    {
        $this->initialized['politicalDivision2'] = true;
        $this->politicalDivision2 = $politicalDivision2;
        return $this;
    }
    /**
     * State/Province.
     *
     * @return string|null
     */
    public function getPoliticalDivision1() : ?string
    {
        return $this->politicalDivision1;
    }
    /**
     * State/Province.
     *
     * @param string|null $politicalDivision1
     *
     * @return self
     */
    public function setPoliticalDivision1(?string $politicalDivision1) : self
    {
        $this->initialized['politicalDivision1'] = true;
        $this->politicalDivision1 = $politicalDivision1;
        return $this;
    }
    /**
     * Postal Code.
     *
     * @return string|null
     */
    public function getPostcodePrimaryLow() : ?string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Postal Code.
     *
     * @param string|null $postcodePrimaryLow
     *
     * @return self
     */
    public function setPostcodePrimaryLow(?string $postcodePrimaryLow) : self
    {
        $this->initialized['postcodePrimaryLow'] = true;
        $this->postcodePrimaryLow = $postcodePrimaryLow;
        return $this;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @return string|null
     */
    public function getPostcodeExtendedLow() : ?string
    {
        return $this->postcodeExtendedLow;
    }
    /**
     * 4 Digit postal code extension. Valid for US only.
     *
     * @param string|null $postcodeExtendedLow
     *
     * @return self
     */
    public function setPostcodeExtendedLow(?string $postcodeExtendedLow) : self
    {
        $this->initialized['postcodeExtendedLow'] = true;
        $this->postcodeExtendedLow = $postcodeExtendedLow;
        return $this;
    }
    /**
     * A country or territory code. Valid values to be returned are: US-United States (meaning US 50).
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * A country or territory code. Valid values to be returned are: US-United States (meaning US 50).
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}