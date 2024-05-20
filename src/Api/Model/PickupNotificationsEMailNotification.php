<?php

namespace ShipStream\Ups\Api\Model;

class PickupNotificationsEMailNotification extends \ArrayObject
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
    * Type of event for Pickup Notifications for LTL. Allows up to four events.
    For valid values, see LTL Event Types in the Appendix.  The values must match a type defined, case sensitive.
    *
    * @var list<string>
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
    * Type of event for Pickup Notifications for LTL. Allows up to four events.
    For valid values, see LTL Event Types in the Appendix.  The values must match a type defined, case sensitive.
    *
    * @return list<string>
    */
    public function getEventType() : array
    {
        return $this->eventType;
    }
    /**
    * Type of event for Pickup Notifications for LTL. Allows up to four events.
    For valid values, see LTL Event Types in the Appendix.  The values must match a type defined, case sensitive.
    *
    * @param list<string> $eventType
    *
    * @return self
    */
    public function setEventType(array $eventType) : self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
}