<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponseResponse extends \ArrayObject
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
     * Response Status container
     *
     * @var LRResponseResponseStatus|null
     */
    protected $responseStatus;
    /**
     * Alert Container. There can be zero to many alert containers with code and description.
     *
     * @var ResponseAlert|null
     */
    protected $alert;
    /**
     * Transaction Reference Container
     *
     * @var LRResponseTransactionReference|null
     */
    protected $transactionReference;
    /**
     * Response Status container
     *
     * @return LRResponseResponseStatus|null
     */
    public function getResponseStatus() : ?LRResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response Status container
     *
     * @param LRResponseResponseStatus|null $responseStatus
     *
     * @return self
     */
    public function setResponseStatus(?LRResponseResponseStatus $responseStatus) : self
    {
        $this->initialized['responseStatus'] = true;
        $this->responseStatus = $responseStatus;
        return $this;
    }
    /**
     * Alert Container. There can be zero to many alert containers with code and description.
     *
     * @return ResponseAlert|null
     */
    public function getAlert() : ?ResponseAlert
    {
        return $this->alert;
    }
    /**
     * Alert Container. There can be zero to many alert containers with code and description.
     *
     * @param ResponseAlert|null $alert
     *
     * @return self
     */
    public function setAlert(?ResponseAlert $alert) : self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
    /**
     * Transaction Reference Container
     *
     * @return LRResponseTransactionReference|null
     */
    public function getTransactionReference() : ?LRResponseTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Transaction Reference Container
     *
     * @param LRResponseTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?LRResponseTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}