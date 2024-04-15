<?php

namespace ShipStream\Ups\Api\Model;

class ProducerAddress extends \ArrayObject
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
     * Address information of the Producer.
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * Address line of the Producer.
     *
     * @var string|null
     */
    protected $city;
    /**
     * State of the Producer.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Town of the Producer.
     *
     * @var string|null
     */
    protected $town;
    /**
     * Postal code of the Producer.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Country or Territory code of the Producer.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Address information of the Producer.
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * Address information of the Producer.
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
     * Address line of the Producer.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Address line of the Producer.
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
     * State of the Producer.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * State of the Producer.
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
     * Town of the Producer.
     *
     * @return string|null
     */
    public function getTown() : ?string
    {
        return $this->town;
    }
    /**
     * Town of the Producer.
     *
     * @param string|null $town
     *
     * @return self
     */
    public function setTown(?string $town) : self
    {
        $this->initialized['town'] = true;
        $this->town = $town;
        return $this;
    }
    /**
     * Postal code of the Producer.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Postal code of the Producer.
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
     * Country or Territory code of the Producer.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory code of the Producer.
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