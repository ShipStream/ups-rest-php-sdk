<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentShipFrom extends \ArrayObject
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
    * The ship from location's name or company name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
    *
    * @var string|null
    */
    protected $name;
    /**
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
    *
    * @var string|null
    */
    protected $attentionName;
    /**
     * Not applicable for ShipFrom.
     *
     * @var string|null
     */
    protected $companyDisplayableName;
    /**
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
    *
    * @var string|null
    */
    protected $taxIdentificationNumber;
    /**
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @var ShipFromTaxIDType|null
     */
    protected $taxIDType;
    /**
     * Phone Container
     *
     * @var ShipFromPhone|null
     */
    protected $phone;
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Address Container.
     *
     * @var ShipFromAddress|null
     */
    protected $address;
    /**
     * Vendor Information Container
     *
     * @var ShipFromVendorInfo|null
     */
    protected $vendorInfo;
    /**
    * The ship from location's name or company name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
    *
    * @return string|null
    */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
    * The ship from location's name or company name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
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
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
    *
    * @return string|null
    */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
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
     * Not applicable for ShipFrom.
     *
     * @return string|null
     */
    public function getCompanyDisplayableName() : ?string
    {
        return $this->companyDisplayableName;
    }
    /**
     * Not applicable for ShipFrom.
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
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
    *
    * @return string|null
    */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
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
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @return ShipFromTaxIDType|null
     */
    public function getTaxIDType() : ?ShipFromTaxIDType
    {
        return $this->taxIDType;
    }
    /**
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @param ShipFromTaxIDType|null $taxIDType
     *
     * @return self
     */
    public function setTaxIDType(?ShipFromTaxIDType $taxIDType) : self
    {
        $this->initialized['taxIDType'] = true;
        $this->taxIDType = $taxIDType;
        return $this;
    }
    /**
     * Phone Container
     *
     * @return ShipFromPhone|null
     */
    public function getPhone() : ?ShipFromPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param ShipFromPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ShipFromPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
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
     * Address Container.
     *
     * @return ShipFromAddress|null
     */
    public function getAddress() : ?ShipFromAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipFromAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Vendor Information Container
     *
     * @return ShipFromVendorInfo|null
     */
    public function getVendorInfo() : ?ShipFromVendorInfo
    {
        return $this->vendorInfo;
    }
    /**
     * Vendor Information Container
     *
     * @param ShipFromVendorInfo|null $vendorInfo
     *
     * @return self
     */
    public function setVendorInfo(?ShipFromVendorInfo $vendorInfo) : self
    {
        $this->initialized['vendorInfo'] = true;
        $this->vendorInfo = $vendorInfo;
        return $this;
    }
}