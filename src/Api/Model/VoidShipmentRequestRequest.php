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
     * @var string|null
     */
    protected $requestOption;
    /**
     * TransactionReference identifies transactions between client and server.  N/A
     *
     * @var VoidRequestTransactionReference|null
     */
    protected $transactionReference;
    /**
     * Optional processing. No options  Not used. Left for future uses
     *
     * @return string|null
     */
    public function getRequestOption() : ?string
    {
        return $this->requestOption;
    }
    /**
     * Optional processing. No options  Not used. Left for future uses
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
     * TransactionReference identifies transactions between client and server.  N/A
     *
     * @return VoidRequestTransactionReference|null
     */
    public function getTransactionReference() : ?VoidRequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.  N/A
     *
     * @param VoidRequestTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?VoidRequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}