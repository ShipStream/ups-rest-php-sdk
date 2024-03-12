<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var FreightShipResponseResponse
     */
    protected $response;
    /**
     * ShipmentResults Container.
     *
     * @var FreightShipResponseShipmentResults
     */
    protected $shipmentResults;
    /**
     * Response Container.
     *
     * @return FreightShipResponseResponse
     */
    public function getResponse() : FreightShipResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param FreightShipResponseResponse $response
     *
     * @return self
     */
    public function setResponse(FreightShipResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * ShipmentResults Container.
     *
     * @return FreightShipResponseShipmentResults
     */
    public function getShipmentResults() : FreightShipResponseShipmentResults
    {
        return $this->shipmentResults;
    }
    /**
     * ShipmentResults Container.
     *
     * @param FreightShipResponseShipmentResults $shipmentResults
     *
     * @return self
     */
    public function setShipmentResults(FreightShipResponseShipmentResults $shipmentResults) : self
    {
        $this->initialized['shipmentResults'] = true;
        $this->shipmentResults = $shipmentResults;
        return $this;
    }
}