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
     * Specifies Commodity Id
     *
     * @var string
     */
    protected $commodityID;
    /**
     * Specifies the HTS code of the commodity
     *
     * @var string
     */
    protected $hsCode;
    /**
     * Duty amount of this commodity
     *
     * @var float
     */
    protected $commodityDuty;
    /**
     * Total tax and other fees of this commodity (excluding Duty and VAT)
     *
     * @var float
     */
    protected $totalCommodityTaxAndFee;
    /**
     * VAT amount of this commodity
     *
     * @var float
     */
    protected $commodityVAT;
    /**
     * Total combined duty, VAT, tax and other fees of this commodity
     *
     * @var float
     */
    protected $totalCommodityDutyAndTax;
    /**
     * Specifies the Currency Code used for commodity price
     *
     * @var string
     */
    protected $commodityCurrencyCode;
    /**
     * True/False. Indicator for successful Landed Cost calculation for this commodity
     *
     * @var bool
     */
    protected $isCalculable;
    /**
     * Specifies Commodity Id
     *
     * @return string
     */
    public function getCommodityID() : string
    {
        return $this->commodityID;
    }
    /**
     * Specifies Commodity Id
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
     * Specifies the HTS code of the commodity
     *
     * @return string
     */
    public function getHsCode() : string
    {
        return $this->hsCode;
    }
    /**
     * Specifies the HTS code of the commodity
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
     * Duty amount of this commodity
     *
     * @return float
     */
    public function getCommodityDuty() : float
    {
        return $this->commodityDuty;
    }
    /**
     * Duty amount of this commodity
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
     * Total tax and other fees of this commodity (excluding Duty and VAT)
     *
     * @return float
     */
    public function getTotalCommodityTaxAndFee() : float
    {
        return $this->totalCommodityTaxAndFee;
    }
    /**
     * Total tax and other fees of this commodity (excluding Duty and VAT)
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
     * VAT amount of this commodity
     *
     * @return float
     */
    public function getCommodityVAT() : float
    {
        return $this->commodityVAT;
    }
    /**
     * VAT amount of this commodity
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
     * Total combined duty, VAT, tax and other fees of this commodity
     *
     * @return float
     */
    public function getTotalCommodityDutyAndTax() : float
    {
        return $this->totalCommodityDutyAndTax;
    }
    /**
     * Total combined duty, VAT, tax and other fees of this commodity
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
     * Specifies the Currency Code used for commodity price
     *
     * @return string
     */
    public function getCommodityCurrencyCode() : string
    {
        return $this->commodityCurrencyCode;
    }
    /**
     * Specifies the Currency Code used for commodity price
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
     * True/False. Indicator for successful Landed Cost calculation for this commodity
     *
     * @return bool
     */
    public function getIsCalculable() : bool
    {
        return $this->isCalculable;
    }
    /**
     * True/False. Indicator for successful Landed Cost calculation for this commodity
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