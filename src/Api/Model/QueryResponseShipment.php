<?php

namespace ShipStream\Ups\Api\Model;

class QueryResponseShipment extends \ArrayObject
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
     * @var ShipmentProduct[]
     */
    protected $product;
    /**
     * 
     *
     * @var ShipmentQuestion[]
     */
    protected $question;
    /**
     * 
     *
     * @return ShipmentProduct[]
     */
    public function getProduct() : array
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ShipmentProduct[] $product
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
     * 
     *
     * @return ShipmentQuestion[]
     */
    public function getQuestion() : array
    {
        return $this->question;
    }
    /**
     * 
     *
     * @param ShipmentQuestion[] $question
     *
     * @return self
     */
    public function setQuestion(array $question) : self
    {
        $this->initialized['question'] = true;
        $this->question = $question;
        return $this;
    }
}