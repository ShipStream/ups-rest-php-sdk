<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequest extends \ArrayObject
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
     * A container which contains the service requested.
     *
     * @var LandedCostRequestRequest
     */
    protected $request;
    /**
     * Container for the billing and shipment data. Should be in the first round request of LandedCost. It cannot co-exist with EstimateRequest. If EstimateRequest is not present, this tag must be present.
     *
     * @var LandedCostRequestQueryRequest
     */
    protected $queryRequest;
    /**
    * Container for the answers to the questions from the previous transaction. 
    Cannot be in the first round request of LandedCost. It cannot co-exist with QueryRequest. If QueryRequest is not present, this tag must be present.
    *
    * @var LandedCostRequestEstimateRequest
    */
    protected $estimateRequest;
    /**
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @var string
     */
    protected $shippingHistoryUserKey;
    /**
     * A container which contains the service requested.
     *
     * @return LandedCostRequestRequest
     */
    public function getRequest() : LandedCostRequestRequest
    {
        return $this->request;
    }
    /**
     * A container which contains the service requested.
     *
     * @param LandedCostRequestRequest $request
     *
     * @return self
     */
    public function setRequest(LandedCostRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Container for the billing and shipment data. Should be in the first round request of LandedCost. It cannot co-exist with EstimateRequest. If EstimateRequest is not present, this tag must be present.
     *
     * @return LandedCostRequestQueryRequest
     */
    public function getQueryRequest() : LandedCostRequestQueryRequest
    {
        return $this->queryRequest;
    }
    /**
     * Container for the billing and shipment data. Should be in the first round request of LandedCost. It cannot co-exist with EstimateRequest. If EstimateRequest is not present, this tag must be present.
     *
     * @param LandedCostRequestQueryRequest $queryRequest
     *
     * @return self
     */
    public function setQueryRequest(LandedCostRequestQueryRequest $queryRequest) : self
    {
        $this->initialized['queryRequest'] = true;
        $this->queryRequest = $queryRequest;
        return $this;
    }
    /**
    * Container for the answers to the questions from the previous transaction. 
    Cannot be in the first round request of LandedCost. It cannot co-exist with QueryRequest. If QueryRequest is not present, this tag must be present.
    *
    * @return LandedCostRequestEstimateRequest
    */
    public function getEstimateRequest() : LandedCostRequestEstimateRequest
    {
        return $this->estimateRequest;
    }
    /**
    * Container for the answers to the questions from the previous transaction. 
    Cannot be in the first round request of LandedCost. It cannot co-exist with QueryRequest. If QueryRequest is not present, this tag must be present.
    *
    * @param LandedCostRequestEstimateRequest $estimateRequest
    *
    * @return self
    */
    public function setEstimateRequest(LandedCostRequestEstimateRequest $estimateRequest) : self
    {
        $this->initialized['estimateRequest'] = true;
        $this->estimateRequest = $estimateRequest;
        return $this;
    }
    /**
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @return string
     */
    public function getShippingHistoryUserKey() : string
    {
        return $this->shippingHistoryUserKey;
    }
    /**
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @param string $shippingHistoryUserKey
     *
     * @return self
     */
    public function setShippingHistoryUserKey(string $shippingHistoryUserKey) : self
    {
        $this->initialized['shippingHistoryUserKey'] = true;
        $this->shippingHistoryUserKey = $shippingHistoryUserKey;
        return $this;
    }
}