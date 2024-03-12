<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentChargeBillThirdParty extends \ArrayObject
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
    * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. 
    
    All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
    *
    * @var string
    */
    protected $accountNumber;
    /**
     * Posta Elettronica Certificata (PEC) which is the recipient code for the customers certified electronic mail value.
     *
     * @var string
     */
    protected $certifiedElectronicMail;
    /**
     * Sistema Di Interscambio(SDI) which is the recipient code for the customer's interchange value or Interchange System Code
     *
     * @var string
     */
    protected $interchangeSystemCode;
    /**
     * Container for additional information for the third party UPS accounts address.
     *
     * @var BillThirdPartyAddress
     */
    protected $address;
    /**
    * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. 
    
    All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
    *
    * @return string
    */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
    * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. 
    
    For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. 
    
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
     * Posta Elettronica Certificata (PEC) which is the recipient code for the customers certified electronic mail value.
     *
     * @return string
     */
    public function getCertifiedElectronicMail() : string
    {
        return $this->certifiedElectronicMail;
    }
    /**
     * Posta Elettronica Certificata (PEC) which is the recipient code for the customers certified electronic mail value.
     *
     * @param string $certifiedElectronicMail
     *
     * @return self
     */
    public function setCertifiedElectronicMail(string $certifiedElectronicMail) : self
    {
        $this->initialized['certifiedElectronicMail'] = true;
        $this->certifiedElectronicMail = $certifiedElectronicMail;
        return $this;
    }
    /**
     * Sistema Di Interscambio(SDI) which is the recipient code for the customer's interchange value or Interchange System Code
     *
     * @return string
     */
    public function getInterchangeSystemCode() : string
    {
        return $this->interchangeSystemCode;
    }
    /**
     * Sistema Di Interscambio(SDI) which is the recipient code for the customer's interchange value or Interchange System Code
     *
     * @param string $interchangeSystemCode
     *
     * @return self
     */
    public function setInterchangeSystemCode(string $interchangeSystemCode) : self
    {
        $this->initialized['interchangeSystemCode'] = true;
        $this->interchangeSystemCode = $interchangeSystemCode;
        return $this;
    }
    /**
     * Container for additional information for the third party UPS accounts address.
     *
     * @return BillThirdPartyAddress
     */
    public function getAddress() : BillThirdPartyAddress
    {
        return $this->address;
    }
    /**
     * Container for additional information for the third party UPS accounts address.
     *
     * @param BillThirdPartyAddress $address
     *
     * @return self
     */
    public function setAddress(BillThirdPartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}