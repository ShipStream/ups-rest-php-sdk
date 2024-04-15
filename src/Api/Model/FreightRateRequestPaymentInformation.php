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
     * @var FreightRatePaymentInformationPayer|null
     */
    protected $payer;
    /**
     * ShipmentBillingOption Container.
     *
     * @var PaymentInformationShipmentBillingOption|null
     */
    protected $shipmentBillingOption;
    /**
     * Payer Container.
     *
     * @return FreightRatePaymentInformationPayer|null
     */
    public function getPayer() : ?FreightRatePaymentInformationPayer
    {
        return $this->payer;
    }
    /**
     * Payer Container.
     *
     * @param FreightRatePaymentInformationPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?FreightRatePaymentInformationPayer $payer) : self
    {
        $this->initialized['payer'] = true;
        $this->payer = $payer;
        return $this;
    }
    /**
     * ShipmentBillingOption Container.
     *
     * @return PaymentInformationShipmentBillingOption|null
     */
    public function getShipmentBillingOption() : ?PaymentInformationShipmentBillingOption
    {
        return $this->shipmentBillingOption;
    }
    /**
     * ShipmentBillingOption Container.
     *
     * @param PaymentInformationShipmentBillingOption|null $shipmentBillingOption
     *
     * @return self
     */
    public function setShipmentBillingOption(?PaymentInformationShipmentBillingOption $shipmentBillingOption) : self
    {
        $this->initialized['shipmentBillingOption'] = true;
        $this->shipmentBillingOption = $shipmentBillingOption;
        return $this;
    }
}