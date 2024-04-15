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
     * 
     *
     * @var AccessPointInformation|null
     */
    protected $accessPointInformation;
    /**
     * 
     *
     * @var list<Activity>|null
     */
    protected $activity;
    /**
     * type
     *
     * @var list<string>|null
     */
    protected $additionalAttributes;
    /**
     * type
     *
     * @var list<string>|null
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var list<AlternateTrackingNumber>|null
     */
    protected $alternateTrackingNumber;
    /**
     * 
     *
     * @var Status|null
     */
    protected $currentStatus;
    /**
     * 
     *
     * @var list<DeliveryDate>|null
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var DeliveryInformation|null
     */
    protected $deliveryInformation;
    /**
     * 
     *
     * @var DeliveryTime|null
     */
    protected $deliveryTime;
    /**
     * milestones
     *
     * @var list<Milestones>|null
     */
    protected $milestones;
    /**
     * 
     *
     * @var list<PackageAddress>|null
     */
    protected $packageAddress;
    /**
     * packageCount
     *
     * @var int|null
     */
    protected $packageCount;
    /**
     * 
     *
     * @var list<PaymentInformation>|null
     */
    protected $paymentInformation;
    /**
     * 
     *
     * @var list<ReferenceNumber>|null
     */
    protected $referenceNumber;
    /**
     * 
     *
     * @var Service|null
     */
    protected $service;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusDescription;
    /**
     * suppressionIndicators
     *
     * @var list<string>|null
     */
    protected $suppressionIndicators;
    /**
     * 
     *
     * @var string|null
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
     * @return AccessPointInformation|null
     */
    public function getAccessPointInformation() : ?AccessPointInformation
    {
        return $this->accessPointInformation;
    }
    /**
     * 
     *
     * @param AccessPointInformation|null $accessPointInformation
     *
     * @return self
     */
    public function setAccessPointInformation(?AccessPointInformation $accessPointInformation) : self
    {
        $this->initialized['accessPointInformation'] = true;
        $this->accessPointInformation = $accessPointInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<Activity>|null
     */
    public function getActivity() : ?array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param list<Activity>|null $activity
     *
     * @return self
     */
    public function setActivity(?array $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * type
     *
     * @return list<string>|null
     */
    public function getAdditionalAttributes() : ?array
    {
        return $this->additionalAttributes;
    }
    /**
     * type
     *
     * @param list<string>|null $additionalAttributes
     *
     * @return self
     */
    public function setAdditionalAttributes(?array $additionalAttributes) : self
    {
        $this->initialized['additionalAttributes'] = true;
        $this->additionalAttributes = $additionalAttributes;
        return $this;
    }
    /**
     * type
     *
     * @return list<string>|null
     */
    public function getAdditionalServices() : ?array
    {
        return $this->additionalServices;
    }
    /**
     * type
     *
     * @param list<string>|null $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(?array $additionalServices) : self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<AlternateTrackingNumber>|null
     */
    public function getAlternateTrackingNumber() : ?array
    {
        return $this->alternateTrackingNumber;
    }
    /**
     * 
     *
     * @param list<AlternateTrackingNumber>|null $alternateTrackingNumber
     *
     * @return self
     */
    public function setAlternateTrackingNumber(?array $alternateTrackingNumber) : self
    {
        $this->initialized['alternateTrackingNumber'] = true;
        $this->alternateTrackingNumber = $alternateTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return Status|null
     */
    public function getCurrentStatus() : ?Status
    {
        return $this->currentStatus;
    }
    /**
     * 
     *
     * @param Status|null $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(?Status $currentStatus) : self
    {
        $this->initialized['currentStatus'] = true;
        $this->currentStatus = $currentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return list<DeliveryDate>|null
     */
    public function getDeliveryDate() : ?array
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param list<DeliveryDate>|null $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(?array $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return DeliveryInformation|null
     */
    public function getDeliveryInformation() : ?DeliveryInformation
    {
        return $this->deliveryInformation;
    }
    /**
     * 
     *
     * @param DeliveryInformation|null $deliveryInformation
     *
     * @return self
     */
    public function setDeliveryInformation(?DeliveryInformation $deliveryInformation) : self
    {
        $this->initialized['deliveryInformation'] = true;
        $this->deliveryInformation = $deliveryInformation;
        return $this;
    }
    /**
     * 
     *
     * @return DeliveryTime|null
     */
    public function getDeliveryTime() : ?DeliveryTime
    {
        return $this->deliveryTime;
    }
    /**
     * 
     *
     * @param DeliveryTime|null $deliveryTime
     *
     * @return self
     */
    public function setDeliveryTime(?DeliveryTime $deliveryTime) : self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;
        return $this;
    }
    /**
     * milestones
     *
     * @return list<Milestones>|null
     */
    public function getMilestones() : ?array
    {
        return $this->milestones;
    }
    /**
     * milestones
     *
     * @param list<Milestones>|null $milestones
     *
     * @return self
     */
    public function setMilestones(?array $milestones) : self
    {
        $this->initialized['milestones'] = true;
        $this->milestones = $milestones;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageAddress>|null
     */
    public function getPackageAddress() : ?array
    {
        return $this->packageAddress;
    }
    /**
     * 
     *
     * @param list<PackageAddress>|null $packageAddress
     *
     * @return self
     */
    public function setPackageAddress(?array $packageAddress) : self
    {
        $this->initialized['packageAddress'] = true;
        $this->packageAddress = $packageAddress;
        return $this;
    }
    /**
     * packageCount
     *
     * @return int|null
     */
    public function getPackageCount() : ?int
    {
        return $this->packageCount;
    }
    /**
     * packageCount
     *
     * @param int|null $packageCount
     *
     * @return self
     */
    public function setPackageCount(?int $packageCount) : self
    {
        $this->initialized['packageCount'] = true;
        $this->packageCount = $packageCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentInformation>|null
     */
    public function getPaymentInformation() : ?array
    {
        return $this->paymentInformation;
    }
    /**
     * 
     *
     * @param list<PaymentInformation>|null $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(?array $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReferenceNumber>|null
     */
    public function getReferenceNumber() : ?array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<ReferenceNumber>|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return Service|null
     */
    public function getService() : ?Service
    {
        return $this->service;
    }
    /**
     * 
     *
     * @param Service|null $service
     *
     * @return self
     */
    public function setService(?Service $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusCode() : ?string
    {
        return $this->statusCode;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getStatusDescription() : ?string
    {
        return $this->statusDescription;
    }
    /**
     * 
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
     * suppressionIndicators
     *
     * @return list<string>|null
     */
    public function getSuppressionIndicators() : ?array
    {
        return $this->suppressionIndicators;
    }
    /**
     * suppressionIndicators
     *
     * @param list<string>|null $suppressionIndicators
     *
     * @return self
     */
    public function setSuppressionIndicators(?array $suppressionIndicators) : self
    {
        $this->initialized['suppressionIndicators'] = true;
        $this->suppressionIndicators = $suppressionIndicators;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * 
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