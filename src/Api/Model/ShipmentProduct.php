<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentProduct extends \ArrayObject
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
     * 
     *
     * @var ProductQuestion[]
     */
    protected $question;
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
     * 
     *
     * @return ProductQuestion[]
     */
    public function getQuestion() : array
    {
        return $this->question;
    }
    /**
     * 
     *
     * @param ProductQuestion[] $question
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