<?php

namespace ShipStream\Ups\Api\Model;

class PaymentInformation extends \ArrayObject
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
     * amount
     *
     * @var string|null
     */
    protected $amount;
    /**
     * currency
     *
     * @var string|null
     */
    protected $currency;
    /**
     * id
     *
     * @var string|null
     */
    protected $id;
    /**
     * paid
     *
     * @var bool|null
     */
    protected $paid;
    /**
     * paymentMethod
     *
     * @var string|null
     */
    protected $paymentMethod;
    /**
     * type
     *
     * @var string|null
     */
    protected $type;
    /**
     * amount
     *
     * @return string|null
     */
    public function getAmount() : ?string
    {
        return $this->amount;
    }
    /**
     * amount
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * currency
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * currency
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * id
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * id
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * paid
     *
     * @return bool|null
     */
    public function getPaid() : ?bool
    {
        return $this->paid;
    }
    /**
     * paid
     *
     * @param bool|null $paid
     *
     * @return self
     */
    public function setPaid(?bool $paid) : self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;
        return $this;
    }
    /**
     * paymentMethod
     *
     * @return string|null
     */
    public function getPaymentMethod() : ?string
    {
        return $this->paymentMethod;
    }
    /**
     * paymentMethod
     *
     * @param string|null $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}