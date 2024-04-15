<?php

namespace ShipStream\Ups\Api\Model;

class BrokerageFeeItems extends \ArrayObject
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
     * Brokerage Charge name this shipment. Possible Values: 1. Entry Preparation Fee 2. Disbursement Fee 3. Additional Line Fee
     *
     * @var string|null
     */
    protected $chargeName;
    /**
     * Fee amount for the brokerage charges
     *
     * @var float|null
     */
    protected $chargeAmount;
    /**
     * Brokerage Charge name this shipment. Possible Values: 1. Entry Preparation Fee 2. Disbursement Fee 3. Additional Line Fee
     *
     * @return string|null
     */
    public function getChargeName() : ?string
    {
        return $this->chargeName;
    }
    /**
     * Brokerage Charge name this shipment. Possible Values: 1. Entry Preparation Fee 2. Disbursement Fee 3. Additional Line Fee
     *
     * @param string|null $chargeName
     *
     * @return self
     */
    public function setChargeName(?string $chargeName) : self
    {
        $this->initialized['chargeName'] = true;
        $this->chargeName = $chargeName;
        return $this;
    }
    /**
     * Fee amount for the brokerage charges
     *
     * @return float|null
     */
    public function getChargeAmount() : ?float
    {
        return $this->chargeAmount;
    }
    /**
     * Fee amount for the brokerage charges
     *
     * @param float|null $chargeAmount
     *
     * @return self
     */
    public function setChargeAmount(?float $chargeAmount) : self
    {
        $this->initialized['chargeAmount'] = true;
        $this->chargeAmount = $chargeAmount;
        return $this;
    }
}