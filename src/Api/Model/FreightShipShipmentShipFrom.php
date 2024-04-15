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
     * @var string|null
     */
    protected $name;
    /**
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
    *
    * @var string|null
    */
    protected $taxIdentificationNumber;
    /**
     * Shipper�s Address Container.
     *
     * @var FreightShipShipFromAddress|null
     */
    protected $address;
    /**
     * Contact name at the ship from location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Phone Container
     *
     * @var ShipFromPhone|null
     */
    protected $phone;
    /**
     * The ship from location�s Fax Number.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Shipper�s email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * The shipper�s name or company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The shipper�s name or company name.
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
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
    *
    * @return string|null
    */
    public function getTaxIdentificationNumber() : ?string
    {
        return $this->taxIdentificationNumber;
    }
    /**
    * Company�s Tax Identification Number at the pickup location.
    Required if SED form (International forms) is requested
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
     * Shipper�s Address Container.
     *
     * @return FreightShipShipFromAddress|null
     */
    public function getAddress() : ?FreightShipShipFromAddress
    {
        return $this->address;
    }
    /**
     * Shipper�s Address Container.
     *
     * @param FreightShipShipFromAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FreightShipShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact name at the ship from location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship from location.
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
     * The ship from location�s Fax Number.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * The ship from location�s Fax Number.
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
     * Shipper�s email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Shipper�s email address.
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
}