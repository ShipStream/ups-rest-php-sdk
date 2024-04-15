<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationShipmentShipToAddress extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * The Ship To city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The Ship To location's state or province code.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * The Ship To location's postal code. 9 characters are accepted.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The Ship To location's country or territory code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The Ship To street address including name and number (when applicable).
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * The Ship To street address including name and number (when applicable).
     *
     * @param list<string>|null $addressLine
     *
     * @return self
     */
    public function setAddressLine(?array $addressLine) : self
    {
        $this->initialized['addressLine'] = true;
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * The Ship To city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * The Ship To city.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * The Ship To location's state or province code.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * The Ship To location's state or province code.
     *
     * @param string|null $stateProvinceCode
     *
     * @return self
     */
    public function setStateProvinceCode(?string $stateProvinceCode) : self
    {
        $this->initialized['stateProvinceCode'] = true;
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }
    /**
     * The Ship To location's postal code. 9 characters are accepted.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The Ship To location's postal code. 9 characters are accepted.
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * The Ship To location's country or territory code.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * The Ship To location's country or territory code.
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