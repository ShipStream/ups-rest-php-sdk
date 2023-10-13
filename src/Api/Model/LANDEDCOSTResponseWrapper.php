<?php

namespace ShipStream\Ups\Api\Model;

class LANDEDCOSTResponseWrapper extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A container which contains the service status returned.
     *
     * @var LandedCostResponse
     */
    protected $landedCostResponse;
    /**
     * A container which contains the service status returned.
     *
     * @return LandedCostResponse
     */
    public function getLandedCostResponse() : LandedCostResponse
    {
        return $this->landedCostResponse;
    }
    /**
     * A container which contains the service status returned.
     *
     * @param LandedCostResponse $landedCostResponse
     *
     * @return self
     */
    public function setLandedCostResponse(LandedCostResponse $landedCostResponse) : self
    {
        $this->initialized['landedCostResponse'] = true;
        $this->landedCostResponse = $landedCostResponse;
        return $this;
    }
}