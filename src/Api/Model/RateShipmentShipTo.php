<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentShipTo extends \ArrayObject
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
     * Destination attention name or company name.  Length is not validated.
     *
     * @var string
     */
    protected $name;
    /**
     * Destination attention name.  Length is not validated.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Address Container.
     *
     * @var ShipToAddress
     */
    protected $address;
    /**
     * Destination attention name or company name.  Length is not validated.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Destination attention name or company name.  Length is not validated.
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
     * Destination attention name.  Length is not validated.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Destination attention name.  Length is not validated.
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
     * Address Container.
     *
     * @return ShipToAddress
     */
    public function getAddress() : ShipToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipToAddress $address
     *
     * @return self
     */
    public function setAddress(ShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}