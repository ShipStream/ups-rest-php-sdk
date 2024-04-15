<?php

namespace ShipStream\Ups\Api\Model;

class PaymentInformationPayer extends \ArrayObject
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
     * Payer�s company name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var FreightShipPayerAddress|null
     */
    protected $address;
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
    *
    * @var string|null
    */
    protected $shipperNumber;
    /**
     * Contact name at the payer�s location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Phone Container.
     *
     * @var PayerPhone|null
     */
    protected $phone;
    /**
     * Payer�s fax number.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Payer�s email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Payer�s company name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Payer�s company name
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
     * Address Container.
     *
     * @return FreightShipPayerAddress|null
     */
    public function getAddress() : ?FreightShipPayerAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param FreightShipPayerAddress|null $address
     *
     * @return self
     */
    public function setAddress(?FreightShipPayerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
    *
    * @return string|null
    */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
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
     * Contact name at the payer�s location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the payer�s location.
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
     * Phone Container.
     *
     * @return PayerPhone|null
     */
    public function getPhone() : ?PayerPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param PayerPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?PayerPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Payer�s fax number.
     *
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * Payer�s fax number.
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
     * Payer�s email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Payer�s email address.
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