<?php

namespace ShipStream\Ups\Api\Model;

class ActivityLocationAddressArtifactFormat extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * City name where package is delivered.
     *
     * @var string
     */
    protected $politicalDivision2;
    /**
     * Abbreviated state or province name where package is delivered.
     *
     * @var string
     */
    protected $politicalDivision1;
    /**
     * Abbreviated country or territory name where package is delivered.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * City name where package is delivered.
     *
     * @return string
     */
    public function getPoliticalDivision2() : string
    {
        return $this->politicalDivision2;
    }
    /**
     * City name where package is delivered.
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
     * Abbreviated state or province name where package is delivered.
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * Abbreviated state or province name where package is delivered.
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
     * Abbreviated country or territory name where package is delivered.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Abbreviated country or territory name where package is delivered.
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