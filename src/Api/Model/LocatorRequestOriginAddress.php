<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestOriginAddress extends \ArrayObject
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
     * Geocode is the latitude and longitude of the origin address.
     *
     * @var OriginAddressGeocode|null
     */
    protected $geocode;
    /**
    * Contains all of the basic information about the origin such as: Address Lines, City, State/Province, Postal Code and Country or Territory Code. 
    The element CountryCode is required.
    *
    * @var OriginAddressAddressKeyFormat|null
    */
    protected $addressKeyFormat;
    /**
    * If present, indicates the maximum number of locations the client wishes to receive in an address candidate response where the provided origin information is insufficient to accurately establish location. 
    
    Valid values: 1-50, default 10
    *
    * @var string|null
    */
    protected $maximumListSize;
    /**
     * Geocode is the latitude and longitude of the origin address.
     *
     * @return OriginAddressGeocode|null
     */
    public function getGeocode() : ?OriginAddressGeocode
    {
        return $this->geocode;
    }
    /**
     * Geocode is the latitude and longitude of the origin address.
     *
     * @param OriginAddressGeocode|null $geocode
     *
     * @return self
     */
    public function setGeocode(?OriginAddressGeocode $geocode) : self
    {
        $this->initialized['geocode'] = true;
        $this->geocode = $geocode;
        return $this;
    }
    /**
    * Contains all of the basic information about the origin such as: Address Lines, City, State/Province, Postal Code and Country or Territory Code. 
    The element CountryCode is required.
    *
    * @return OriginAddressAddressKeyFormat|null
    */
    public function getAddressKeyFormat() : ?OriginAddressAddressKeyFormat
    {
        return $this->addressKeyFormat;
    }
    /**
    * Contains all of the basic information about the origin such as: Address Lines, City, State/Province, Postal Code and Country or Territory Code. 
    The element CountryCode is required.
    *
    * @param OriginAddressAddressKeyFormat|null $addressKeyFormat
    *
    * @return self
    */
    public function setAddressKeyFormat(?OriginAddressAddressKeyFormat $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
    /**
    * If present, indicates the maximum number of locations the client wishes to receive in an address candidate response where the provided origin information is insufficient to accurately establish location. 
    
    Valid values: 1-50, default 10
    *
    * @return string|null
    */
    public function getMaximumListSize() : ?string
    {
        return $this->maximumListSize;
    }
    /**
    * If present, indicates the maximum number of locations the client wishes to receive in an address candidate response where the provided origin information is insufficient to accurately establish location. 
    
    Valid values: 1-50, default 10
    *
    * @param string|null $maximumListSize
    *
    * @return self
    */
    public function setMaximumListSize(?string $maximumListSize) : self
    {
        $this->initialized['maximumListSize'] = true;
        $this->maximumListSize = $maximumListSize;
        return $this;
    }
}