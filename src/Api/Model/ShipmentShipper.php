<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipper extends \ArrayObject
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
    * Shippers company name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.
    *
    * @var string
    */
    protected $name;
    /**
    * Shippers Attention Name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.  Required if destination is international. Required if Invoice and CO International forms are requested and the ShipFrom address is not present.
    *
    * @var string
    */
    protected $attentionName;
    /**
    * Shipper's CompanyDisplayableName.
    
    The CompanyDisplayableName will be displayed in tracking results and notification messages in place of the name associated with the shipper account. 
    The original shipper account name will be displayed for all Return Services and Import Control Shipments.  This is available for Shipper accounts enabled by UPS and applies to Forward Shipments.
    *
    * @var string
    */
    protected $companyDisplayableName;
    /**
     * Shipper's Tax Identification Number.  Conditionally required if EEI form (International forms) is requested and ship From is not mentioned.
     *
     * @var string
     */
    protected $taxIdentificationNumber;
    /**
     * Container tag for Phone Number.
     *
     * @var ShipperPhone
     */
    protected $phone;
    /**
    * Shipper's six digit alphanumeric account number.
    
    Must be associated with the UserId specified in the AccessRequest XML. 
    
    The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account. 
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled. 
    
    All other accounts must be either a daily pickup account or an occasional account.
    *
    * @var string
    */
    protected $shipperNumber;
    /**
     * Shipper's Fax Number.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Shipper's email address.  Must be associated with the UserId specified in the AccessRequest XML.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
    *
    * @var ShipperAddress
    */
    protected $address;
    /**
    * Shippers company name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.
    *
    * @return string
    */
    public function getName() : string
    {
        return $this->name;
    }
    /**
    * Shippers company name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.
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
    * Shippers Attention Name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.  Required if destination is international. Required if Invoice and CO International forms are requested and the ShipFrom address is not present.
    *
    * @return string
    */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
    * Shippers Attention Name. 
    
    For forward Shipment 35 characters are accepted, but only 30 characters will be printed on the label.  Required if destination is international. Required if Invoice and CO International forms are requested and the ShipFrom address is not present.
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
    * Shipper's CompanyDisplayableName.
    
    The CompanyDisplayableName will be displayed in tracking results and notification messages in place of the name associated with the shipper account. 
    The original shipper account name will be displayed for all Return Services and Import Control Shipments.  This is available for Shipper accounts enabled by UPS and applies to Forward Shipments.
    *
    * @return string
    */
    public function getCompanyDisplayableName() : string
    {
        return $this->companyDisplayableName;
    }
    /**
    * Shipper's CompanyDisplayableName.
    
    The CompanyDisplayableName will be displayed in tracking results and notification messages in place of the name associated with the shipper account. 
    The original shipper account name will be displayed for all Return Services and Import Control Shipments.  This is available for Shipper accounts enabled by UPS and applies to Forward Shipments.
    *
    * @param string $companyDisplayableName
    *
    * @return self
    */
    public function setCompanyDisplayableName(string $companyDisplayableName) : self
    {
        $this->initialized['companyDisplayableName'] = true;
        $this->companyDisplayableName = $companyDisplayableName;
        return $this;
    }
    /**
     * Shipper's Tax Identification Number.  Conditionally required if EEI form (International forms) is requested and ship From is not mentioned.
     *
     * @return string
     */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Shipper's Tax Identification Number.  Conditionally required if EEI form (International forms) is requested and ship From is not mentioned.
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
     * Container tag for Phone Number.
     *
     * @return ShipperPhone
     */
    public function getPhone() : ShipperPhone
    {
        return $this->phone;
    }
    /**
     * Container tag for Phone Number.
     *
     * @param ShipperPhone $phone
     *
     * @return self
     */
    public function setPhone(ShipperPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
    * Shipper's six digit alphanumeric account number.
    
    Must be associated with the UserId specified in the AccessRequest XML. 
    
    The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account. 
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled. 
    
    All other accounts must be either a daily pickup account or an occasional account.
    *
    * @return string
    */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
    * Shipper's six digit alphanumeric account number.
    
    Must be associated with the UserId specified in the AccessRequest XML. 
    
    The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account. 
    
    Drop Shipper accounts are valid for return service shipments only if the account is Trade Direct (TD) enabled. 
    
    All other accounts must be either a daily pickup account or an occasional account.
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
     * Shipper's Fax Number.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Shipper's Fax Number.
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
     * Shipper's email address.  Must be associated with the UserId specified in the AccessRequest XML.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper's email address.  Must be associated with the UserId specified in the AccessRequest XML.
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
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
    *
    * @return ShipperAddress
    */
    public function getAddress() : ShipperAddress
    {
        return $this->address;
    }
    /**
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
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