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
     * @var ResponseTransactionReference
     */
    protected $transactionReference;
    /**
    * Identifies the success or failure of the interchange. 
    1 = Success, 0 = Failure
    *
    * @var string
    */
    protected $responseStatusCode;
    /**
     * 'Success' or 'Failure'
     *
     * @var string
     */
    protected $responseStatusDescription;
    /**
     * If an error is encountered during the interchange, the Response contains an error. If the error is present, then the ErrorSeverity and ErrorCodes are required.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ResponseError>
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
    1 = Success, 0 = Failure
    *
    * @return string
    */
    public function getResponseStatusCode() : string
    {
        return $this->responseStatusCode;
    }
    /**
    * Identifies the success or failure of the interchange. 
    1 = Success, 0 = Failure
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
     * 'Success' or 'Failure'
     *
     * @return string
     */
    public function getResponseStatusDescription() : string
    {
        return $this->responseStatusDescription;
    }
    /**
     * 'Success' or 'Failure'
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
     * If an error is encountered during the interchange, the Response contains an error. If the error is present, then the ErrorSeverity and ErrorCodes are required.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ResponseError>
     */
    public function getError() : array
    {
        return $this->error;
    }
    /**
     * If an error is encountered during the interchange, the Response contains an error. If the error is present, then the ErrorSeverity and ErrorCodes are required.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ResponseError> $error
     *
     * @return self
     */
    public function setError(array $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}