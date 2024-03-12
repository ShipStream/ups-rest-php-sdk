<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipShipmentPaymentInformation extends \ArrayObject
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
     * Payer Container.
     *
     * @var PaymentInformationPayer
     */
    protected $payer;
    /**
     * ShipmentBillingOption Container.
     *
     * @var PaymentInformationShipmentBillingOption
     */
    protected $shipmentBillingOption;
    /**
     * Payer Container.
     *
     * @return PaymentInformationPayer
     */
    public function getPayer() : PaymentInformationPayer
    {
        return $this->payer;
    }
    /**
     * Payer Container.
     *
     * @param PaymentInformationPayer $payer
     *
     * @return self
     */
    public function setPayer(PaymentInformationPayer $payer) : self
    {
        $this->initialized['payer'] = true;
        $this->payer = $payer;
        return $this;
    }
    /**
     * ShipmentBillingOption Container.
     *
     * @return PaymentInformationShipmentBillingOption
     */
    public function getShipmentBillingOption() : PaymentInformationShipmentBillingOption
    {
        return $this->shipmentBillingOption;
    }
    /**
     * ShipmentBillingOption Container.
     *
     * @param PaymentInformationShipmentBillingOption $shipmentBillingOption
     *
     * @return self
     */
    public function setShipmentBillingOption(PaymentInformationShipmentBillingOption $shipmentBillingOption) : self
    {
        $this->initialized['shipmentBillingOption'] = true;
        $this->shipmentBillingOption = $shipmentBillingOption;
        return $this;
    }
}