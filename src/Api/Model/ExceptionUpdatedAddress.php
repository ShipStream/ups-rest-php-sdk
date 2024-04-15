<?php

namespace ShipStream\Ups\Api\Model;

class ExceptionUpdatedAddress extends \ArrayObject
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
     * Consignee's name for package shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $consigneeName;
    /**
     * Street number of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $streetNumberLow;
    /**
     * Street prefix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $streetPrefix;
    /**
     * Street name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $streetName;
    /**
     * Street type of updated shipping address, e.g. ST. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $streetType;
    /**
     * Street suffix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $streetSuffix;
    /**
     * 
     *
     * @var list<UpdatedAddressAddressExtendedInformation>|null
     */
    protected $addressExtendedInformation;
    /**
     * The neighborhood, town, barrio etc. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $politicalDivision3;
    /**
     * City name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $politicalDivision2;
    /**
     * Abbreviated state or province name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $politicalDivision1;
    /**
     * Abbreviated country or territory name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Postal Code of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @var string|null
     */
    protected $postcodePrimaryLow;
    /**
     * Consignee's name for package shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getConsigneeName() : ?string
    {
        return $this->consigneeName;
    }
    /**
     * Consignee's name for package shipping address. It will be returned if there is any update due to exception.
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
     * Street number of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getStreetNumberLow() : ?string
    {
        return $this->streetNumberLow;
    }
    /**
     * Street number of updated shipping address. It will be returned if there is any update due to exception.
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
     * Street prefix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getStreetPrefix() : ?string
    {
        return $this->streetPrefix;
    }
    /**
     * Street prefix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
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
     * Street name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getStreetName() : ?string
    {
        return $this->streetName;
    }
    /**
     * Street name of updated shipping address. It will be returned if there is any update due to exception.
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
     * Street type of updated shipping address, e.g. ST. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getStreetType() : ?string
    {
        return $this->streetType;
    }
    /**
     * Street type of updated shipping address, e.g. ST. It will be returned if there is any update due to exception.
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
     * Street suffix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getStreetSuffix() : ?string
    {
        return $this->streetSuffix;
    }
    /**
     * Street suffix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
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
     * 
     *
     * @return list<UpdatedAddressAddressExtendedInformation>|null
     */
    public function getAddressExtendedInformation() : ?array
    {
        return $this->addressExtendedInformation;
    }
    /**
     * 
     *
     * @param list<UpdatedAddressAddressExtendedInformation>|null $addressExtendedInformation
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
     * The neighborhood, town, barrio etc. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getPoliticalDivision3() : ?string
    {
        return $this->politicalDivision3;
    }
    /**
     * The neighborhood, town, barrio etc. It will be returned if there is any update due to exception.
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
     * City name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getPoliticalDivision2() : ?string
    {
        return $this->politicalDivision2;
    }
    /**
     * City name of updated shipping address. It will be returned if there is any update due to exception.
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
     * Abbreviated state or province name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getPoliticalDivision1() : ?string
    {
        return $this->politicalDivision1;
    }
    /**
     * Abbreviated state or province name of updated shipping address. It will be returned if there is any update due to exception.
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
     * Abbreviated country or territory name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Abbreviated country or territory name of updated shipping address. It will be returned if there is any update due to exception.
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
     * Postal Code of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return string|null
     */
    public function getPostcodePrimaryLow() : ?string
    {
        return $this->postcodePrimaryLow;
    }
    /**
     * Postal Code of updated shipping address. It will be returned if there is any update due to exception.
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
}