<?php

namespace ShipStream\Ups\Api\Model;

class RateResultChargeDetail extends \ArrayObject
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
    * Indicates the general charge type
    A = ACCESSORIAL TYPE
    B = BASE CHARGE TYPE
    S = SURCHARGE TYPE
    *
    * @var string|null
    */
    protected $chargeCode;
    /**
    * Description of each charge.The possible descriptions are:
    BASE CHARGE
    EXTENDED AREA SURCHARGE
    FUEL SURCHARGE
    REMOTE AREA SURCHARGE
    RESIDENTIAL SURCHARGE                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      SATURDAY ON-CALL STOP CHARGE
    *
    * @var string|null
    */
    protected $chargeDescription;
    /**
     * Monetary value of the charge.
     *
     * @var string|null
     */
    protected $chargeAmount;
    /**
     * Monetary value of the incented charge. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @var string|null
     */
    protected $incentedAmount;
    /**
     * Monetary value of the tax if apply.
     *
     * @var string|null
     */
    protected $taxAmount;
    /**
    * Indicates the general charge type
    A = ACCESSORIAL TYPE
    B = BASE CHARGE TYPE
    S = SURCHARGE TYPE
    *
    * @return string|null
    */
    public function getChargeCode() : ?string
    {
        return $this->chargeCode;
    }
    /**
    * Indicates the general charge type
    A = ACCESSORIAL TYPE
    B = BASE CHARGE TYPE
    S = SURCHARGE TYPE
    *
    * @param string|null $chargeCode
    *
    * @return self
    */
    public function setChargeCode(?string $chargeCode) : self
    {
        $this->initialized['chargeCode'] = true;
        $this->chargeCode = $chargeCode;
        return $this;
    }
    /**
    * Description of each charge.The possible descriptions are:
    BASE CHARGE
    EXTENDED AREA SURCHARGE
    FUEL SURCHARGE
    REMOTE AREA SURCHARGE
    RESIDENTIAL SURCHARGE                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      SATURDAY ON-CALL STOP CHARGE
    *
    * @return string|null
    */
    public function getChargeDescription() : ?string
    {
        return $this->chargeDescription;
    }
    /**
    * Description of each charge.The possible descriptions are:
    BASE CHARGE
    EXTENDED AREA SURCHARGE
    FUEL SURCHARGE
    REMOTE AREA SURCHARGE
    RESIDENTIAL SURCHARGE                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      SATURDAY ON-CALL STOP CHARGE
    *
    * @param string|null $chargeDescription
    *
    * @return self
    */
    public function setChargeDescription(?string $chargeDescription) : self
    {
        $this->initialized['chargeDescription'] = true;
        $this->chargeDescription = $chargeDescription;
        return $this;
    }
    /**
     * Monetary value of the charge.
     *
     * @return string|null
     */
    public function getChargeAmount() : ?string
    {
        return $this->chargeAmount;
    }
    /**
     * Monetary value of the charge.
     *
     * @param string|null $chargeAmount
     *
     * @return self
     */
    public function setChargeAmount(?string $chargeAmount) : self
    {
        $this->initialized['chargeAmount'] = true;
        $this->chargeAmount = $chargeAmount;
        return $this;
    }
    /**
     * Monetary value of the incented charge. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @return string|null
     */
    public function getIncentedAmount() : ?string
    {
        return $this->incentedAmount;
    }
    /**
     * Monetary value of the incented charge. Only present if 1. UserLevelDiscountIndicator = Y and User Level Promotion is applied to the pickup or 2 .if any incentive rate is applied to the pickup and SubVersion on the request is greater than or equal to 1707.
     *
     * @param string|null $incentedAmount
     *
     * @return self
     */
    public function setIncentedAmount(?string $incentedAmount) : self
    {
        $this->initialized['incentedAmount'] = true;
        $this->incentedAmount = $incentedAmount;
        return $this;
    }
    /**
     * Monetary value of the tax if apply.
     *
     * @return string|null
     */
    public function getTaxAmount() : ?string
    {
        return $this->taxAmount;
    }
    /**
     * Monetary value of the tax if apply.
     *
     * @param string|null $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?string $taxAmount) : self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;
        return $this;
    }
}