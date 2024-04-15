<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequest extends \ArrayObject
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
     * Common element for all services
     *
     * @var PickupCreationRequestRequest|null
     */
    protected $request;
    /**
    * Indicates whether to rate the on-callpickup or not. 
    Valid values:
    Y = Rate this pickup
    N = Do not rate this pickup (default)
    *
    * @var string|null
    */
    protected $ratePickupIndicator;
    /**
    * Indicates whether to return detailed taxes for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with taxes
    N = Do not rate this pickup with taxes (default)
    *
    * @var string|null
    */
    protected $taxInformationIndicator;
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @var string|null
    */
    protected $userLevelDiscountIndicator;
    /**
    * On-call pickup shipper or requestor information.   Must provide when choose to pay the pickup by shipper account number, BillThirdParty account number, or BillReceiver account number. 
    It is optional if the shipper chooses any other payment method. However, it is highly recommended to provide if available.
    *
    * @var PickupCreationRequestShipper|null
    */
    protected $shipper;
    /**
     * The container of desired pickup date
     *
     * @var PickupCreationRequestPickupDateInfo|null
     */
    protected $pickupDateInfo;
    /**
     * The container of pickup address.
     *
     * @var PickupCreationRequestPickupAddress|null
     */
    protected $pickupAddress;
    /**
    * Indicates if pickup address is a different address than that specified in a customer's profile. 
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @var string|null
    */
    protected $alternateAddressIndicator;
    /**
     * 
     *
     * @var list<PickupCreationRequestPickupPiece>|null
     */
    protected $pickupPiece;
    /**
     * Container for the total weight of all the items.
     *
     * @var PickupCreationRequestTotalWeight|null
     */
    protected $totalWeight;
    /**
    * Indicates if at least any package is over 70 lbs or 32 kgs. 
    Valid values: 
    Y = Over weight 
    N = Not over weight (default)  Not required for WWEF service.
    *
    * @var string|null
    */
    protected $overweightIndicator;
    /**
     * 
     *
     * @var list<PickupCreationRequestTrackingData>|null
     */
    protected $trackingData;
    /**
     * Container for Tracking Number with its associated reference numbers.  This container should be populated to provide visibility into shipment tied to pickup being scheduled.  TrackingDataWithReferenceNumber and TrackingData container cannot be present at the same time.
     *
     * @var PickupCreationRequestTrackingDataWithReferenceNumber|null
     */
    protected $trackingDataWithReferenceNumber;
    /**
    * The payment method to pay for this on call pickup.
    00 = No payment needed
    01 = Pay by shipper account
    03 = Pay by charge card
    04 = Pay by 1Z tracking number
    05 = Pay by check or money order
    06 = Cash(applicable only for these countries - BE,FR,DE,IT,MX,NL,PL,ES,GB,CZ,HU,FI,NO)
    07=Pay by PayPal
    Refer to Appendix # for valid payment methods for CZ, HU, FI and NO
     For countries and (or) zip codes where pickup is free of charge, please submit 00, means no payment needed as payment method. 
    - If 01 is the payment method, then ShipperAccountNumber and ShipperAccount CountryCode must be provided.
    - If 03 is selected, then CreditCard information should be provided.
    - If 04 is selected, then the shipper agreed to pay for the pickup packages.
    - If 05 is selected, then the shipper will pay for the pickup packages with a check or money order.
    *
    * @var string|null
    */
    protected $paymentMethod;
    /**
     * Special handling instruction from the customer
     *
     * @var string|null
     */
    protected $specialInstruction;
    /**
     * Information entered by a customer for Privileged reference
     *
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * Container will be used to indicate Service options, add optional Original service center, destination address and shipment details related to the UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday.
     *
     * @var PickupCreationRequestFreightOptions|null
     */
    protected $freightOptions;
    /**
    * Service Category.
    Applicable to the following countries:
    BE, FR, DE, IT, MX, NL, PL, ES, GB 
    Valid values: 
    01 - domestic (default)
    02 - international
    03 - transborder
    *
    * @var string|null
    */
    protected $serviceCategory;
    /**
    * Describes the type of cash funds that the driver will collect.
    Applicable to the following countries:
    BE,FR,DE,IT,MX,NL,PL,ES,GB
    Valid values: 
    01 - Pickup only (default)
    02 - Transportation only
    03 - Pickup and Transportation
    *
    * @var string|null
    */
    protected $cashType;
    /**
     * This element should be set to �Y� in the request to indicate that user has pre-printed shipping labels for all the packages, otherwise this will be treated as false.
     *
     * @var string|null
     */
    protected $shippingLabelsAvailable;
    /**
     * Common element for all services
     *
     * @return PickupCreationRequestRequest|null
     */
    public function getRequest() : ?PickupCreationRequestRequest
    {
        return $this->request;
    }
    /**
     * Common element for all services
     *
     * @param PickupCreationRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?PickupCreationRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
    * Indicates whether to rate the on-callpickup or not. 
    Valid values:
    Y = Rate this pickup
    N = Do not rate this pickup (default)
    *
    * @return string|null
    */
    public function getRatePickupIndicator() : ?string
    {
        return $this->ratePickupIndicator;
    }
    /**
    * Indicates whether to rate the on-callpickup or not. 
    Valid values:
    Y = Rate this pickup
    N = Do not rate this pickup (default)
    *
    * @param string|null $ratePickupIndicator
    *
    * @return self
    */
    public function setRatePickupIndicator(?string $ratePickupIndicator) : self
    {
        $this->initialized['ratePickupIndicator'] = true;
        $this->ratePickupIndicator = $ratePickupIndicator;
        return $this;
    }
    /**
    * Indicates whether to return detailed taxes for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with taxes
    N = Do not rate this pickup with taxes (default)
    *
    * @return string|null
    */
    public function getTaxInformationIndicator() : ?string
    {
        return $this->taxInformationIndicator;
    }
    /**
    * Indicates whether to return detailed taxes for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with taxes
    N = Do not rate this pickup with taxes (default)
    *
    * @param string|null $taxInformationIndicator
    *
    * @return self
    */
    public function setTaxInformationIndicator(?string $taxInformationIndicator) : self
    {
        $this->initialized['taxInformationIndicator'] = true;
        $this->taxInformationIndicator = $taxInformationIndicator;
        return $this;
    }
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @return string|null
    */
    public function getUserLevelDiscountIndicator() : ?string
    {
        return $this->userLevelDiscountIndicator;
    }
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @param string|null $userLevelDiscountIndicator
    *
    * @return self
    */
    public function setUserLevelDiscountIndicator(?string $userLevelDiscountIndicator) : self
    {
        $this->initialized['userLevelDiscountIndicator'] = true;
        $this->userLevelDiscountIndicator = $userLevelDiscountIndicator;
        return $this;
    }
    /**
    * On-call pickup shipper or requestor information.   Must provide when choose to pay the pickup by shipper account number, BillThirdParty account number, or BillReceiver account number. 
    It is optional if the shipper chooses any other payment method. However, it is highly recommended to provide if available.
    *
    * @return PickupCreationRequestShipper|null
    */
    public function getShipper() : ?PickupCreationRequestShipper
    {
        return $this->shipper;
    }
    /**
    * On-call pickup shipper or requestor information.   Must provide when choose to pay the pickup by shipper account number, BillThirdParty account number, or BillReceiver account number. 
    It is optional if the shipper chooses any other payment method. However, it is highly recommended to provide if available.
    *
    * @param PickupCreationRequestShipper|null $shipper
    *
    * @return self
    */
    public function setShipper(?PickupCreationRequestShipper $shipper) : self
    {
        $this->initialized['shipper'] = true;
        $this->shipper = $shipper;
        return $this;
    }
    /**
     * The container of desired pickup date
     *
     * @return PickupCreationRequestPickupDateInfo|null
     */
    public function getPickupDateInfo() : ?PickupCreationRequestPickupDateInfo
    {
        return $this->pickupDateInfo;
    }
    /**
     * The container of desired pickup date
     *
     * @param PickupCreationRequestPickupDateInfo|null $pickupDateInfo
     *
     * @return self
     */
    public function setPickupDateInfo(?PickupCreationRequestPickupDateInfo $pickupDateInfo) : self
    {
        $this->initialized['pickupDateInfo'] = true;
        $this->pickupDateInfo = $pickupDateInfo;
        return $this;
    }
    /**
     * The container of pickup address.
     *
     * @return PickupCreationRequestPickupAddress|null
     */
    public function getPickupAddress() : ?PickupCreationRequestPickupAddress
    {
        return $this->pickupAddress;
    }
    /**
     * The container of pickup address.
     *
     * @param PickupCreationRequestPickupAddress|null $pickupAddress
     *
     * @return self
     */
    public function setPickupAddress(?PickupCreationRequestPickupAddress $pickupAddress) : self
    {
        $this->initialized['pickupAddress'] = true;
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
    * Indicates if pickup address is a different address than that specified in a customer's profile. 
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @return string|null
    */
    public function getAlternateAddressIndicator() : ?string
    {
        return $this->alternateAddressIndicator;
    }
    /**
    * Indicates if pickup address is a different address than that specified in a customer's profile. 
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @param string|null $alternateAddressIndicator
    *
    * @return self
    */
    public function setAlternateAddressIndicator(?string $alternateAddressIndicator) : self
    {
        $this->initialized['alternateAddressIndicator'] = true;
        $this->alternateAddressIndicator = $alternateAddressIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupCreationRequestPickupPiece>|null
     */
    public function getPickupPiece() : ?array
    {
        return $this->pickupPiece;
    }
    /**
     * 
     *
     * @param list<PickupCreationRequestPickupPiece>|null $pickupPiece
     *
     * @return self
     */
    public function setPickupPiece(?array $pickupPiece) : self
    {
        $this->initialized['pickupPiece'] = true;
        $this->pickupPiece = $pickupPiece;
        return $this;
    }
    /**
     * Container for the total weight of all the items.
     *
     * @return PickupCreationRequestTotalWeight|null
     */
    public function getTotalWeight() : ?PickupCreationRequestTotalWeight
    {
        return $this->totalWeight;
    }
    /**
     * Container for the total weight of all the items.
     *
     * @param PickupCreationRequestTotalWeight|null $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(?PickupCreationRequestTotalWeight $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
    * Indicates if at least any package is over 70 lbs or 32 kgs. 
    Valid values: 
    Y = Over weight 
    N = Not over weight (default)  Not required for WWEF service.
    *
    * @return string|null
    */
    public function getOverweightIndicator() : ?string
    {
        return $this->overweightIndicator;
    }
    /**
    * Indicates if at least any package is over 70 lbs or 32 kgs. 
    Valid values: 
    Y = Over weight 
    N = Not over weight (default)  Not required for WWEF service.
    *
    * @param string|null $overweightIndicator
    *
    * @return self
    */
    public function setOverweightIndicator(?string $overweightIndicator) : self
    {
        $this->initialized['overweightIndicator'] = true;
        $this->overweightIndicator = $overweightIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupCreationRequestTrackingData>|null
     */
    public function getTrackingData() : ?array
    {
        return $this->trackingData;
    }
    /**
     * 
     *
     * @param list<PickupCreationRequestTrackingData>|null $trackingData
     *
     * @return self
     */
    public function setTrackingData(?array $trackingData) : self
    {
        $this->initialized['trackingData'] = true;
        $this->trackingData = $trackingData;
        return $this;
    }
    /**
     * Container for Tracking Number with its associated reference numbers.  This container should be populated to provide visibility into shipment tied to pickup being scheduled.  TrackingDataWithReferenceNumber and TrackingData container cannot be present at the same time.
     *
     * @return PickupCreationRequestTrackingDataWithReferenceNumber|null
     */
    public function getTrackingDataWithReferenceNumber() : ?PickupCreationRequestTrackingDataWithReferenceNumber
    {
        return $this->trackingDataWithReferenceNumber;
    }
    /**
     * Container for Tracking Number with its associated reference numbers.  This container should be populated to provide visibility into shipment tied to pickup being scheduled.  TrackingDataWithReferenceNumber and TrackingData container cannot be present at the same time.
     *
     * @param PickupCreationRequestTrackingDataWithReferenceNumber|null $trackingDataWithReferenceNumber
     *
     * @return self
     */
    public function setTrackingDataWithReferenceNumber(?PickupCreationRequestTrackingDataWithReferenceNumber $trackingDataWithReferenceNumber) : self
    {
        $this->initialized['trackingDataWithReferenceNumber'] = true;
        $this->trackingDataWithReferenceNumber = $trackingDataWithReferenceNumber;
        return $this;
    }
    /**
    * The payment method to pay for this on call pickup.
    00 = No payment needed
    01 = Pay by shipper account
    03 = Pay by charge card
    04 = Pay by 1Z tracking number
    05 = Pay by check or money order
    06 = Cash(applicable only for these countries - BE,FR,DE,IT,MX,NL,PL,ES,GB,CZ,HU,FI,NO)
    07=Pay by PayPal
    Refer to Appendix # for valid payment methods for CZ, HU, FI and NO
     For countries and (or) zip codes where pickup is free of charge, please submit 00, means no payment needed as payment method. 
    - If 01 is the payment method, then ShipperAccountNumber and ShipperAccount CountryCode must be provided.
    - If 03 is selected, then CreditCard information should be provided.
    - If 04 is selected, then the shipper agreed to pay for the pickup packages.
    - If 05 is selected, then the shipper will pay for the pickup packages with a check or money order.
    *
    * @return string|null
    */
    public function getPaymentMethod() : ?string
    {
        return $this->paymentMethod;
    }
    /**
    * The payment method to pay for this on call pickup.
    00 = No payment needed
    01 = Pay by shipper account
    03 = Pay by charge card
    04 = Pay by 1Z tracking number
    05 = Pay by check or money order
    06 = Cash(applicable only for these countries - BE,FR,DE,IT,MX,NL,PL,ES,GB,CZ,HU,FI,NO)
    07=Pay by PayPal
    Refer to Appendix # for valid payment methods for CZ, HU, FI and NO
     For countries and (or) zip codes where pickup is free of charge, please submit 00, means no payment needed as payment method. 
    - If 01 is the payment method, then ShipperAccountNumber and ShipperAccount CountryCode must be provided.
    - If 03 is selected, then CreditCard information should be provided.
    - If 04 is selected, then the shipper agreed to pay for the pickup packages.
    - If 05 is selected, then the shipper will pay for the pickup packages with a check or money order.
    *
    * @param string|null $paymentMethod
    *
    * @return self
    */
    public function setPaymentMethod(?string $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Special handling instruction from the customer
     *
     * @return string|null
     */
    public function getSpecialInstruction() : ?string
    {
        return $this->specialInstruction;
    }
    /**
     * Special handling instruction from the customer
     *
     * @param string|null $specialInstruction
     *
     * @return self
     */
    public function setSpecialInstruction(?string $specialInstruction) : self
    {
        $this->initialized['specialInstruction'] = true;
        $this->specialInstruction = $specialInstruction;
        return $this;
    }
    /**
     * Information entered by a customer for Privileged reference
     *
     * @return string|null
     */
    public function getReferenceNumber() : ?string
    {
        return $this->referenceNumber;
    }
    /**
     * Information entered by a customer for Privileged reference
     *
     * @param string|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?string $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Container will be used to indicate Service options, add optional Original service center, destination address and shipment details related to the UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday.
     *
     * @return PickupCreationRequestFreightOptions|null
     */
    public function getFreightOptions() : ?PickupCreationRequestFreightOptions
    {
        return $this->freightOptions;
    }
    /**
     * Container will be used to indicate Service options, add optional Original service center, destination address and shipment details related to the UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday.
     *
     * @param PickupCreationRequestFreightOptions|null $freightOptions
     *
     * @return self
     */
    public function setFreightOptions(?PickupCreationRequestFreightOptions $freightOptions) : self
    {
        $this->initialized['freightOptions'] = true;
        $this->freightOptions = $freightOptions;
        return $this;
    }
    /**
    * Service Category.
    Applicable to the following countries:
    BE, FR, DE, IT, MX, NL, PL, ES, GB 
    Valid values: 
    01 - domestic (default)
    02 - international
    03 - transborder
    *
    * @return string|null
    */
    public function getServiceCategory() : ?string
    {
        return $this->serviceCategory;
    }
    /**
    * Service Category.
    Applicable to the following countries:
    BE, FR, DE, IT, MX, NL, PL, ES, GB 
    Valid values: 
    01 - domestic (default)
    02 - international
    03 - transborder
    *
    * @param string|null $serviceCategory
    *
    * @return self
    */
    public function setServiceCategory(?string $serviceCategory) : self
    {
        $this->initialized['serviceCategory'] = true;
        $this->serviceCategory = $serviceCategory;
        return $this;
    }
    /**
    * Describes the type of cash funds that the driver will collect.
    Applicable to the following countries:
    BE,FR,DE,IT,MX,NL,PL,ES,GB
    Valid values: 
    01 - Pickup only (default)
    02 - Transportation only
    03 - Pickup and Transportation
    *
    * @return string|null
    */
    public function getCashType() : ?string
    {
        return $this->cashType;
    }
    /**
    * Describes the type of cash funds that the driver will collect.
    Applicable to the following countries:
    BE,FR,DE,IT,MX,NL,PL,ES,GB
    Valid values: 
    01 - Pickup only (default)
    02 - Transportation only
    03 - Pickup and Transportation
    *
    * @param string|null $cashType
    *
    * @return self
    */
    public function setCashType(?string $cashType) : self
    {
        $this->initialized['cashType'] = true;
        $this->cashType = $cashType;
        return $this;
    }
    /**
     * This element should be set to �Y� in the request to indicate that user has pre-printed shipping labels for all the packages, otherwise this will be treated as false.
     *
     * @return string|null
     */
    public function getShippingLabelsAvailable() : ?string
    {
        return $this->shippingLabelsAvailable;
    }
    /**
     * This element should be set to �Y� in the request to indicate that user has pre-printed shipping labels for all the packages, otherwise this will be treated as false.
     *
     * @param string|null $shippingLabelsAvailable
     *
     * @return self
     */
    public function setShippingLabelsAvailable(?string $shippingLabelsAvailable) : self
    {
        $this->initialized['shippingLabelsAvailable'] = true;
        $this->shippingLabelsAvailable = $shippingLabelsAvailable;
        return $this;
    }
}