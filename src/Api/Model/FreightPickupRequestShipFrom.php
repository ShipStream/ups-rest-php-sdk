<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipFrom extends \ArrayObject
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
     * Contact name at the ship from location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * The ship from locations name or company name.
     *
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var ShipFromAddress
     */
    protected $address;
    /**
     * Phone Container
     *
     * @var ShipFromPhone
     */
    protected $phone;
    /**
     * Ship from email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * Contact name at the ship from location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship from location.
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
     * The ship from locations name or company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The ship from locations name or company name.
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
     * Address Container.
     *
     * @return ShipFromAddress
     */
    public function getAddress() : ShipFromAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipFromAddress $address
     *
     * @return self
     */
    public function setAddress(ShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Phone Container
     *
     * @return ShipFromPhone
     */
    public function getPhone() : ShipFromPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param ShipFromPhone $phone
     *
     * @return self
     */
    public function setPhone(ShipFromPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Ship from email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Ship from email address.
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
}