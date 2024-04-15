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
     * @var string|null
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var PayerAddress|null
     */
    protected $address;
    /**
     * Payer's six digit account number.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * Contact name at the payer's location.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Payer's company name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Payer's company name
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
     * @return PayerAddress|null
     */
    public function getAddress() : ?PayerAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param PayerAddress|null $address
     *
     * @return self
     */
    public function setAddress(?PayerAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Payer's six digit account number.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Payer's six digit account number.
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
     * Contact name at the payer's location.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the payer's location.
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
}