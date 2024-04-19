<?php

namespace ShipStream\Ups\Api\Model;

class LocatorResponseResponse extends \ArrayObject
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
     * Transaction Reference Container.
     *
     * @var ResponseTransactionReference
     */
    protected $transactionReference;
    /**
    * Identifies the success or failure of the interchange. 
    1-Success
    0-Failure
    *
    * @var string
    */
    protected $responseStatusCode;
    /**
     * Describes the Response Status Code.
     *
     * @var string
     */
    protected $responseStatusDescription;
    /**
     * 
     *
     * @var ResponseError
     */
    protected $error;
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
    /**
    * Identifies the success or failure of the interchange. 
    1-Success
    0-Failure
    *
    * @return string
    */
    public function getResponseStatusCode() : string
    {
        return $this->responseStatusCode;
    }
    /**
    * Identifies the success or failure of the interchange. 
    1-Success
    0-Failure
    *
    * @param string $responseStatusCode
    *
    * @return self
    */
    public function setResponseStatusCode(string $responseStatusCode) : self
    {
        $this->initialized['responseStatusCode'] = true;
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }
    /**
     * Describes the Response Status Code.
     *
     * @return string
     */
    public function getResponseStatusDescription() : string
    {
        return $this->responseStatusDescription;
    }
    /**
     * Describes the Response Status Code.
     *
     * @param string $responseStatusDescription
     *
     * @return self
     */
    public function setResponseStatusDescription(string $responseStatusDescription) : self
    {
        $this->initialized['responseStatusDescription'] = true;
        $this->responseStatusDescription = $responseStatusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return ResponseError
     */
    public function getError() : ResponseError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param ResponseError $error
     *
     * @return self
     */
    public function setError(ResponseError $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}