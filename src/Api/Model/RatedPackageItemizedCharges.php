<?php

namespace ShipStream\Ups\Api\Model;

class RatedPackageItemizedCharges extends \ArrayObject
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
     * Identification code for itemized charge.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @var string
     */
    protected $description;
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The value for Itemized Charge costs associated with the shipment.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * The sub-type of Itemized Charge type.
     *
     * @var string
     */
    protected $subType;
    /**
     * Identification code for itemized charge.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Identification code for itemized charge.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
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
    /**
     * The value for Itemized Charge costs associated with the shipment.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * The value for Itemized Charge costs associated with the shipment.
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
     * The sub-type of Itemized Charge type.
     *
     * @return string
     */
    public function getSubType() : string
    {
        return $this->subType;
    }
    /**
     * The sub-type of Itemized Charge type.
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType) : self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
}