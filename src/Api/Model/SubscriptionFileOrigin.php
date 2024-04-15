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
     * 
     *
     * @var list<OriginPackageReferenceNumber>|null
     */
    protected $packageReferenceNumber;
    /**
     * 
     *
     * @var list<OriginShipmentReferenceNumber>|null
     */
    protected $shipmentReferenceNumber;
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * Package's 1Z tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @var string|null
     */
    protected $time;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var OriginActivityLocation|null
     */
    protected $activityLocation;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var OriginBillToAccount|null
     */
    protected $billToAccount;
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @var string|null
     */
    protected $scheduledDeliveryDate;
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @var string|null
     */
    protected $scheduledDeliveryTime;
    /**
     * 
     *
     * @return list<OriginPackageReferenceNumber>|null
     */
    public function getPackageReferenceNumber() : ?array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param list<OriginPackageReferenceNumber>|null $packageReferenceNumber
     *
     * @return self
     */
    public function setPackageReferenceNumber(?array $packageReferenceNumber) : self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<OriginShipmentReferenceNumber>|null
     */
    public function getShipmentReferenceNumber() : ?array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * 
     *
     * @param list<OriginShipmentReferenceNumber>|null $shipmentReferenceNumber
     *
     * @return self
     */
    public function setShipmentReferenceNumber(?array $shipmentReferenceNumber) : self
    {
        $this->initialized['shipmentReferenceNumber'] = true;
        $this->shipmentReferenceNumber = $shipmentReferenceNumber;
        return $this;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit alphanumeric account number.
     *
     * @param string|null $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(?string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * Package's 1Z tracking number.
     *
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * Package's 1Z tracking number.
     *
     * @param string|null $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(?string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Date that the package is picked up at the origin. Date format is YYYYMMDD.
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * Time that the package is picked up at the origin. Time format is HHMMSS.
     *
     * @param string|null $time
     *
     * @return self
     */
    public function setTime(?string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return OriginActivityLocation|null
     */
    public function getActivityLocation() : ?OriginActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Origin is identical to the one in Manifest. But three of all elements in Origin/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param OriginActivityLocation|null $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(?OriginActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return OriginBillToAccount|null
     */
    public function getBillToAccount() : ?OriginBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param OriginBillToAccount|null $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(?OriginBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @return string|null
     */
    public function getScheduledDeliveryDate() : ?string
    {
        return $this->scheduledDeliveryDate;
    }
    /**
     * Scheduled delivery date for destination address. Date format is YYYYMMDD.
     *
     * @param string|null $scheduledDeliveryDate
     *
     * @return self
     */
    public function setScheduledDeliveryDate(?string $scheduledDeliveryDate) : self
    {
        $this->initialized['scheduledDeliveryDate'] = true;
        $this->scheduledDeliveryDate = $scheduledDeliveryDate;
        return $this;
    }
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @return string|null
     */
    public function getScheduledDeliveryTime() : ?string
    {
        return $this->scheduledDeliveryTime;
    }
    /**
     * Scheduled delivery time for destination address. Time format is HHMMSS.
     *
     * @param string|null $scheduledDeliveryTime
     *
     * @return self
     */
    public function setScheduledDeliveryTime(?string $scheduledDeliveryTime) : self
    {
        $this->initialized['scheduledDeliveryTime'] = true;
        $this->scheduledDeliveryTime = $scheduledDeliveryTime;
        return $this;
    }
}