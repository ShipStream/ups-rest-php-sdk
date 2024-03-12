<?php

namespace ShipStream\Ups\Api\Model;

class PrivateNetworkListPrivateNetwork extends \ArrayObject
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
     * Value of networkID.
     *
     * @var string
     */
    protected $networkID;
    /**
     * Description of the Network.
     *
     * @var string
     */
    protected $networkDescription;
    /**
     * Value of networkID.
     *
     * @return string
     */
    public function getNetworkID() : string
    {
        return $this->networkID;
    }
    /**
     * Value of networkID.
     *
     * @param string $networkID
     *
     * @return self
     */
    public function setNetworkID(string $networkID) : self
    {
        $this->initialized['networkID'] = true;
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * Description of the Network.
     *
     * @return string
     */
    public function getNetworkDescription() : string
    {
        return $this->networkDescription;
    }
    /**
     * Description of the Network.
     *
     * @param string $networkDescription
     *
     * @return self
     */
    public function setNetworkDescription(string $networkDescription) : self
    {
        $this->initialized['networkDescription'] = true;
        $this->networkDescription = $networkDescription;
        return $this;
    }
}