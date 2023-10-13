<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewResponseQuantumViewEvents extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @var string
     */
    protected $subscriberID;
    /**
     * 
     *
     * @var QuantumViewEventsSubscriptionEvents[]
     */
    protected $subscriptionEvents;
    /**
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @return string
     */
    public function getSubscriberID() : string
    {
        return $this->subscriberID;
    }
    /**
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @param string $subscriberID
     *
     * @return self
     */
    public function setSubscriberID(string $subscriberID) : self
    {
        $this->initialized['subscriberID'] = true;
        $this->subscriberID = $subscriberID;
        return $this;
    }
    /**
     * 
     *
     * @return QuantumViewEventsSubscriptionEvents[]
     */
    public function getSubscriptionEvents() : array
    {
        return $this->subscriptionEvents;
    }
    /**
     * 
     *
     * @param QuantumViewEventsSubscriptionEvents[] $subscriptionEvents
     *
     * @return self
     */
    public function setSubscriptionEvents(array $subscriptionEvents) : self
    {
        $this->initialized['subscriptionEvents'] = true;
        $this->subscriptionEvents = $subscriptionEvents;
        return $this;
    }
}