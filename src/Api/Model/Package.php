<?php

namespace ShipStream\Ups\Api\Model;

class Package extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var AccessPointInformation
     */
    protected $accessPointInformation;
    /**
     * 
     *
     * @var Activity[]
     */
    protected $activity;
    /**
     * type
     *
     * @var string[]
     */
    protected $additionalAttributes;
    /**
     * type
     *
     * @var string[]
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var AlternateTrackingNumber[]
     */
    protected $alternateTrackingNumber;
    /**
     * 
     *
     * @var Status
     */
    protected $currentStatus;
    /**
     * 
     *
     * @var DeliveryDate[]
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var DeliveryInformation
     */
    protected $deliveryInformation;
    /**
     * 
     *
     * @var DeliveryTime
     */
    protected $deliveryTime;
    /**
     * milestones
     *
     * @var Milestones[]
     */
    protected $milestones;
    /**
     * 
     *
     * @var PackageAddress[]
     */
    protected $packageAddress;
    /**
     * packageCount
     *
     * @var int
     */
    protected $packageCount;
    /**
     * 
     *
     * @var PaymentInformation[]
     */
    protected $paymentInformation;
    /**
     * 
     *
     * @var ReferenceNumber[]
     */
    protected $referenceNumber;
    /**
     * 
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
     * 
     *
     * @var string
     */
    protected $statusDescription;
    /**
     * suppressionIndicators
     *
     * @var string[]
     */
    protected $suppressionIndicators;
    /**
     * 
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * 
     *
     * @var Weight|null
     */
    protected $weight;
    /**
     * 
     *
     * @return AccessPointInformation
     */
    public function getAccessPointInformation() : AccessPointInformation
    {
        return $this->accessPointInformation;
    }
    /**
     * 
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
     * @return Activity[]
     */
    public function getActivity() : array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param Activity[] $activity
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
     * type
     *
     * @return string[]
     */
    public function getAdditionalAttributes() : array
    {
        return $this->additionalAttributes;
    }
    /**
     * type
     *
     * @param string[] $additionalAttributes
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
     * type
     *
     * @return string[]
     */
    public function getAdditionalServices() : array
    {
        return $this->additionalServices;
    }
    /**
     * type
     *
     * @param string[] $additionalServices
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
     * @return AlternateTrackingNumber[]
     */
    public function getAlternateTrackingNumber() : array
    {
        return $this->alternateTrackingNumber;
    }
    /**
     * 
     *
     * @param AlternateTrackingNumber[] $alternateTrackingNumber
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
     * 
     *
     * @return Status
     */
    public function getCurrentStatus() : Status
    {
        return $this->currentStatus;
    }
    /**
     * 
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
     * @return DeliveryDate[]
     */
    public function getDeliveryDate() : array
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param DeliveryDate[] $deliveryDate
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
     * 
     *
     * @return DeliveryInformation
     */
    public function getDeliveryInformation() : DeliveryInformation
    {
        return $this->deliveryInformation;
    }
    /**
     * 
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
     * 
     *
     * @return DeliveryTime
     */
    public function getDeliveryTime() : DeliveryTime
    {
        return $this->deliveryTime;
    }
    /**
     * 
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
     * @return Milestones[]
     */
    public function getMilestones() : array
    {
        return $this->milestones;
    }
    /**
     * milestones
     *
     * @param Milestones[] $milestones
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
     * @return PackageAddress[]
     */
    public function getPackageAddress() : array
    {
        return $this->packageAddress;
    }
    /**
     * 
     *
     * @param PackageAddress[] $packageAddress
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
     * packageCount
     *
     * @return int
     */
    public function getPackageCount() : int
    {
        return $this->packageCount;
    }
    /**
     * packageCount
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
     * @return PaymentInformation[]
     */
    public function getPaymentInformation() : array
    {
        return $this->paymentInformation;
    }
    /**
     * 
     *
     * @param PaymentInformation[] $paymentInformation
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
     * @return ReferenceNumber[]
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param ReferenceNumber[] $referenceNumber
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
     * 
     *
     * @return Service
     */
    public function getService() : Service
    {
        return $this->service;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getStatusDescription() : string
    {
        return $this->statusDescription;
    }
    /**
     * 
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
     * suppressionIndicators
     *
     * @return string[]
     */
    public function getSuppressionIndicators() : array
    {
        return $this->suppressionIndicators;
    }
    /**
     * suppressionIndicators
     *
     * @param string[] $suppressionIndicators
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
     * 
     *
     * @return Weight|null
     */
    public function getWeight() : ?Weight
    {
        return $this->weight;
    }
    /**
     * 
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