<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentShipFrom extends \ArrayObject
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
     * Origin attention name or company name.  Length is not validated.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Origin attention name.  Length is not validated.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Address Container.
     *
     * @var ShipFromAddress|null
     */
    protected $address;
    /**
     * Origin attention name or company name.  Length is not validated.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Origin attention name or company name.  Length is not validated.
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
     * Origin attention name.  Length is not validated.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Origin attention name.  Length is not validated.
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
     * @return ShipFromAddress|null
     */
    public function getAddress() : ?ShipFromAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipFromAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}