<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentChargeBillThirdParty extends \ArrayObject
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
     * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * Container for additional information for the third party UPS accounts address.
     *
     * @var RateBillThirdPartyAddress
     */
    protected $address;
    /**
     * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * The UPS account number of the third party shipper.  The account must be a valid UPS account number that is active. For US, PR and CA accounts, the account must be either a daily pickup account, an occasional account, or a customer B.I.N account, or a drop shipper account. All other accounts must be either a daily pickup account, an occasional account, a drop shipper account, or a non-shipping account.
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
     * Container for additional information for the third party UPS accounts address.
     *
     * @return RateBillThirdPartyAddress
     */
    public function getAddress() : RateBillThirdPartyAddress
    {
        return $this->address;
    }
    /**
     * Container for additional information for the third party UPS accounts address.
     *
     * @param RateBillThirdPartyAddress $address
     *
     * @return self
     */
    public function setAddress(RateBillThirdPartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}