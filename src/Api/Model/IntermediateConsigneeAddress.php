<?php

namespace ShipStream\Ups\Api\Model;

class IntermediateConsigneeAddress extends \ArrayObject
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
     * Address information of the Intermediate Consignee.
     *
     * @var string[]
     */
    protected $addressLine;
    /**
     * Address line of the Intermediate Consignee.
     *
     * @var string
     */
    protected $city;
    /**
     * State of the Intermediate Consignee.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Town of the Intermediate Consignee.
     *
     * @var string
     */
    protected $town;
    /**
     * Postal code of the Intermediate Consignee.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Country or Territory code of the Intermediate Consignee.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Address information of the Intermediate Consignee.
     *
     * @return string[]
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address information of the Intermediate Consignee.
     *
     * @param string[] $addressLine
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
     * Address line of the Intermediate Consignee.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Address line of the Intermediate Consignee.
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
     * State of the Intermediate Consignee.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * State of the Intermediate Consignee.
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
     * Town of the Intermediate Consignee.
     *
     * @return string
     */
    public function getTown() : string
    {
        return $this->town;
    }
    /**
     * Town of the Intermediate Consignee.
     *
     * @param string $town
     *
     * @return self
     */
    public function setTown(string $town) : self
    {
        $this->initialized['town'] = true;
        $this->town = $town;
        return $this;
    }
    /**
     * Postal code of the Intermediate Consignee.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Postal code of the Intermediate Consignee.
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
     * Country or Territory code of the Intermediate Consignee.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory code of the Intermediate Consignee.
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