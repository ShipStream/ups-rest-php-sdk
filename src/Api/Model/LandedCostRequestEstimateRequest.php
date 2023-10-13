<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequestEstimateRequest extends \ArrayObject
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
     * Container for the answers to questions at shipment level 			and Product level.
     *
     * @var EstimateRequestShipment
     */
    protected $shipment;
    /**
     * Encoded shipment parameters returned in 			LandedCostResponse/QueryResponse
     *
     * @var string
     */
    protected $transactionDigest;
    /**
     * Container for the answers to questions at shipment level 			and Product level.
     *
     * @return EstimateRequestShipment
     */
    public function getShipment() : EstimateRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Container for the answers to questions at shipment level 			and Product level.
     *
     * @param EstimateRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(EstimateRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Encoded shipment parameters returned in 			LandedCostResponse/QueryResponse
     *
     * @return string
     */
    public function getTransactionDigest() : string
    {
        return $this->transactionDigest;
    }
    /**
     * Encoded shipment parameters returned in 			LandedCostResponse/QueryResponse
     *
     * @param string $transactionDigest
     *
     * @return self
     */
    public function setTransactionDigest(string $transactionDigest) : self
    {
        $this->initialized['transactionDigest'] = true;
        $this->transactionDigest = $transactionDigest;
        return $this;
    }
}