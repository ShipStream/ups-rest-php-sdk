<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResponseResponse extends \ArrayObject
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
     * Response Status Container.
     *
     * @var ResponseResponseStatus|null
     */
    protected $responseStatus;
    /**
     * 
     *
     * @var list<ResponseAlert>|null
     */
    protected $alert;
    /**
     * Transaction Reference Container.
     *
     * @var ResponseTransactionReference|null
     */
    protected $transactionReference;
    /**
     * Response Status Container.
     *
     * @return ResponseResponseStatus|null
     */
    public function getResponseStatus() : ?ResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response Status Container.
     *
     * @param ResponseResponseStatus|null $responseStatus
     *
     * @return self
     */
    public function setResponseStatus(?ResponseResponseStatus $responseStatus) : self
    {
        $this->initialized['responseStatus'] = true;
        $this->responseStatus = $responseStatus;
        return $this;
    }
    /**
     * 
     *
     * @return list<ResponseAlert>|null
     */
    public function getAlert() : ?array
    {
        return $this->alert;
    }
    /**
     * 
     *
     * @param list<ResponseAlert>|null $alert
     *
     * @return self
     */
    public function setAlert(?array $alert) : self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
    /**
     * Transaction Reference Container.
     *
     * @return ResponseTransactionReference|null
     */
    public function getTransactionReference() : ?ResponseTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Transaction Reference Container.
     *
     * @param ResponseTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?ResponseTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}