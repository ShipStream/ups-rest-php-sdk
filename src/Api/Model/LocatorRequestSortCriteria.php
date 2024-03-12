<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestSortCriteria extends \ArrayObject
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
    * For different sort type. Valid values:
    01-Closest Location
    02-Deadline for Drop-off by Air/Express
    03-Deadline for Drop-off by Ground/Standard
    04-Latest Close Time
    05-Earliest Open Time.
    *
    * @var string
    */
    protected $sortType;
    /**
    * For different sort type. Valid values:
    01-Closest Location
    02-Deadline for Drop-off by Air/Express
    03-Deadline for Drop-off by Ground/Standard
    04-Latest Close Time
    05-Earliest Open Time.
    *
    * @return string
    */
    public function getSortType() : string
    {
        return $this->sortType;
    }
    /**
    * For different sort type. Valid values:
    01-Closest Location
    02-Deadline for Drop-off by Air/Express
    03-Deadline for Drop-off by Ground/Standard
    04-Latest Close Time
    05-Earliest Open Time.
    *
    * @param string $sortType
    *
    * @return self
    */
    public function setSortType(string $sortType) : self
    {
        $this->initialized['sortType'] = true;
        $this->sortType = $sortType;
        return $this;
    }
}