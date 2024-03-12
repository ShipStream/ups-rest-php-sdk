<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesRequestOriginAddress extends \ArrayObject
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
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present.
     *
     * @var string
     */
    protected $streetAddress;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present.
     *
     * @var string
     */
    protected $city;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present and if country or territory is US/CA/IE/HK.
     *
     * @var string
     */
    protected $stateProvince;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present and if country or territory has postal code.It does not apply to non-postal countries such as IE and HK.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Origin Search Criteria Container  Required if Proximity SearchIndicator is present.
     *
     * @var OriginAddressOriginSearchCriteria
     */
    protected $originSearchCriteria;
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present.
     *
     * @return string
     */
    public function getStreetAddress() : string
    {
        return $this->streetAddress;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present.
     *
     * @param string $streetAddress
     *
     * @return self
     */
    public function setStreetAddress(string $streetAddress) : self
    {
        $this->initialized['streetAddress'] = true;
        $this->streetAddress = $streetAddress;
        return $this;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present.
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
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present and if country or territory is US/CA/IE/HK.
     *
     * @return string
     */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search.  Conditionally required if proximitySearchIndicator is present and if country or territory is US/CA/IE/HK.
     *
     * @param string $stateProvince
     *
     * @return self
     */
    public function setStateProvince(string $stateProvince) : self
    {
        $this->initialized['stateProvince'] = true;
        $this->stateProvince = $stateProvince;
        return $this;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present and if country or territory has postal code.It does not apply to non-postal countries such as IE and HK.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search  Conditionally required if proximitySearchIndicator is present and if country or territory has postal code.It does not apply to non-postal countries such as IE and HK.
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
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Indicates the address of the shipper to allow for the nearest Drop off facility Search
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
    /**
     * Origin Search Criteria Container  Required if Proximity SearchIndicator is present.
     *
     * @return OriginAddressOriginSearchCriteria
     */
    public function getOriginSearchCriteria() : OriginAddressOriginSearchCriteria
    {
        return $this->originSearchCriteria;
    }
    /**
     * Origin Search Criteria Container  Required if Proximity SearchIndicator is present.
     *
     * @param OriginAddressOriginSearchCriteria $originSearchCriteria
     *
     * @return self
     */
    public function setOriginSearchCriteria(OriginAddressOriginSearchCriteria $originSearchCriteria) : self
    {
        $this->initialized['originSearchCriteria'] = true;
        $this->originSearchCriteria = $originSearchCriteria;
        return $this;
    }
}