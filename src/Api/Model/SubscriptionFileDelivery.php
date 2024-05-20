<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileDelivery extends \ArrayObject
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
     * @var list<DeliveryPackageReferenceNumber>
     */
    protected $packageReferenceNumber;
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<DeliveryShipmentReferenceNumber>
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
     * Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @var string
     */
    protected $date;
    /**
     * Time that the package is delivered. Time format is HHMMSS
     *
     * @var string
     */
    protected $time;
    /**
     * Information about driver release note / signature.
     *
     * @var string
     */
    protected $driverRelease;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var DeliveryActivityLocation
     */
    protected $activityLocation;
    /**
     * Information about the location where package is delivered.
     *
     * @var DeliveryDeliveryLocation
     */
    protected $deliveryLocation;
    /**
     * Container for cash on delivery (COD) information.
     *
     * @var DeliveryCOD
     */
    protected $cOD;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var DeliveryBillToAccount
     */
    protected $billToAccount;
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @var string
     */
    protected $lastPickupDate;
    /**
     * UPS Access Point Location ID.
     *
     * @var string
     */
    protected $accessPointLocationID;
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<DeliveryPackageReferenceNumber>
     */
    public function getPackageReferenceNumber() : array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<DeliveryPackageReferenceNumber> $packageReferenceNumber
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
     * @return list<DeliveryShipmentReferenceNumber>
     */
    public function getShipmentReferenceNumber() : array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<DeliveryShipmentReferenceNumber> $shipmentReferenceNumber
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
     * Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Date that the package is delivered. Date format is YYYYMMDD.
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
     * Time that the package is delivered. Time format is HHMMSS
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Time that the package is delivered. Time format is HHMMSS
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
     * Information about driver release note / signature.
     *
     * @return string
     */
    public function getDriverRelease() : string
    {
        return $this->driverRelease;
    }
    /**
     * Information about driver release note / signature.
     *
     * @param string $driverRelease
     *
     * @return self
     */
    public function setDriverRelease(string $driverRelease) : self
    {
        $this->initialized['driverRelease'] = true;
        $this->driverRelease = $driverRelease;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return DeliveryActivityLocation
     */
    public function getActivityLocation() : DeliveryActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param DeliveryActivityLocation $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(DeliveryActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * Information about the location where package is delivered.
     *
     * @return DeliveryDeliveryLocation
     */
    public function getDeliveryLocation() : DeliveryDeliveryLocation
    {
        return $this->deliveryLocation;
    }
    /**
     * Information about the location where package is delivered.
     *
     * @param DeliveryDeliveryLocation $deliveryLocation
     *
     * @return self
     */
    public function setDeliveryLocation(DeliveryDeliveryLocation $deliveryLocation) : self
    {
        $this->initialized['deliveryLocation'] = true;
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @return DeliveryCOD
     */
    public function getCOD() : DeliveryCOD
    {
        return $this->cOD;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @param DeliveryCOD $cOD
     *
     * @return self
     */
    public function setCOD(DeliveryCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return DeliveryBillToAccount
     */
    public function getBillToAccount() : DeliveryBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param DeliveryBillToAccount $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(DeliveryBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @return string
     */
    public function getLastPickupDate() : string
    {
        return $this->lastPickupDate;
    }
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @param string $lastPickupDate
     *
     * @return self
     */
    public function setLastPickupDate(string $lastPickupDate) : self
    {
        $this->initialized['lastPickupDate'] = true;
        $this->lastPickupDate = $lastPickupDate;
        return $this;
    }
    /**
     * UPS Access Point Location ID.
     *
     * @return string
     */
    public function getAccessPointLocationID() : string
    {
        return $this->accessPointLocationID;
    }
    /**
     * UPS Access Point Location ID.
     *
     * @param string $accessPointLocationID
     *
     * @return self
     */
    public function setAccessPointLocationID(string $accessPointLocationID) : self
    {
        $this->initialized['accessPointLocationID'] = true;
        $this->accessPointLocationID = $accessPointLocationID;
        return $this;
    }
}