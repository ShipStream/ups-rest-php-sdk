<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipper extends \ArrayObject
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
     * Shipper's company name.
     *
     * @var string
     */
    protected $name;
    /**
     * Shipper's Attention Name.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Shipper's Tax Identification Number.
     *
     * @var string
     */
    protected $taxIdentificationNumber;
    /**
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * Shipper's designated contact eMail address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
    * Address tag Container.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. 
    If this address is used as the ShipFrom the shipment will be rated from this origin address.
    *
    * @var ShipperAddress
    */
    protected $address;
    /**
     * Shipper's company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Shipper's company name.
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
     * Shipper's Attention Name.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Shipper's Attention Name.
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
     * Shipper's Tax Identification Number.
     *
     * @return string
     */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Shipper's Tax Identification Number.
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
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Shipper's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Shipper's Fax Number. US Fax numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
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
     * Shipper's six digit alphanumeric account number.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * Shipper's designated contact eMail address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper's designated contact eMail address.
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
    * Address tag Container.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. 
    If this address is used as the ShipFrom the shipment will be rated from this origin address.
    *
    * @return ShipperAddress
    */
    public function getAddress() : ShipperAddress
    {
        return $this->address;
    }
    /**
    * Address tag Container.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. 
    If this address is used as the ShipFrom the shipment will be rated from this origin address.
    *
    * @param ShipperAddress $address
    *
    * @return self
    */
    public function setAddress(ShipperAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}