<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationAccessPointInformation extends \ArrayObject
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
     * The Public Access Point ID associated with UPS access point.
     *
     * @var string|null
     */
    protected $publicAccessPointID;
    /**
     * Image URL associated with UPS access point.
     *
     * @var string|null
     */
    protected $imageURL;
    /**
     * Container to hold list for business classification.
     *
     * @var AccessPointInformationBusinessClassificationList|null
     */
    protected $businessClassificationList;
    /**
     * Container for UPS AccessPoint status.
     *
     * @var AccessPointInformationAccessPointStatus|null
     */
    protected $accessPointStatus;
    /**
     * Holds the value of facility SLIC of Access Point Location. Not implemented currently. For future use.
     *
     * @var string|null
     */
    protected $facilitySLIC;
    /**
     * Container to hold the list of private networks.
     *
     * @var AccessPointInformationPrivateNetworkList|null
     */
    protected $privateNetworkList;
    /**
     * Container to hold the status of shipping or DRC/DCO availability of a UPS Access Point.
     *
     * @var AccessPointInformationAvailability|null
     */
    protected $availability;
    /**
     * The Public Access Point ID associated with UPS access point.
     *
     * @return string|null
     */
    public function getPublicAccessPointID() : ?string
    {
        return $this->publicAccessPointID;
    }
    /**
     * The Public Access Point ID associated with UPS access point.
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
     * Image URL associated with UPS access point.
     *
     * @return string|null
     */
    public function getImageURL() : ?string
    {
        return $this->imageURL;
    }
    /**
     * Image URL associated with UPS access point.
     *
     * @param string|null $imageURL
     *
     * @return self
     */
    public function setImageURL(?string $imageURL) : self
    {
        $this->initialized['imageURL'] = true;
        $this->imageURL = $imageURL;
        return $this;
    }
    /**
     * Container to hold list for business classification.
     *
     * @return AccessPointInformationBusinessClassificationList|null
     */
    public function getBusinessClassificationList() : ?AccessPointInformationBusinessClassificationList
    {
        return $this->businessClassificationList;
    }
    /**
     * Container to hold list for business classification.
     *
     * @param AccessPointInformationBusinessClassificationList|null $businessClassificationList
     *
     * @return self
     */
    public function setBusinessClassificationList(?AccessPointInformationBusinessClassificationList $businessClassificationList) : self
    {
        $this->initialized['businessClassificationList'] = true;
        $this->businessClassificationList = $businessClassificationList;
        return $this;
    }
    /**
     * Container for UPS AccessPoint status.
     *
     * @return AccessPointInformationAccessPointStatus|null
     */
    public function getAccessPointStatus() : ?AccessPointInformationAccessPointStatus
    {
        return $this->accessPointStatus;
    }
    /**
     * Container for UPS AccessPoint status.
     *
     * @param AccessPointInformationAccessPointStatus|null $accessPointStatus
     *
     * @return self
     */
    public function setAccessPointStatus(?AccessPointInformationAccessPointStatus $accessPointStatus) : self
    {
        $this->initialized['accessPointStatus'] = true;
        $this->accessPointStatus = $accessPointStatus;
        return $this;
    }
    /**
     * Holds the value of facility SLIC of Access Point Location. Not implemented currently. For future use.
     *
     * @return string|null
     */
    public function getFacilitySLIC() : ?string
    {
        return $this->facilitySLIC;
    }
    /**
     * Holds the value of facility SLIC of Access Point Location. Not implemented currently. For future use.
     *
     * @param string|null $facilitySLIC
     *
     * @return self
     */
    public function setFacilitySLIC(?string $facilitySLIC) : self
    {
        $this->initialized['facilitySLIC'] = true;
        $this->facilitySLIC = $facilitySLIC;
        return $this;
    }
    /**
     * Container to hold the list of private networks.
     *
     * @return AccessPointInformationPrivateNetworkList|null
     */
    public function getPrivateNetworkList() : ?AccessPointInformationPrivateNetworkList
    {
        return $this->privateNetworkList;
    }
    /**
     * Container to hold the list of private networks.
     *
     * @param AccessPointInformationPrivateNetworkList|null $privateNetworkList
     *
     * @return self
     */
    public function setPrivateNetworkList(?AccessPointInformationPrivateNetworkList $privateNetworkList) : self
    {
        $this->initialized['privateNetworkList'] = true;
        $this->privateNetworkList = $privateNetworkList;
        return $this;
    }
    /**
     * Container to hold the status of shipping or DRC/DCO availability of a UPS Access Point.
     *
     * @return AccessPointInformationAvailability|null
     */
    public function getAvailability() : ?AccessPointInformationAvailability
    {
        return $this->availability;
    }
    /**
     * Container to hold the status of shipping or DRC/DCO availability of a UPS Access Point.
     *
     * @param AccessPointInformationAvailability|null $availability
     *
     * @return self
     */
    public function setAvailability(?AccessPointInformationAvailability $availability) : self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
}