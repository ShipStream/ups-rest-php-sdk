<?php

namespace ShipStream\Ups\Api\Model;

class TrackSubsServiceResponse extends \ArrayObject
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
     * List of tracking numbers with successful subscription created.
     *
     * @var list<string>|null
     */
    protected $validTrackingNumbers;
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @var list<string>|null
     */
    protected $invalidTrackingNumbers;
    /**
     * List of tracking numbers with successful subscription created.
     *
     * @return list<string>|null
     */
    public function getValidTrackingNumbers() : ?array
    {
        return $this->validTrackingNumbers;
    }
    /**
     * List of tracking numbers with successful subscription created.
     *
     * @param list<string>|null $validTrackingNumbers
     *
     * @return self
     */
    public function setValidTrackingNumbers(?array $validTrackingNumbers) : self
    {
        $this->initialized['validTrackingNumbers'] = true;
        $this->validTrackingNumbers = $validTrackingNumbers;
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