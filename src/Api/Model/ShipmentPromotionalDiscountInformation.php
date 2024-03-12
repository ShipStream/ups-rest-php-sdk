<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentPromotionalDiscountInformation extends \ArrayObject
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
     * Promotion Code. A discount that is applied to the user.  Required if PromotionalDiscountInformation container is present.
     *
     * @var string
     */
    protected $promoCode;
    /**
     * Promotion Alias code  Required if PromotionalDiscountInformation container is present.
     *
     * @var string
     */
    protected $promoAliasCode;
    /**
     * Promotion Code. A discount that is applied to the user.  Required if PromotionalDiscountInformation container is present.
     *
     * @return string
     */
    public function getPromoCode() : string
    {
        return $this->promoCode;
    }
    /**
     * Promotion Code. A discount that is applied to the user.  Required if PromotionalDiscountInformation container is present.
     *
     * @param string $promoCode
     *
     * @return self
     */
    public function setPromoCode(string $promoCode) : self
    {
        $this->initialized['promoCode'] = true;
        $this->promoCode = $promoCode;
        return $this;
    }
    /**
     * Promotion Alias code  Required if PromotionalDiscountInformation container is present.
     *
     * @return string
     */
    public function getPromoAliasCode() : string
    {
        return $this->promoAliasCode;
    }
    /**
     * Promotion Alias code  Required if PromotionalDiscountInformation container is present.
     *
     * @param string $promoAliasCode
     *
     * @return self
     */
    public function setPromoAliasCode(string $promoAliasCode) : self
    {
        $this->initialized['promoAliasCode'] = true;
        $this->promoAliasCode = $promoAliasCode;
        return $this;
    }
}