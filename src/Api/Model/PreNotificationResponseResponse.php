<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationResponseResponse extends \ArrayObject
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
     * @var ResponseResponseStatus
     */
    protected $responseStatus;
    /**
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ResponseAlert>
     */
    protected $alert;
    /**
     * Transaction Reference Container.
     *
     * @var ResponseTransactionReference
     */
    protected $transactionReference;
    /**
     * Response Status Container.
     *
     * @return ResponseResponseStatus
     */
    public function getResponseStatus() : ResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response Status Container.
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
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ResponseAlert>
     */
    public function getAlert() : array
    {
        return $this->alert;
    }
    /**
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ResponseAlert> $alert
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