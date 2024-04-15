<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentResponseResponse extends \ArrayObject
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
     * @var VoidResponseResponseStatus|null
     */
    protected $responseStatus;
    /**
     * Alert Container. There can be zero to many alert containers with code and description.
     *
     * @var ResponseAlert|null
     */
    protected $alert;
    /**
     * Transaction Reference Container.
     *
     * @var VoidResponseTransactionReference|null
     */
    protected $transactionReference;
    /**
     * Response Status Container.
     *
     * @return VoidResponseResponseStatus|null
     */
    public function getResponseStatus() : ?VoidResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response Status Container.
     *
     * @param VoidResponseResponseStatus|null $responseStatus
     *
     * @return self
     */
    public function setResponseStatus(?VoidResponseResponseStatus $responseStatus) : self
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
     * Transaction Reference Container.
     *
     * @return VoidResponseTransactionReference|null
     */
    public function getTransactionReference() : ?VoidResponseTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Transaction Reference Container.
     *
     * @param VoidResponseTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?VoidResponseTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}