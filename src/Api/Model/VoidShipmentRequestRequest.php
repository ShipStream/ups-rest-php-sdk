<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentRequestRequest extends \ArrayObject
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
     * Optional processing. No options  Not used. Left for future uses
     *
     * @var string
     */
    protected $requestOption;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @var VoidRequestTransactionReference
     */
    protected $transactionReference;
    /**
     * Optional processing. No options  Not used. Left for future uses
     *
     * @return string
     */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
     * Optional processing. No options  Not used. Left for future uses
     *
     * @param string $requestOption
     *
     * @return self
     */
    public function setRequestOption(string $requestOption) : self
    {
        $this->initialized['requestOption'] = true;
        $this->requestOption = $requestOption;
        return $this;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @return VoidRequestTransactionReference
     */
    public function getTransactionReference() : VoidRequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @param VoidRequestTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(VoidRequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}