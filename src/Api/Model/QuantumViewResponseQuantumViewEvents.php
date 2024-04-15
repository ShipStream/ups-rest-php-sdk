<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewResponseQuantumViewEvents extends \ArrayObject
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
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @var string|null
     */
    protected $subscriberID;
    /**
     * 
     *
     * @var list<QuantumViewEventsSubscriptionEvents>|null
     */
    protected $subscriptionEvents;
    /**
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @return string|null
     */
    public function getSubscriberID() : ?string
    {
        return $this->subscriberID;
    }
    /**
     * QV XOLT subscribers ID. It is the same as the User ID.
     *
     * @param string|null $subscriberID
     *
     * @return self
     */
    public function setSubscriberID(?string $subscriberID) : self
    {
        $this->initialized['subscriberID'] = true;
        $this->subscriberID = $subscriberID;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuantumViewEventsSubscriptionEvents>|null
     */
    public function getSubscriptionEvents() : ?array
    {
        return $this->subscriptionEvents;
    }
    /**
     * 
     *
     * @param list<QuantumViewEventsSubscriptionEvents>|null $subscriptionEvents
     *
     * @return self
     */
    public function setSubscriptionEvents(?array $subscriptionEvents) : self
    {
        $this->initialized['subscriptionEvents'] = true;
        $this->subscriptionEvents = $subscriptionEvents;
        return $this;
    }
}