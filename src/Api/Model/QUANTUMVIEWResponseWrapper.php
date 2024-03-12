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
     * @var QuantumViewResponse
     */
    protected $quantumViewResponse;
    /**
     * Container for QuantumView response information.
     *
     * @return QuantumViewResponse
     */
    public function getQuantumViewResponse() : QuantumViewResponse
    {
        return $this->quantumViewResponse;
    }
    /**
     * Container for QuantumView response information.
     *
     * @param QuantumViewResponse $quantumViewResponse
     *
     * @return self
     */
    public function setQuantumViewResponse(QuantumViewResponse $quantumViewResponse) : self
    {
        $this->initialized['quantumViewResponse'] = true;
        $this->quantumViewResponse = $quantumViewResponse;
        return $this;
    }
}