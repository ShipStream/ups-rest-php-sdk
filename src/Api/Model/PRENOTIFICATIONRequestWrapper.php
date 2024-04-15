<?php

namespace ShipStream\Ups\Api\Model;

class PRENOTIFICATIONRequestWrapper extends \ArrayObject
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
     * Pre-Notification Request.
     *
     * @var PreNotificationRequest|null
     */
    protected $preNotificationRequest;
    /**
     * Pre-Notification Request.
     *
     * @return PreNotificationRequest|null
     */
    public function getPreNotificationRequest() : ?PreNotificationRequest
    {
        return $this->preNotificationRequest;
    }
    /**
     * Pre-Notification Request.
     *
     * @param PreNotificationRequest|null $preNotificationRequest
     *
     * @return self
     */
    public function setPreNotificationRequest(?PreNotificationRequest $preNotificationRequest) : self
    {
        $this->initialized['preNotificationRequest'] = true;
        $this->preNotificationRequest = $preNotificationRequest;
        return $this;
    }
}