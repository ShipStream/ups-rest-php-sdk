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
     * @var ResponseTransactionReference|null
     */
    protected $transactionReference;
    /**
    * Identifies the success or failure of the interchange. 
    1-Success
    0-Failure
    *
    * @var string|null
    */
    protected $responseStatusCode;
    /**
     * Describes the Response Status Code.
     *
     * @var string|null
     */
    protected $responseStatusDescription;
    /**
     * If an error is encountered during the interchange, the Response contains an error.� If the error is present, then the ErrorSeverity and ErrorCodes are required.
     *
     * @var ResponseError|null
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
    1-Success
    0-Failure
    *
    * @return string|null
    */
    public function getResponseStatusCode() : ?string
    {
        return $this->responseStatusCode;
    }
    /**
    * Identifies the success or failure of the interchange. 
    1-Success
    0-Failure
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
     * Describes the Response Status Code.
     *
     * @return string|null
     */
    public function getResponseStatusDescription() : ?string
    {
        return $this->responseStatusDescription;
    }
    /**
     * Describes the Response Status Code.
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
     * If an error is encountered during the interchange, the Response contains an error.� If the error is present, then the ErrorSeverity and ErrorCodes are required.
     *
     * @return ResponseError|null
     */
    public function getError() : ?ResponseError
    {
        return $this->error;
    }
    /**
     * If an error is encountered during the interchange, the Response contains an error.� If the error is present, then the ErrorSeverity and ErrorCodes are required.
     *
     * @param ResponseError|null $error
     *
     * @return self
     */
    public function setError(?ResponseError $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}