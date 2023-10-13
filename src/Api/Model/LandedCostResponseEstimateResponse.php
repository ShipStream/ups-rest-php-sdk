<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponseEstimateResponse extends \ArrayObject
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
     * Container for transaction related information
     *
     * @var EstimateResponseTransactionInfo
     */
    protected $transactionInfo;
    /**
     * Container for the estimated cost
     *
     * @var EstimateResponseShipmentEstimate
     */
    protected $shipmentEstimate;
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
     * Container for transaction related information
     *
     * @return EstimateResponseTransactionInfo
     */
    public function getTransactionInfo() : EstimateResponseTransactionInfo
    {
        return $this->transactionInfo;
    }
    /**
     * Container for transaction related information
     *
     * @param EstimateResponseTransactionInfo $transactionInfo
     *
     * @return self
     */
    public function setTransactionInfo(EstimateResponseTransactionInfo $transactionInfo) : self
    {
        $this->initialized['transactionInfo'] = true;
        $this->transactionInfo = $transactionInfo;
        return $this;
    }
    /**
     * Container for the estimated cost
     *
     * @return EstimateResponseShipmentEstimate
     */
    public function getShipmentEstimate() : EstimateResponseShipmentEstimate
    {
        return $this->shipmentEstimate;
    }
    /**
     * Container for the estimated cost
     *
     * @param EstimateResponseShipmentEstimate $shipmentEstimate
     *
     * @return self
     */
    public function setShipmentEstimate(EstimateResponseShipmentEstimate $shipmentEstimate) : self
    {
        $this->initialized['shipmentEstimate'] = true;
        $this->shipmentEstimate = $shipmentEstimate;
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