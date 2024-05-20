<?php

namespace ShipStream\Ups\Api\Model;

class DocumentsPackingList extends \ArrayObject
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
     * PackingList ShipFrom Container.
     *
     * @var PackingListShipFrom
     */
    protected $shipFrom;
    /**
     * PackingList ShipTo Container.
     *
     * @var PackingListShipTo
     */
    protected $shipTo;
    /**
     * 
     *
     * @var list<PackingListReference>
     */
    protected $reference;
    /**
     * HandlingUnit Container.
     *
     * @var PackingListHandlingUnit
     */
    protected $handlingUnit;
    /**
     * PackingList ShipFrom Container.
     *
     * @return PackingListShipFrom
     */
    public function getShipFrom() : PackingListShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * PackingList ShipFrom Container.
     *
     * @param PackingListShipFrom $shipFrom
     *
     * @return self
     */
    public function setShipFrom(PackingListShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * PackingList ShipTo Container.
     *
     * @return PackingListShipTo
     */
    public function getShipTo() : PackingListShipTo
    {
        return $this->shipTo;
    }
    /**
     * PackingList ShipTo Container.
     *
     * @param PackingListShipTo $shipTo
     *
     * @return self
     */
    public function setShipTo(PackingListShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackingListReference>
     */
    public function getReference() : array
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param list<PackingListReference> $reference
     *
     * @return self
     */
    public function setReference(array $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * HandlingUnit Container.
     *
     * @return PackingListHandlingUnit
     */
    public function getHandlingUnit() : PackingListHandlingUnit
    {
        return $this->handlingUnit;
    }
    /**
     * HandlingUnit Container.
     *
     * @param PackingListHandlingUnit $handlingUnit
     *
     * @return self
     */
    public function setHandlingUnit(PackingListHandlingUnit $handlingUnit) : self
    {
        $this->initialized['handlingUnit'] = true;
        $this->handlingUnit = $handlingUnit;
        return $this;
    }
}