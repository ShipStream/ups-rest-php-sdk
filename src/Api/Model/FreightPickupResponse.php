<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupResponse extends \ArrayObject
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
     * @var FreightPickupResponseResponse
     */
    protected $response;
    /**
     * Shipment pickup number.
     *
     * @var string
     */
    protected $pickupRequestConfirmationNumber;
    /**
     * Response Container.
     *
     * @return FreightPickupResponseResponse
     */
    public function getResponse() : FreightPickupResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param FreightPickupResponseResponse $response
     *
     * @return self
     */
    public function setResponse(FreightPickupResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Shipment pickup number.
     *
     * @return string
     */
    public function getPickupRequestConfirmationNumber() : string
    {
        return $this->pickupRequestConfirmationNumber;
    }
    /**
     * Shipment pickup number.
     *
     * @param string $pickupRequestConfirmationNumber
     *
     * @return self
     */
    public function setPickupRequestConfirmationNumber(string $pickupRequestConfirmationNumber) : self
    {
        $this->initialized['pickupRequestConfirmationNumber'] = true;
        $this->pickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
        return $this;
    }
}