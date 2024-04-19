<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateResponseRateResult extends \ArrayObject
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
     * Container to hold Disclaimer message applicable to taxes and charges. Available only when tax information is requested.
     *
     * @var RateResultDisclaimer
     */
    protected $disclaimer;
    /**
    * Indicates the pickup is rated as same-day or future-day pickup.
    - SD = Same-day Pickup
    - FD = Future-day Pickup
    *
    * @var string
    */
    protected $rateType;
    /**
     * IATA currency codes for the pickup charge. Such as USD
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Detailed charges.
     *
     * @var RateResultChargeDetail
     */
    protected $chargeDetail;
    /**
     * Container to hold taxes when, detailed taxes are request via RateTaxIndicator.
     *
     * @var RateResultTaxCharges
     */
    protected $taxCharges;
    /**
     * The sum of all taxes.
     *
     * @var string
     */
    protected $totalTax;
    /**
     * The grand total of each charge and applied tax.
     *
     * @var string
     */
    protected $grandTotalOfAllCharge;
    /**
     * The grand total of each incented charge and applied tax. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @var string
     */
    protected $grandTotalOfAllIncentedCharge;
    /**
     * Total of charges before taxes. Only present when tax details requested in input.
     *
     * @var string
     */
    protected $preTaxTotalCharge;
    /**
     * Total of incented charges before taxes. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @var string
     */
    protected $preTaxTotalIncentedCharge;
    /**
     * Container to hold Disclaimer message applicable to taxes and charges. Available only when tax information is requested.
     *
     * @return RateResultDisclaimer
     */
    public function getDisclaimer() : RateResultDisclaimer
    {
        return $this->disclaimer;
    }
    /**
     * Container to hold Disclaimer message applicable to taxes and charges. Available only when tax information is requested.
     *
     * @param RateResultDisclaimer $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(RateResultDisclaimer $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
    * Indicates the pickup is rated as same-day or future-day pickup.
    - SD = Same-day Pickup
    - FD = Future-day Pickup
    *
    * @return string
    */
    public function getRateType() : string
    {
        return $this->rateType;
    }
    /**
    * Indicates the pickup is rated as same-day or future-day pickup.
    - SD = Same-day Pickup
    - FD = Future-day Pickup
    *
    * @param string $rateType
    *
    * @return self
    */
    public function setRateType(string $rateType) : self
    {
        $this->initialized['rateType'] = true;
        $this->rateType = $rateType;
        return $this;
    }
    /**
     * IATA currency codes for the pickup charge. Such as USD
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * IATA currency codes for the pickup charge. Such as USD
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
     * Detailed charges.
     *
     * @return RateResultChargeDetail
     */
    public function getChargeDetail() : RateResultChargeDetail
    {
        return $this->chargeDetail;
    }
    /**
     * Detailed charges.
     *
     * @param RateResultChargeDetail $chargeDetail
     *
     * @return self
     */
    public function setChargeDetail(RateResultChargeDetail $chargeDetail) : self
    {
        $this->initialized['chargeDetail'] = true;
        $this->chargeDetail = $chargeDetail;
        return $this;
    }
    /**
     * Container to hold taxes when, detailed taxes are request via RateTaxIndicator.
     *
     * @return RateResultTaxCharges
     */
    public function getTaxCharges() : RateResultTaxCharges
    {
        return $this->taxCharges;
    }
    /**
     * Container to hold taxes when, detailed taxes are request via RateTaxIndicator.
     *
     * @param RateResultTaxCharges $taxCharges
     *
     * @return self
     */
    public function setTaxCharges(RateResultTaxCharges $taxCharges) : self
    {
        $this->initialized['taxCharges'] = true;
        $this->taxCharges = $taxCharges;
        return $this;
    }
    /**
     * The sum of all taxes.
     *
     * @return string
     */
    public function getTotalTax() : string
    {
        return $this->totalTax;
    }
    /**
     * The sum of all taxes.
     *
     * @param string $totalTax
     *
     * @return self
     */
    public function setTotalTax(string $totalTax) : self
    {
        $this->initialized['totalTax'] = true;
        $this->totalTax = $totalTax;
        return $this;
    }
    /**
     * The grand total of each charge and applied tax.
     *
     * @return string
     */
    public function getGrandTotalOfAllCharge() : string
    {
        return $this->grandTotalOfAllCharge;
    }
    /**
     * The grand total of each charge and applied tax.
     *
     * @param string $grandTotalOfAllCharge
     *
     * @return self
     */
    public function setGrandTotalOfAllCharge(string $grandTotalOfAllCharge) : self
    {
        $this->initialized['grandTotalOfAllCharge'] = true;
        $this->grandTotalOfAllCharge = $grandTotalOfAllCharge;
        return $this;
    }
    /**
     * The grand total of each incented charge and applied tax. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @return string
     */
    public function getGrandTotalOfAllIncentedCharge() : string
    {
        return $this->grandTotalOfAllIncentedCharge;
    }
    /**
     * The grand total of each incented charge and applied tax. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @param string $grandTotalOfAllIncentedCharge
     *
     * @return self
     */
    public function setGrandTotalOfAllIncentedCharge(string $grandTotalOfAllIncentedCharge) : self
    {
        $this->initialized['grandTotalOfAllIncentedCharge'] = true;
        $this->grandTotalOfAllIncentedCharge = $grandTotalOfAllIncentedCharge;
        return $this;
    }
    /**
     * Total of charges before taxes. Only present when tax details requested in input.
     *
     * @return string
     */
    public function getPreTaxTotalCharge() : string
    {
        return $this->preTaxTotalCharge;
    }
    /**
     * Total of charges before taxes. Only present when tax details requested in input.
     *
     * @param string $preTaxTotalCharge
     *
     * @return self
     */
    public function setPreTaxTotalCharge(string $preTaxTotalCharge) : self
    {
        $this->initialized['preTaxTotalCharge'] = true;
        $this->preTaxTotalCharge = $preTaxTotalCharge;
        return $this;
    }
    /**
     * Total of incented charges before taxes. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @return string
     */
    public function getPreTaxTotalIncentedCharge() : string
    {
        return $this->preTaxTotalIncentedCharge;
    }
    /**
     * Total of incented charges before taxes. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @param string $preTaxTotalIncentedCharge
     *
     * @return self
     */
    public function setPreTaxTotalIncentedCharge(string $preTaxTotalIncentedCharge) : self
    {
        $this->initialized['preTaxTotalIncentedCharge'] = true;
        $this->preTaxTotalIncentedCharge = $preTaxTotalIncentedCharge;
        return $this;
    }
}