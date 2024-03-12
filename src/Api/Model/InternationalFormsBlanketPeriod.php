<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsBlanketPeriod extends \ArrayObject
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
     * Begin date of the blanket period. It is the date upon which the Certificate becomes applicable to the good covered by the blanket Certificate (it may be prior to the date of signing this Certificate).  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd. This is not valid for a paperless shipment.
     *
     * @var string
     */
    protected $beginDate;
    /**
     * End Date of the blanket period. It is the date upon which the blanket period expires.  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd.  This is not valid for a paperless shipment.
     *
     * @var string
     */
    protected $endDate;
    /**
     * Begin date of the blanket period. It is the date upon which the Certificate becomes applicable to the good covered by the blanket Certificate (it may be prior to the date of signing this Certificate).  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd. This is not valid for a paperless shipment.
     *
     * @return string
     */
    public function getBeginDate() : string
    {
        return $this->beginDate;
    }
    /**
     * Begin date of the blanket period. It is the date upon which the Certificate becomes applicable to the good covered by the blanket Certificate (it may be prior to the date of signing this Certificate).  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd. This is not valid for a paperless shipment.
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
     * End Date of the blanket period. It is the date upon which the blanket period expires.  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd.  This is not valid for a paperless shipment.
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * End Date of the blanket period. It is the date upon which the blanket period expires.  Applies to NAFTA CO form only. Required for NAFTA CO. Format is yyyyMMdd.  This is not valid for a paperless shipment.
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