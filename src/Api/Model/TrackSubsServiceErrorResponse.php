<?php

namespace ShipStream\Ups\Api\Model;

class TrackSubsServiceErrorResponse extends \ArrayObject
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
     * 
     *
     * @var ErrorResponseWrapper
     */
    protected $response;
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @var list<string>
     */
    protected $invalidTrackingNumbers;
    /**
     * 
     *
     * @return ErrorResponseWrapper
     */
    public function getResponse() : ErrorResponseWrapper
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ErrorResponseWrapper $response
     *
     * @return self
     */
    public function setResponse(ErrorResponseWrapper $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @return list<string>
     */
    public function getInvalidTrackingNumbers() : array
    {
        return $this->invalidTrackingNumbers;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @param list<string> $invalidTrackingNumbers
     *
     * @return self
     */
    public function setInvalidTrackingNumbers(array $invalidTrackingNumbers) : self
    {
        $this->initialized['invalidTrackingNumbers'] = true;
        $this->invalidTrackingNumbers = $invalidTrackingNumbers;
        return $this;
    }
}