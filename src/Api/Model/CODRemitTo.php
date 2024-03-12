<?php

namespace ShipStream\Ups\Api\Model;

class CODRemitTo extends \ArrayObject
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
     * The payee company name for the COD charges.
     *
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var FreightShipRemitToAddress
     */
    protected $address;
    /**
     * Payee contact name for the COD charges.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Phone Container.
     *
     * @var RemitToPhone
     */
    protected $phone;
    /**
     * Payee fax number for the COD charges.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Payee email address for the COD charges.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * The payee company name for the COD charges.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The payee company name for the COD charges.
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
     * @return FreightShipRemitToAddress
     */
    public function getAddress() : FreightShipRemitToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param FreightShipRemitToAddress $address
     *
     * @return self
     */
    public function setAddress(FreightShipRemitToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Payee contact name for the COD charges.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Payee contact name for the COD charges.
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
     * Phone Container.
     *
     * @return RemitToPhone
     */
    public function getPhone() : RemitToPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param RemitToPhone $phone
     *
     * @return self
     */
    public function setPhone(RemitToPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Payee fax number for the COD charges.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Payee fax number for the COD charges.
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber(string $faxNumber) : self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Payee email address for the COD charges.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Payee email address for the COD charges.
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