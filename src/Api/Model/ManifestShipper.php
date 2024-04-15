<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipper extends \ArrayObject
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
     * Shipper's company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Shipper's Attention Name.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Shipper's Tax Identification Number.
     *
     * @var string|null
     */
    protected $taxIdentificationNumber;
    /**
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * Shipper's designated contact eMail address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Information that specifies a physical location.
     *
     * @var ManifestShipperAddress|null
     */
    protected $address;
    /**
     * Shipper's company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Shipper's company name.
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
     * Shipper's Attention Name.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Shipper's Attention Name.
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
     * Shipper's Tax Identification Number.
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Shipper's Tax Identification Number.
     *
     * @param string|null $taxIdentificationNumber
     *
     * @return self
     */
    public function setTaxIdentificationNumber(?string $taxIdentificationNumber) : self
    {
        $this->initialized['taxIdentificationNumber'] = true;
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }
    /**
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @param string|null $faxNumber
     *
     * @return self
     */
    public function setFaxNumber(?string $faxNumber) : self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @param string|null $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(?string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * Shipper's designated contact eMail address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper's designated contact eMail address.
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
     * Information that specifies a physical location.
     *
     * @return ManifestShipperAddress|null
     */
    public function getAddress() : ?ManifestShipperAddress
    {
        return $this->address;
    }
    /**
     * Information that specifies a physical location.
     *
     * @param ManifestShipperAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ManifestShipperAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}