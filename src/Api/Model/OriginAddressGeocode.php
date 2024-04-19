<?php

namespace ShipStream\Ups\Api\Model;

class OriginAddressGeocode extends \ArrayObject
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
     * The latitude of the origin address or the center point of the area code.
     *
     * @var string
     */
    protected $latitude;
    /**
     * The longitude of the origin address or the center point of the area code.
     *
     * @var string
     */
    protected $longitude;
    /**
     * The latitude of the origin address or the center point of the area code.
     *
     * @return string
     */
    public function getLatitude() : string
    {
        return $this->latitude;
    }
    /**
     * The latitude of the origin address or the center point of the area code.
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
     * The longitude of the origin address or the center point of the area code.
     *
     * @return string
     */
    public function getLongitude() : string
    {
        return $this->longitude;
    }
    /**
     * The longitude of the origin address or the center point of the area code.
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