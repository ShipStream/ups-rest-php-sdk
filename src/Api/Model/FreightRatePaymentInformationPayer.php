<?php

namespace ShipStream\Ups\Api\Model;

class FreightRatePaymentInformationPayer extends \ArrayObject
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
     * Payer's company name
     *
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var PayerAddress
     */
    protected $address;
    /**
     * Payer's six digit account number.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * Contact name at the payer's location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Payer's company name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Payer's company name
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
     * @return PayerAddress
     */
    public function getAddress() : PayerAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param PayerAddress $address
     *
     * @return self
     */
    public function setAddress(PayerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Payer's six digit account number.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Payer's six digit account number.
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
     * Contact name at the payer's location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the payer's location.
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
}