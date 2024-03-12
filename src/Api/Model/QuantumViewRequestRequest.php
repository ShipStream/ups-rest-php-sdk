<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewRequestRequest extends \ArrayObject
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
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference
     */
    protected $transactionReference;
    /**
     * Indicates the action to be taken by the XML service. The only valid value is  'QVEvents'
     *
     * @var string
     */
    protected $requestAction;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @return RequestTransactionReference
     */
    public function getTransactionReference() : RequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @param RequestTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(RequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
    /**
     * Indicates the action to be taken by the XML service. The only valid value is  'QVEvents'
     *
     * @return string
     */
    public function getRequestAction() : string
    {
        return $this->requestAction;
    }
    /**
     * Indicates the action to be taken by the XML service. The only valid value is  'QVEvents'
     *
     * @param string $requestAction
     *
     * @return self
     */
    public function setRequestAction(string $requestAction) : self
    {
        $this->initialized['requestAction'] = true;
        $this->requestAction = $requestAction;
        return $this;
    }
}