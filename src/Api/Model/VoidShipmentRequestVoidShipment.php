<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentRequestVoidShipment extends \ArrayObject
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
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @var string|null
     */
    protected $shippingHistoryUserKey;
    /**
     * The shipment's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case.
     *
     * @var string|null
     */
    protected $shipmentIdentificationNumber;
    /**
     * The package's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case
     *
     * @var list<string>|null
     */
    protected $trackingNumber;
    /**
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @return string|null
     */
    public function getShippingHistoryUserKey() : ?string
    {
        return $this->shippingHistoryUserKey;
    }
    /**
     * Unique key to tag shipments in shipping history. It could be MyUPS registration Number or any unique identifier.
     *
     * @param string|null $shippingHistoryUserKey
     *
     * @return self
     */
    public function setShippingHistoryUserKey(?string $shippingHistoryUserKey) : self
    {
        $this->initialized['shippingHistoryUserKey'] = true;
        $this->shippingHistoryUserKey = $shippingHistoryUserKey;
        return $this;
    }
    /**
     * The shipment's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case.
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber() : ?string
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * The shipment's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case.
     *
     * @param string|null $shipmentIdentificationNumber
     *
     * @return self
     */
    public function setShipmentIdentificationNumber(?string $shipmentIdentificationNumber) : self
    {
        $this->initialized['shipmentIdentificationNumber'] = true;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }
    /**
     * The package's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case
     *
     * @return list<string>|null
     */
    public function getTrackingNumber() : ?array
    {
        return $this->trackingNumber;
    }
    /**
     * The package's identification number  Alpha-numeric. Must pass 1Z rules. Must be upper case
     *
     * @param list<string>|null $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(?array $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}