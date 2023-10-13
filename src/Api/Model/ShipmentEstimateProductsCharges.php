<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentEstimateProductsCharges extends \ArrayObject
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
     * 
     *
     * @var ProductsChargesProduct[]
     */
    protected $product;
    /**
    * Sum of all Product level charges.  
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @var string
    */
    protected $productsSubTotal;
    /**
     * 
     *
     * @return ProductsChargesProduct[]
     */
    public function getProduct() : array
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ProductsChargesProduct[] $product
     *
     * @return self
     */
    public function setProduct(array $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
    * Sum of all Product level charges.  
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @return string
    */
    public function getProductsSubTotal() : string
    {
        return $this->productsSubTotal;
    }
    /**
    * Sum of all Product level charges.  
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 digits after the decimal.
    *
    * @param string $productsSubTotal
    *
    * @return self
    */
    public function setProductsSubTotal(string $productsSubTotal) : self
    {
        $this->initialized['productsSubTotal'] = true;
        $this->productsSubTotal = $productsSubTotal;
        return $this;
    }
}