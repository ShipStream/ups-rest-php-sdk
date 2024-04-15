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
     * @var string|null
     */
    protected $beginDate;
    /**
     * The end of the date range for the candidate. Format: YYYYMMDD
     *
     * @var string|null
     */
    protected $endDate;
    /**
     * The beginning of the date range for the candidate. Format: YYYYMMDD  Service is only supported for 30 days
     *
     * @return string|null
     */
    public function getBeginDate() : ?string
    {
        return $this->beginDate;
    }
    /**
     * The beginning of the date range for the candidate. Format: YYYYMMDD  Service is only supported for 30 days
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
     * The end of the date range for the candidate. Format: YYYYMMDD
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * The end of the date range for the candidate. Format: YYYYMMDD
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