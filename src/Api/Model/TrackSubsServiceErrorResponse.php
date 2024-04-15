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
     * @var ErrorResponse|null
     */
    protected $response;
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @var list<string>|null
     */
    protected $invalidTrackingNumbers;
    /**
     * 
     *
     * @return ErrorResponse|null
     */
    public function getResponse() : ?ErrorResponse
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ErrorResponse|null $response
     *
     * @return self
     */
    public function setResponse(?ErrorResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @return list<string>|null
     */
    public function getInvalidTrackingNumbers() : ?array
    {
        return $this->invalidTrackingNumbers;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @param list<string>|null $invalidTrackingNumbers
     *
     * @return self
     */
    public function setInvalidTrackingNumbers(?array $invalidTrackingNumbers) : self
    {
        $this->initialized['invalidTrackingNumbers'] = true;
        $this->invalidTrackingNumbers = $invalidTrackingNumbers;
        return $this;
    }
}