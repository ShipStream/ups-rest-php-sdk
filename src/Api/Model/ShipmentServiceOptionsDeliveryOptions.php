<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsDeliveryOptions extends \ArrayObject
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
     * The presence of the tag LiftGateAtDeliveryIndicator indicates that the shipment requires a lift gate for delivery.
     *
     * @var string|null
     */
    protected $liftGateAtDeliveryIndicator;
    /**
     * The presence of the tag DropOffAtUPSFacilityIndicator indicates the package will be dropped at a UPS facility for shipment.
     *
     * @var string|null
     */
    protected $dropOffAtUPSFacilityIndicator;
    /**
     * The presence of the tag LiftGateAtDeliveryIndicator indicates that the shipment requires a lift gate for delivery.
     *
     * @return string|null
     */
    public function getLiftGateAtDeliveryIndicator() : ?string
    {
        return $this->liftGateAtDeliveryIndicator;
    }
    /**
     * The presence of the tag LiftGateAtDeliveryIndicator indicates that the shipment requires a lift gate for delivery.
     *
     * @param string|null $liftGateAtDeliveryIndicator
     *
     * @return self
     */
    public function setLiftGateAtDeliveryIndicator(?string $liftGateAtDeliveryIndicator) : self
    {
        $this->initialized['liftGateAtDeliveryIndicator'] = true;
        $this->liftGateAtDeliveryIndicator = $liftGateAtDeliveryIndicator;
        return $this;
    }
    /**
     * The presence of the tag DropOffAtUPSFacilityIndicator indicates the package will be dropped at a UPS facility for shipment.
     *
     * @return string|null
     */
    public function getDropOffAtUPSFacilityIndicator() : ?string
    {
        return $this->dropOffAtUPSFacilityIndicator;
    }
    /**
     * The presence of the tag DropOffAtUPSFacilityIndicator indicates the package will be dropped at a UPS facility for shipment.
     *
     * @param string|null $dropOffAtUPSFacilityIndicator
     *
     * @return self
     */
    public function setDropOffAtUPSFacilityIndicator(?string $dropOffAtUPSFacilityIndicator) : self
    {
        $this->initialized['dropOffAtUPSFacilityIndicator'] = true;
        $this->dropOffAtUPSFacilityIndicator = $dropOffAtUPSFacilityIndicator;
        return $this;
    }
}