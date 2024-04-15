<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryCOD extends \ArrayObject
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
     * COD Amount container.
     *
     * @var CODCODAmount|null
     */
    protected $cODAmount;
    /**
     * COD Amount container.
     *
     * @return CODCODAmount|null
     */
    public function getCODAmount() : ?CODCODAmount
    {
        return $this->cODAmount;
    }
    /**
     * COD Amount container.
     *
     * @param CODCODAmount|null $cODAmount
     *
     * @return self
     */
    public function setCODAmount(?CODCODAmount $cODAmount) : self
    {
        $this->initialized['cODAmount'] = true;
        $this->cODAmount = $cODAmount;
        return $this;
    }
}