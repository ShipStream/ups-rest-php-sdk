<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentRequest extends \ArrayObject
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
     * Request Container
     *
     * @var ShipmentRequestRequest
     */
    protected $request;
    /**
     * Shipment Container
     *
     * @var ShipmentRequestShipment
     */
    protected $shipment;
    /**
     * Container used to define the properties required by the user to print and/or display the UPS shipping label.  Required for shipment without return service or shipments with PRL return service. Required for Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
     *
     * @var ShipmentRequestLabelSpecification
     */
    protected $labelSpecification;
    /**
     * Container used to allow the user to choose to print a thermal receipt.
     *
     * @var ShipmentRequestReceiptSpecification
     */
    protected $receiptSpecification;
    /**
     * Request Container
     *
     * @return ShipmentRequestRequest
     */
    public function getRequest() : ShipmentRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container
     *
     * @param ShipmentRequestRequest $request
     *
     * @return self
     */
    public function setRequest(ShipmentRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipment Container
     *
     * @return ShipmentRequestShipment
     */
    public function getShipment() : ShipmentRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Shipment Container
     *
     * @param ShipmentRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(ShipmentRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Container used to define the properties required by the user to print and/or display the UPS shipping label.  Required for shipment without return service or shipments with PRL return service. Required for Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
     *
     * @return ShipmentRequestLabelSpecification
     */
    public function getLabelSpecification() : ShipmentRequestLabelSpecification
    {
        return $this->labelSpecification;
    }
    /**
     * Container used to define the properties required by the user to print and/or display the UPS shipping label.  Required for shipment without return service or shipments with PRL return service. Required for Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.
     *
     * @param ShipmentRequestLabelSpecification $labelSpecification
     *
     * @return self
     */
    public function setLabelSpecification(ShipmentRequestLabelSpecification $labelSpecification) : self
    {
        $this->initialized['labelSpecification'] = true;
        $this->labelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Container used to allow the user to choose to print a thermal receipt.
     *
     * @return ShipmentRequestReceiptSpecification
     */
    public function getReceiptSpecification() : ShipmentRequestReceiptSpecification
    {
        return $this->receiptSpecification;
    }
    /**
     * Container used to allow the user to choose to print a thermal receipt.
     *
     * @param ShipmentRequestReceiptSpecification $receiptSpecification
     *
     * @return self
     */
    public function setReceiptSpecification(ShipmentRequestReceiptSpecification $receiptSpecification) : self
    {
        $this->initialized['receiptSpecification'] = true;
        $this->receiptSpecification = $receiptSpecification;
        return $this;
    }
}