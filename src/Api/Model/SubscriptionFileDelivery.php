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
     * 
     *
     * @var list<DeliveryPackageReferenceNumber>|null
     */
    protected $packageReferenceNumber;
    /**
     * 
     *
     * @var list<DeliveryShipmentReferenceNumber>|null
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
     * Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Time that the package is delivered. Time format is HHMMSS
     *
     * @var string|null
     */
    protected $time;
    /**
     * Information about driver release note / signature.
     *
     * @var string|null
     */
    protected $driverRelease;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var DeliveryActivityLocation|null
     */
    protected $activityLocation;
    /**
     * Information about the location where package is delivered.
     *
     * @var DeliveryDeliveryLocation|null
     */
    protected $deliveryLocation;
    /**
     * Container for cash on delivery (COD) information.
     *
     * @var DeliveryCOD|null
     */
    protected $cOD;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var DeliveryBillToAccount|null
     */
    protected $billToAccount;
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @var string|null
     */
    protected $lastPickupDate;
    /**
     * UPS Access Point Location ID.
     *
     * @var string|null
     */
    protected $accessPointLocationID;
    /**
     * 
     *
     * @return list<DeliveryPackageReferenceNumber>|null
     */
    public function getPackageReferenceNumber() : ?array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param list<DeliveryPackageReferenceNumber>|null $packageReferenceNumber
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
     * @return list<DeliveryShipmentReferenceNumber>|null
     */
    public function getShipmentReferenceNumber() : ?array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * 
     *
     * @param list<DeliveryShipmentReferenceNumber>|null $shipmentReferenceNumber
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
     * Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Date that the package is delivered. Date format is YYYYMMDD.
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
     * Time that the package is delivered. Time format is HHMMSS
     *
     * @return string|null
     */
    public function getTime() : ?string
    {
        return $this->time;
    }
    /**
     * Time that the package is delivered. Time format is HHMMSS
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
     * Information about driver release note / signature.
     *
     * @return string|null
     */
    public function getDriverRelease() : ?string
    {
        return $this->driverRelease;
    }
    /**
     * Information about driver release note / signature.
     *
     * @param string|null $driverRelease
     *
     * @return self
     */
    public function setDriverRelease(?string $driverRelease) : self
    {
        $this->initialized['driverRelease'] = true;
        $this->driverRelease = $driverRelease;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return DeliveryActivityLocation|null
     */
    public function getActivityLocation() : ?DeliveryActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment. (ActivityLocation in Delivery is identical to the one in Manifest. But all elements in Delivery/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param DeliveryActivityLocation|null $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(?DeliveryActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * Information about the location where package is delivered.
     *
     * @return DeliveryDeliveryLocation|null
     */
    public function getDeliveryLocation() : ?DeliveryDeliveryLocation
    {
        return $this->deliveryLocation;
    }
    /**
     * Information about the location where package is delivered.
     *
     * @param DeliveryDeliveryLocation|null $deliveryLocation
     *
     * @return self
     */
    public function setDeliveryLocation(?DeliveryDeliveryLocation $deliveryLocation) : self
    {
        $this->initialized['deliveryLocation'] = true;
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @return DeliveryCOD|null
     */
    public function getCOD() : ?DeliveryCOD
    {
        return $this->cOD;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @param DeliveryCOD|null $cOD
     *
     * @return self
     */
    public function setCOD(?DeliveryCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return DeliveryBillToAccount|null
     */
    public function getBillToAccount() : ?DeliveryBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param DeliveryBillToAccount|null $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(?DeliveryBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @return string|null
     */
    public function getLastPickupDate() : ?string
    {
        return $this->lastPickupDate;
    }
    /**
     * Last pickup by Date from the UPS Access Point Location.
     *
     * @param string|null $lastPickupDate
     *
     * @return self
     */
    public function setLastPickupDate(?string $lastPickupDate) : self
    {
        $this->initialized['lastPickupDate'] = true;
        $this->lastPickupDate = $lastPickupDate;
        return $this;
    }
    /**
     * UPS Access Point Location ID.
     *
     * @return string|null
     */
    public function getAccessPointLocationID() : ?string
    {
        return $this->accessPointLocationID;
    }
    /**
     * UPS Access Point Location ID.
     *
     * @param string|null $accessPointLocationID
     *
     * @return self
     */
    public function setAccessPointLocationID(?string $accessPointLocationID) : self
    {
        $this->initialized['accessPointLocationID'] = true;
        $this->accessPointLocationID = $accessPointLocationID;
        return $this;
    }
}