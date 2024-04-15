<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileException extends \ArrayObject
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
     * @var list<ExceptionPackageReferenceNumber>|null
     */
    protected $packageReferenceNumber;
    /**
     * 
     *
     * @var list<ExceptionShipmentReferenceNumber>|null
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
     * Contains information about updated shipping address.
     *
     * @var ExceptionUpdatedAddress|null
     */
    protected $updatedAddress;
    /**
     * Code for status of updating shipping address issue.
     *
     * @var string|null
     */
    protected $statusCode;
    /**
     * Description for status of updating shipping address issue.
     *
     * @var string|null
     */
    protected $statusDescription;
    /**
     * Code for reason of updating shipping address issue.
     *
     * @var string|null
     */
    protected $reasonCode;
    /**
     * Description for reason of updating shipping address issue.
     *
     * @var string|null
     */
    protected $reasonDescription;
    /**
     * Resolution for updating shipping address issue.
     *
     * @var ExceptionResolution|null
     */
    protected $resolution;
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @var string|null
     */
    protected $rescheduledDeliveryDate;
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @var string|null
     */
    protected $rescheduledDeliveryTime;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var ExceptionActivityLocation|null
     */
    protected $activityLocation;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var ExceptionBillToAccount|null
     */
    protected $billToAccount;
    /**
     * The UPS Access Point Location ID.
     *
     * @var string|null
     */
    protected $accessPointLocationID;
    /**
     * 
     *
     * @return list<ExceptionPackageReferenceNumber>|null
     */
    public function getPackageReferenceNumber() : ?array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param list<ExceptionPackageReferenceNumber>|null $packageReferenceNumber
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
     * @return list<ExceptionShipmentReferenceNumber>|null
     */
    public function getShipmentReferenceNumber() : ?array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * 
     *
     * @param list<ExceptionShipmentReferenceNumber>|null $shipmentReferenceNumber
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
     * Contains information about updated shipping address.
     *
     * @return ExceptionUpdatedAddress|null
     */
    public function getUpdatedAddress() : ?ExceptionUpdatedAddress
    {
        return $this->updatedAddress;
    }
    /**
     * Contains information about updated shipping address.
     *
     * @param ExceptionUpdatedAddress|null $updatedAddress
     *
     * @return self
     */
    public function setUpdatedAddress(?ExceptionUpdatedAddress $updatedAddress) : self
    {
        $this->initialized['updatedAddress'] = true;
        $this->updatedAddress = $updatedAddress;
        return $this;
    }
    /**
     * Code for status of updating shipping address issue.
     *
     * @return string|null
     */
    public function getStatusCode() : ?string
    {
        return $this->statusCode;
    }
    /**
     * Code for status of updating shipping address issue.
     *
     * @param string|null $statusCode
     *
     * @return self
     */
    public function setStatusCode(?string $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Description for status of updating shipping address issue.
     *
     * @return string|null
     */
    public function getStatusDescription() : ?string
    {
        return $this->statusDescription;
    }
    /**
     * Description for status of updating shipping address issue.
     *
     * @param string|null $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(?string $statusDescription) : self
    {
        $this->initialized['statusDescription'] = true;
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * Code for reason of updating shipping address issue.
     *
     * @return string|null
     */
    public function getReasonCode() : ?string
    {
        return $this->reasonCode;
    }
    /**
     * Code for reason of updating shipping address issue.
     *
     * @param string|null $reasonCode
     *
     * @return self
     */
    public function setReasonCode(?string $reasonCode) : self
    {
        $this->initialized['reasonCode'] = true;
        $this->reasonCode = $reasonCode;
        return $this;
    }
    /**
     * Description for reason of updating shipping address issue.
     *
     * @return string|null
     */
    public function getReasonDescription() : ?string
    {
        return $this->reasonDescription;
    }
    /**
     * Description for reason of updating shipping address issue.
     *
     * @param string|null $reasonDescription
     *
     * @return self
     */
    public function setReasonDescription(?string $reasonDescription) : self
    {
        $this->initialized['reasonDescription'] = true;
        $this->reasonDescription = $reasonDescription;
        return $this;
    }
    /**
     * Resolution for updating shipping address issue.
     *
     * @return ExceptionResolution|null
     */
    public function getResolution() : ?ExceptionResolution
    {
        return $this->resolution;
    }
    /**
     * Resolution for updating shipping address issue.
     *
     * @param ExceptionResolution|null $resolution
     *
     * @return self
     */
    public function setResolution(?ExceptionResolution $resolution) : self
    {
        $this->initialized['resolution'] = true;
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @return string|null
     */
    public function getRescheduledDeliveryDate() : ?string
    {
        return $this->rescheduledDeliveryDate;
    }
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @param string|null $rescheduledDeliveryDate
     *
     * @return self
     */
    public function setRescheduledDeliveryDate(?string $rescheduledDeliveryDate) : self
    {
        $this->initialized['rescheduledDeliveryDate'] = true;
        $this->rescheduledDeliveryDate = $rescheduledDeliveryDate;
        return $this;
    }
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @return string|null
     */
    public function getRescheduledDeliveryTime() : ?string
    {
        return $this->rescheduledDeliveryTime;
    }
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @param string|null $rescheduledDeliveryTime
     *
     * @return self
     */
    public function setRescheduledDeliveryTime(?string $rescheduledDeliveryTime) : self
    {
        $this->initialized['rescheduledDeliveryTime'] = true;
        $this->rescheduledDeliveryTime = $rescheduledDeliveryTime;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return ExceptionActivityLocation|null
     */
    public function getActivityLocation() : ?ExceptionActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param ExceptionActivityLocation|null $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(?ExceptionActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return ExceptionBillToAccount|null
     */
    public function getBillToAccount() : ?ExceptionBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param ExceptionBillToAccount|null $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(?ExceptionBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * The UPS Access Point Location ID.
     *
     * @return string|null
     */
    public function getAccessPointLocationID() : ?string
    {
        return $this->accessPointLocationID;
    }
    /**
     * The UPS Access Point Location ID.
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