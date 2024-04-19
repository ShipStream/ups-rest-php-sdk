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
    * Brokerage charge name for this shipment. Possible Values:
    1. Entry Preparation Fee 
    2. Disbursement Fee 
    3. Additional Line Fee
    *
    * @var string
    */
    protected $chargeName;
    /**
     * Fee amount for the brokerage charges.
     *
     * @var float
     */
    protected $chargeAmount;
    /**
    * Brokerage charge name for this shipment. Possible Values:
    1. Entry Preparation Fee 
    2. Disbursement Fee 
    3. Additional Line Fee
    *
    * @return string
    */
    public function getChargeName() : string
    {
        return $this->chargeName;
    }
    /**
    * Brokerage charge name for this shipment. Possible Values:
    1. Entry Preparation Fee 
    2. Disbursement Fee 
    3. Additional Line Fee
    *
    * @param string $chargeName
    *
    * @return self
    */
    public function setChargeName(string $chargeName) : self
    {
        $this->initialized['chargeName'] = true;
        $this->chargeName = $chargeName;
        return $this;
    }
    /**
     * Fee amount for the brokerage charges.
     *
     * @return float
     */
    public function getChargeAmount() : float
    {
        return $this->chargeAmount;
    }
    /**
     * Fee amount for the brokerage charges.
     *
     * @param float $chargeAmount
     *
     * @return self
     */
    public function setChargeAmount(float $chargeAmount) : self
    {
        $this->initialized['chargeAmount'] = true;
        $this->chargeAmount = $chargeAmount;
        return $this;
    }
}