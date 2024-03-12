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
    * @var string
    */
    protected $name;
    /**
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
    *
    * @var string
    */
    protected $attentionName;
    /**
     * Not applicable for ShipFrom.
     *
     * @var string
     */
    protected $companyDisplayableName;
    /**
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
    *
    * @var string
    */
    protected $taxIdentificationNumber;
    /**
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @var ShipFromTaxIDType
     */
    protected $taxIDType;
    /**
     * Phone Container
     *
     * @var ShipFromPhone
     */
    protected $phone;
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Address Container.
     *
     * @var ShipFromAddress
     */
    protected $address;
    /**
     * Vendor Information Container
     *
     * @var ShipFromVendorInfo
     */
    protected $vendorInfo;
    /**
    * The ship from location's name or company name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
    *
    * @return string
    */
    public function getName() : string
    {
        return $this->name;
    }
    /**
    * The ship from location's name or company name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML.
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
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
    *
    * @return string
    */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
    * The ship from Attention name. 
    35 characters are accepted, but for return Shipment only 30 characters will be printed on the label.  Required if ShipFrom tag is in the XML and Invoice or CO International forms is requested. If not present, will default to the Shipper Attention Name.
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
     * Not applicable for ShipFrom.
     *
     * @return string
     */
    public function getCompanyDisplayableName() : string
    {
        return $this->companyDisplayableName;
    }
    /**
     * Not applicable for ShipFrom.
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
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
    *
    * @return string
    */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
    * Company's Tax Identification Number at the pick up location.  Conditionally required if EEI form (International forms) is requested. 
    Applies to EEI Form only.
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
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @return ShipFromTaxIDType
     */
    public function getTaxIDType() : ShipFromTaxIDType
    {
        return $this->taxIDType;
    }
    /**
     * Tax Identification Container.  Applies to EEI form only.
     *
     * @param ShipFromTaxIDType $taxIDType
     *
     * @return self
     */
    public function setTaxIDType(ShipFromTaxIDType $taxIDType) : self
    {
        $this->initialized['taxIDType'] = true;
        $this->taxIDType = $taxIDType;
        return $this;
    }
    /**
     * Phone Container
     *
     * @return ShipFromPhone
     */
    public function getPhone() : ShipFromPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param ShipFromPhone $phone
     *
     * @return self
     */
    public function setPhone(ShipFromPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * The Ship from fax number.  If Ship from country or territory is US 10 digits allowed, otherwise 1-15 digits allowed.
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
     * Address Container.
     *
     * @return ShipFromAddress
     */
    public function getAddress() : ShipFromAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param ShipFromAddress $address
     *
     * @return self
     */
    public function setAddress(ShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Vendor Information Container
     *
     * @return ShipFromVendorInfo
     */
    public function getVendorInfo() : ShipFromVendorInfo
    {
        return $this->vendorInfo;
    }
    /**
     * Vendor Information Container
     *
     * @param ShipFromVendorInfo $vendorInfo
     *
     * @return self
     */
    public function setVendorInfo(ShipFromVendorInfo $vendorInfo) : self
    {
        $this->initialized['vendorInfo'] = true;
        $this->vendorInfo = $vendorInfo;
        return $this;
    }
}