<?php

namespace ShipStream\Ups\Api\Model;

class QUANTUMVIEWResponseWrapper extends \ArrayObject
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
     * Container for QuantumView response information.
     *
     * @var QuantumViewResponse|null
     */
    protected $quantumViewResponse;
    /**
     * Container for QuantumView response information.
     *
     * @return QuantumViewResponse|null
     */
    public function getQuantumViewResponse() : ?QuantumViewResponse
    {
        return $this->quantumViewResponse;
    }
    /**
     * Container for QuantumView response information.
     *
     * @param QuantumViewResponse|null $quantumViewResponse
     *
     * @return self
     */
    public function setQuantumViewResponse(?QuantumViewResponse $quantumViewResponse) : self
    {
        $this->initialized['quantumViewResponse'] = true;
        $this->quantumViewResponse = $quantumViewResponse;
        return $this;
    }
}