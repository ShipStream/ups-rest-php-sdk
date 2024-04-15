<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointSearchIncludeCriteria extends \ArrayObject
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
     * This contains the list of Merchant Account numbers to be used for finding private network access points.
     *
     * @var IncludeCriteriaMerchantAccountNumberList|null
     */
    protected $merchantAccountNumberList;
    /**
     * Container to hold one or more search criteria for UPS Access Points that allow DCR, Shipping and ClickAndCollect access. Only applicable when the UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @var IncludeCriteriaSearchFilter|null
     */
    protected $searchFilter;
    /**
     * Container to hold end point service offering List for UPS Access point. Applicable only when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @var IncludeCriteriaServiceOfferingList|null
     */
    protected $serviceOfferingList;
    /**
     * This contains the list of Merchant Account numbers to be used for finding private network access points.
     *
     * @return IncludeCriteriaMerchantAccountNumberList|null
     */
    public function getMerchantAccountNumberList() : ?IncludeCriteriaMerchantAccountNumberList
    {
        return $this->merchantAccountNumberList;
    }
    /**
     * This contains the list of Merchant Account numbers to be used for finding private network access points.
     *
     * @param IncludeCriteriaMerchantAccountNumberList|null $merchantAccountNumberList
     *
     * @return self
     */
    public function setMerchantAccountNumberList(?IncludeCriteriaMerchantAccountNumberList $merchantAccountNumberList) : self
    {
        $this->initialized['merchantAccountNumberList'] = true;
        $this->merchantAccountNumberList = $merchantAccountNumberList;
        return $this;
    }
    /**
     * Container to hold one or more search criteria for UPS Access Points that allow DCR, Shipping and ClickAndCollect access. Only applicable when the UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @return IncludeCriteriaSearchFilter|null
     */
    public function getSearchFilter() : ?IncludeCriteriaSearchFilter
    {
        return $this->searchFilter;
    }
    /**
     * Container to hold one or more search criteria for UPS Access Points that allow DCR, Shipping and ClickAndCollect access. Only applicable when the UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @param IncludeCriteriaSearchFilter|null $searchFilter
     *
     * @return self
     */
    public function setSearchFilter(?IncludeCriteriaSearchFilter $searchFilter) : self
    {
        $this->initialized['searchFilter'] = true;
        $this->searchFilter = $searchFilter;
        return $this;
    }
    /**
     * Container to hold end point service offering List for UPS Access point. Applicable only when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @return IncludeCriteriaServiceOfferingList|null
     */
    public function getServiceOfferingList() : ?IncludeCriteriaServiceOfferingList
    {
        return $this->serviceOfferingList;
    }
    /**
     * Container to hold end point service offering List for UPS Access point. Applicable only when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @param IncludeCriteriaServiceOfferingList|null $serviceOfferingList
     *
     * @return self
     */
    public function setServiceOfferingList(?IncludeCriteriaServiceOfferingList $serviceOfferingList) : self
    {
        $this->initialized['serviceOfferingList'] = true;
        $this->serviceOfferingList = $serviceOfferingList;
        return $this;
    }
}