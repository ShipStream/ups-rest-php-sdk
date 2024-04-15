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
     * @var CODCODValue|null
     */
    protected $cODValue;
    /**
     * CODPaymentMethod Container.
     *
     * @var CODCODPaymentMethod|null
     */
    protected $cODPaymentMethod;
    /**
     * CODBillingOption Container.
     *
     * @var CODCODBillingOption|null
     */
    protected $cODBillingOption;
    /**
     * RemitTo Container.
     *
     * @var CODRemitTo|null
     */
    protected $remitTo;
    /**
     * CODValue Container.
     *
     * @return CODCODValue|null
     */
    public function getCODValue() : ?CODCODValue
    {
        return $this->cODValue;
    }
    /**
     * CODValue Container.
     *
     * @param CODCODValue|null $cODValue
     *
     * @return self
     */
    public function setCODValue(?CODCODValue $cODValue) : self
    {
        $this->initialized['cODValue'] = true;
        $this->cODValue = $cODValue;
        return $this;
    }
    /**
     * CODPaymentMethod Container.
     *
     * @return CODCODPaymentMethod|null
     */
    public function getCODPaymentMethod() : ?CODCODPaymentMethod
    {
        return $this->cODPaymentMethod;
    }
    /**
     * CODPaymentMethod Container.
     *
     * @param CODCODPaymentMethod|null $cODPaymentMethod
     *
     * @return self
     */
    public function setCODPaymentMethod(?CODCODPaymentMethod $cODPaymentMethod) : self
    {
        $this->initialized['cODPaymentMethod'] = true;
        $this->cODPaymentMethod = $cODPaymentMethod;
        return $this;
    }
    /**
     * CODBillingOption Container.
     *
     * @return CODCODBillingOption|null
     */
    public function getCODBillingOption() : ?CODCODBillingOption
    {
        return $this->cODBillingOption;
    }
    /**
     * CODBillingOption Container.
     *
     * @param CODCODBillingOption|null $cODBillingOption
     *
     * @return self
     */
    public function setCODBillingOption(?CODCODBillingOption $cODBillingOption) : self
    {
        $this->initialized['cODBillingOption'] = true;
        $this->cODBillingOption = $cODBillingOption;
        return $this;
    }
    /**
     * RemitTo Container.
     *
     * @return CODRemitTo|null
     */
    public function getRemitTo() : ?CODRemitTo
    {
        return $this->remitTo;
    }
    /**
     * RemitTo Container.
     *
     * @param CODRemitTo|null $remitTo
     *
     * @return self
     */
    public function setRemitTo(?CODRemitTo $remitTo) : self
    {
        $this->initialized['remitTo'] = true;
        $this->remitTo = $remitTo;
        return $this;
    }
}