<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipShipmentShipFrom extends \ArrayObject
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
     * The shipper�s name or company name.
     *
     * @var string
     */
    protected $name;
    /**
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
    *
    * @var string
    */
    protected $taxIdentificationNumber;
    /**
     * Shipper�s Address Container.
     *
     * @var FreightShipShipFromAddress
     */
    protected $address;
    /**
     * Contact name at the ship from location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Phone Container
     *
     * @var ShipFromPhone
     */
    protected $phone;
    /**
     * The ship from location�s Fax Number.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Shipper�s email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * The shipper�s name or company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The shipper�s name or company name.
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
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
    *
    * @return string
    */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
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
     * Shipper�s Address Container.
     *
     * @return FreightShipShipFromAddress
     */
    public function getAddress() : FreightShipShipFromAddress
    {
        return $this->address;
    }
    /**
     * Shipper�s Address Container.
     *
     * @param FreightShipShipFromAddress $address
     *
     * @return self
     */
    public function setAddress(FreightShipShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact name at the ship from location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship from location.
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
     * The ship from location�s Fax Number.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * The ship from location�s Fax Number.
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
     * Shipper�s email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper�s email address.
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