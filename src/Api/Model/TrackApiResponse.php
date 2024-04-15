<?php

namespace ShipStream\Ups\Api\Model;

class TrackApiResponse extends \ArrayObject
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
     * 
     *
     * @var TrackResponse|null
     */
    protected $trackResponse;
    /**
     * 
     *
     * @return TrackResponse|null
     */
    public function getTrackResponse() : ?TrackResponse
    {
        return $this->trackResponse;
    }
    /**
     * 
     *
     * @param TrackResponse|null $trackResponse
     *
     * @return self
     */
    public function setTrackResponse(?TrackResponse $trackResponse) : self
    {
        $this->initialized['trackResponse'] = true;
        $this->trackResponse = $trackResponse;
        return $this;
    }
}