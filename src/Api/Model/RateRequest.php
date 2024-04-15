<?php

namespace ShipStream\Ups\Api\Model;

class RateRequest extends \ArrayObject
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
     * Request container.  N/A
     *
     * @var RateRequestRequest|null
     */
    protected $request;
    /**
     * Pickup Type container tag.  N/A
     *
     * @var RateRequestPickupType|null
     */
    protected $pickupType;
    /**
     * Customer classification container. Valid if ShipFrom country or territory  is "US"  N/A
     *
     * @var RateRequestCustomerClassification|null
     */
    protected $customerClassification;
    /**
     * Container for Shipment Information.  N/A
     *
     * @var RateRequestShipment|null
     */
    protected $shipment;
    /**
     * Request container.  N/A
     *
     * @return RateRequestRequest|null
     */
    public function getRequest() : ?RateRequestRequest
    {
        return $this->request;
    }
    /**
     * Request container.  N/A
     *
     * @param RateRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?RateRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Pickup Type container tag.  N/A
     *
     * @return RateRequestPickupType|null
     */
    public function getPickupType() : ?RateRequestPickupType
    {
        return $this->pickupType;
    }
    /**
     * Pickup Type container tag.  N/A
     *
     * @param RateRequestPickupType|null $pickupType
     *
     * @return self
     */
    public function setPickupType(?RateRequestPickupType $pickupType) : self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
     * Customer classification container. Valid if ShipFrom country or territory  is "US"  N/A
     *
     * @return RateRequestCustomerClassification|null
     */
    public function getCustomerClassification() : ?RateRequestCustomerClassification
    {
        return $this->customerClassification;
    }
    /**
     * Customer classification container. Valid if ShipFrom country or territory  is "US"  N/A
     *
     * @param RateRequestCustomerClassification|null $customerClassification
     *
     * @return self
     */
    public function setCustomerClassification(?RateRequestCustomerClassification $customerClassification) : self
    {
        $this->initialized['customerClassification'] = true;
        $this->customerClassification = $customerClassification;
        return $this;
    }
    /**
     * Container for Shipment Information.  N/A
     *
     * @return RateRequestShipment|null
     */
    public function getShipment() : ?RateRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Container for Shipment Information.  N/A
     *
     * @param RateRequestShipment|null $shipment
     *
     * @return self
     */
    public function setShipment(?RateRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}