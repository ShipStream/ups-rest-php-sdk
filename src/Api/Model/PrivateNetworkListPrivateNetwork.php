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
     * @var string|null
     */
    protected $networkID;
    /**
     * Description of the Network.
     *
     * @var string|null
     */
    protected $networkDescription;
    /**
     * Value of networkID.
     *
     * @return string|null
     */
    public function getNetworkID() : ?string
    {
        return $this->networkID;
    }
    /**
     * Value of networkID.
     *
     * @param string|null $networkID
     *
     * @return self
     */
    public function setNetworkID(?string $networkID) : self
    {
        $this->initialized['networkID'] = true;
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * Description of the Network.
     *
     * @return string|null
     */
    public function getNetworkDescription() : ?string
    {
        return $this->networkDescription;
    }
    /**
     * Description of the Network.
     *
     * @param string|null $networkDescription
     *
     * @return self
     */
    public function setNetworkDescription(?string $networkDescription) : self
    {
        $this->initialized['networkDescription'] = true;
        $this->networkDescription = $networkDescription;
        return $this;
    }
}