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
     * @var string|null
     */
    protected $name;
    /**
     * Attention Name.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * UPS Access Point ID.
     *
     * @var string|null
     */
    protected $uPSAccessPointID;
    /**
     * Address Container.
     *
     * @var AlternateDeliveryAddressAddress|null
     */
    protected $address;
    /**
     * Retail Location Name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Retail Location Name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Attention Name.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Attention Name.
     *
     * @param string|null $attentionName
     *
     * @return self
     */
    public function setAttentionName(?string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * UPS Access Point ID.
     *
     * @return string|null
     */
    public function getUPSAccessPointID() : ?string
    {
        return $this->uPSAccessPointID;
    }
    /**
     * UPS Access Point ID.
     *
     * @param string|null $uPSAccessPointID
     *
     * @return self
     */
    public function setUPSAccessPointID(?string $uPSAccessPointID) : self
    {
        $this->initialized['uPSAccessPointID'] = true;
        $this->uPSAccessPointID = $uPSAccessPointID;
        return $this;
    }
    /**
     * Address Container.
     *
     * @return AlternateDeliveryAddressAddress|null
     */
    public function getAddress() : ?AlternateDeliveryAddressAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param AlternateDeliveryAddressAddress|null $address
     *
     * @return self
     */
    public function setAddress(?AlternateDeliveryAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}