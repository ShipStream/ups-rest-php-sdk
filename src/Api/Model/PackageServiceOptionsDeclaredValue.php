<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsDeclaredValue extends \ArrayObject
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
     * Container for Declared Value Type.
     *
     * @var DeclaredValueType
     */
    protected $type;
    /**
     * Declared value amount currency type. Defaults to the non-Euro currency used in the shippers country or territory.  Code must represent a currency that is a valid for Shipper country or territory.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Declared value amount.
     *
     * @var string
     */
    protected $monetaryValue;
    /**
     * Container for Declared Value Type.
     *
     * @return DeclaredValueType
     */
    public function getType() : DeclaredValueType
    {
        return $this->type;
    }
    /**
     * Container for Declared Value Type.
     *
     * @param DeclaredValueType $type
     *
     * @return self
     */
    public function setType(DeclaredValueType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Declared value amount currency type. Defaults to the non-Euro currency used in the shippers country or territory.  Code must represent a currency that is a valid for Shipper country or territory.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Declared value amount currency type. Defaults to the non-Euro currency used in the shippers country or territory.  Code must represent a currency that is a valid for Shipper country or territory.
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
     * Declared value amount.
     *
     * @return string
     */
    public function getMonetaryValue() : string
    {
        return $this->monetaryValue;
    }
    /**
     * Declared value amount.
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
}