<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipPickupNotificationsEMailNotification extends \ArrayObject
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
     * Email address which should receive pre-pickup notification
     *
     * @var string
     */
    protected $eMailAddress;
    /**
    * Type of event for POM Notification. Add up to four events.
    01 = PICKUP_REQUEST_CONFIRM
    02 = DRIVER_EN_ROUTE
    03 = PICKUP_SECURED
    04 = PICKUP_EXCEPTION
    *
    * @var string
    */
    protected $eventType;
    /**
     * Email address which should receive pre-pickup notification
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Email address which should receive pre-pickup notification
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
    * Type of event for POM Notification. Add up to four events.
    01 = PICKUP_REQUEST_CONFIRM
    02 = DRIVER_EN_ROUTE
    03 = PICKUP_SECURED
    04 = PICKUP_EXCEPTION
    *
    * @return string
    */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
    * Type of event for POM Notification. Add up to four events.
    01 = PICKUP_REQUEST_CONFIRM
    02 = DRIVER_EN_ROUTE
    03 = PICKUP_SECURED
    04 = PICKUP_EXCEPTION
    *
    * @param string $eventType
    *
    * @return self
    */
    public function setEventType(string $eventType) : self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
}