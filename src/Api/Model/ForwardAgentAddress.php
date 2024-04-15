<?php

namespace ShipStream\Ups\Api\Model;

class ForwardAgentAddress extends \ArrayObject
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
     * Address line of the Forwarding agent.
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * City of the Forwarding agent.
     *
     * @var string|null
     */
    protected $city;
    /**
     * State of the Forwarding agent.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Town of the Forwarding Agent.
     *
     * @var string|null
     */
    protected $town;
    /**
     * Postal code of the Forwarding agent.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Country or Territory code of the Forwarding agent.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Address line of the Forwarding agent.
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * Address line of the Forwarding agent.
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
     * City of the Forwarding agent.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * City of the Forwarding agent.
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
     * State of the Forwarding agent.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * State of the Forwarding agent.
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
     * Town of the Forwarding Agent.
     *
     * @return string|null
     */
    public function getTown() : ?string
    {
        return $this->town;
    }
    /**
     * Town of the Forwarding Agent.
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
     * Postal code of the Forwarding agent.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Postal code of the Forwarding agent.
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
     * Country or Territory code of the Forwarding agent.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Country or Territory code of the Forwarding agent.
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