<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentPaymentDetails extends \ArrayObject
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
     * 
     *
     * @var list<PaymentDetailsShipmentCharge>|null
     */
    protected $shipmentCharge;
    /**
     * Split Duty VAT Indicator. The presence indicates the payer specified for Transportation Charges will pay transportation charges and any duties that apply to the shipment. The payer specified for Duties and Taxes will pay the VAT (Value-Added Tax) only.  Empty Tag. The payment method for Transportation charges must be UPS account. The UPS account must be a daily pickup account or an occasional account.
     *
     * @var string|null
     */
    protected $splitDutyVATIndicator;
    /**
     * 
     *
     * @return list<PaymentDetailsShipmentCharge>|null
     */
    public function getShipmentCharge() : ?array
    {
        return $this->shipmentCharge;
    }
    /**
     * 
     *
     * @param list<PaymentDetailsShipmentCharge>|null $shipmentCharge
     *
     * @return self
     */
    public function setShipmentCharge(?array $shipmentCharge) : self
    {
        $this->initialized['shipmentCharge'] = true;
        $this->shipmentCharge = $shipmentCharge;
        return $this;
    }
    /**
     * Split Duty VAT Indicator. The presence indicates the payer specified for Transportation Charges will pay transportation charges and any duties that apply to the shipment. The payer specified for Duties and Taxes will pay the VAT (Value-Added Tax) only.  Empty Tag. The payment method for Transportation charges must be UPS account. The UPS account must be a daily pickup account or an occasional account.
     *
     * @return string|null
     */
    public function getSplitDutyVATIndicator() : ?string
    {
        return $this->splitDutyVATIndicator;
    }
    /**
     * Split Duty VAT Indicator. The presence indicates the payer specified for Transportation Charges will pay transportation charges and any duties that apply to the shipment. The payer specified for Duties and Taxes will pay the VAT (Value-Added Tax) only.  Empty Tag. The payment method for Transportation charges must be UPS account. The UPS account must be a daily pickup account or an occasional account.
     *
     * @param string|null $splitDutyVATIndicator
     *
     * @return self
     */
    public function setSplitDutyVATIndicator(?string $splitDutyVATIndicator) : self
    {
        $this->initialized['splitDutyVATIndicator'] = true;
        $this->splitDutyVATIndicator = $splitDutyVATIndicator;
        return $this;
    }
}