<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentAlternateDeliveryAddress extends \ArrayObject
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
     * UPS Access Point location name.
     *
     * @var string
     */
    protected $name;
    /**
     * Address container for Alternate Delivery Address.
     *
     * @var RateAlternateDeliveryAddressAddress
     */
    protected $address;
    /**
     * UPS Access Point location name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * UPS Access Point location name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Address container for Alternate Delivery Address.
     *
     * @return RateAlternateDeliveryAddressAddress
     */
    public function getAddress() : RateAlternateDeliveryAddressAddress
    {
        return $this->address;
    }
    /**
     * Address container for Alternate Delivery Address.
     *
     * @param RateAlternateDeliveryAddressAddress $address
     *
     * @return self
     */
    public function setAddress(RateAlternateDeliveryAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}