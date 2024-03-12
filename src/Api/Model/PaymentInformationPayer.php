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
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var FreightShipPayerAddress
     */
    protected $address;
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
    *
    * @var string
    */
    protected $shipperNumber;
    /**
     * Contact name at the payer�s location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Phone Container.
     *
     * @var PayerPhone
     */
    protected $phone;
    /**
     * Payer�s fax number.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * Payer�s email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * Payer�s company name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Payer�s company name
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
     * Address Container.
     *
     * @return FreightShipPayerAddress
     */
    public function getAddress() : FreightShipPayerAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param FreightShipPayerAddress $address
     *
     * @return self
     */
    public function setAddress(FreightShipPayerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
    *
    * @return string
    */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
    * Payer�s account number.
    User�s 6 digit UPS account number or 9 digit SCS account number.
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
     * Contact name at the payer�s location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the payer�s location.
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
     * Phone Container.
     *
     * @return PayerPhone
     */
    public function getPhone() : PayerPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param PayerPhone $phone
     *
     * @return self
     */
    public function setPhone(PayerPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Payer�s fax number.
     *
     * @return string
     */
    public function getFaxNumber() : string
    {
        return $this->faxNumber;
    }
    /**
     * Payer�s fax number.
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
     * Payer�s email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Payer�s email address.
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