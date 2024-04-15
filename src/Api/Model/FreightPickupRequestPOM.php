<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestPOM extends \ArrayObject
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
    * Identifies the kind of number used to identify the Pickup Notifications for LTL shipment.
    Must provide a POMNumber if the POMNumberType field is populated.
    *
    * @var string|null
    */
    protected $pOMNumber;
    /**
    * Identifies the type used to identify the Pickup Notifications for LTL shipments.  Must provide if POMNumber is populated.
    For valid values, see POMNumberType Values in the Appendix.  The values must match a type defined, case sensitive.
    *
    * @var string|null
    */
    protected $pOMNumberType;
    /**
     * Container for pre-pickup notifications events
     *
     * @var POMPickupNotifications|null
     */
    protected $pickupNotifications;
    /**
    * Identifies the kind of number used to identify the Pickup Notifications for LTL shipment.
    Must provide a POMNumber if the POMNumberType field is populated.
    *
    * @return string|null
    */
    public function getPOMNumber() : ?string
    {
        return $this->pOMNumber;
    }
    /**
    * Identifies the kind of number used to identify the Pickup Notifications for LTL shipment.
    Must provide a POMNumber if the POMNumberType field is populated.
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
    * Identifies the type used to identify the Pickup Notifications for LTL shipments.  Must provide if POMNumber is populated.
    For valid values, see POMNumberType Values in the Appendix.  The values must match a type defined, case sensitive.
    *
    * @return string|null
    */
    public function getPOMNumberType() : ?string
    {
        return $this->pOMNumberType;
    }
    /**
    * Identifies the type used to identify the Pickup Notifications for LTL shipments.  Must provide if POMNumber is populated.
    For valid values, see POMNumberType Values in the Appendix.  The values must match a type defined, case sensitive.
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
     * @return POMPickupNotifications|null
     */
    public function getPickupNotifications() : ?POMPickupNotifications
    {
        return $this->pickupNotifications;
    }
    /**
     * Container for pre-pickup notifications events
     *
     * @param POMPickupNotifications|null $pickupNotifications
     *
     * @return self
     */
    public function setPickupNotifications(?POMPickupNotifications $pickupNotifications) : self
    {
        $this->initialized['pickupNotifications'] = true;
        $this->pickupNotifications = $pickupNotifications;
        return $this;
    }
}