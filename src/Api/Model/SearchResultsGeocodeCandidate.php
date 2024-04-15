<?php

namespace ShipStream\Ups\Api\Model;

class SearchResultsGeocodeCandidate extends \ArrayObject
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
     * Contains all of the basic information about candidate address.
     *
     * @var GeocodeCandidateAddressKeyFormat|null
     */
    protected $addressKeyFormat;
    /**
     * Geocode is the latitude and longitude of the origin candidate.
     *
     * @var GeocodeCandidateGeocode|null
     */
    protected $geocode;
    /**
     * If a Landmark code was provided in the request, a candidate list of Landmark Names will be returned along with the corresponding address and Geocode.
     *
     * @var string|null
     */
    protected $landmarkName;
    /**
     * Contains all of the basic information about candidate address.
     *
     * @return GeocodeCandidateAddressKeyFormat|null
     */
    public function getAddressKeyFormat() : ?GeocodeCandidateAddressKeyFormat
    {
        return $this->addressKeyFormat;
    }
    /**
     * Contains all of the basic information about candidate address.
     *
     * @param GeocodeCandidateAddressKeyFormat|null $addressKeyFormat
     *
     * @return self
     */
    public function setAddressKeyFormat(?GeocodeCandidateAddressKeyFormat $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
    /**
     * Geocode is the latitude and longitude of the origin candidate.
     *
     * @return GeocodeCandidateGeocode|null
     */
    public function getGeocode() : ?GeocodeCandidateGeocode
    {
        return $this->geocode;
    }
    /**
     * Geocode is the latitude and longitude of the origin candidate.
     *
     * @param GeocodeCandidateGeocode|null $geocode
     *
     * @return self
     */
    public function setGeocode(?GeocodeCandidateGeocode $geocode) : self
    {
        $this->initialized['geocode'] = true;
        $this->geocode = $geocode;
        return $this;
    }
    /**
     * If a Landmark code was provided in the request, a candidate list of Landmark Names will be returned along with the corresponding address and Geocode.
     *
     * @return string|null
     */
    public function getLandmarkName() : ?string
    {
        return $this->landmarkName;
    }
    /**
     * If a Landmark code was provided in the request, a candidate list of Landmark Names will be returned along with the corresponding address and Geocode.
     *
     * @param string|null $landmarkName
     *
     * @return self
     */
    public function setLandmarkName(?string $landmarkName) : self
    {
        $this->initialized['landmarkName'] = true;
        $this->landmarkName = $landmarkName;
        return $this;
    }
}