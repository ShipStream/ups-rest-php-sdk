<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewEventsSubscriptionEvents extends \ArrayObject
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
     * A name uniquely defined associated to the Subscription ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @var string
     */
    protected $name;
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @var string
     */
    protected $number;
    /**
     * Container for whether the subscription is active or not.
     *
     * @var SubscriptionEventsSubscriptionStatus
     */
    protected $subscriptionStatus;
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @var SubscriptionEventsDateRange
     */
    protected $dateRange;
    /**
     * Container holds all of the unread files associated with the subscription.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionEventsSubscriptionFile>
     */
    protected $subscriptionFile;
    /**
     * A name uniquely defined associated to the Subscription ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * A name uniquely defined associated to the Subscription ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription. Required if the SubscriptionEvents container is present.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Container for whether the subscription is active or not.
     *
     * @return SubscriptionEventsSubscriptionStatus
     */
    public function getSubscriptionStatus() : SubscriptionEventsSubscriptionStatus
    {
        return $this->subscriptionStatus;
    }
    /**
     * Container for whether the subscription is active or not.
     *
     * @param SubscriptionEventsSubscriptionStatus $subscriptionStatus
     *
     * @return self
     */
    public function setSubscriptionStatus(SubscriptionEventsSubscriptionStatus $subscriptionStatus) : self
    {
        $this->initialized['subscriptionStatus'] = true;
        $this->subscriptionStatus = $subscriptionStatus;
        return $this;
    }
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @return SubscriptionEventsDateRange
     */
    public function getDateRange() : SubscriptionEventsDateRange
    {
        return $this->dateRange;
    }
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @param SubscriptionEventsDateRange $dateRange
     *
     * @return self
     */
    public function setDateRange(SubscriptionEventsDateRange $dateRange) : self
    {
        $this->initialized['dateRange'] = true;
        $this->dateRange = $dateRange;
        return $this;
    }
    /**
     * Container holds all of the unread files associated with the subscription.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionEventsSubscriptionFile>
     */
    public function getSubscriptionFile() : array
    {
        return $this->subscriptionFile;
    }
    /**
     * Container holds all of the unread files associated with the subscription.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionEventsSubscriptionFile> $subscriptionFile
     *
     * @return self
     */
    public function setSubscriptionFile(array $subscriptionFile) : self
    {
        $this->initialized['subscriptionFile'] = true;
        $this->subscriptionFile = $subscriptionFile;
        return $this;
    }
}