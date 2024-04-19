<?php

namespace ShipStream\Ups\Api\Model;

class LocatorResponseGeocode extends \ArrayObject
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
     * The latitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @var string
     */
    protected $latitude;
    /**
     * The longitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @var string
     */
    protected $longitude;
    /**
     * The latitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @return string
     */
    public function getLatitude() : string
    {
        return $this->latitude;
    }
    /**
     * The latitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude) : self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * The longitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @return string
     */
    public function getLongitude() : string
    {
        return $this->longitude;
    }
    /**
     * The longitude of the origin address, center point of the exchange, center point of the postal code, or center point of the city.
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude) : self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
}