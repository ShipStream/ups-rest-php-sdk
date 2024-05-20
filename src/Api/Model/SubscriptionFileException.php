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
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ExceptionPackageReferenceNumber>
     */
    protected $packageReferenceNumber;
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<ExceptionShipmentReferenceNumber>
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
     * Contains information about updated shipping address.
     *
     * @var ExceptionUpdatedAddress
     */
    protected $updatedAddress;
    /**
     * Code for status of updating shipping address issue.
     *
     * @var string
     */
    protected $statusCode;
    /**
     * Description for status of updating shipping address issue.
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * Code for reason of updating shipping address issue.
     *
     * @var string
     */
    protected $reasonCode;
    /**
     * Description for reason of updating shipping address issue.
     *
     * @var string
     */
    protected $reasonDescription;
    /**
     * Resolution for updating shipping address issue.
     *
     * @var ExceptionResolution
     */
    protected $resolution;
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @var string
     */
    protected $rescheduledDeliveryDate;
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @var string
     */
    protected $rescheduledDeliveryTime;
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @var ExceptionActivityLocation
     */
    protected $activityLocation;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var ExceptionBillToAccount
     */
    protected $billToAccount;
    /**
     * The UPS Access Point Location ID.
     *
     * @var string
     */
    protected $accessPointLocationID;
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<ExceptionPackageReferenceNumber>
     */
    public function getPackageReferenceNumber() : array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * Package-level reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ExceptionPackageReferenceNumber> $packageReferenceNumber
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
     * @return list<ExceptionShipmentReferenceNumber>
     */
    public function getShipmentReferenceNumber() : array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * Container tag for shipment reference number.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<ExceptionShipmentReferenceNumber> $shipmentReferenceNumber
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
     * Contains information about updated shipping address.
     *
     * @return ExceptionUpdatedAddress
     */
    public function getUpdatedAddress() : ExceptionUpdatedAddress
    {
        return $this->updatedAddress;
    }
    /**
     * Contains information about updated shipping address.
     *
     * @param ExceptionUpdatedAddress $updatedAddress
     *
     * @return self
     */
    public function setUpdatedAddress(ExceptionUpdatedAddress $updatedAddress) : self
    {
        $this->initialized['updatedAddress'] = true;
        $this->updatedAddress = $updatedAddress;
        return $this;
    }
    /**
     * Code for status of updating shipping address issue.
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * Code for status of updating shipping address issue.
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Description for status of updating shipping address issue.
     *
     * @return string
     */
    public function getStatusDescription() : string
    {
        return $this->statusDescription;
    }
    /**
     * Description for status of updating shipping address issue.
     *
     * @param string $statusDescription
     *
     * @return self
     */
    public function setStatusDescription(string $statusDescription) : self
    {
        $this->initialized['statusDescription'] = true;
        $this->statusDescription = $statusDescription;
        return $this;
    }
    /**
     * Code for reason of updating shipping address issue.
     *
     * @return string
     */
    public function getReasonCode() : string
    {
        return $this->reasonCode;
    }
    /**
     * Code for reason of updating shipping address issue.
     *
     * @param string $reasonCode
     *
     * @return self
     */
    public function setReasonCode(string $reasonCode) : self
    {
        $this->initialized['reasonCode'] = true;
        $this->reasonCode = $reasonCode;
        return $this;
    }
    /**
     * Description for reason of updating shipping address issue.
     *
     * @return string
     */
    public function getReasonDescription() : string
    {
        return $this->reasonDescription;
    }
    /**
     * Description for reason of updating shipping address issue.
     *
     * @param string $reasonDescription
     *
     * @return self
     */
    public function setReasonDescription(string $reasonDescription) : self
    {
        $this->initialized['reasonDescription'] = true;
        $this->reasonDescription = $reasonDescription;
        return $this;
    }
    /**
     * Resolution for updating shipping address issue.
     *
     * @return ExceptionResolution
     */
    public function getResolution() : ExceptionResolution
    {
        return $this->resolution;
    }
    /**
     * Resolution for updating shipping address issue.
     *
     * @param ExceptionResolution $resolution
     *
     * @return self
     */
    public function setResolution(ExceptionResolution $resolution) : self
    {
        $this->initialized['resolution'] = true;
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @return string
     */
    public function getRescheduledDeliveryDate() : string
    {
        return $this->rescheduledDeliveryDate;
    }
    /**
     * Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @param string $rescheduledDeliveryDate
     *
     * @return self
     */
    public function setRescheduledDeliveryDate(string $rescheduledDeliveryDate) : self
    {
        $this->initialized['rescheduledDeliveryDate'] = true;
        $this->rescheduledDeliveryDate = $rescheduledDeliveryDate;
        return $this;
    }
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @return string
     */
    public function getRescheduledDeliveryTime() : string
    {
        return $this->rescheduledDeliveryTime;
    }
    /**
     * Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @param string $rescheduledDeliveryTime
     *
     * @return self
     */
    public function setRescheduledDeliveryTime(string $rescheduledDeliveryTime) : self
    {
        $this->initialized['rescheduledDeliveryTime'] = true;
        $this->rescheduledDeliveryTime = $rescheduledDeliveryTime;
        return $this;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @return ExceptionActivityLocation
     */
    public function getActivityLocation() : ExceptionActivityLocation
    {
        return $this->activityLocation;
    }
    /**
     * Geographic location where an activity occurred during a movement of a package or shipment.(ActivityLocation in Exception is identical to the one in Manifest. But three of all elements in Exception/ActivityLocation/AddressArtifactFormat are populated in this release. Refer to Manifest for remaining unpopulated elements.)
     *
     * @param ExceptionActivityLocation $activityLocation
     *
     * @return self
     */
    public function setActivityLocation(ExceptionActivityLocation $activityLocation) : self
    {
        $this->initialized['activityLocation'] = true;
        $this->activityLocation = $activityLocation;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return ExceptionBillToAccount
     */
    public function getBillToAccount() : ExceptionBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param ExceptionBillToAccount $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(ExceptionBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * The UPS Access Point Location ID.
     *
     * @return string
     */
    public function getAccessPointLocationID() : string
    {
        return $this->accessPointLocationID;
    }
    /**
     * The UPS Access Point Location ID.
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