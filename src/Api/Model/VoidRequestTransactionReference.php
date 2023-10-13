<?php

namespace ShipStream\Ups\Api\Model;

class VoidRequestTransactionReference extends \ArrayObject
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
     * The CustomerContext Information which will be echoed during response.
     *
     * @var string
     */
    protected $customerContext;
    /**
     * The Unique TransactionIdentifier Information for that transaction. This will be present only if requested in the request.
     *
     * @var string
     */
    protected $transactionIdentifier;
    /**
     * The CustomerContext Information which will be echoed during response.
     *
     * @return string
     */
    public function getCustomerContext() : string
    {
        return $this->customerContext;
    }
    /**
     * The CustomerContext Information which will be echoed during response.
     *
     * @param string $customerContext
     *
     * @return self
     */
    public function setCustomerContext(string $customerContext) : self
    {
        $this->initialized['customerContext'] = true;
        $this->customerContext = $customerContext;
        return $this;
    }
    /**
     * The Unique TransactionIdentifier Information for that transaction. This will be present only if requested in the request.
     *
     * @return string
     */
    public function getTransactionIdentifier() : string
    {
        return $this->transactionIdentifier;
    }
    /**
     * The Unique TransactionIdentifier Information for that transaction. This will be present only if requested in the request.
     *
     * @param string $transactionIdentifier
     *
     * @return self
     */
    public function setTransactionIdentifier(string $transactionIdentifier) : self
    {
        $this->initialized['transactionIdentifier'] = true;
        $this->transactionIdentifier = $transactionIdentifier;
        return $this;
    }
}