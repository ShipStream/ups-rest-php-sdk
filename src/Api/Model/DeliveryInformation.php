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
     * The location where the package was dropped off. For example: 'Front Door'
     *
     * @var string
     */
    protected $location;
    /**
     * The individual who took possession of the package at delivery.
     *
     * @var string
     */
    protected $receivedBy;
    /**
     * Container with all the signature information associated to the package being delivered.
     *
     * @var Signature
     */
    protected $signature;
    /**
     * The location where the package was dropped off. For example: 'Front Door'
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * The location where the package was dropped off. For example: 'Front Door'
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
     * The individual who took possession of the package at delivery.
     *
     * @return string
     */
    public function getReceivedBy() : string
    {
        return $this->receivedBy;
    }
    /**
     * The individual who took possession of the package at delivery.
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
     * Container with all the signature information associated to the package being delivered.
     *
     * @return Signature
     */
    public function getSignature() : Signature
    {
        return $this->signature;
    }
    /**
     * Container with all the signature information associated to the package being delivered.
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