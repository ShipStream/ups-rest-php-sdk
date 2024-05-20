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
     * @var string
     */
    protected $subscriberID;
    /**
     * The event that a user receives a subset of Tracking information specific to either packages coming or packages going, after subscription request is made.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<QuantumViewEventsSubscriptionEvents>
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
     * The event that a user receives a subset of Tracking information specific to either packages coming or packages going, after subscription request is made.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<QuantumViewEventsSubscriptionEvents>
     */
    public function getSubscriptionEvents() : array
    {
        return $this->subscriptionEvents;
    }
    /**
     * The event that a user receives a subset of Tracking information specific to either packages coming or packages going, after subscription request is made.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<QuantumViewEventsSubscriptionEvents> $subscriptionEvents
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