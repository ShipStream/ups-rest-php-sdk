<?php

namespace ShipStream\Ups\Api\Model;

class ShipFromAddress extends \ArrayObject
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
     * The Ship from street address including name and number (when applicable). 35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.
     *
     * @var string[]
     */
    protected $addressLine;
    /**
     * The Ship from city. 30 characters are accepted, but for return Shipment only 15 characters will be printed on the label.
     *
     * @var string
     */
    protected $city;
    /**
     * Origin locations state or province code.
     *
     * @var string
     */
    protected $stateProvinceCode;
    /**
     * The ship from locations postal code. 9 characters are accepted.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Origin locations country or territory code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The Ship from street address including name and number (when applicable). 35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.
     *
     * @return string[]
     */
    public function getAddressLine() : array
    {
        return $this->addressLine;
    }
    /**
     * The Ship from street address including name and number (when applicable). 35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.
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
     * The Ship from city. 30 characters are accepted, but for return Shipment only 15 characters will be printed on the label.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The Ship from city. 30 characters are accepted, but for return Shipment only 15 characters will be printed on the label.
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
     * Origin locations state or province code.
     *
     * @return string
     */
    public function getStateProvinceCode() : string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Origin locations state or province code.
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
     * The ship from locations postal code. 9 characters are accepted.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * The ship from locations postal code. 9 characters are accepted.
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
     * Origin locations country or territory code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Origin locations country or territory code.
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