<?php

namespace ShipStream\Ups\Api\Model;

class PickupPendingStatusRequestRequest extends \ArrayObject
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
     * @var RequestTransactionReference|null
     */
    protected $transactionReference;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @return RequestTransactionReference|null
     */
    public function getTransactionReference() : ?RequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @param RequestTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?RequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}