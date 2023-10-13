<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequestQueryRequest extends \ArrayObject
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
     * Container for the shipment data
     *
     * @var QueryRequestShipment
     */
    protected $shipment;
    /**
     * User reference ID.
     *
     * @var string
     */
    protected $transactionReferenceID;
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
     * Container for the shipment data
     *
     * @return QueryRequestShipment
     */
    public function getShipment() : QueryRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Container for the shipment data
     *
     * @param QueryRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(QueryRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * User reference ID.
     *
     * @return string
     */
    public function getTransactionReferenceID() : string
    {
        return $this->transactionReferenceID;
    }
    /**
     * User reference ID.
     *
     * @param string $transactionReferenceID
     *
     * @return self
     */
    public function setTransactionReferenceID(string $transactionReferenceID) : self
    {
        $this->initialized['transactionReferenceID'] = true;
        $this->transactionReferenceID = $transactionReferenceID;
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