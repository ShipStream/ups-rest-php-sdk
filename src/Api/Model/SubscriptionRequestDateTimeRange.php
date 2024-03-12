<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionRequestDateTimeRange extends \ArrayObject
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
     * Beginning date time for the retrieval criteria of the subscriptions. It is required for date time request criteria. Format: YYYYMMDDHHmmss.
     *
     * @var string
     */
    protected $beginDateTime;
    /**
     * Ending date time for the retrieval criteria of the subscriptions. Format: YYYYMMDDHHmmss.  When a null or empty EndDateTime is passed in the request, it is defaulted to 7 days from the given begin date.
     *
     * @var string
     */
    protected $endDateTime;
    /**
     * Beginning date time for the retrieval criteria of the subscriptions. It is required for date time request criteria. Format: YYYYMMDDHHmmss.
     *
     * @return string
     */
    public function getBeginDateTime() : string
    {
        return $this->beginDateTime;
    }
    /**
     * Beginning date time for the retrieval criteria of the subscriptions. It is required for date time request criteria. Format: YYYYMMDDHHmmss.
     *
     * @param string $beginDateTime
     *
     * @return self
     */
    public function setBeginDateTime(string $beginDateTime) : self
    {
        $this->initialized['beginDateTime'] = true;
        $this->beginDateTime = $beginDateTime;
        return $this;
    }
    /**
     * Ending date time for the retrieval criteria of the subscriptions. Format: YYYYMMDDHHmmss.  When a null or empty EndDateTime is passed in the request, it is defaulted to 7 days from the given begin date.
     *
     * @return string
     */
    public function getEndDateTime() : string
    {
        return $this->endDateTime;
    }
    /**
     * Ending date time for the retrieval criteria of the subscriptions. Format: YYYYMMDDHHmmss.  When a null or empty EndDateTime is passed in the request, it is defaulted to 7 days from the given begin date.
     *
     * @param string $endDateTime
     *
     * @return self
     */
    public function setEndDateTime(string $endDateTime) : self
    {
        $this->initialized['endDateTime'] = true;
        $this->endDateTime = $endDateTime;
        return $this;
    }
}