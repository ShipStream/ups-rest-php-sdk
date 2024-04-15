<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryInformation extends \ArrayObject
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
     * location
     *
     * @var string|null
     */
    protected $location;
    /**
     * receivedBy
     *
     * @var string|null
     */
    protected $receivedBy;
    /**
     * 
     *
     * @var Signature|null
     */
    protected $signature;
    /**
     * location
     *
     * @return string|null
     */
    public function getLocation() : ?string
    {
        return $this->location;
    }
    /**
     * location
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location) : self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * receivedBy
     *
     * @return string|null
     */
    public function getReceivedBy() : ?string
    {
        return $this->receivedBy;
    }
    /**
     * receivedBy
     *
     * @param string|null $receivedBy
     *
     * @return self
     */
    public function setReceivedBy(?string $receivedBy) : self
    {
        $this->initialized['receivedBy'] = true;
        $this->receivedBy = $receivedBy;
        return $this;
    }
    /**
     * 
     *
     * @return Signature|null
     */
    public function getSignature() : ?Signature
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param Signature|null $signature
     *
     * @return self
     */
    public function setSignature(?Signature $signature) : self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
}