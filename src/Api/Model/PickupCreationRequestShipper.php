<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestShipper extends \ArrayObject
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
    * Shipper account information. 
    Must provide when choose to pay the pickup by shipper account number
    *
    * @var ShipperAccount|null
    */
    protected $account;
    /**
     * Container for Charge Card payment method  Required if Payment method is 03. Credit/Charge card payment is valid for US, CA, PR and GB origin pickups.
     *
     * @var ShipperChargeCard|null
     */
    protected $chargeCard;
    /**
    * Shipper account information. 
    Must provide when choose to pay the pickup by shipper account number
    *
    * @return ShipperAccount|null
    */
    public function getAccount() : ?ShipperAccount
    {
        return $this->account;
    }
    /**
    * Shipper account information. 
    Must provide when choose to pay the pickup by shipper account number
    *
    * @param ShipperAccount|null $account
    *
    * @return self
    */
    public function setAccount(?ShipperAccount $account) : self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    /**
     * Container for Charge Card payment method  Required if Payment method is 03. Credit/Charge card payment is valid for US, CA, PR and GB origin pickups.
     *
     * @return ShipperChargeCard|null
     */
    public function getChargeCard() : ?ShipperChargeCard
    {
        return $this->chargeCard;
    }
    /**
     * Container for Charge Card payment method  Required if Payment method is 03. Credit/Charge card payment is valid for US, CA, PR and GB origin pickups.
     *
     * @param ShipperChargeCard|null $chargeCard
     *
     * @return self
     */
    public function setChargeCard(?ShipperChargeCard $chargeCard) : self
    {
        $this->initialized['chargeCard'] = true;
        $this->chargeCard = $chargeCard;
        return $this;
    }
}