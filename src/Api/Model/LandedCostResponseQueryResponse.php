<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponseQueryResponse extends \ArrayObject
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
     * Container for the questions at the Shipment level and Product 			level.
     *
     * @var QueryResponseShipment
     */
    protected $shipment;
    /**
     * Encoded shipment parameters that are required in 			LandedCostRequest/EstimateRequest.
     *
     * @var string
     */
    protected $transactionDigest;
    /**
    * Contains the indicator to suppress questions
    Y-Yes (suppress questions)
    N-No (do not suppress questions)
    If not set, defaults to �N�
    *
    * @var string
    */
    protected $suppressQuestionIndicator;
    /**
     * Container for the questions at the Shipment level and Product 			level.
     *
     * @return QueryResponseShipment
     */
    public function getShipment() : QueryResponseShipment
    {
        return $this->shipment;
    }
    /**
     * Container for the questions at the Shipment level and Product 			level.
     *
     * @param QueryResponseShipment $shipment
     *
     * @return self
     */
    public function setShipment(QueryResponseShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Encoded shipment parameters that are required in 			LandedCostRequest/EstimateRequest.
     *
     * @return string
     */
    public function getTransactionDigest() : string
    {
        return $this->transactionDigest;
    }
    /**
     * Encoded shipment parameters that are required in 			LandedCostRequest/EstimateRequest.
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
    /**
    * Contains the indicator to suppress questions
    Y-Yes (suppress questions)
    N-No (do not suppress questions)
    If not set, defaults to �N�
    *
    * @return string
    */
    public function getSuppressQuestionIndicator() : string
    {
        return $this->suppressQuestionIndicator;
    }
    /**
    * Contains the indicator to suppress questions
    Y-Yes (suppress questions)
    N-No (do not suppress questions)
    If not set, defaults to �N�
    *
    * @param string $suppressQuestionIndicator
    *
    * @return self
    */
    public function setSuppressQuestionIndicator(string $suppressQuestionIndicator) : self
    {
        $this->initialized['suppressQuestionIndicator'] = true;
        $this->suppressQuestionIndicator = $suppressQuestionIndicator;
        return $this;
    }
}