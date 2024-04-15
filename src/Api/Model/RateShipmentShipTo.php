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
     * @var string|null
     */
    protected $name;
    /**
     * Destination attention name.  Length is not validated.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Address Container.
     *
     * @var ShipToAddress|null
     */
    protected $address;
    /**
     * Destination attention name or company name.  Length is not validated.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Destination attention name or company name.  Length is not validated.
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
     * Destination attention name.  Length is not validated.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Destination attention name.  Length is not validated.
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
     * Address Container.
     *
     * @return ShipToAddress|null
     */
    public function getAddress() : ?ShipToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}