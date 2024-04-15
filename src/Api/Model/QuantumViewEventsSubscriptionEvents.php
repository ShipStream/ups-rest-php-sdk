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
     * A name uniquely defined associated to the Subscription ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @var string|null
     */
    protected $name;
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Container for whether the subscription is active or not.
     *
     * @var SubscriptionEventsSubscriptionStatus|null
     */
    protected $subscriptionStatus;
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @var SubscriptionEventsDateRange|null
     */
    protected $dateRange;
    /**
     * 
     *
     * @var list<SubscriptionEventsSubscriptionFile>|null
     */
    protected $subscriptionFile;
    /**
     * A name uniquely defined associated to the Subscription ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * A name uniquely defined associated to the Subscription ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * A number uniquely defined associated to the Subscriber ID, for each subscription.� Required if the SubscriptionEvents container is present.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Container for whether the subscription is active or not.
     *
     * @return SubscriptionEventsSubscriptionStatus|null
     */
    public function getSubscriptionStatus() : ?SubscriptionEventsSubscriptionStatus
    {
        return $this->subscriptionStatus;
    }
    /**
     * Container for whether the subscription is active or not.
     *
     * @param SubscriptionEventsSubscriptionStatus|null $subscriptionStatus
     *
     * @return self
     */
    public function setSubscriptionStatus(?SubscriptionEventsSubscriptionStatus $subscriptionStatus) : self
    {
        $this->initialized['subscriptionStatus'] = true;
        $this->subscriptionStatus = $subscriptionStatus;
        return $this;
    }
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @return SubscriptionEventsDateRange|null
     */
    public function getDateRange() : ?SubscriptionEventsDateRange
    {
        return $this->dateRange;
    }
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @param SubscriptionEventsDateRange|null $dateRange
     *
     * @return self
     */
    public function setDateRange(?SubscriptionEventsDateRange $dateRange) : self
    {
        $this->initialized['dateRange'] = true;
        $this->dateRange = $dateRange;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionEventsSubscriptionFile>|null
     */
    public function getSubscriptionFile() : ?array
    {
        return $this->subscriptionFile;
    }
    /**
     * 
     *
     * @param list<SubscriptionEventsSubscriptionFile>|null $subscriptionFile
     *
     * @return self
     */
    public function setSubscriptionFile(?array $subscriptionFile) : self
    {
        $this->initialized['subscriptionFile'] = true;
        $this->subscriptionFile = $subscriptionFile;
        return $this;
    }
}