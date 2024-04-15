<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileGeneric extends \ArrayObject
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
    * Unique identifier that defines the type of activity. 
    VM = Void for Manifest 
    UR = Undeliverable Returns
    IR = Invoice Removal Successful 
    TC = Transport Company USPS scan PS = 'Postal Service Possession Scan'
    FN = UPS Access Point/Alternate Delivery Location Email Notification Failure
    DS = Destination Scan
    AG = Package is in transit to a UPS facility
    RE = UPS Returns Exchange 
    RP = Retail Pickup
    UD = Updated delivery date                                                                                              OD = Out for Delivery                                                                                                        SD = Scheduled for Delivery                                                                                              FM = Tendered to FMP
    *
    * @var string|null
    */
    protected $activityType;
    /**
     * Package's tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * Shipper's alphanumeric account number.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * 
     *
     * @var list<GenericShipmentReferenceNumber>|null
     */
    protected $shipmentReferenceNumber;
    /**
     * 
     *
     * @var list<GenericPackageReferenceNumber>|null
     */
    protected $packageReferenceNumber;
    /**
     * Container for service code and description.
     *
     * @var GenericService|null
     */
    protected $service;
    /**
     * Information about package activity.
     *
     * @var GenericActivity|null
     */
    protected $activity;
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @var GenericBillToAccount|null
     */
    protected $billToAccount;
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @var GenericShipTo|null
     */
    protected $shipTo;
    /**
    * If Activity Type is "DS" or "UD", this element will contain Rescheduled Delivery Date. 
    Format will be YYYYMMDD.                                                                                               If Activity Type is "OD", this element will contain Rescheduled Delivery Date. Format will be YYYYMMDD.                                                                                                                     If Activity Type is "SD", this element will contain agreed upon date with Customer for delivery Date . Format will be YYYYMMDD.
    *
    * @var string|null
    */
    protected $rescheduledDeliveryDate;
    /**
     * Failure notification information containing email address and Notification code
     *
     * @var GenericFailureNotification|null
     */
    protected $failureNotification;
    /**
    * Unique identifier that defines the type of activity. 
    VM = Void for Manifest 
    UR = Undeliverable Returns
    IR = Invoice Removal Successful 
    TC = Transport Company USPS scan PS = 'Postal Service Possession Scan'
    FN = UPS Access Point/Alternate Delivery Location Email Notification Failure
    DS = Destination Scan
    AG = Package is in transit to a UPS facility
    RE = UPS Returns Exchange 
    RP = Retail Pickup
    UD = Updated delivery date                                                                                              OD = Out for Delivery                                                                                                        SD = Scheduled for Delivery                                                                                              FM = Tendered to FMP
    *
    * @return string|null
    */
    public function getActivityType() : ?string
    {
        return $this->activityType;
    }
    /**
    * Unique identifier that defines the type of activity. 
    VM = Void for Manifest 
    UR = Undeliverable Returns
    IR = Invoice Removal Successful 
    TC = Transport Company USPS scan PS = 'Postal Service Possession Scan'
    FN = UPS Access Point/Alternate Delivery Location Email Notification Failure
    DS = Destination Scan
    AG = Package is in transit to a UPS facility
    RE = UPS Returns Exchange 
    RP = Retail Pickup
    UD = Updated delivery date                                                                                              OD = Out for Delivery                                                                                                        SD = Scheduled for Delivery                                                                                              FM = Tendered to FMP
    *
    * @param string|null $activityType
    *
    * @return self
    */
    public function setActivityType(?string $activityType) : self
    {
        $this->initialized['activityType'] = true;
        $this->activityType = $activityType;
        return $this;
    }
    /**
     * Package's tracking number.
     *
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * Package's tracking number.
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
     * Shipper's alphanumeric account number.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's alphanumeric account number.
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
     * 
     *
     * @return list<GenericShipmentReferenceNumber>|null
     */
    public function getShipmentReferenceNumber() : ?array
    {
        return $this->shipmentReferenceNumber;
    }
    /**
     * 
     *
     * @param list<GenericShipmentReferenceNumber>|null $shipmentReferenceNumber
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
     * 
     *
     * @return list<GenericPackageReferenceNumber>|null
     */
    public function getPackageReferenceNumber() : ?array
    {
        return $this->packageReferenceNumber;
    }
    /**
     * 
     *
     * @param list<GenericPackageReferenceNumber>|null $packageReferenceNumber
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
     * Container for service code and description.
     *
     * @return GenericService|null
     */
    public function getService() : ?GenericService
    {
        return $this->service;
    }
    /**
     * Container for service code and description.
     *
     * @param GenericService|null $service
     *
     * @return self
     */
    public function setService(?GenericService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Information about package activity.
     *
     * @return GenericActivity|null
     */
    public function getActivity() : ?GenericActivity
    {
        return $this->activity;
    }
    /**
     * Information about package activity.
     *
     * @param GenericActivity|null $activity
     *
     * @return self
     */
    public function setActivity(?GenericActivity $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @return GenericBillToAccount|null
     */
    public function getBillToAccount() : ?GenericBillToAccount
    {
        return $this->billToAccount;
    }
    /**
     * The information provided within this container identifies the shipper number and billing option the user specified to view during the subscription process.
     *
     * @param GenericBillToAccount|null $billToAccount
     *
     * @return self
     */
    public function setBillToAccount(?GenericBillToAccount $billToAccount) : self
    {
        $this->initialized['billToAccount'] = true;
        $this->billToAccount = $billToAccount;
        return $this;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @return GenericShipTo|null
     */
    public function getShipTo() : ?GenericShipTo
    {
        return $this->shipTo;
    }
    /**
     * Address and contact information describing the location where a return is to be delivered.
     *
     * @param GenericShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?GenericShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
    * If Activity Type is "DS" or "UD", this element will contain Rescheduled Delivery Date. 
    Format will be YYYYMMDD.                                                                                               If Activity Type is "OD", this element will contain Rescheduled Delivery Date. Format will be YYYYMMDD.                                                                                                                     If Activity Type is "SD", this element will contain agreed upon date with Customer for delivery Date . Format will be YYYYMMDD.
    *
    * @return string|null
    */
    public function getRescheduledDeliveryDate() : ?string
    {
        return $this->rescheduledDeliveryDate;
    }
    /**
    * If Activity Type is "DS" or "UD", this element will contain Rescheduled Delivery Date. 
    Format will be YYYYMMDD.                                                                                               If Activity Type is "OD", this element will contain Rescheduled Delivery Date. Format will be YYYYMMDD.                                                                                                                     If Activity Type is "SD", this element will contain agreed upon date with Customer for delivery Date . Format will be YYYYMMDD.
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
     * Failure notification information containing email address and Notification code
     *
     * @return GenericFailureNotification|null
     */
    public function getFailureNotification() : ?GenericFailureNotification
    {
        return $this->failureNotification;
    }
    /**
     * Failure notification information containing email address and Notification code
     *
     * @param GenericFailureNotification|null $failureNotification
     *
     * @return self
     */
    public function setFailureNotification(?GenericFailureNotification $failureNotification) : self
    {
        $this->initialized['failureNotification'] = true;
        $this->failureNotification = $failureNotification;
        return $this;
    }
}