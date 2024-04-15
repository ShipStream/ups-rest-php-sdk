<?php

namespace ShipStream\Ups\Api\Model;

class PackingListShipFrom extends \ArrayObject
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
     * The shipper�s name or company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Contact name at the ship from location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Shipper�s Address Container.
     *
     * @var FreightShipShipFromAddress|null
     */
    protected $address;
    /**
     * The shipper�s phone number.  �
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Shipper�s email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * The shipper�s phone extension.
     *
     * @var string|null
     */
    protected $phoneExtension;
    /**
     * The shipper�s name or company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The shipper�s name or company name.
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
     * Shipper�s Address Container.
     *
     * @return FreightShipShipFromAddress|null
     */
    public function getAddress() : ?FreightShipShipFromAddress
    {
        return $this->address;
    }
    /**
     * Shipper�s Address Container.
     *
     * @param FreightShipShipFromAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FreightShipShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The shipper�s phone number.  �
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * The shipper�s phone number.  �
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Shipper�s email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper�s email address.
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
    /**
     * The shipper�s phone extension.
     *
     * @return string|null
     */
    public function getPhoneExtension() : ?string
    {
        return $this->phoneExtension;
    }
    /**
     * The shipper�s phone extension.
     *
     * @param string|null $phoneExtension
     *
     * @return self
     */
    public function setPhoneExtension(?string $phoneExtension) : self
    {
        $this->initialized['phoneExtension'] = true;
        $this->phoneExtension = $phoneExtension;
        return $this;
    }
}