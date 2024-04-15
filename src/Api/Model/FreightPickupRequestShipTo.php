<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipTo extends \ArrayObject
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
     * Contact name at the ship to location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Address Container.
     *
     * @var FreightPickupShipToAddress|null
     */
    protected $address;
    /**
     * Phone Container.
     *
     * @var ShipToPhone|null
     */
    protected $phone;
    /**
     * Ship to email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Contact name at the ship to location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship to location.
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
     * @return FreightPickupShipToAddress|null
     */
    public function getAddress() : ?FreightPickupShipToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param FreightPickupShipToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FreightPickupShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Phone Container.
     *
     * @return ShipToPhone|null
     */
    public function getPhone() : ?ShipToPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param ShipToPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ShipToPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Ship to email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Ship to email address.
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