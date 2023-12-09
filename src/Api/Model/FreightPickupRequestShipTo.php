<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipTo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Contact name at the ship to location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Consignee�s Address Container.
     *
     * @var ShipToAddress
     */
    protected $address;
    /**
     * Phone Container.
     *
     * @var ShipToPhone
     */
    protected $phone;
    /**
     * Ship to email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * Contact name at the ship to location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship to location.
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
     * Consignee�s Address Container.
     *
     * @return ShipToAddress
     */
    public function getAddress() : ShipToAddress
    {
        return $this->address;
    }
    /**
     * Consignee�s Address Container.
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
    /**
     * Phone Container.
     *
     * @return ShipToPhone
     */
    public function getPhone() : ShipToPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param ShipToPhone $phone
     *
     * @return self
     */
    public function setPhone(ShipToPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Ship to email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Ship to email address.
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