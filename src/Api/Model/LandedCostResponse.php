<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponse extends \ArrayObject
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
    * Container for the question, used to give a more accurate landed cost quote. It cannot co-exist with EstimateResponse. 
    If EstimateRespnse is not present, this tag must be present. 
    QueryResponse can be returned up to twice before the landed cost quote is given.
    *
    * @var LandedCostResponseQueryResponse
    */
    protected $queryResponse;
    /**
     * Container for landed Cost quote. It cannot co-exist with QueryResponse. If QueryRespnse is not present, this tag must be present.
     *
     * @var LandedCostResponseEstimateResponse
     */
    protected $estimateResponse;
    /**
    * Container for the question, used to give a more accurate landed cost quote. It cannot co-exist with EstimateResponse. 
    If EstimateRespnse is not present, this tag must be present. 
    QueryResponse can be returned up to twice before the landed cost quote is given.
    *
    * @return LandedCostResponseQueryResponse
    */
    public function getQueryResponse() : LandedCostResponseQueryResponse
    {
        return $this->queryResponse;
    }
    /**
    * Container for the question, used to give a more accurate landed cost quote. It cannot co-exist with EstimateResponse. 
    If EstimateRespnse is not present, this tag must be present. 
    QueryResponse can be returned up to twice before the landed cost quote is given.
    *
    * @param LandedCostResponseQueryResponse $queryResponse
    *
    * @return self
    */
    public function setQueryResponse(LandedCostResponseQueryResponse $queryResponse) : self
    {
        $this->initialized['queryResponse'] = true;
        $this->queryResponse = $queryResponse;
        return $this;
    }
    /**
     * Container for landed Cost quote. It cannot co-exist with QueryResponse. If QueryRespnse is not present, this tag must be present.
     *
     * @return LandedCostResponseEstimateResponse
     */
    public function getEstimateResponse() : LandedCostResponseEstimateResponse
    {
        return $this->estimateResponse;
    }
    /**
     * Container for landed Cost quote. It cannot co-exist with QueryResponse. If QueryRespnse is not present, this tag must be present.
     *
     * @param LandedCostResponseEstimateResponse $estimateResponse
     *
     * @return self
     */
    public function setEstimateResponse(LandedCostResponseEstimateResponse $estimateResponse) : self
    {
        $this->initialized['estimateResponse'] = true;
        $this->estimateResponse = $estimateResponse;
        return $this;
    }
}