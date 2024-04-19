<?php

namespace ShipStream\Ups\Api\Model;

class ResponseShipmentItems extends \ArrayObject
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
     * Specifies the commodity ID.
     *
     * @var string
     */
    protected $commodityID;
    /**
     * Specifies the HTS code of the commodity.
     *
     * @var string
     */
    protected $hsCode;
    /**
     * Duty amount for this commodity.
     *
     * @var float
     */
    protected $commodityDuty;
    /**
     * Total tax and other fees for this commodity (excluding commodity duty and VAT).
     *
     * @var float
     */
    protected $totalCommodityTaxAndFee;
    /**
     * VAT amount for this commodity.
     *
     * @var float
     */
    protected $commodityVAT;
    /**
     * Sum of commodity duty, VAT, tax, and other fees for this commodity.
     *
     * @var float
     */
    protected $totalCommodityDutyAndTax;
    /**
     * Specifies the currency code used for commodity's price.
     *
     * @var string
     */
    protected $commodityCurrencyCode;
    /**
     * True/False. Indicates if Landed Cost can successful calculated for this commodity.
     *
     * @var bool
     */
    protected $isCalculable;
    /**
     * Specifies the commodity ID.
     *
     * @return string
     */
    public function getCommodityID() : string
    {
        return $this->commodityID;
    }
    /**
     * Specifies the commodity ID.
     *
     * @param string $commodityID
     *
     * @return self
     */
    public function setCommodityID(string $commodityID) : self
    {
        $this->initialized['commodityID'] = true;
        $this->commodityID = $commodityID;
        return $this;
    }
    /**
     * Specifies the HTS code of the commodity.
     *
     * @return string
     */
    public function getHsCode() : string
    {
        return $this->hsCode;
    }
    /**
     * Specifies the HTS code of the commodity.
     *
     * @param string $hsCode
     *
     * @return self
     */
    public function setHsCode(string $hsCode) : self
    {
        $this->initialized['hsCode'] = true;
        $this->hsCode = $hsCode;
        return $this;
    }
    /**
     * Duty amount for this commodity.
     *
     * @return float
     */
    public function getCommodityDuty() : float
    {
        return $this->commodityDuty;
    }
    /**
     * Duty amount for this commodity.
     *
     * @param float $commodityDuty
     *
     * @return self
     */
    public function setCommodityDuty(float $commodityDuty) : self
    {
        $this->initialized['commodityDuty'] = true;
        $this->commodityDuty = $commodityDuty;
        return $this;
    }
    /**
     * Total tax and other fees for this commodity (excluding commodity duty and VAT).
     *
     * @return float
     */
    public function getTotalCommodityTaxAndFee() : float
    {
        return $this->totalCommodityTaxAndFee;
    }
    /**
     * Total tax and other fees for this commodity (excluding commodity duty and VAT).
     *
     * @param float $totalCommodityTaxAndFee
     *
     * @return self
     */
    public function setTotalCommodityTaxAndFee(float $totalCommodityTaxAndFee) : self
    {
        $this->initialized['totalCommodityTaxAndFee'] = true;
        $this->totalCommodityTaxAndFee = $totalCommodityTaxAndFee;
        return $this;
    }
    /**
     * VAT amount for this commodity.
     *
     * @return float
     */
    public function getCommodityVAT() : float
    {
        return $this->commodityVAT;
    }
    /**
     * VAT amount for this commodity.
     *
     * @param float $commodityVAT
     *
     * @return self
     */
    public function setCommodityVAT(float $commodityVAT) : self
    {
        $this->initialized['commodityVAT'] = true;
        $this->commodityVAT = $commodityVAT;
        return $this;
    }
    /**
     * Sum of commodity duty, VAT, tax, and other fees for this commodity.
     *
     * @return float
     */
    public function getTotalCommodityDutyAndTax() : float
    {
        return $this->totalCommodityDutyAndTax;
    }
    /**
     * Sum of commodity duty, VAT, tax, and other fees for this commodity.
     *
     * @param float $totalCommodityDutyAndTax
     *
     * @return self
     */
    public function setTotalCommodityDutyAndTax(float $totalCommodityDutyAndTax) : self
    {
        $this->initialized['totalCommodityDutyAndTax'] = true;
        $this->totalCommodityDutyAndTax = $totalCommodityDutyAndTax;
        return $this;
    }
    /**
     * Specifies the currency code used for commodity's price.
     *
     * @return string
     */
    public function getCommodityCurrencyCode() : string
    {
        return $this->commodityCurrencyCode;
    }
    /**
     * Specifies the currency code used for commodity's price.
     *
     * @param string $commodityCurrencyCode
     *
     * @return self
     */
    public function setCommodityCurrencyCode(string $commodityCurrencyCode) : self
    {
        $this->initialized['commodityCurrencyCode'] = true;
        $this->commodityCurrencyCode = $commodityCurrencyCode;
        return $this;
    }
    /**
     * True/False. Indicates if Landed Cost can successful calculated for this commodity.
     *
     * @return bool
     */
    public function getIsCalculable() : bool
    {
        return $this->isCalculable;
    }
    /**
     * True/False. Indicates if Landed Cost can successful calculated for this commodity.
     *
     * @param bool $isCalculable
     *
     * @return self
     */
    public function setIsCalculable(bool $isCalculable) : self
    {
        $this->initialized['isCalculable'] = true;
        $this->isCalculable = $isCalculable;
        return $this;
    }
}