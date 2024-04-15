<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResponse extends \ArrayObject
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
     * Response container for Shipment response.
     *
     * @var ShipmentResponseResponse|null
     */
    protected $response;
    /**
     * Shipment Results container.
     *
     * @var ShipmentResponseShipmentResults|null
     */
    protected $shipmentResults;
    /**
     * Response container for Shipment response.
     *
     * @return ShipmentResponseResponse|null
     */
    public function getResponse() : ?ShipmentResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container for Shipment response.
     *
     * @param ShipmentResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?ShipmentResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Shipment Results container.
     *
     * @return ShipmentResponseShipmentResults|null
     */
    public function getShipmentResults() : ?ShipmentResponseShipmentResults
    {
        return $this->shipmentResults;
    }
    /**
     * Shipment Results container.
     *
     * @param ShipmentResponseShipmentResults|null $shipmentResults
     *
     * @return self
     */
    public function setShipmentResults(?ShipmentResponseShipmentResults $shipmentResults) : self
    {
        $this->initialized['shipmentResults'] = true;
        $this->shipmentResults = $shipmentResults;
        return $this;
    }
}