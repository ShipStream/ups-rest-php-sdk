<?php

namespace ShipStream\Ups\Api\Model;

class ActivityLocationAddressArtifactFormat extends \ArrayObject
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
     * City of an activity occurred during a package shipment.
     *
     * @var string
     */
    protected $politicalDivision2;
    /**
     * State or province code of an activity occurred during a package shipment. Must be valid US state. If the country or territory is US or CA a two character code is required, otherwise, the StateProvinceCode is optional.
     *
     * @var string
     */
    protected $politicalDivision1;
    /**
     * Country or Territory code of an activity occurred during a package shipment. Valid values: CA, MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC, and VA
     *
     * @var string
     */
    protected $countryCode;
    /**
     * City of an activity occurred during a package shipment.
     *
     * @return string
     */
    public function getPoliticalDivision2() : string
    {
        return $this->politicalDivision2;
    }
    /**
     * City of an activity occurred during a package shipment.
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
     * State or province code of an activity occurred during a package shipment. Must be valid US state. If the country or territory is US or CA a two character code is required, otherwise, the StateProvinceCode is optional.
     *
     * @return string
     */
    public function getPoliticalDivision1() : string
    {
        return $this->politicalDivision1;
    }
    /**
     * State or province code of an activity occurred during a package shipment. Must be valid US state. If the country or territory is US or CA a two character code is required, otherwise, the StateProvinceCode is optional.
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
     * Country or Territory code of an activity occurred during a package shipment. Valid values: CA, MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC, and VA
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory code of an activity occurred during a package shipment. Valid values: CA, MX, PR, US, AT, BE, DE, DK, ES, FI, FR, GB, IE, IT, NL, PT, SE, MC, and VA
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