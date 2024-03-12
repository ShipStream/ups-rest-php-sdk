<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentChargeBillShipper extends \ArrayObject
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
     * UPS account number  Must be the same UPS account number as the one provided in Shipper/ShipperNumber.
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * UPS account number  Must be the same UPS account number as the one provided in Shipper/ShipperNumber.
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * UPS account number  Must be the same UPS account number as the one provided in Shipper/ShipperNumber.
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
}