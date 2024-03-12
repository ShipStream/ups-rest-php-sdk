<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipmentServiceOptionsCOD extends \ArrayObject
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
     * CODValue Container.
     *
     * @var CODCODValue
     */
    protected $cODValue;
    /**
     * CODPaymentMethod Container.
     *
     * @var CODCODPaymentMethod
     */
    protected $cODPaymentMethod;
    /**
     * CODBillingOption Container.
     *
     * @var CODCODBillingOption
     */
    protected $cODBillingOption;
    /**
     * RemitTo Container.
     *
     * @var CODRemitTo
     */
    protected $remitTo;
    /**
     * CODValue Container.
     *
     * @return CODCODValue
     */
    public function getCODValue() : CODCODValue
    {
        return $this->cODValue;
    }
    /**
     * CODValue Container.
     *
     * @param CODCODValue $cODValue
     *
     * @return self
     */
    public function setCODValue(CODCODValue $cODValue) : self
    {
        $this->initialized['cODValue'] = true;
        $this->cODValue = $cODValue;
        return $this;
    }
    /**
     * CODPaymentMethod Container.
     *
     * @return CODCODPaymentMethod
     */
    public function getCODPaymentMethod() : CODCODPaymentMethod
    {
        return $this->cODPaymentMethod;
    }
    /**
     * CODPaymentMethod Container.
     *
     * @param CODCODPaymentMethod $cODPaymentMethod
     *
     * @return self
     */
    public function setCODPaymentMethod(CODCODPaymentMethod $cODPaymentMethod) : self
    {
        $this->initialized['cODPaymentMethod'] = true;
        $this->cODPaymentMethod = $cODPaymentMethod;
        return $this;
    }
    /**
     * CODBillingOption Container.
     *
     * @return CODCODBillingOption
     */
    public function getCODBillingOption() : CODCODBillingOption
    {
        return $this->cODBillingOption;
    }
    /**
     * CODBillingOption Container.
     *
     * @param CODCODBillingOption $cODBillingOption
     *
     * @return self
     */
    public function setCODBillingOption(CODCODBillingOption $cODBillingOption) : self
    {
        $this->initialized['cODBillingOption'] = true;
        $this->cODBillingOption = $cODBillingOption;
        return $this;
    }
    /**
     * RemitTo Container.
     *
     * @return CODRemitTo
     */
    public function getRemitTo() : CODRemitTo
    {
        return $this->remitTo;
    }
    /**
     * RemitTo Container.
     *
     * @param CODRemitTo $remitTo
     *
     * @return self
     */
    public function setRemitTo(CODRemitTo $remitTo) : self
    {
        $this->initialized['remitTo'] = true;
        $this->remitTo = $remitTo;
        return $this;
    }
}