<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesRequestDestinationAddress extends \ArrayObject
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
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search.  Required for non-postal country Ireland (IE).
     *
     * @var string
     */
    protected $city;
    /**
    * Indicates the address of the consignee to allow for the nearest Pickup facility Search.
    1 = District code for Hong Kong (HK)
    2 = County for Ireland (IE)
    3 = State or province for all the postal countries  Required for non-postal countries including HK and IE.
    *
    * @var string
    */
    protected $stateProvince;
    /**
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search  It does not apply to non-postal countries. Example: IE and HK.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * The pickup country or territory code as defined by ISO-3166. Please check check separate pickup country or territory list to find out all the pickup eligible countries.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search.  Required for non-postal country Ireland (IE).
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search.  Required for non-postal country Ireland (IE).
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
    * Indicates the address of the consignee to allow for the nearest Pickup facility Search.
    1 = District code for Hong Kong (HK)
    2 = County for Ireland (IE)
    3 = State or province for all the postal countries  Required for non-postal countries including HK and IE.
    *
    * @return string
    */
    public function getStateProvince() : string
    {
        return $this->stateProvince;
    }
    /**
    * Indicates the address of the consignee to allow for the nearest Pickup facility Search.
    1 = District code for Hong Kong (HK)
    2 = County for Ireland (IE)
    3 = State or province for all the postal countries  Required for non-postal countries including HK and IE.
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
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search  It does not apply to non-postal countries. Example: IE and HK.
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Indicates the address of the consignee to allow for the nearest Pickup facility Search  It does not apply to non-postal countries. Example: IE and HK.
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
     * The pickup country or territory code as defined by ISO-3166. Please check check separate pickup country or territory list to find out all the pickup eligible countries.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The pickup country or territory code as defined by ISO-3166. Please check check separate pickup country or territory list to find out all the pickup eligible countries.
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