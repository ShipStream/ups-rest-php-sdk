<?php

namespace ShipStream\Ups\Api\Model;

class PickupRequestPOM extends \ArrayObject
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
     * An identifier associated to the pickup request (may or may not be created by the user)
     *
     * @var string|null
     */
    protected $pOMNumber;
    /**
    * Identifies the kind of number used to identify the POM shipment.
    For valid values, see POMNumberType Values in the Appendix.
    *
    * @var string|null
    */
    protected $pOMNumberType;
    /**
     * Container for pre-pickup notifications events
     *
     * @var FreightShipPOMPickupNotifications|null
     */
    protected $pickupNotifications;
    /**
     * An identifier associated to the pickup request (may or may not be created by the user)
     *
     * @return string|null
     */
    public function getPOMNumber() : ?string
    {
        return $this->pOMNumber;
    }
    /**
     * An identifier associated to the pickup request (may or may not be created by the user)
     *
     * @param string|null $pOMNumber
     *
     * @return self
     */
    public function setPOMNumber(?string $pOMNumber) : self
    {
        $this->initialized['pOMNumber'] = true;
        $this->pOMNumber = $pOMNumber;
        return $this;
    }
    /**
    * Identifies the kind of number used to identify the POM shipment.
    For valid values, see POMNumberType Values in the Appendix.
    *
    * @return string|null
    */
    public function getPOMNumberType() : ?string
    {
        return $this->pOMNumberType;
    }
    /**
    * Identifies the kind of number used to identify the POM shipment.
    For valid values, see POMNumberType Values in the Appendix.
    *
    * @param string|null $pOMNumberType
    *
    * @return self
    */
    public function setPOMNumberType(?string $pOMNumberType) : self
    {
        $this->initialized['pOMNumberType'] = true;
        $this->pOMNumberType = $pOMNumberType;
        return $this;
    }
    /**
     * Container for pre-pickup notifications events
     *
     * @return FreightShipPOMPickupNotifications|null
     */
    public function getPickupNotifications() : ?FreightShipPOMPickupNotifications
    {
        return $this->pickupNotifications;
    }
    /**
     * Container for pre-pickup notifications events
     *
     * @param FreightShipPOMPickupNotifications|null $pickupNotifications
     *
     * @return self
     */
    public function setPickupNotifications(?FreightShipPOMPickupNotifications $pickupNotifications) : self
    {
        $this->initialized['pickupNotifications'] = true;
        $this->pickupNotifications = $pickupNotifications;
        return $this;
    }
}