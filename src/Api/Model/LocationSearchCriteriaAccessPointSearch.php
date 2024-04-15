<?php

namespace ShipStream\Ups\Api\Model;

class LocationSearchCriteriaAccessPointSearch extends \ArrayObject
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
     * The Public Access Point ID to use for UPS Access Point Search. Once this parameter is present , address or geocode search is ignored. It cannot be combined with AccountNumber search parameter.
     *
     * @var string|null
     */
    protected $publicAccessPointID;
    /**
    * Status of UPS Access Point. Valid values are: 
    01-Active-available
    07-Active-unavailable.
    *
    * @var string|null
    */
    protected $accessPointStatus;
    /**
     * The account number to use for UPS Access Point Search in the country or territory. Used to locate a private network for the account. Once this parameter is present any access point address or geocode search is ignored. It cannot be combined with PublicAccessPointID search parameter.
     *
     * @var string|null
     */
    protected $accountNumber;
    /**
     * This contains elements to refine (include) UPS Access point address or geocode Search.
     *
     * @var AccessPointSearchIncludeCriteria|null
     */
    protected $includeCriteria;
    /**
     * This contains elements to exclude from UPS Access Point address or geocode search.
     *
     * @var AccessPointSearchExcludeFromResult|null
     */
    protected $excludeFromResult;
    /**
     * Presence of this tag represents that "AccessPointSearchByAddress" service is requested. The value of this tag is ignored.
     *
     * @var string|null
     */
    protected $exactMatchIndicator;
    /**
     * Presence of this tag represents that "AccessPointAvailability" service is requested. The value of this tag is ignored.
     *
     * @var string|null
     */
    protected $existIndicator;
    /**
     * The Public Access Point ID to use for UPS Access Point Search. Once this parameter is present , address or geocode search is ignored. It cannot be combined with AccountNumber search parameter.
     *
     * @return string|null
     */
    public function getPublicAccessPointID() : ?string
    {
        return $this->publicAccessPointID;
    }
    /**
     * The Public Access Point ID to use for UPS Access Point Search. Once this parameter is present , address or geocode search is ignored. It cannot be combined with AccountNumber search parameter.
     *
     * @param string|null $publicAccessPointID
     *
     * @return self
     */
    public function setPublicAccessPointID(?string $publicAccessPointID) : self
    {
        $this->initialized['publicAccessPointID'] = true;
        $this->publicAccessPointID = $publicAccessPointID;
        return $this;
    }
    /**
    * Status of UPS Access Point. Valid values are: 
    01-Active-available
    07-Active-unavailable.
    *
    * @return string|null
    */
    public function getAccessPointStatus() : ?string
    {
        return $this->accessPointStatus;
    }
    /**
    * Status of UPS Access Point. Valid values are: 
    01-Active-available
    07-Active-unavailable.
    *
    * @param string|null $accessPointStatus
    *
    * @return self
    */
    public function setAccessPointStatus(?string $accessPointStatus) : self
    {
        $this->initialized['accessPointStatus'] = true;
        $this->accessPointStatus = $accessPointStatus;
        return $this;
    }
    /**
     * The account number to use for UPS Access Point Search in the country or territory. Used to locate a private network for the account. Once this parameter is present any access point address or geocode search is ignored. It cannot be combined with PublicAccessPointID search parameter.
     *
     * @return string|null
     */
    public function getAccountNumber() : ?string
    {
        return $this->accountNumber;
    }
    /**
     * The account number to use for UPS Access Point Search in the country or territory. Used to locate a private network for the account. Once this parameter is present any access point address or geocode search is ignored. It cannot be combined with PublicAccessPointID search parameter.
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This contains elements to refine (include) UPS Access point address or geocode Search.
     *
     * @return AccessPointSearchIncludeCriteria|null
     */
    public function getIncludeCriteria() : ?AccessPointSearchIncludeCriteria
    {
        return $this->includeCriteria;
    }
    /**
     * This contains elements to refine (include) UPS Access point address or geocode Search.
     *
     * @param AccessPointSearchIncludeCriteria|null $includeCriteria
     *
     * @return self
     */
    public function setIncludeCriteria(?AccessPointSearchIncludeCriteria $includeCriteria) : self
    {
        $this->initialized['includeCriteria'] = true;
        $this->includeCriteria = $includeCriteria;
        return $this;
    }
    /**
     * This contains elements to exclude from UPS Access Point address or geocode search.
     *
     * @return AccessPointSearchExcludeFromResult|null
     */
    public function getExcludeFromResult() : ?AccessPointSearchExcludeFromResult
    {
        return $this->excludeFromResult;
    }
    /**
     * This contains elements to exclude from UPS Access Point address or geocode search.
     *
     * @param AccessPointSearchExcludeFromResult|null $excludeFromResult
     *
     * @return self
     */
    public function setExcludeFromResult(?AccessPointSearchExcludeFromResult $excludeFromResult) : self
    {
        $this->initialized['excludeFromResult'] = true;
        $this->excludeFromResult = $excludeFromResult;
        return $this;
    }
    /**
     * Presence of this tag represents that "AccessPointSearchByAddress" service is requested. The value of this tag is ignored.
     *
     * @return string|null
     */
    public function getExactMatchIndicator() : ?string
    {
        return $this->exactMatchIndicator;
    }
    /**
     * Presence of this tag represents that "AccessPointSearchByAddress" service is requested. The value of this tag is ignored.
     *
     * @param string|null $exactMatchIndicator
     *
     * @return self
     */
    public function setExactMatchIndicator(?string $exactMatchIndicator) : self
    {
        $this->initialized['exactMatchIndicator'] = true;
        $this->exactMatchIndicator = $exactMatchIndicator;
        return $this;
    }
    /**
     * Presence of this tag represents that "AccessPointAvailability" service is requested. The value of this tag is ignored.
     *
     * @return string|null
     */
    public function getExistIndicator() : ?string
    {
        return $this->existIndicator;
    }
    /**
     * Presence of this tag represents that "AccessPointAvailability" service is requested. The value of this tag is ignored.
     *
     * @param string|null $existIndicator
     *
     * @return self
     */
    public function setExistIndicator(?string $existIndicator) : self
    {
        $this->initialized['existIndicator'] = true;
        $this->existIndicator = $existIndicator;
        return $this;
    }
}