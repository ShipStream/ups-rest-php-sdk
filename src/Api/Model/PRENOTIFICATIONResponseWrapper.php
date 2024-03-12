<?php

namespace ShipStream\Ups\Api\Model;

class PRENOTIFICATIONResponseWrapper extends \ArrayObject
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
     * Pre-Notification Response container.
     *
     * @var PreNotificationResponse
     */
    protected $preNotificationResponse;
    /**
     * Pre-Notification Response container.
     *
     * @return PreNotificationResponse
     */
    public function getPreNotificationResponse() : PreNotificationResponse
    {
        return $this->preNotificationResponse;
    }
    /**
     * Pre-Notification Response container.
     *
     * @param PreNotificationResponse $preNotificationResponse
     *
     * @return self
     */
    public function setPreNotificationResponse(PreNotificationResponse $preNotificationResponse) : self
    {
        $this->initialized['preNotificationResponse'] = true;
        $this->preNotificationResponse = $preNotificationResponse;
        return $this;
    }
}