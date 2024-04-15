<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestRequest extends \ArrayObject
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
    * Type of shipping. 
    Valid value: 1 - Ground
    *
    * @var string|null
    */
    protected $requestOption;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference|null
     */
    protected $transactionReference;
    /**
    * Type of shipping. 
    Valid value: 1 - Ground
    *
    * @return string|null
    */
    public function getRequestOption() : ?string
    {
        return $this->requestOption;
    }
    /**
    * Type of shipping. 
    Valid value: 1 - Ground
    *
    * @param string|null $requestOption
    *
    * @return self
    */
    public function setRequestOption(?string $requestOption) : self
    {
        $this->initialized['requestOption'] = true;
        $this->requestOption = $requestOption;
        return $this;
    }
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