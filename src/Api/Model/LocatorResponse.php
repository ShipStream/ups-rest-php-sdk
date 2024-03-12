<?php

namespace ShipStream\Ups\Api\Model;

class LocatorResponse extends \ArrayObject
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
     * Container for Response.
     *
     * @var LocatorResponseResponse
     */
    protected $response;
    /**
     * Geocode is the latitude and longitude of the origin address. The Geocode is provided in the first successful response. Required to be returned when the origin address or phone number is submitted in the request.Will not be returned when the  requestoption =64
     *
     * @var LocatorResponseGeocode
     */
    protected $geocode;
    /**
     * Container for search results.
     *
     * @var LocatorResponseSearchResults
     */
    protected $searchResults;
    /**
    * Confidence level.
    Valid values: True or False
    *
    * @var string
    */
    protected $allowAllConfidenceLevels;
    /**
     * Container for Response.
     *
     * @return LocatorResponseResponse
     */
    public function getResponse() : LocatorResponseResponse
    {
        return $this->response;
    }
    /**
     * Container for Response.
     *
     * @param LocatorResponseResponse $response
     *
     * @return self
     */
    public function setResponse(LocatorResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Geocode is the latitude and longitude of the origin address. The Geocode is provided in the first successful response. Required to be returned when the origin address or phone number is submitted in the request.Will not be returned when the  requestoption =64
     *
     * @return LocatorResponseGeocode
     */
    public function getGeocode() : LocatorResponseGeocode
    {
        return $this->geocode;
    }
    /**
     * Geocode is the latitude and longitude of the origin address. The Geocode is provided in the first successful response. Required to be returned when the origin address or phone number is submitted in the request.Will not be returned when the  requestoption =64
     *
     * @param LocatorResponseGeocode $geocode
     *
     * @return self
     */
    public function setGeocode(LocatorResponseGeocode $geocode) : self
    {
        $this->initialized['geocode'] = true;
        $this->geocode = $geocode;
        return $this;
    }
    /**
     * Container for search results.
     *
     * @return LocatorResponseSearchResults
     */
    public function getSearchResults() : LocatorResponseSearchResults
    {
        return $this->searchResults;
    }
    /**
     * Container for search results.
     *
     * @param LocatorResponseSearchResults $searchResults
     *
     * @return self
     */
    public function setSearchResults(LocatorResponseSearchResults $searchResults) : self
    {
        $this->initialized['searchResults'] = true;
        $this->searchResults = $searchResults;
        return $this;
    }
    /**
    * Confidence level.
    Valid values: True or False
    *
    * @return string
    */
    public function getAllowAllConfidenceLevels() : string
    {
        return $this->allowAllConfidenceLevels;
    }
    /**
    * Confidence level.
    Valid values: True or False
    *
    * @param string $allowAllConfidenceLevels
    *
    * @return self
    */
    public function setAllowAllConfidenceLevels(string $allowAllConfidenceLevels) : self
    {
        $this->initialized['allowAllConfidenceLevels'] = true;
        $this->allowAllConfidenceLevels = $allowAllConfidenceLevels;
        return $this;
    }
}