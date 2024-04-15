<?php

namespace ShipStream\Ups\Api\Model;

class PackingListShipTo extends \ArrayObject
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
     * The Consignee�s name or company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Contact name at the ship to location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Consignee�s Address Container.
     *
     * @var FreightShipShipToAddress|null
     */
    protected $address;
    /**
     * The consignee�s phone number.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Consignee�s email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * The consignee�s phone extension.
     *
     * @var string|null
     */
    protected $phoneExtension;
    /**
     * The Consignee�s name or company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The Consignee�s name or company name.
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
     * Consignee�s Address Container.
     *
     * @return FreightShipShipToAddress|null
     */
    public function getAddress() : ?FreightShipShipToAddress
    {
        return $this->address;
    }
    /**
     * Consignee�s Address Container.
     *
     * @param FreightShipShipToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FreightShipShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The consignee�s phone number.
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * The consignee�s phone number.
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
     * Consignee�s email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Consignee�s email address.
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
     * The consignee�s phone extension.
     *
     * @return string|null
     */
    public function getPhoneExtension() : ?string
    {
        return $this->phoneExtension;
    }
    /**
     * The consignee�s phone extension.
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