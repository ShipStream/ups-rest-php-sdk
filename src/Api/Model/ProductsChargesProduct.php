<?php

namespace ShipStream\Ups\Api\Model;

class ProductsChargesProduct extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Tariff Code of the product.
     *
     * @var string
     */
    protected $tariffCode;
    /**
     * Container for the Product charge
     *
     * @var ProductCharges
     */
    protected $charges;
    /**
     * Tariff Code of the product.
     *
     * @return string
     */
    public function getTariffCode() : string
    {
        return $this->tariffCode;
    }
    /**
     * Tariff Code of the product.
     *
     * @param string $tariffCode
     *
     * @return self
     */
    public function setTariffCode(string $tariffCode) : self
    {
        $this->initialized['tariffCode'] = true;
        $this->tariffCode = $tariffCode;
        return $this;
    }
    /**
     * Container for the Product charge
     *
     * @return ProductCharges
     */
    public function getCharges() : ProductCharges
    {
        return $this->charges;
    }
    /**
     * Container for the Product charge
     *
     * @param ProductCharges $charges
     *
     * @return self
     */
    public function setCharges(ProductCharges $charges) : self
    {
        $this->initialized['charges'] = true;
        $this->charges = $charges;
        return $this;
    }
}