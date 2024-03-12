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
     * @var PreNotificationRequest
     */
    protected $preNotificationRequest;
    /**
     * Pre-Notification Request.
     *
     * @return PreNotificationRequest
     */
    public function getPreNotificationRequest() : PreNotificationRequest
    {
        return $this->preNotificationRequest;
    }
    /**
     * Pre-Notification Request.
     *
     * @param PreNotificationRequest $preNotificationRequest
     *
     * @return self
     */
    public function setPreNotificationRequest(PreNotificationRequest $preNotificationRequest) : self
    {
        $this->initialized['preNotificationRequest'] = true;
        $this->preNotificationRequest = $preNotificationRequest;
        return $this;
    }
}