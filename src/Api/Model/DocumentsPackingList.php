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
     * @var PackingListShipFrom|null
     */
    protected $shipFrom;
    /**
     * PackingList ShipTo Container.
     *
     * @var PackingListShipTo|null
     */
    protected $shipTo;
    /**
     * 
     *
     * @var list<PackingListReference>|null
     */
    protected $reference;
    /**
     * HandlingUnit Container.
     *
     * @var PackingListHandlingUnit|null
     */
    protected $handlingUnit;
    /**
     * PackingList ShipFrom Container.
     *
     * @return PackingListShipFrom|null
     */
    public function getShipFrom() : ?PackingListShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * PackingList ShipFrom Container.
     *
     * @param PackingListShipFrom|null $shipFrom
     *
     * @return self
     */
    public function setShipFrom(?PackingListShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * PackingList ShipTo Container.
     *
     * @return PackingListShipTo|null
     */
    public function getShipTo() : ?PackingListShipTo
    {
        return $this->shipTo;
    }
    /**
     * PackingList ShipTo Container.
     *
     * @param PackingListShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?PackingListShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackingListReference>|null
     */
    public function getReference() : ?array
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param list<PackingListReference>|null $reference
     *
     * @return self
     */
    public function setReference(?array $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * HandlingUnit Container.
     *
     * @return PackingListHandlingUnit|null
     */
    public function getHandlingUnit() : ?PackingListHandlingUnit
    {
        return $this->handlingUnit;
    }
    /**
     * HandlingUnit Container.
     *
     * @param PackingListHandlingUnit|null $handlingUnit
     *
     * @return self
     */
    public function setHandlingUnit(?PackingListHandlingUnit $handlingUnit) : self
    {
        $this->initialized['handlingUnit'] = true;
        $this->handlingUnit = $handlingUnit;
        return $this;
    }
}