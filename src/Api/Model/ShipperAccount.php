<?php

namespace ShipStream\Ups\Api\Model;

class ShipperAccount extends \ArrayObject
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
     * UPS account number.  Shipper's (requester of the pickup) UPS account number
     *
     * @var string
     */
    protected $accountNumber;
    /**
    * Country or territory code as defined by ISO-3166.
    Refer to Country or Terriotry Codes in the Appendix for valid values.
    *
    * @var string
    */
    protected $accountCountryCode;
    /**
     * UPS account number.  Shipper's (requester of the pickup) UPS account number
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * UPS account number.  Shipper's (requester of the pickup) UPS account number
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
    * Country or territory code as defined by ISO-3166.
    Refer to Country or Terriotry Codes in the Appendix for valid values.
    *
    * @return string
    */
    public function getAccountCountryCode() : string
    {
        return $this->accountCountryCode;
    }
    /**
    * Country or territory code as defined by ISO-3166.
    Refer to Country or Terriotry Codes in the Appendix for valid values.
    *
    * @param string $accountCountryCode
    *
    * @return self
    */
    public function setAccountCountryCode(string $accountCountryCode) : self
    {
        $this->initialized['accountCountryCode'] = true;
        $this->accountCountryCode = $accountCountryCode;
        return $this;
    }
}