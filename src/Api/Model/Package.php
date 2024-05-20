<?php

namespace ShipStream\Ups\Api\Model;

class Package extends \ArrayObject
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
     * The container that has all the information related to the access point where the package is destined for/delivered to.
     *
     * @var AccessPointInformation
     */
    protected $accessPointInformation;
    /**
     * 
     *
     * @var list<Activity>
     */
    protected $activity;
    /**
     * The list of additional attributes that may be associated with the package. Presence of any element indicates the package has that attribute.
     *
     * @var list<string>
     */
    protected $additionalAttributes;
    /**
     * The list of additional services that may be associated with the package. Presence of any element indicates that the package has that service.
     *
     * @var list<string>
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var list<AlternateTrackingNumber>
     */
    protected $alternateTrackingNumber;
    /**
     * The container which has the current package status
     *
     * @var Status
     */
    protected $currentStatus;
    /**
     * 
     *
     * @var list<DeliveryDate>
     */
    protected $deliveryDate;
    /**
     * Container with all information related to the delivery of the package. Populated only when the package is delivered.
     *
     * @var DeliveryInformation
     */
    protected $deliveryInformation;
    /**
     * The container which has all delivery times associated with the package.
     *
     * @var DeliveryTime
     */
    protected $deliveryTime;
    /**
     * milestones
     *
     * @var list<Milestones>
     */
    protected $milestones;
    /**
     * 
     *
     * @var list<PackageAddress>
     */
    protected $packageAddress;
    /**
     * The total number of packages in the shipment. Note that this number may be greater than the number of returned packages in the response. In such cases subsequent calls are needed to get additional packages.
     *
     * @var int
     */
    protected $packageCount;
    /**
     * 
     *
     * @var list<PaymentInformation>
     */
    protected $paymentInformation;
    /**
     * 
     *
     * @var list<ReferenceNumber>
     */
    protected $referenceNumber;
    /**
     * The container which has the package service information.
     *
     * @var Service
     */
    protected $service;
    /**
     * 
     *
     * @var string
     */
    protected $statusCode;
    /**
     * The activity status description. Note: this field will be translated based on the locale provided in the request.
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * Contains values which signify that certain data should be suppressed or hidden. Valid values: Tracking activity details should be hidden. Note: this is mainly intended for use by UPS.com applications.
     *
     * @var list<string>
     */
    protected $suppressionIndicators;
    /**
     * 
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * The weight container for the package.
     *
     * @var Weight|null
     */
    protected $weight;
    /**
     * The container that has all the information related to the access point where the package is destined for/delivered to.
     *
     * @return AccessPointInformation
     */
    public function getAccessPointInformation() : AccessPointInformation
    {
        return $this->accessPointInformation;
    }
    /**
     * The container that has all the information related to the access point where the package is destined for/delivered to.
     *
     * @param AccessPointInformation $accessPointInformation
     *
     * @return self
     */
    public function setAccessPointInformation(AccessPointInformation $accessPointInformation) : self
    {
        $this->initialized['accessPointInformation'] = true;
        $this->accessPointInformation = $accessPointInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<Activity>
     */
    public function getActivity() : array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param list<Activity> $activity
     *
     * @return self
     */
    public function setActivity(array $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * The list of additional attributes that may be associated with the package. Presence of any element indicates the package has that attribute.
     *
     * @return list<string>
     */
    public function getAdditionalAttributes() : array
    {
        return $this->additionalAttributes;
    }
    /**
     * The list of additional attributes that may be associated with the package. Presence of any element indicates the package has that attribute.
     *
     * @param list<string> $additionalAttributes
     *
     * @return self
     */
    public function setAdditionalAttributes(array $additionalAttributes) : self
    {
        $this->initialized['additionalAttributes'] = true;
        $this->additionalAttributes = $additionalAttributes;
        return $this;
    }
    /**
     * The list of additional services that may be associated with the package. Presence of any element indicates that the package has that service.
     *
     * @return list<string>
     */
    public function getAdditionalServices() : array
    {
        return $this->additionalServices;
    }
    /**
     * The list of additional services that may be associated with the package. Presence of any element indicates that the package has that service.
     *
     * @param list<string> $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(array $additionalServices) : self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<AlternateTrackingNumber>
     */
    public function getAlternateTrackingNumber() : array
    {
        return $this->alternateTrackingNumber;
    }
    /**
     * 
     *
     * @param list<AlternateTrackingNumber> $alternateTrackingNumber
     *
     * @return self
     */
    public function setAlternateTrackingNumber(array $alternateTrackingNumber) : self
    {
        $this->initialized['alternateTrackingNumber'] = true;
        $this->alternateTrackingNumber = $alternateTrackingNumber;
        return $this;
    }
    /**
     * The container which has the current package status
     *
     * @return Status
     */
    public function getCurrentStatus() : Status
    {
        return $this->currentStatus;
    }
    /**
     * The container which has the current package status
     *
     * @param Status $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(Status $currentStatus) : self
    {
        $this->initialized['currentStatus'] = true;
        $this->currentStatus = $currentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return list<DeliveryDate>
     */
    public function getDeliveryDate() : array
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param list<DeliveryDate> $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(array $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Container with all information related to the delivery of the package. Populated only when the package is delivered.
     *
     * @return DeliveryInformation
     */
    public function getDeliveryInformation() : DeliveryInformation
    {
        return $this->deliveryInformation;
    }
    /**
     * Container with all information related to the delivery of the package. Populated only when the package is delivered.
     *
     * @param DeliveryInformation $deliveryInformation
     *
     * @return self
     */
    public function setDeliveryInformation(DeliveryInformation $deliveryInformation) : self
    {
        $this->initialized['deliveryInformation'] = true;
        $this->deliveryInformation = $deliveryInformation;
        return $this;
    }
    /**
     * The container which has all delivery times associated with the package.
     *
     * @return DeliveryTime
     */
    public function getDeliveryTime() : DeliveryTime
    {
        return $this->deliveryTime;
    }
    /**
     * The container which has all delivery times associated with the package.
     *
     * @param DeliveryTime $deliveryTime
     *
     * @return self
     */
    public function setDeliveryTime(DeliveryTime $deliveryTime) : self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;
        return $this;
    }
    /**
     * milestones
     *
     * @return list<Milestones>
     */
    public function getMilestones() : array
    {
        return $this->milestones;
    }
    /**
     * milestones
     *
     * @param list<Milestones> $milestones
     *
     * @return self
     */
    public function setMilestones(array $milestones) : self
    {
        $this->initialized['milestones'] = true;
        $this->milestones = $milestones;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageAddress>
     */
    public function getPackageAddress() : array
    {
        return $this->packageAddress;
    }
    /**
     * 
     *
     * @param list<PackageAddress> $packageAddress
     *
     * @return self
     */
    public function setPackageAddress(array $packageAddress) : self
    {
        $this->initialized['packageAddress'] = true;
        $this->packageAddress = $packageAddress;
        return $this;
    }
    /**
     * The total number of packages in the shipment. Note that this number may be greater than the number of returned packages in the response. In such cases subsequent calls are needed to get additional packages.
     *
     * @return int
     */
    public function getPackageCount() : int
    {
        return $this->packageCount;
    }
    /**
     * The total number of packages in the shipment. Note that this number may be greater than the number of returned packages in the response. In such cases subsequent calls are needed to get additional packages.
     *
     * @param int $packageCount
     *
     * @return self
     */
    public function setPackageCount(int $packageCount) : self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentInformation>
     */
    public function getPaymentInformation() : array
    {
        return $this->paymentInformation;
    }
    /**
     * 
     *
     * @param list<PaymentInformation> $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(array $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReferenceNumber>
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<ReferenceNumber> $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * The container which has the package service information.
     *
     * @return Service
     */
    public function getService() : Service
    {
        return $this->service;
    }
    /**
     * The container which has the package service information.
     *
     * @param Service $service
     *
     * @return self
     */
    public function setService(Service $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * 
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
     * The activity status description. Note: this field will be translated based on the locale provided in the request.
     *
     * @return string
     */
    public function getStatusDescription() : string
    {
        return $this->statusDescription;
    }
    /**
     * The activity status description. Note: this field will be translated based on the locale provided in the request.
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
     * Contains values which signify that certain data should be suppressed or hidden. Valid values: Tracking activity details should be hidden. Note: this is mainly intended for use by UPS.com applications.
     *
     * @return list<string>
     */
    public function getSuppressionIndicators() : array
    {
        return $this->suppressionIndicators;
    }
    /**
     * Contains values which signify that certain data should be suppressed or hidden. Valid values: Tracking activity details should be hidden. Note: this is mainly intended for use by UPS.com applications.
     *
     * @param list<string> $suppressionIndicators
     *
     * @return self
     */
    public function setSuppressionIndicators(array $suppressionIndicators) : self
    {
        $this->initialized['suppressionIndicators'] = true;
        $this->suppressionIndicators = $suppressionIndicators;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * 
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
     * The weight container for the package.
     *
     * @return Weight|null
     */
    public function getWeight() : ?Weight
    {
        return $this->weight;
    }
    /**
     * The weight container for the package.
     *
     * @param Weight|null $weight
     *
     * @return self
     */
    public function setWeight(?Weight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}