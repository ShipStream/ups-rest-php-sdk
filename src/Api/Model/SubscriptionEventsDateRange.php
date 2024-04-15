<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionEventsDateRange extends \ArrayObject
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
    * Beginning date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @var string|null
    */
    protected $beginDate;
    /**
    * Ending date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @var string|null
    */
    protected $endDate;
    /**
    * Beginning date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @return string|null
    */
    public function getBeginDate() : ?string
    {
        return $this->beginDate;
    }
    /**
    * Beginning date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @param string|null $beginDate
    *
    * @return self
    */
    public function setBeginDate(?string $beginDate) : self
    {
        $this->initialized['beginDate'] = true;
        $this->beginDate = $beginDate;
        return $this;
    }
    /**
    * Ending date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @return string|null
    */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
    * Ending date time of subscription requested by user.
    Format: MM-DD-YYYY-HH-MM
    *
    * @param string|null $endDate
    *
    * @return self
    */
    public function setEndDate(?string $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
}