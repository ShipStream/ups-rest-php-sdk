<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipTo extends \ArrayObject
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
     * An identification number specified by shipper.
     *
     * @var string|null
     */
    protected $shipperAssignedIdentificationNumber;
    /**
     * Consignee's company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Contact name at the consignee's location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * Consignee's Tax Identification Number.
     *
     * @var string|null
     */
    protected $taxIdentificationNumber;
    /**
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Consignee's email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Information that specifies a physical location.
     *
     * @var ManifestShipToAddress|null
     */
    protected $address;
    /**
     * Location name that the package is shipped to.
     *
     * @var string|null
     */
    protected $locationID;
    /**
     * Alias of the location where the package is received.
     *
     * @var string|null
     */
    protected $receivingAddressName;
    /**
     * An identification number specified by shipper.
     *
     * @return string|null
     */
    public function getShipperAssignedIdentificationNumber() : ?string
    {
        return $this->shipperAssignedIdentificationNumber;
    }
    /**
     * An identification number specified by shipper.
     *
     * @param string|null $shipperAssignedIdentificationNumber
     *
     * @return self
     */
    public function setShipperAssignedIdentificationNumber(?string $shipperAssignedIdentificationNumber) : self
    {
        $this->initialized['shipperAssignedIdentificationNumber'] = true;
        $this->shipperAssignedIdentificationNumber = $shipperAssignedIdentificationNumber;
        return $this;
    }
    /**
     * Consignee's company name.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Consignee's company name.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Contact name at the consignee's location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the consignee's location.
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
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Consignee's Tax Identification Number.
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Consignee's Tax Identification Number.
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
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Consignee's email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Consignee's email address.
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
     * @return ManifestShipToAddress|null
     */
    public function getAddress() : ?ManifestShipToAddress
    {
        return $this->address;
    }
    /**
     * Information that specifies a physical location.
     *
     * @param ManifestShipToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ManifestShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Location name that the package is shipped to.
     *
     * @return string|null
     */
    public function getLocationID() : ?string
    {
        return $this->locationID;
    }
    /**
     * Location name that the package is shipped to.
     *
     * @param string|null $locationID
     *
     * @return self
     */
    public function setLocationID(?string $locationID) : self
    {
        $this->initialized['locationID'] = true;
        $this->locationID = $locationID;
        return $this;
    }
    /**
     * Alias of the location where the package is received.
     *
     * @return string|null
     */
    public function getReceivingAddressName() : ?string
    {
        return $this->receivingAddressName;
    }
    /**
     * Alias of the location where the package is received.
     *
     * @param string|null $receivingAddressName
     *
     * @return self
     */
    public function setReceivingAddressName(?string $receivingAddressName) : self
    {
        $this->initialized['receivingAddressName'] = true;
        $this->receivingAddressName = $receivingAddressName;
        return $this;
    }
}