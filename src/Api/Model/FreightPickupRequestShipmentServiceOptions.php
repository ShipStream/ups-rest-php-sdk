<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipmentServiceOptions extends \ArrayObject
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
     * FreezableProtectionIndicator Container.
     *
     * @var string|null
     */
    protected $freezableProtectionIndicator;
    /**
     * Indicates there is limited access for pickups.
     *
     * @var string|null
     */
    protected $limitedAccessPickupIndicator;
    /**
     * Indicates there is limited access for deliveries.
     *
     * @var string|null
     */
    protected $limitedAccessDeliveryIndicator;
    /**
     * ExtremeLengthIndicator Container (greater than 15ft)
     *
     * @var string|null
     */
    protected $extremeLengthIndicator;
    /**
     * FreezableProtectionIndicator Container.
     *
     * @return string|null
     */
    public function getFreezableProtectionIndicator() : ?string
    {
        return $this->freezableProtectionIndicator;
    }
    /**
     * FreezableProtectionIndicator Container.
     *
     * @param string|null $freezableProtectionIndicator
     *
     * @return self
     */
    public function setFreezableProtectionIndicator(?string $freezableProtectionIndicator) : self
    {
        $this->initialized['freezableProtectionIndicator'] = true;
        $this->freezableProtectionIndicator = $freezableProtectionIndicator;
        return $this;
    }
    /**
     * Indicates there is limited access for pickups.
     *
     * @return string|null
     */
    public function getLimitedAccessPickupIndicator() : ?string
    {
        return $this->limitedAccessPickupIndicator;
    }
    /**
     * Indicates there is limited access for pickups.
     *
     * @param string|null $limitedAccessPickupIndicator
     *
     * @return self
     */
    public function setLimitedAccessPickupIndicator(?string $limitedAccessPickupIndicator) : self
    {
        $this->initialized['limitedAccessPickupIndicator'] = true;
        $this->limitedAccessPickupIndicator = $limitedAccessPickupIndicator;
        return $this;
    }
    /**
     * Indicates there is limited access for deliveries.
     *
     * @return string|null
     */
    public function getLimitedAccessDeliveryIndicator() : ?string
    {
        return $this->limitedAccessDeliveryIndicator;
    }
    /**
     * Indicates there is limited access for deliveries.
     *
     * @param string|null $limitedAccessDeliveryIndicator
     *
     * @return self
     */
    public function setLimitedAccessDeliveryIndicator(?string $limitedAccessDeliveryIndicator) : self
    {
        $this->initialized['limitedAccessDeliveryIndicator'] = true;
        $this->limitedAccessDeliveryIndicator = $limitedAccessDeliveryIndicator;
        return $this;
    }
    /**
     * ExtremeLengthIndicator Container (greater than 15ft)
     *
     * @return string|null
     */
    public function getExtremeLengthIndicator() : ?string
    {
        return $this->extremeLengthIndicator;
    }
    /**
     * ExtremeLengthIndicator Container (greater than 15ft)
     *
     * @param string|null $extremeLengthIndicator
     *
     * @return self
     */
    public function setExtremeLengthIndicator(?string $extremeLengthIndicator) : self
    {
        $this->initialized['extremeLengthIndicator'] = true;
        $this->extremeLengthIndicator = $extremeLengthIndicator;
        return $this;
    }
}