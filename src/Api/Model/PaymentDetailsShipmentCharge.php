<?php

namespace ShipStream\Ups\Api\Model;

class PaymentDetailsShipmentCharge extends \ArrayObject
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
     * Values are 01 = Transportation, 02 = Duties and Taxes
     *
     * @var string|null
     */
    protected $type;
    /**
     * Container for the BillShipper billing option.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @var RateShipmentChargeBillShipper|null
     */
    protected $billShipper;
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @var ShipmentChargeBillReceiver|null
     */
    protected $billReceiver;
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @var RateShipmentChargeBillThirdParty|null
     */
    protected $billThirdParty;
    /**
     * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  Empty Tag. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
     *
     * @var string|null
     */
    protected $consigneeBilledIndicator;
    /**
     * Values are 01 = Transportation, 02 = Duties and Taxes
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Values are 01 = Transportation, 02 = Duties and Taxes
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Container for the BillShipper billing option.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @return RateShipmentChargeBillShipper|null
     */
    public function getBillShipper() : ?RateShipmentChargeBillShipper
    {
        return $this->billShipper;
    }
    /**
     * Container for the BillShipper billing option.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @param RateShipmentChargeBillShipper|null $billShipper
     *
     * @return self
     */
    public function setBillShipper(?RateShipmentChargeBillShipper $billShipper) : self
    {
        $this->initialized['billShipper'] = true;
        $this->billShipper = $billShipper;
        return $this;
    }
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @return ShipmentChargeBillReceiver|null
     */
    public function getBillReceiver() : ?ShipmentChargeBillReceiver
    {
        return $this->billReceiver;
    }
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @param ShipmentChargeBillReceiver|null $billReceiver
     *
     * @return self
     */
    public function setBillReceiver(?ShipmentChargeBillReceiver $billReceiver) : self
    {
        $this->initialized['billReceiver'] = true;
        $this->billReceiver = $billReceiver;
        return $this;
    }
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @return RateShipmentChargeBillThirdParty|null
     */
    public function getBillThirdParty() : ?RateShipmentChargeBillThirdParty
    {
        return $this->billThirdParty;
    }
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @param RateShipmentChargeBillThirdParty|null $billThirdParty
     *
     * @return self
     */
    public function setBillThirdParty(?RateShipmentChargeBillThirdParty $billThirdParty) : self
    {
        $this->initialized['billThirdParty'] = true;
        $this->billThirdParty = $billThirdParty;
        return $this;
    }
    /**
     * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  Empty Tag. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
     *
     * @return string|null
     */
    public function getConsigneeBilledIndicator() : ?string
    {
        return $this->consigneeBilledIndicator;
    }
    /**
     * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  Empty Tag. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
     *
     * @param string|null $consigneeBilledIndicator
     *
     * @return self
     */
    public function setConsigneeBilledIndicator(?string $consigneeBilledIndicator) : self
    {
        $this->initialized['consigneeBilledIndicator'] = true;
        $this->consigneeBilledIndicator = $consigneeBilledIndicator;
        return $this;
    }
}