<?php

namespace ShipStream\Ups\Api\Model;

class ResponseError extends \ArrayObject
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
     * Describes the severity of the error.�� Required if the error is present.
     *
     * @var string
     */
    protected $errorSeverity;
    /**
     * A numeric value that describes the error.� Each tool defines a range of error codes. Required if the error is present.
     *
     * @var string
     */
    protected $errorCode;
    /**
     * Describes the error code.
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * Number of seconds to wait until retry.� This field is populated on special conditions of the Transient Error only, as defined by the service.� A number between 1 and 86400 (24 hours)
     *
     * @var string
     */
    protected $minimumRetrySeconds;
    /**
     * 
     *
     * @var ErrorErrorLocation[]
     */
    protected $errorLocation;
    /**
     * The contents of the element in error.
     *
     * @var string[]
     */
    protected $errorDigest;
    /**
     * Describes the severity of the error.�� Required if the error is present.
     *
     * @return string
     */
    public function getErrorSeverity() : string
    {
        return $this->errorSeverity;
    }
    /**
     * Describes the severity of the error.�� Required if the error is present.
     *
     * @param string $errorSeverity
     *
     * @return self
     */
    public function setErrorSeverity(string $errorSeverity) : self
    {
        $this->initialized['errorSeverity'] = true;
        $this->errorSeverity = $errorSeverity;
        return $this;
    }
    /**
     * A numeric value that describes the error.� Each tool defines a range of error codes. Required if the error is present.
     *
     * @return string
     */
    public function getErrorCode() : string
    {
        return $this->errorCode;
    }
    /**
     * A numeric value that describes the error.� Each tool defines a range of error codes. Required if the error is present.
     *
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode) : self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Describes the error code.
     *
     * @return string
     */
    public function getErrorDescription() : string
    {
        return $this->errorDescription;
    }
    /**
     * Describes the error code.
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription) : self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     * Number of seconds to wait until retry.� This field is populated on special conditions of the Transient Error only, as defined by the service.� A number between 1 and 86400 (24 hours)
     *
     * @return string
     */
    public function getMinimumRetrySeconds() : string
    {
        return $this->minimumRetrySeconds;
    }
    /**
     * Number of seconds to wait until retry.� This field is populated on special conditions of the Transient Error only, as defined by the service.� A number between 1 and 86400 (24 hours)
     *
     * @param string $minimumRetrySeconds
     *
     * @return self
     */
    public function setMinimumRetrySeconds(string $minimumRetrySeconds) : self
    {
        $this->initialized['minimumRetrySeconds'] = true;
        $this->minimumRetrySeconds = $minimumRetrySeconds;
        return $this;
    }
    /**
     * 
     *
     * @return ErrorErrorLocation[]
     */
    public function getErrorLocation() : array
    {
        return $this->errorLocation;
    }
    /**
     * 
     *
     * @param ErrorErrorLocation[] $errorLocation
     *
     * @return self
     */
    public function setErrorLocation(array $errorLocation) : self
    {
        $this->initialized['errorLocation'] = true;
        $this->errorLocation = $errorLocation;
        return $this;
    }
    /**
     * The contents of the element in error.
     *
     * @return string[]
     */
    public function getErrorDigest() : array
    {
        return $this->errorDigest;
    }
    /**
     * The contents of the element in error.
     *
     * @param string[] $errorDigest
     *
     * @return self
     */
    public function setErrorDigest(array $errorDigest) : self
    {
        $this->initialized['errorDigest'] = true;
        $this->errorDigest = $errorDigest;
        return $this;
    }
}