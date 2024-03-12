<?php

namespace ShipStream\Ups\Api\Model;

class PaymentInformationShipmentCharge extends \ArrayObject
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
    * Valid values: 
    01 = Transportation
    02 = Duties and Taxes 03 = Broker of Choice  A shipment charge type of 01 = Transportation is required. 
    
    A shipment charge type of 02 = Duties and Taxes is not required; however, this charge type is invalid for Qualified Domestic Shipments. 
    
    A Qualified Domestic Shipment is any shipment in which one of the following applies: 
    
    1) The origin and destination country or territory is the same.
    
    2) US to PR shipment.
    
    3) PR to US shipment.
    
    4) The origin and destination country or territory are both European Union countries or territories and the GoodsNotInFreeCirculation indicator is not present.
    
    5) The origin and destination IATA code is the same.                                                                                                                                                                                                                                                                                                                                                                                                                                                      03 = Broker of Choice
    *
    * @var string
    */
    protected $type;
    /**
     * Container for the BillShipper billing option. The three payment methods that are available for the Bill Shipper billing option are alternate payment method, account number or credit card.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @var ShipmentChargeBillShipper
     */
    protected $billShipper;
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @var ShipmentChargeBillReceiver
     */
    protected $billReceiver;
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @var ShipmentChargeBillThirdParty
     */
    protected $billThirdParty;
    /**
    * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  This is an empty tag, any value inside is ignored. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
    
    This payment method allows you to bill the charges for a specified shipment to a consignee who has agreed to pay the charges. All shipping charges are billed to the consignees UPS account number including the following accessorials: Additional Handling, Delivery Area Surcharges, Delivery Change Requests, Early AM Premium, Early AM Out of Territory, Fuel Surcharge, Hazardous Material Surcharges, Large Package Surcharge, Over Max Limits, and Saturday Delivery.
    
    Declared Value, Delivery Confirmation, On Call Pickup, Remote Area Surcharge, Saturday Pickup of Delivery fees are not passed to the consignee. These charges are billed to the shippers UPS account number.
    *
    * @var string
    */
    protected $consigneeBilledIndicator;
    /**
    * Valid values: 
    01 = Transportation
    02 = Duties and Taxes 03 = Broker of Choice  A shipment charge type of 01 = Transportation is required. 
    
    A shipment charge type of 02 = Duties and Taxes is not required; however, this charge type is invalid for Qualified Domestic Shipments. 
    
    A Qualified Domestic Shipment is any shipment in which one of the following applies: 
    
    1) The origin and destination country or territory is the same.
    
    2) US to PR shipment.
    
    3) PR to US shipment.
    
    4) The origin and destination country or territory are both European Union countries or territories and the GoodsNotInFreeCirculation indicator is not present.
    
    5) The origin and destination IATA code is the same.                                                                                                                                                                                                                                                                                                                                                                                                                                                      03 = Broker of Choice
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * Valid values: 
    01 = Transportation
    02 = Duties and Taxes 03 = Broker of Choice  A shipment charge type of 01 = Transportation is required. 
    
    A shipment charge type of 02 = Duties and Taxes is not required; however, this charge type is invalid for Qualified Domestic Shipments. 
    
    A Qualified Domestic Shipment is any shipment in which one of the following applies: 
    
    1) The origin and destination country or territory is the same.
    
    2) US to PR shipment.
    
    3) PR to US shipment.
    
    4) The origin and destination country or territory are both European Union countries or territories and the GoodsNotInFreeCirculation indicator is not present.
    
    5) The origin and destination IATA code is the same.                                                                                                                                                                                                                                                                                                                                                                                                                                                      03 = Broker of Choice
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Container for the BillShipper billing option. The three payment methods that are available for the Bill Shipper billing option are alternate payment method, account number or credit card.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @return ShipmentChargeBillShipper
     */
    public function getBillShipper() : ShipmentChargeBillShipper
    {
        return $this->billShipper;
    }
    /**
     * Container for the BillShipper billing option. The three payment methods that are available for the Bill Shipper billing option are alternate payment method, account number or credit card.  This element or its sibling element, BillReceiver, BillThirdParty or ConsigneeBilledIndicator, must be present but no more than one can be present.
     *
     * @param ShipmentChargeBillShipper $billShipper
     *
     * @return self
     */
    public function setBillShipper(ShipmentChargeBillShipper $billShipper) : self
    {
        $this->initialized['billShipper'] = true;
        $this->billShipper = $billShipper;
        return $this;
    }
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @return ShipmentChargeBillReceiver
     */
    public function getBillReceiver() : ShipmentChargeBillReceiver
    {
        return $this->billReceiver;
    }
    /**
     * Container for the BillReceiver billing option.  This element or its sibling element, BillShipper, BillThirdParty or Consignee Billed, must be present but no more than one can be present. For a return shipment, Bill Receiver is invalid for Transportation charges.
     *
     * @param ShipmentChargeBillReceiver $billReceiver
     *
     * @return self
     */
    public function setBillReceiver(ShipmentChargeBillReceiver $billReceiver) : self
    {
        $this->initialized['billReceiver'] = true;
        $this->billReceiver = $billReceiver;
        return $this;
    }
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @return ShipmentChargeBillThirdParty
     */
    public function getBillThirdParty() : ShipmentChargeBillThirdParty
    {
        return $this->billThirdParty;
    }
    /**
     * Container for the third party billing option.  This element or its sibling element, BillShipper, BillReceiver or Consignee Billed, must be present but no more than one can be present.
     *
     * @param ShipmentChargeBillThirdParty $billThirdParty
     *
     * @return self
     */
    public function setBillThirdParty(ShipmentChargeBillThirdParty $billThirdParty) : self
    {
        $this->initialized['billThirdParty'] = true;
        $this->billThirdParty = $billThirdParty;
        return $this;
    }
    /**
    * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  This is an empty tag, any value inside is ignored. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
    
    This payment method allows you to bill the charges for a specified shipment to a consignee who has agreed to pay the charges. All shipping charges are billed to the consignees UPS account number including the following accessorials: Additional Handling, Delivery Area Surcharges, Delivery Change Requests, Early AM Premium, Early AM Out of Territory, Fuel Surcharge, Hazardous Material Surcharges, Large Package Surcharge, Over Max Limits, and Saturday Delivery.
    
    Declared Value, Delivery Confirmation, On Call Pickup, Remote Area Surcharge, Saturday Pickup of Delivery fees are not passed to the consignee. These charges are billed to the shippers UPS account number.
    *
    * @return string
    */
    public function getConsigneeBilledIndicator() : string
    {
        return $this->consigneeBilledIndicator;
    }
    /**
    * Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  This is an empty tag, any value inside is ignored. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.
    
    This payment method allows you to bill the charges for a specified shipment to a consignee who has agreed to pay the charges. All shipping charges are billed to the consignees UPS account number including the following accessorials: Additional Handling, Delivery Area Surcharges, Delivery Change Requests, Early AM Premium, Early AM Out of Territory, Fuel Surcharge, Hazardous Material Surcharges, Large Package Surcharge, Over Max Limits, and Saturday Delivery.
    
    Declared Value, Delivery Confirmation, On Call Pickup, Remote Area Surcharge, Saturday Pickup of Delivery fees are not passed to the consignee. These charges are billed to the shippers UPS account number.
    *
    * @param string $consigneeBilledIndicator
    *
    * @return self
    */
    public function setConsigneeBilledIndicator(string $consigneeBilledIndicator) : self
    {
        $this->initialized['consigneeBilledIndicator'] = true;
        $this->consigneeBilledIndicator = $consigneeBilledIndicator;
        return $this;
    }
}