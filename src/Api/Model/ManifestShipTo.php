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
     * @var string
     */
    protected $shipperAssignedIdentificationNumber;
    /**
     * Consignee's company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Contact name at the consignee's location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Consignee's Tax Identification Number.
     *
     * @var string
     */
    protected $taxIdentificationNumber;
    /**
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Consignee's email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * Information that specifies a physical location.
     *
     * @var ManifestShipToAddress
     */
    protected $address;
    /**
     * Location name that the package is shipped to.
     *
     * @var string
     */
    protected $locationID;
    /**
     * Name of the location where the package is received.
     *
     * @var string
     */
    protected $receivingAddressName;
    /**
     * An identification number specified by shipper.
     *
     * @return string
     */
    public function getShipperAssignedIdentificationNumber() : string
    {
        return $this->shipperAssignedIdentificationNumber;
    }
    /**
     * An identification number specified by shipper.
     *
     * @param string $shipperAssignedIdentificationNumber
     *
     * @return self
     */
    public function setShipperAssignedIdentificationNumber(string $shipperAssignedIdentificationNumber) : self
    {
        $this->initialized['shipperAssignedIdentificationNumber'] = true;
        $this->shipperAssignedIdentificationNumber = $shipperAssignedIdentificationNumber;
        return $this;
    }
    /**
     * Consignee's company name.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Consignee's company name.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Contact name at the consignee's location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the consignee's location.
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
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Consignee's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Consignee's Tax Identification Number.
     *
     * @return string
     */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Consignee's Tax Identification Number.
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
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Consignee's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Consignee's email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Consignee's email address.
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
    /**
     * Information that specifies a physical location.
     *
     * @return ManifestShipToAddress
     */
    public function getAddress() : ManifestShipToAddress
    {
        return $this->address;
    }
    /**
     * Information that specifies a physical location.
     *
     * @param ManifestShipToAddress $address
     *
     * @return self
     */
    public function setAddress(ManifestShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Location name that the package is shipped to.
     *
     * @return string
     */
    public function getLocationID() : string
    {
        return $this->locationID;
    }
    /**
     * Location name that the package is shipped to.
     *
     * @param string $locationID
     *
     * @return self
     */
    public function setLocationID(string $locationID) : self
    {
        $this->initialized['locationID'] = true;
        $this->locationID = $locationID;
        return $this;
    }
    /**
     * Name of the location where the package is received.
     *
     * @return string
     */
    public function getReceivingAddressName() : string
    {
        return $this->receivingAddressName;
    }
    /**
     * Name of the location where the package is received.
     *
     * @param string $receivingAddressName
     *
     * @return self
     */
    public function setReceivingAddressName(string $receivingAddressName) : self
    {
        $this->initialized['receivingAddressName'] = true;
        $this->receivingAddressName = $receivingAddressName;
        return $this;
    }
}