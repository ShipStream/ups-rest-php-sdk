<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationResponse extends \ArrayObject
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
     * Contains Pre-Notification response components.
     *
     * @var PreNotificationResponseResponse|null
     */
    protected $response;
    /**
     * Contains Pre-Notification response components.
     *
     * @return PreNotificationResponseResponse|null
     */
    public function getResponse() : ?PreNotificationResponseResponse
    {
        return $this->response;
    }
    /**
     * Contains Pre-Notification response components.
     *
     * @param PreNotificationResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?PreNotificationResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
}