<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryInformation extends \ArrayObject
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
     * location
     *
     * @var string
     */
    protected $location;
    /**
     * receivedBy
     *
     * @var string
     */
    protected $receivedBy;
    /**
     * 
     *
     * @var Signature
     */
    protected $signature;
    /**
     * location
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * location
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * receivedBy
     *
     * @return string
     */
    public function getReceivedBy() : string
    {
        return $this->receivedBy;
    }
    /**
     * receivedBy
     *
     * @param string $receivedBy
     *
     * @return self
     */
    public function setReceivedBy(string $receivedBy) : self
    {
        $this->initialized['receivedBy'] = true;
        $this->receivedBy = $receivedBy;
        return $this;
    }
    /**
     * 
     *
     * @return Signature
     */
    public function getSignature() : Signature
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param Signature $signature
     *
     * @return self
     */
    public function setSignature(Signature $signature) : self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
}