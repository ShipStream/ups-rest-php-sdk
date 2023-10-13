<?php

namespace ShipStream\Ups\Api\Model;

class RateResponseResponse extends \ArrayObject
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
     * Response status container.
     *
     * @var ResponseResponseStatus
     */
    protected $responseStatus;
    /**
     * 
     *
     * @var ResponseAlert[]
     */
    protected $alert;
    /**
     * 
     *
     * @var ResponseAlertDetail[]
     */
    protected $alertDetail;
    /**
     * Transaction Reference Container.
     *
     * @var ResponseTransactionReference
     */
    protected $transactionReference;
    /**
     * Response status container.
     *
     * @return ResponseResponseStatus
     */
    public function getResponseStatus() : ResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response status container.
     *
     * @param ResponseResponseStatus $responseStatus
     *
     * @return self
     */
    public function setResponseStatus(ResponseResponseStatus $responseStatus) : self
    {
        $this->initialized['responseStatus'] = true;
        $this->responseStatus = $responseStatus;
        return $this;
    }
    /**
     * 
     *
     * @return ResponseAlert[]
     */
    public function getAlert() : array
    {
        return $this->alert;
    }
    /**
     * 
     *
     * @param ResponseAlert[] $alert
     *
     * @return self
     */
    public function setAlert(array $alert) : self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
    /**
     * 
     *
     * @return ResponseAlertDetail[]
     */
    public function getAlertDetail() : array
    {
        return $this->alertDetail;
    }
    /**
     * 
     *
     * @param ResponseAlertDetail[] $alertDetail
     *
     * @return self
     */
    public function setAlertDetail(array $alertDetail) : self
    {
        $this->initialized['alertDetail'] = true;
        $this->alertDetail = $alertDetail;
        return $this;
    }
    /**
     * Transaction Reference Container.
     *
     * @return ResponseTransactionReference
     */
    public function getTransactionReference() : ResponseTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Transaction Reference Container.
     *
     * @param ResponseTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(ResponseTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}