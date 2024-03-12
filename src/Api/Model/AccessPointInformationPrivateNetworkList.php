<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformationPrivateNetworkList extends \ArrayObject
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
     * @var PrivateNetworkListPrivateNetwork[]
     */
    protected $privateNetwork;
    /**
     * 
     *
     * @return PrivateNetworkListPrivateNetwork[]
     */
    public function getPrivateNetwork() : array
    {
        return $this->privateNetwork;
    }
    /**
     * 
     *
     * @param PrivateNetworkListPrivateNetwork[] $privateNetwork
     *
     * @return self
     */
    public function setPrivateNetwork(array $privateNetwork) : self
    {
        $this->initialized['privateNetwork'] = true;
        $this->privateNetwork = $privateNetwork;
        return $this;
    }
}