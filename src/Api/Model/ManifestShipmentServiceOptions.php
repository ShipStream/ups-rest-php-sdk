<?php

namespace ShipStream\Ups\Api\Model;

class ManifestShipmentServiceOptions extends \ArrayObject
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
     * A flag indicating if the shipment requires a Saturday pickup. True if tag exists, false otherwise.
     *
     * @var string
     */
    protected $saturdayPickup;
    /**
     * A flag indicating if the shipment requires a Saturday Delivery. True if tag exists, false otherwise.
     *
     * @var string
     */
    protected $saturdayDelivery;
    /**
     * Container for Call Tag service.
     *
     * @var ShipmentServiceOptionsCallTagARS
     */
    protected $callTagARS;
    /**
     * A flag indicating if the shipment requires a Saturday pickup. True if tag exists, false otherwise.
     *
     * @return string
     */
    public function getSaturdayPickup() : string
    {
        return $this->saturdayPickup;
    }
    /**
     * A flag indicating if the shipment requires a Saturday pickup. True if tag exists, false otherwise.
     *
     * @param string $saturdayPickup
     *
     * @return self
     */
    public function setSaturdayPickup(string $saturdayPickup) : self
    {
        $this->initialized['saturdayPickup'] = true;
        $this->saturdayPickup = $saturdayPickup;
        return $this;
    }
    /**
     * A flag indicating if the shipment requires a Saturday Delivery. True if tag exists, false otherwise.
     *
     * @return string
     */
    public function getSaturdayDelivery() : string
    {
        return $this->saturdayDelivery;
    }
    /**
     * A flag indicating if the shipment requires a Saturday Delivery. True if tag exists, false otherwise.
     *
     * @param string $saturdayDelivery
     *
     * @return self
     */
    public function setSaturdayDelivery(string $saturdayDelivery) : self
    {
        $this->initialized['saturdayDelivery'] = true;
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }
    /**
     * Container for Call Tag service.
     *
     * @return ShipmentServiceOptionsCallTagARS
     */
    public function getCallTagARS() : ShipmentServiceOptionsCallTagARS
    {
        return $this->callTagARS;
    }
    /**
     * Container for Call Tag service.
     *
     * @param ShipmentServiceOptionsCallTagARS $callTagARS
     *
     * @return self
     */
    public function setCallTagARS(ShipmentServiceOptionsCallTagARS $callTagARS) : self
    {
        $this->initialized['callTagARS'] = true;
        $this->callTagARS = $callTagARS;
        return $this;
    }
}