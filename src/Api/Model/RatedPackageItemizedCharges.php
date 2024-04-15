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
     * @var string|null
     */
    protected $code;
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The value for Itemized Charge costs associated with the shipment.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * The sub-type of Itemized Charge type.
     *
     * @var string|null
     */
    protected $subType;
    /**
     * Identification code for itemized charge.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Identification code for itemized charge.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of Itemized Charge that had been charged.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The IATA currency code associated with the Itemized Charge costs for the shipment.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The value for Itemized Charge costs associated with the shipment.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * The value for Itemized Charge costs associated with the shipment.
     *
     * @param string|null $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(?string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
    /**
     * The sub-type of Itemized Charge type.
     *
     * @return string|null
     */
    public function getSubType() : ?string
    {
        return $this->subType;
    }
    /**
     * The sub-type of Itemized Charge type.
     *
     * @param string|null $subType
     *
     * @return self
     */
    public function setSubType(?string $subType) : self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
}