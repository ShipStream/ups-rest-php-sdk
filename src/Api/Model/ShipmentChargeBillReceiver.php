<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentChargeBillReceiver extends \ArrayObject
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
    * The UPS account number.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be a daily pickup account, an occasional account, a customer B.I.N account, or a dropper shipper account. 
    
    All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
    *
    * @var string
    */
    protected $accountNumber;
    /**
     * Container for additional information for the bill receiver's UPS accounts address.
     *
     * @var BillReceiverAddress
     */
    protected $address;
    /**
    * The UPS account number.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be a daily pickup account, an occasional account, a customer B.I.N account, or a dropper shipper account. 
    
    All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
    *
    * @return string
    */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
    * The UPS account number.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be a daily pickup account, an occasional account, a customer B.I.N account, or a dropper shipper account. 
    
    All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
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
     * Container for additional information for the bill receiver's UPS accounts address.
     *
     * @return BillReceiverAddress
     */
    public function getAddress() : BillReceiverAddress
    {
        return $this->address;
    }
    /**
     * Container for additional information for the bill receiver's UPS accounts address.
     *
     * @param BillReceiverAddress $address
     *
     * @return self
     */
    public function setAddress(BillReceiverAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}