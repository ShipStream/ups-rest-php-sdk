<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestPaymentInformation extends \ArrayObject
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
     * @var FreightRatePaymentInformationPayer
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
     * @return FreightRatePaymentInformationPayer
     */
    public function getPayer() : FreightRatePaymentInformationPayer
    {
        return $this->payer;
    }
    /**
     * Payer Container.
     *
     * @param FreightRatePaymentInformationPayer $payer
     *
     * @return self
     */
    public function setPayer(FreightRatePaymentInformationPayer $payer) : self
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