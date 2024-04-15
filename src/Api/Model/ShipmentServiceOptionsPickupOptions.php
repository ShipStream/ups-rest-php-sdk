<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsPickupOptions extends \ArrayObject
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
     * The presence of the tag LiftGatePickupRequiredIndicator indicates that the shipment requires a lift gate for pickup.
     *
     * @var string|null
     */
    protected $liftGateAtPickupIndicator;
    /**
     * The presence of the tag HoldForPickupIndicator indicates that the user opted to hold the shipment at UPS location for pickup.
     *
     * @var string|null
     */
    protected $holdForPickupIndicator;
    /**
     * The presence of the tag LiftGatePickupRequiredIndicator indicates that the shipment requires a lift gate for pickup.
     *
     * @return string|null
     */
    public function getLiftGateAtPickupIndicator() : ?string
    {
        return $this->liftGateAtPickupIndicator;
    }
    /**
     * The presence of the tag LiftGatePickupRequiredIndicator indicates that the shipment requires a lift gate for pickup.
     *
     * @param string|null $liftGateAtPickupIndicator
     *
     * @return self
     */
    public function setLiftGateAtPickupIndicator(?string $liftGateAtPickupIndicator) : self
    {
        $this->initialized['liftGateAtPickupIndicator'] = true;
        $this->liftGateAtPickupIndicator = $liftGateAtPickupIndicator;
        return $this;
    }
    /**
     * The presence of the tag HoldForPickupIndicator indicates that the user opted to hold the shipment at UPS location for pickup.
     *
     * @return string|null
     */
    public function getHoldForPickupIndicator() : ?string
    {
        return $this->holdForPickupIndicator;
    }
    /**
     * The presence of the tag HoldForPickupIndicator indicates that the user opted to hold the shipment at UPS location for pickup.
     *
     * @param string|null $holdForPickupIndicator
     *
     * @return self
     */
    public function setHoldForPickupIndicator(?string $holdForPickupIndicator) : self
    {
        $this->initialized['holdForPickupIndicator'] = true;
        $this->holdForPickupIndicator = $holdForPickupIndicator;
        return $this;
    }
}