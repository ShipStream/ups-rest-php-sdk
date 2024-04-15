<?php

namespace ShipStream\Ups\Api\Model;

class ShipperAddress extends \ArrayObject
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
     * The Shipper street address including name and number (when applicable).  
     *
     * @var list<string>|null
     */
    protected $addressLine;
    /**
     * Shipper's City.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Shipper's state or province code. For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.
     *
     * @var string|null
     */
    protected $stateProvinceCode;
    /**
     * Shipper's postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Shipper's country or territory code. Refer to country or territory Codes in the Appendix for valid values.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The Shipper street address including name and number (when applicable).  
     *
     * @return list<string>|null
     */
    public function getAddressLine() : ?array
    {
        return $this->addressLine;
    }
    /**
     * The Shipper street address including name and number (when applicable).  
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
     * Shipper's City.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Shipper's City.
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
     * Shipper's state or province code. For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.
     *
     * @return string|null
     */
    public function getStateProvinceCode() : ?string
    {
        return $this->stateProvinceCode;
    }
    /**
     * Shipper's state or province code. For forward Shipment 5 characters are accepted, but only 2 characters will be printed on the label.
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
     * Shipper's postal code.
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * Shipper's postal code.
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
     * Shipper's country or territory code. Refer to country or territory Codes in the Appendix for valid values.
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Shipper's country or territory code. Refer to country or territory Codes in the Appendix for valid values.
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