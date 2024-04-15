<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipTo extends \ArrayObject
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
     * Consignee's company name.  All other accounts must be either a daily pickup account or an occasional account.
     *
     * @var string|null
     */
    protected $name;
    /**
    * Contact name at the consignee's location.  Required for: UPS Next Day Air Early service, and when ShipTo country or territory is different than ShipFrom country or territory. 
    
    Required if Invoice International form is requested.
    *
    * @var string|null
    */
    protected $attentionName;
    /**
     * Not applicable for ShipTo
     *
     * @var string|null
     */
    protected $companyDisplayableName;
    /**
     * Consignee's tax identification number.
     *
     * @var string|null
     */
    protected $taxIdentificationNumber;
    /**
     * Phone Container.
     *
     * @var ShipToPhone|null
     */
    protected $phone;
    /**
     * Consignee's fax number.  If ShipTo country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
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
     * Address Container.
     *
     * @var ShipToAddress|null
     */
    protected $address;
    /**
     * Location ID is a unique identifier referring to a specific shipping/receiving location.  Location ID must be alphanumeric characters. All letters must be capitalized.
     *
     * @var string|null
     */
    protected $locationID;
    /**
     * Consignee's company name.  All other accounts must be either a daily pickup account or an occasional account.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Consignee's company name.  All other accounts must be either a daily pickup account or an occasional account.
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
    * Contact name at the consignee's location.  Required for: UPS Next Day Air Early service, and when ShipTo country or territory is different than ShipFrom country or territory. 
    
    Required if Invoice International form is requested.
    *
    * @return string|null
    */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
    * Contact name at the consignee's location.  Required for: UPS Next Day Air Early service, and when ShipTo country or territory is different than ShipFrom country or territory. 
    
    Required if Invoice International form is requested.
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
     * Not applicable for ShipTo
     *
     * @return string|null
     */
    public function getCompanyDisplayableName() : ?string
    {
        return $this->companyDisplayableName;
    }
    /**
     * Not applicable for ShipTo
     *
     * @param string|null $companyDisplayableName
     *
     * @return self
     */
    public function setCompanyDisplayableName(?string $companyDisplayableName) : self
    {
        $this->initialized['companyDisplayableName'] = true;
        $this->companyDisplayableName = $companyDisplayableName;
        return $this;
    }
    /**
     * Consignee's tax identification number.
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * Consignee's tax identification number.
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
     * Phone Container.
     *
     * @return ShipToPhone|null
     */
    public function getPhone() : ?ShipToPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param ShipToPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ShipToPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Consignee's fax number.  If ShipTo country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * Consignee's fax number.  If ShipTo country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
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
     * Address Container.
     *
     * @return ShipToAddress|null
     */
    public function getAddress() : ?ShipToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Location ID is a unique identifier referring to a specific shipping/receiving location.  Location ID must be alphanumeric characters. All letters must be capitalized.
     *
     * @return string|null
     */
    public function getLocationID() : ?string
    {
        return $this->locationID;
    }
    /**
     * Location ID is a unique identifier referring to a specific shipping/receiving location.  Location ID must be alphanumeric characters. All letters must be capitalized.
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
}