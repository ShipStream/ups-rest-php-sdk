<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryLocationAddressArtifactFormat extends \ArrayObject
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
     * Consignee's name at the location where package is delivered.
     *
     * @var string|null
     */
    protected $consigneeName;
    /**
     * Street number where package is delivered.
     *
     * @var string|null
     */
    protected $streetNumberLow;
    /**
     * Street prefix where package is delivered, e.g. N, SE.
     *
     * @var string|null
     */
    protected $streetPrefix;
    /**
     * Street name where package is delivered.
     *
     * @var string|null
     */
    protected $streetName;
    /**
     * Street type where package is delivered.
     *
     * @var string|null
     */
    protected $streetType;
    /**
     * Street suffix where package is delivered, e.g. N, SE.
     *
     * @var string|null
     */
    protected $streetSuffix;
    /**
     * Building name where package is delivered.
     *
     * @var string|null
     */
    protected $buildingName;
    /**
     * 
     *
     * @var list<AddressArtifactFormatAddressExtendedInformation>|null
     */
    protected $addressExtendedInformation;
    /**
     * The neighborhood, town, barrio etc.
     *
     * @var string|null
     */
    protected $politicalDivision3;
    /**
     * City name where package is delivered.
     *
     * @var string|null
     */
    protected $politicalDivision2;
    /**
     * Abbreviated state or province name where package is delivered.
     *
     * @var string|null
     */
    protected $politicalDivision1;
    /**
     * Abbreviated country or territory name where package is delivered.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Postal Code where package is delivered. Required if the user does not submit the City, Alphanumeric State/Province address combination.
     *
     * @var string|null
     */
    protected $postcodePrimaryLow;
    /**
     * 4 Digit postal code extension where package is delivered.� Valid for US only.
     *
     * @var string|null
     */
    protected $postcodeExtendedLow;
    /**
     * Residential address indicator for the location where package is delivered. The presence indicates residential address, the absence indicates a business address.
     *
     * @var string|null
     */
    protected $residentialAddressIndicator;
    /**
     * Consignee's name at the location where package is delivered.
     *
     * @return string|null
     */
    public function getConsigneeName() : ?string
    {
        return $this->consigneeName;
    }
    /**
     * Consignee's name at the location where package is delivered.
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
     * Street number where package is delivered.
     *
     * @return string|null
     */
    public function getStreetNumberLow() : ?string
    {
        return $this->streetNumberLow;
    }
    /**
     * Street number where package is delivered.
     *
     * @param string|null $streetNumberLow
     *
     * @return self
     */
    public function setStreetNumberLow(?string $streetNumberLow) : self
    {
        $this->initialized['streetNumberLow'] = true;
        $this->streetNumberLow = $streetNumberLow;
        return $this;
    }
    /**
     * Street prefix where package is delivered, e.g. N, SE.
     *
     * @return string|null
     */
    public function getStreetPrefix() : ?string
    {
        return $this->streetPrefix;
    }
    /**
     * Street prefix where package is delivered, e.g. N, SE.
     *
     * @param string|null $streetPrefix
     *
     * @return self
     */
    public function setStreetPrefix(?string $streetPrefix) : self
    {
        $this->initialized['streetPrefix'] = true;
        $this->streetPrefix = $streetPrefix;
        return $this;
    }
    /**
     * Street name where package is delivered.
     *
     * @return string|null
     */
    public function getStreetName() : ?string
    {
        return $this->streetName;
    }
    /**
     * Street name where package is delivered.
     *
     * @param string|null $streetName
     *
     * @return self
     */
    public function setStreetName(?string $streetName) : self
    {
        $this->initialized['streetName'] = true;
        $this->streetName = $streetName;
        return $this;
    }
    /**
     * Street type where package is delivered.
     *
     * @return string|null
     */
    public function getStreetType() : ?string
    {
        return $this->streetType;
    }
    /**
     * Street type where package is delivered.
     *
     * @param string|null $streetType
     *
     * @return self
     */
    public function setStreetType(?string $streetType) : self
    {
        $this->initialized['streetType'] = true;
        $this->streetType = $streetType;
        return $this;
    }
    /**
     * Street suffix where package is delivered, e.g. N, SE.
     *
     * @return string|null
     */
    public function getStreetSuffix() : ?string
    {
        return $this->streetSuffix;
    }
    /**
     * Street suffix where package is delivered, e.g. N, SE.
     *
     * @param string|null $streetSuffix
     *
     * @return self
     */
    public function setStreetSuffix(?string $streetSuffix) : self
    {
        $this->initialized['streetSuffix'] = true;
        $this->streetSuffix = $streetSuffix;
        return $this;
    }
    /**
     * Building name where package is delivered.
     *
     * @return string|null
     */
    public function getBuildingName() : ?string
    {
        return $this->buildingName;
    }
    /**
     * Building name where package is delivered.
     *
     * @param string|null $buildingName
     *
     * @return self
     */
    public function setBuildingName(?string $buildingName) : self
    {
        $this->initialized['buildingName'] = true;
        $this->buildingName = $buildingName;
        return $this;
    }
    /**
     * 
     *
     * @return list<AddressArtifactFormatAddressExtendedInformation>|null
     */
    public function getAddressExtendedInformation() : ?array
    {
        return $this->addressExtendedInformation;
    }
    /**
     * 
     *
     * @param list<AddressArtifactFormatAddressExtendedInformation>|null $addressExtendedInformation
     *
     * @return self
     */
    public function setAddressExtendedInformation(?array $addressExtendedInformation) : self
    {
        $this->initialized['addressExtendedInformation'] = true;
        $this->addressExtendedInformation = $addressExtendedInformation;
        return $this;
    }
    /**
     * The neighborhood, town, barrio etc.
     *
     * @return string|null
     */
    public function getPoliticalDivision3() : ?string
    {
        return $this->politicalDivision3;
    }
    /**
     * The neighborhood, town, barrio etc.
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
     * City name where package is delivered.
     *
     * @return string|null
     */
    public function getPoliticalDivision2() : ?string
    {
        return $this->politicalDivision2;
    }
    /**
     * City name where package is delivered.
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
     * Abbreviated state or province name where package is delivered.
     *
     * @return string|null
     */
    public function getPoliticalDivision1() : ?string
    {
        return $this->politicalDivision1;
    }
    /**
     * Abbreviated state or province name where package is delivered.
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
     * Abbreviated country or territory name where package is delivered.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Abbreviated country or territory name where package is delivered.
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
    /**
     * Postal Code where package is delivered. Required if the user does not submit the City, Alphanumeric State/Province address combination.
     *
     * @return string|null
     */
    public function getPostcodePrimaryLow() : ?string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Postal Code where package is delivered. Required if the user does not submit the City, Alphanumeric State/Province address combination.
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
     * 4 Digit postal code extension where package is delivered.� Valid for US only.
     *
     * @return string|null
     */
    public function getPostcodeExtendedLow() : ?string
    {
        return $this->postcodeExtendedLow;
    }
    /**
     * 4 Digit postal code extension where package is delivered.� Valid for US only.
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
     * Residential address indicator for the location where package is delivered. The presence indicates residential address, the absence indicates a business address.
     *
     * @return string|null
     */
    public function getResidentialAddressIndicator() : ?string
    {
        return $this->residentialAddressIndicator;
    }
    /**
     * Residential address indicator for the location where package is delivered. The presence indicates residential address, the absence indicates a business address.
     *
     * @param string|null $residentialAddressIndicator
     *
     * @return self
     */
    public function setResidentialAddressIndicator(?string $residentialAddressIndicator) : self
    {
        $this->initialized['residentialAddressIndicator'] = true;
        $this->residentialAddressIndicator = $residentialAddressIndicator;
        return $this;
    }
}