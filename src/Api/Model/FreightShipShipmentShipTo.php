<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipShipmentShipTo extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * Company's Tax Identification Number of the Consignee
     *
     * @var string
     */
    protected $taxIdentificationNumber;
    /**
     * Consignee�s Address Container.
     *
     * @var FreightShipShipToAddress
     */
    protected $address;
    /**
     * Contact name at the ship to location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Phone Container.
     *
     * @var ShipToPhone
     */
    protected $phone;
    /**
     * Consignee�s fax number.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Consignee�s email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * The Consignee�s name or company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The Consignee�s name or company name.
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
     * Company's Tax Identification Number of the Consignee
     *
     * @return string
     */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Company's Tax Identification Number of the Consignee
     *
     * @param string $taxIdentificationNumber
     *
     * @return self
     */
    public function setTaxIdentificationNumber(string $taxIdentificationNumber) : self
    {
        $this->initialized['taxIdentificationNumber'] = true;
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }
    /**
     * Consignee�s Address Container.
     *
     * @return FreightShipShipToAddress
     */
    public function getAddress() : FreightShipShipToAddress
    {
        return $this->address;
    }
    /**
     * Consignee�s Address Container.
     *
     * @param FreightShipShipToAddress $address
     *
     * @return self
     */
    public function setAddress(FreightShipShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
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
     * Consignee�s fax number.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Consignee�s fax number.
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
     * Consignee�s email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Consignee�s email address.
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