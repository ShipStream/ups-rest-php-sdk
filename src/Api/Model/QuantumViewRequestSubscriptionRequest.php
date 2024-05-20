<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewRequestSubscriptionRequest extends \ArrayObject
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
     * Name of subscription requested by user, as one type of request criteria. Required when the customer wants to request data for a specific subscription name. Subscription name consists of up to 21 alphanumerics.
     *
     * @var string
     */
    protected $name;
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @var SubscriptionRequestDateTimeRange
     */
    protected $dateTimeRange;
    /**
     * File name of specific subscription requested by user. Format: YYMMDD_HHmmssnnn. (nnn - sequence number: usually = 001)
     *
     * @var list<string>
     */
    protected $fileName;
    /**
     * Name of subscription requested by user, as one type of request criteria. Required when the customer wants to request data for a specific subscription name. Subscription name consists of up to 21 alphanumerics.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of subscription requested by user, as one type of request criteria. Required when the customer wants to request data for a specific subscription name. Subscription name consists of up to 21 alphanumerics.
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
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @return SubscriptionRequestDateTimeRange
     */
    public function getDateTimeRange() : SubscriptionRequestDateTimeRange
    {
        return $this->dateTimeRange;
    }
    /**
     * The range of date time of subscription requested by user, as one type of request criteria, valid up to but not exceeding 7 days into the past, starting from current day.
     *
     * @param SubscriptionRequestDateTimeRange $dateTimeRange
     *
     * @return self
     */
    public function setDateTimeRange(SubscriptionRequestDateTimeRange $dateTimeRange) : self
    {
        $this->initialized['dateTimeRange'] = true;
        $this->dateTimeRange = $dateTimeRange;
        return $this;
    }
    /**
     * File name of specific subscription requested by user. Format: YYMMDD_HHmmssnnn. (nnn - sequence number: usually = 001)
     *
     * @return list<string>
     */
    public function getFileName() : array
    {
        return $this->fileName;
    }
    /**
     * File name of specific subscription requested by user. Format: YYMMDD_HHmmssnnn. (nnn - sequence number: usually = 001)
     *
     * @param list<string> $fileName
     *
     * @return self
     */
    public function setFileName(array $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
}