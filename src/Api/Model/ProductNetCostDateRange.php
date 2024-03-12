<?php

namespace ShipStream\Ups\Api\Model;

class ProductNetCostDateRange extends \ArrayObject
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
     * If the RVC is calculated over a period of time, it should be identified by the begin date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
     *
     * @var string
     */
    protected $beginDate;
    /**
     * If the RVC is calculated over a period of time, it should be identified by the End date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
     *
     * @var string
     */
    protected $endDate;
    /**
     * If the RVC is calculated over a period of time, it should be identified by the begin date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
     *
     * @return string
     */
    public function getBeginDate() : string
    {
        return $this->beginDate;
    }
    /**
     * If the RVC is calculated over a period of time, it should be identified by the begin date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
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
     * If the RVC is calculated over a period of time, it should be identified by the End date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * If the RVC is calculated over a period of time, it should be identified by the End date (yyyyMMdd) of that period. (Reference: Articles 402.1, 402.5).  Applies to NAFTA CO only. Format is yyyyMMdd.
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