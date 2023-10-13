<?php

namespace ShipStream\Ups\Api\Model;

class LANDEDCOSTRequestWrapper extends \ArrayObject
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
     * The root element for the Landed Cost document.
     *
     * @var LandedCostRequest
     */
    protected $landedCostRequest;
    /**
     * The root element for the Landed Cost document.
     *
     * @return LandedCostRequest
     */
    public function getLandedCostRequest() : LandedCostRequest
    {
        return $this->landedCostRequest;
    }
    /**
     * The root element for the Landed Cost document.
     *
     * @param LandedCostRequest $landedCostRequest
     *
     * @return self
     */
    public function setLandedCostRequest(LandedCostRequest $landedCostRequest) : self
    {
        $this->initialized['landedCostRequest'] = true;
        $this->landedCostRequest = $landedCostRequest;
        return $this;
    }
}