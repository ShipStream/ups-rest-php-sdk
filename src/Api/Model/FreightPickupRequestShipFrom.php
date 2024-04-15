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
     * @var string|null
     */
    protected $attentionName;
    /**
     * The ship from locations name or company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var ShipFromAddress|null
     */
    protected $address;
    /**
     * Phone Container
     *
     * @var ShipFromPhone|null
     */
    protected $phone;
    /**
     * Ship from email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Contact name at the ship from location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship from location.
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
     * The ship from locations name or company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The ship from locations name or company name.
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
    /**
     * Phone Container
     *
     * @return ShipFromPhone|null
     */
    public function getPhone() : ?ShipFromPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param ShipFromPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ShipFromPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Ship from email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Ship from email address.
     *
     * @param string|null $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(?string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
}