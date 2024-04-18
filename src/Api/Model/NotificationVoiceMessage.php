<?php

namespace ShipStream\Ups\Api\Model;

class NotificationVoiceMessage extends \ArrayObject
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
     * Phone number for receiving Voice Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Phone number for receiving Voice Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number for receiving Voice Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}