<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentChargeBillShipper extends \ArrayObject
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
    * UPS account number.  Must be the same UPS account number as the one provided in Shipper/ShipperNumber. 
    
    Either this element or one of the sibling elements CreditCard or AlternatePaymentMethod must be provided, but all of them may not be provided.
    *
    * @var string
    */
    protected $accountNumber;
    /**
    * Credit card information container.  Required if neither of the following is present: 
    
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AccountNumber 
    or 
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AlternatePaymentMethod. 
    
    Credit card payment is valid for shipments without return service only.
    *
    * @var BillShipperCreditCard
    */
    protected $creditCard;
    /**
    * Alternate Payment Method.
    
    Valid value: 01= PayPal
    
    Only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.   PayPal 01: Is only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.
    *
    * @var string
    */
    protected $alternatePaymentMethod;
    /**
    * UPS account number.  Must be the same UPS account number as the one provided in Shipper/ShipperNumber. 
    
    Either this element or one of the sibling elements CreditCard or AlternatePaymentMethod must be provided, but all of them may not be provided.
    *
    * @return string
    */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
    * UPS account number.  Must be the same UPS account number as the one provided in Shipper/ShipperNumber. 
    
    Either this element or one of the sibling elements CreditCard or AlternatePaymentMethod must be provided, but all of them may not be provided.
    *
    * @param string $accountNumber
    *
    * @return self
    */
    public function setAccountNumber(string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
    * Credit card information container.  Required if neither of the following is present: 
    
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AccountNumber 
    or 
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AlternatePaymentMethod. 
    
    Credit card payment is valid for shipments without return service only.
    *
    * @return BillShipperCreditCard
    */
    public function getCreditCard() : BillShipperCreditCard
    {
        return $this->creditCard;
    }
    /**
    * Credit card information container.  Required if neither of the following is present: 
    
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AccountNumber 
    or 
    /ShipmentRequest/Shipment/PaymentInformation/ShipmentCharge/BillShipper/AlternatePaymentMethod. 
    
    Credit card payment is valid for shipments without return service only.
    *
    * @param BillShipperCreditCard $creditCard
    *
    * @return self
    */
    public function setCreditCard(BillShipperCreditCard $creditCard) : self
    {
        $this->initialized['creditCard'] = true;
        $this->creditCard = $creditCard;
        return $this;
    }
    /**
    * Alternate Payment Method.
    
    Valid value: 01= PayPal
    
    Only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.   PayPal 01: Is only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.
    *
    * @return string
    */
    public function getAlternatePaymentMethod() : string
    {
        return $this->alternatePaymentMethod;
    }
    /**
    * Alternate Payment Method.
    
    Valid value: 01= PayPal
    
    Only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.   PayPal 01: Is only valid for forward shipments. It is not valid for Return or Import Control shipments. 
    
    This element or one of the sibling elements CreditCard or AccountNumber must be provided, but all of them may not be provided.
    *
    * @param string $alternatePaymentMethod
    *
    * @return self
    */
    public function setAlternatePaymentMethod(string $alternatePaymentMethod) : self
    {
        $this->initialized['alternatePaymentMethod'] = true;
        $this->alternatePaymentMethod = $alternatePaymentMethod;
        return $this;
    }
}