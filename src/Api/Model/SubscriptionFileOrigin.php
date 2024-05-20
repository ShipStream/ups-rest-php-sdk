<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileOrigin extends \ArrayObject
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
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<OriginPackageReferenceNumber>
     */
    protected $packageReferenceNumber;
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<OriginShipmentReferenceNumber>
     */
    protected $shipmentReferenceNumber;
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * Package's 1Z tracking number.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @var string
     */
    protected $date;
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @var string
     */
    protected $time;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var OriginActivityLocation
     */
    protected $activityLocation;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var OriginBillToAccount
     */
    protected $billToAccount;
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @var string
     */
    protected $scheduledDeliveryDate;
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @var string
     */
    protected $scheduledDeliveryTime;
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<OriginPackageReferenceNumber>
     */
    public function getPackageReferenceNumber() : array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<OriginPackageReferenceNumber> $packageReferenceNumber
     *
     * @return self
     */
    public function setPackageReferenceNumber(array $packageReferenceNumber) : self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;
        return $this;
    }
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<OriginShipmentReferenceNumber>
     */
    public function getShipmentReferenceNumber() : array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<OriginShipmentReferenceNumber> $shipmentReferenceNumber
     *
     * @return self
     */
    public function setShipmentReferenceNumber(array $shipmentReferenceNumber) : self
    {
        $this->initialized['shipmentReferenceNumber'] = true;
        $this->shipmentReferenceNumber = $shipmentReferenceNumber;
        return $this;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * Package's 1Z tracking number.
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Package's 1Z tracking number.
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return OriginActivityLocation
     */
    public function getActivityLocation() : OriginActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param OriginActivityLocation $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(OriginActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return OriginBillToAccount
     */
    public function getBillToAccount() : OriginBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param OriginBillToAccount $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(OriginBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @return string
     */
    public function getScheduledDeliveryDate() : string
    {
        return $this->scheduledDeliveryDate;
    }
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @param string $scheduledDeliveryDate
     *
     * @return self
     */
    public function setScheduledDeliveryDate(string $scheduledDeliveryDate) : self
    {
        $this->initialized['scheduledDeliveryDate'] = true;
        $this->scheduledDeliveryDate = $scheduledDeliveryDate;
        return $this;
    }
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @return string
     */
    public function getScheduledDeliveryTime() : string
    {
        return $this->scheduledDeliveryTime;
    }
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @param string $scheduledDeliveryTime
     *
     * @return self
     */
    public function setScheduledDeliveryTime(string $scheduledDeliveryTime) : self
    {
        $this->initialized['scheduledDeliveryTime'] = true;
        $this->scheduledDeliveryTime = $scheduledDeliveryTime;
        return $this;
    }
}