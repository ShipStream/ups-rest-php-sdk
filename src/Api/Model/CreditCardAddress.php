<?php

namespace ShipStream\Ups\Api\Model;

class CreditCardAddress extends \ArrayObject
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
     * Address Line 1 of the credit card billing address. Usually Street address information.
     *
     * @var list<string>
     */
    protected $addressLine;
    /**
     * City of the credit card billing address.
     *
     * @var string
     */
    protected $city;
    /**
     * State or province code of the credit card billing address.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * Credit card billing addressee postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Credit card billing address country or territory code. Must be a valid UPS Billing country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Address Line 1 of the credit card billing address. Usually Street address information.
     *
     * @return list<string>
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * Address Line 1 of the credit card billing address. Usually Street address information.
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
     * City of the credit card billing address.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * City of the credit card billing address.
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
     * State or province code of the credit card billing address.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * State or province code of the credit card billing address.
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
     * Credit card billing addressee postal code.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Credit card billing addressee postal code.
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
     * Credit card billing address country or territory code. Must be a valid UPS Billing country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Credit card billing address country or territory code. Must be a valid UPS Billing country or territory code.
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