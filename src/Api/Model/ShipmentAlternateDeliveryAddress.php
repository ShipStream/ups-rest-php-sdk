<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentAlternateDeliveryAddress extends \ArrayObject
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
     * Retail Location Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Attention Name.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * UPS Access Point ID.
     *
     * @var string
     */
    protected $uPSAccessPointID;
    /**
     * Address Container.
     *
     * @var AlternateDeliveryAddressAddress
     */
    protected $address;
    /**
     * Retail Location Name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Retail Location Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Attention Name.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Attention Name.
     *
     * @param string $attentionName
     *
     * @return self
     */
    public function setAttentionName(string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * UPS Access Point ID.
     *
     * @return string
     */
    public function getUPSAccessPointID() : string
    {
        return $this->uPSAccessPointID;
    }
    /**
     * UPS Access Point ID.
     *
     * @param string $uPSAccessPointID
     *
     * @return self
     */
    public function setUPSAccessPointID(string $uPSAccessPointID) : self
    {
        $this->initialized['uPSAccessPointID'] = true;
        $this->uPSAccessPointID = $uPSAccessPointID;
        return $this;
    }
    /**
     * Address Container.
     *
     * @return AlternateDeliveryAddressAddress
     */
    public function getAddress() : AlternateDeliveryAddressAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param AlternateDeliveryAddressAddress $address
     *
     * @return self
     */
    public function setAddress(AlternateDeliveryAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}