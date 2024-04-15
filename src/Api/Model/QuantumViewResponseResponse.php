<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewResponseResponse extends \ArrayObject
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
     * @var ResponseTransactionReference|null
     */
    protected $transactionReference;
    /**
    * Identifies the success or failure of the interchange. 
    1 = Success, 0 = Failure
    *
    * @var string|null
    */
    protected $responseStatusCode;
    /**
     * 'Success' or 'Failure'
     *
     * @var string|null
     */
    protected $responseStatusDescription;
    /**
     * 
     *
     * @var list<ResponseError>|null
     */
    protected $error;
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
    /**
    * Identifies the success or failure of the interchange. 
    1 = Success, 0 = Failure
    *
    * @return string|null
    */
    public function getResponseStatusCode() : ?string
    {
        return $this->responseStatusCode;
    }
    /**
    * Identifies the success or failure of the interchange. 
    1 = Success, 0 = Failure
    *
    * @param string|null $responseStatusCode
    *
    * @return self
    */
    public function setResponseStatusCode(?string $responseStatusCode) : self
    {
        $this->initialized['responseStatusCode'] = true;
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }
    /**
     * 'Success' or 'Failure'
     *
     * @return string|null
     */
    public function getResponseStatusDescription() : ?string
    {
        return $this->responseStatusDescription;
    }
    /**
     * 'Success' or 'Failure'
     *
     * @param string|null $responseStatusDescription
     *
     * @return self
     */
    public function setResponseStatusDescription(?string $responseStatusDescription) : self
    {
        $this->initialized['responseStatusDescription'] = true;
        $this->responseStatusDescription = $responseStatusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return list<ResponseError>|null
     */
    public function getError() : ?array
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param list<ResponseError>|null $error
     *
     * @return self
     */
    public function setError(?array $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}