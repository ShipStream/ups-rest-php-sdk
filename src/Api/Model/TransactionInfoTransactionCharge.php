<?php

namespace ShipStream\Ups\Api\Model;

class TransactionInfoTransactionCharge extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Amount charged for the transaction. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $monetaryValue;
    /**
     * Currency code of the transaction charge.
     *
     * @var string
     */
    protected $currencyCode;
    /**
    * Amount charged for the transaction. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
    * Amount charged for the transaction. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $monetaryValue
    *
    * @return self
    */
    public function setMonetaryValue(string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
    /**
     * Currency code of the transaction charge.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Currency code of the transaction charge.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
}