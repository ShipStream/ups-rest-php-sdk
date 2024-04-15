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
     * @var list<PrivateNetworkListPrivateNetwork>|null
     */
    protected $privateNetwork;
    /**
     * 
     *
     * @return list<PrivateNetworkListPrivateNetwork>|null
     */
    public function getPrivateNetwork() : ?array
    {
        return $this->privateNetwork;
    }
    /**
     * 
     *
     * @param list<PrivateNetworkListPrivateNetwork>|null $privateNetwork
     *
     * @return self
     */
    public function setPrivateNetwork(?array $privateNetwork) : self
    {
        $this->initialized['privateNetwork'] = true;
        $this->privateNetwork = $privateNetwork;
        return $this;
    }
}