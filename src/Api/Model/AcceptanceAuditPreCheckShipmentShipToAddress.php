<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckShipmentShipToAddress extends \ArrayObject
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
     * The Ship To street address including name and number (when applicable).
     *
     * @var string
     */
    protected $addressLine;
    /**
     * The Ship To city.
     *
     * @var string
     */
    protected $city;
    /**
     * The Ship To locations state or province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * The Ship To locations postal code. 9 characters are accepted.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The Ship To locations country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The Ship To street address including name and number (when applicable).
     *
     * @return string
     */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
     * The Ship To street address including name and number (when applicable).
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
     * The Ship To city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The Ship To city.
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
     * The Ship To locations state or province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The Ship To locations state or province code.
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
     * The Ship To locations postal code. 9 characters are accepted.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * The Ship To locations postal code. 9 characters are accepted.
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
     * The Ship To locations country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The Ship To locations country or territory code.
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