<?php

namespace ShipStream\Ups\Api\Model;

class TrackingCandidatePickupDateRange extends \ArrayObject
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
     * The beginning of the date range for the candidate. Format: YYYYMMDD  Service is only supported for 30 days
     *
     * @var string
     */
    protected $beginDate;
    /**
     * The end of the date range for the candidate. Format: YYYYMMDD
     *
     * @var string
     */
    protected $endDate;
    /**
     * The beginning of the date range for the candidate. Format: YYYYMMDD  Service is only supported for 30 days
     *
     * @return string
     */
    public function getBeginDate() : string
    {
        return $this->beginDate;
    }
    /**
     * The beginning of the date range for the candidate. Format: YYYYMMDD  Service is only supported for 30 days
     *
     * @param string $beginDate
     *
     * @return self
     */
    public function setBeginDate(string $beginDate) : self
    {
        $this->initialized['beginDate'] = true;
        $this->beginDate = $beginDate;
        return $this;
    }
    /**
     * The end of the date range for the candidate. Format: YYYYMMDD
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * The end of the date range for the candidate. Format: YYYYMMDD
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
}