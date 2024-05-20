<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointSearchExcludeFromResult extends \ArrayObject
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
     * This contains the business classification code to exclude from UPS Access Point Search by address or geocode. Multiple codes can are possible in separate elements. Please refer to Appendix D for detailed business codes.
     *
     * @var list<string>
     */
    protected $businessClassificationCode;
    /**
     * This contains the business name to exclude from UPS Access Point Search by address or geocode. Partial names are accepted.
     *
     * @var string
     */
    protected $businessName;
    /**
     * Public Access points within Radius (in specified Unit of Measure) of any included private access points will be excluded from the results. Valid only if at least one IncludeCriteria/MerchantAccountNumber is provided.
     *
     * @var string
     */
    protected $radius;
    /**
     * Container to hold a list of postal codes to exclude from the access point address or geocode search.
     *
     * @var ExcludeFromResultPostalCodeList
     */
    protected $postalCodeList;
    /**
     * This contains the business classification code to exclude from UPS Access Point Search by address or geocode. Multiple codes can are possible in separate elements. Please refer to Appendix D for detailed business codes.
     *
     * @return list<string>
     */
    public function getBusinessClassificationCode() : array
    {
        return $this->businessClassificationCode;
    }
    /**
     * This contains the business classification code to exclude from UPS Access Point Search by address or geocode. Multiple codes can are possible in separate elements. Please refer to Appendix D for detailed business codes.
     *
     * @param list<string> $businessClassificationCode
     *
     * @return self
     */
    public function setBusinessClassificationCode(array $businessClassificationCode) : self
    {
        $this->initialized['businessClassificationCode'] = true;
        $this->businessClassificationCode = $businessClassificationCode;
        return $this;
    }
    /**
     * This contains the business name to exclude from UPS Access Point Search by address or geocode. Partial names are accepted.
     *
     * @return string
     */
    public function getBusinessName() : string
    {
        return $this->businessName;
    }
    /**
     * This contains the business name to exclude from UPS Access Point Search by address or geocode. Partial names are accepted.
     *
     * @param string $businessName
     *
     * @return self
     */
    public function setBusinessName(string $businessName) : self
    {
        $this->initialized['businessName'] = true;
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * Public Access points within Radius (in specified Unit of Measure) of any included private access points will be excluded from the results. Valid only if at least one IncludeCriteria/MerchantAccountNumber is provided.
     *
     * @return string
     */
    public function getRadius() : string
    {
        return $this->radius;
    }
    /**
     * Public Access points within Radius (in specified Unit of Measure) of any included private access points will be excluded from the results. Valid only if at least one IncludeCriteria/MerchantAccountNumber is provided.
     *
     * @param string $radius
     *
     * @return self
     */
    public function setRadius(string $radius) : self
    {
        $this->initialized['radius'] = true;
        $this->radius = $radius;
        return $this;
    }
    /**
     * Container to hold a list of postal codes to exclude from the access point address or geocode search.
     *
     * @return ExcludeFromResultPostalCodeList
     */
    public function getPostalCodeList() : ExcludeFromResultPostalCodeList
    {
        return $this->postalCodeList;
    }
    /**
     * Container to hold a list of postal codes to exclude from the access point address or geocode search.
     *
     * @param ExcludeFromResultPostalCodeList $postalCodeList
     *
     * @return self
     */
    public function setPostalCodeList(ExcludeFromResultPostalCodeList $postalCodeList) : self
    {
        $this->initialized['postalCodeList'] = true;
        $this->postalCodeList = $postalCodeList;
        return $this;
    }
}