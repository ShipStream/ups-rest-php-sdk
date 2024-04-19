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
     * The payment amount. This value will contain the amount in dollars and cents, separated by a period (.) Example: '1025.50'.9
     *
     * @var string
     */
    protected $amount;
    /**
     * The payment currency code (see API codes for possible values).
     *
     * @var string
     */
    protected $currency;
    /**
     * The payment internal ID. This may be used in other systems to retrieve additional information on the payment.
     *
     * @var string
     */
    protected $id;
    /**
     * The indication for whether the payment is paid or not. Valid values: 'true' the payment is paid. 'false' the payment is not paid.
     *
     * @var bool
     */
    protected $paid;
    /**
     * The applicable payment methods.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
     * The payment type.
     *
     * @var string
     */
    protected $type;
    /**
     * The payment amount. This value will contain the amount in dollars and cents, separated by a period (.) Example: '1025.50'.9
     *
     * @return string
     */
    public function getAmount() : string
    {
        return $this->amount;
    }
    /**
     * The payment amount. This value will contain the amount in dollars and cents, separated by a period (.) Example: '1025.50'.9
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The payment currency code (see API codes for possible values).
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * The payment currency code (see API codes for possible values).
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * The payment internal ID. This may be used in other systems to retrieve additional information on the payment.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The payment internal ID. This may be used in other systems to retrieve additional information on the payment.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The indication for whether the payment is paid or not. Valid values: 'true' the payment is paid. 'false' the payment is not paid.
     *
     * @return bool
     */
    public function getPaid() : bool
    {
        return $this->paid;
    }
    /**
     * The indication for whether the payment is paid or not. Valid values: 'true' the payment is paid. 'false' the payment is not paid.
     *
     * @param bool $paid
     *
     * @return self
     */
    public function setPaid(bool $paid) : self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;
        return $this;
    }
    /**
     * The applicable payment methods.
     *
     * @return string
     */
    public function getPaymentMethod() : string
    {
        return $this->paymentMethod;
    }
    /**
     * The applicable payment methods.
     *
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(string $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * The payment type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The payment type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}