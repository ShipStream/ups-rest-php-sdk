<?php

namespace ShipStream\Ups\Api\Model;

class RateResponseRatedShipment extends \ArrayObject
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
     * Disclaimer is used to provide more information to the shipper regarding the processed shipment. It is used to notify the shipper about possible taxes and duties that might have been added or might apply to the shipment. Refer to the Appendix for various disclaimers. This field may be returned only if TaxInformationIndicator is present in the request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RatedShipmentDisclaimer>
     */
    protected $disclaimer;
    /**
     * Service Container.
     *
     * @var RatedShipmentService
     */
    protected $service;
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    - 3 and 4 do not apply
    
    *
    * @var string
    */
    protected $rateChart;
    /**
     * Rated Shipment Alert container. There can be zero to many RatedShipmentAlert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RatedShipmentRatedShipmentAlert>
     */
    protected $ratedShipmentAlert;
    /**
     * Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment Billable Weight02 = Package Billable Weight
     *
     * @var string
     */
    protected $billableWeightCalculationMethod;
    /**
     * Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment level02 = Package level
     *
     * @var string
     */
    protected $ratingMethod;
    /**
     * Billing Weight Container.
     *
     * @var RatedShipmentBillingWeight
     */
    protected $billingWeight;
    /**
     * Transportation Charges Container.
     *
     * @var RatedShipmentTransportationCharges
     */
    protected $transportationCharges;
    /**
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @var RatedShipmentBaseServiceCharge
     */
    protected $baseServiceCharge;
    /**
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'. These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RatedShipmentItemizedCharges>
     */
    protected $itemizedCharges;
    /**
     * FRSShipmentData container.  Only returned when the FRSShipmentIIndicator is used. UPS Ground Freight Pricing Only.
     *
     * @var RatedShipmentFRSShipmentData
     */
    protected $fRSShipmentData;
    /**
     * Service Options Charges Container.
     *
     * @var RatedShipmentServiceOptionsCharges
     */
    protected $serviceOptionsCharges;
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RatedShipmentTaxCharges>
     */
    protected $taxCharges;
    /**
     * Total Charges Container.
     *
     * @var RatedShipmentTotalCharges
     */
    protected $totalCharges;
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @var RatedShipmentTotalChargesWithTaxes
     */
    protected $totalChargesWithTaxes;
    /**
     * Negotiated Rate Charges Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @var RatedShipmentNegotiatedRateCharges
     */
    protected $negotiatedRateCharges;
    /**
     * Rated Package Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<RatedShipmentRatedPackage>
     */
    protected $ratedPackage;
    /**
     * Container for returned Time in Transit information.  Will only be returned if request option was either "ratetimeintransit" or "shoptimeintransit" and DeliveryTimeInformation container was present in request.
     *
     * @var RatedShipmentTimeInTransit
     */
    protected $timeInTransit;
    /**
     * The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract.
     *
     * @var string
     */
    protected $scheduledDeliveryDate;
    /**
     * Informational only
     *
     * @var string
     */
    protected $roarRatedIndicator;
    /**
     * Disclaimer is used to provide more information to the shipper regarding the processed shipment. It is used to notify the shipper about possible taxes and duties that might have been added or might apply to the shipment. Refer to the Appendix for various disclaimers. This field may be returned only if TaxInformationIndicator is present in the request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RatedShipmentDisclaimer>
     */
    public function getDisclaimer() : array
    {
        return $this->disclaimer;
    }
    /**
     * Disclaimer is used to provide more information to the shipper regarding the processed shipment. It is used to notify the shipper about possible taxes and duties that might have been added or might apply to the shipment. Refer to the Appendix for various disclaimers. This field may be returned only if TaxInformationIndicator is present in the request.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RatedShipmentDisclaimer> $disclaimer
     *
     * @return self
     */
    public function setDisclaimer(array $disclaimer) : self
    {
        $this->initialized['disclaimer'] = true;
        $this->disclaimer = $disclaimer;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return RatedShipmentService
     */
    public function getService() : RatedShipmentService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param RatedShipmentService $service
     *
     * @return self
     */
    public function setService(RatedShipmentService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    - 3 and 4 do not apply
    
    *
    * @return string
    */
    public function getRateChart() : string
    {
        return $this->rateChart;
    }
    /**
    * Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    Alaska/Hawaii origin:
    - 1 – Daily Rates
    - 3 – Standard List Rates
    - 4 – Retail Rates.
    
    All Other origins:
    - 1 – Rates
    - 5 - Regional Rates
    - 6 - General List Rates.
    - 3 and 4 do not apply
    
    *
    * @param string $rateChart
    *
    * @return self
    */
    public function setRateChart(string $rateChart) : self
    {
        $this->initialized['rateChart'] = true;
        $this->rateChart = $rateChart;
        return $this;
    }
    /**
     * Rated Shipment Alert container. There can be zero to many RatedShipmentAlert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RatedShipmentRatedShipmentAlert>
     */
    public function getRatedShipmentAlert() : array
    {
        return $this->ratedShipmentAlert;
    }
    /**
     * Rated Shipment Alert container. There can be zero to many RatedShipmentAlert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RatedShipmentRatedShipmentAlert> $ratedShipmentAlert
     *
     * @return self
     */
    public function setRatedShipmentAlert(array $ratedShipmentAlert) : self
    {
        $this->initialized['ratedShipmentAlert'] = true;
        $this->ratedShipmentAlert = $ratedShipmentAlert;
        return $this;
    }
    /**
     * Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment Billable Weight02 = Package Billable Weight
     *
     * @return string
     */
    public function getBillableWeightCalculationMethod() : string
    {
        return $this->billableWeightCalculationMethod;
    }
    /**
     * Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment Billable Weight02 = Package Billable Weight
     *
     * @param string $billableWeightCalculationMethod
     *
     * @return self
     */
    public function setBillableWeightCalculationMethod(string $billableWeightCalculationMethod) : self
    {
        $this->initialized['billableWeightCalculationMethod'] = true;
        $this->billableWeightCalculationMethod = $billableWeightCalculationMethod;
        return $this;
    }
    /**
     * Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment level02 = Package level
     *
     * @return string
     */
    public function getRatingMethod() : string
    {
        return $this->ratingMethod;
    }
    /**
     * Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 = Shipment level02 = Package level
     *
     * @param string $ratingMethod
     *
     * @return self
     */
    public function setRatingMethod(string $ratingMethod) : self
    {
        $this->initialized['ratingMethod'] = true;
        $this->ratingMethod = $ratingMethod;
        return $this;
    }
    /**
     * Billing Weight Container.
     *
     * @return RatedShipmentBillingWeight
     */
    public function getBillingWeight() : RatedShipmentBillingWeight
    {
        return $this->billingWeight;
    }
    /**
     * Billing Weight Container.
     *
     * @param RatedShipmentBillingWeight $billingWeight
     *
     * @return self
     */
    public function setBillingWeight(RatedShipmentBillingWeight $billingWeight) : self
    {
        $this->initialized['billingWeight'] = true;
        $this->billingWeight = $billingWeight;
        return $this;
    }
    /**
     * Transportation Charges Container.
     *
     * @return RatedShipmentTransportationCharges
     */
    public function getTransportationCharges() : RatedShipmentTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation Charges Container.
     *
     * @param RatedShipmentTransportationCharges $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(RatedShipmentTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @return RatedShipmentBaseServiceCharge
     */
    public function getBaseServiceCharge() : RatedShipmentBaseServiceCharge
    {
        return $this->baseServiceCharge;
    }
    /**
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @param RatedShipmentBaseServiceCharge $baseServiceCharge
     *
     * @return self
     */
    public function setBaseServiceCharge(RatedShipmentBaseServiceCharge $baseServiceCharge) : self
    {
        $this->initialized['baseServiceCharge'] = true;
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }
    /**
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'. These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RatedShipmentItemizedCharges>
     */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
     * Itemized Charges are returned only when the subversion element is present and greater than or equal to '1601'. These charges would be returned only when subversion is greater than or equal to 1601.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RatedShipmentItemizedCharges> $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
    /**
     * FRSShipmentData container.  Only returned when the FRSShipmentIIndicator is used. UPS Ground Freight Pricing Only.
     *
     * @return RatedShipmentFRSShipmentData
     */
    public function getFRSShipmentData() : RatedShipmentFRSShipmentData
    {
        return $this->fRSShipmentData;
    }
    /**
     * FRSShipmentData container.  Only returned when the FRSShipmentIIndicator is used. UPS Ground Freight Pricing Only.
     *
     * @param RatedShipmentFRSShipmentData $fRSShipmentData
     *
     * @return self
     */
    public function setFRSShipmentData(RatedShipmentFRSShipmentData $fRSShipmentData) : self
    {
        $this->initialized['fRSShipmentData'] = true;
        $this->fRSShipmentData = $fRSShipmentData;
        return $this;
    }
    /**
     * Service Options Charges Container.
     *
     * @return RatedShipmentServiceOptionsCharges
     */
    public function getServiceOptionsCharges() : RatedShipmentServiceOptionsCharges
    {
        return $this->serviceOptionsCharges;
    }
    /**
     * Service Options Charges Container.
     *
     * @param RatedShipmentServiceOptionsCharges $serviceOptionsCharges
     *
     * @return self
     */
    public function setServiceOptionsCharges(RatedShipmentServiceOptionsCharges $serviceOptionsCharges) : self
    {
        $this->initialized['serviceOptionsCharges'] = true;
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RatedShipmentTaxCharges>
     */
    public function getTaxCharges() : array
    {
        return $this->taxCharges;
    }
    /**
     * TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RatedShipmentTaxCharges> $taxCharges
     *
     * @return self
     */
    public function setTaxCharges(array $taxCharges) : self
    {
        $this->initialized['taxCharges'] = true;
        $this->taxCharges = $taxCharges;
        return $this;
    }
    /**
     * Total Charges Container.
     *
     * @return RatedShipmentTotalCharges
     */
    public function getTotalCharges() : RatedShipmentTotalCharges
    {
        return $this->totalCharges;
    }
    /**
     * Total Charges Container.
     *
     * @param RatedShipmentTotalCharges $totalCharges
     *
     * @return self
     */
    public function setTotalCharges(RatedShipmentTotalCharges $totalCharges) : self
    {
        $this->initialized['totalCharges'] = true;
        $this->totalCharges = $totalCharges;
        return $this;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @return RatedShipmentTotalChargesWithTaxes
     */
    public function getTotalChargesWithTaxes() : RatedShipmentTotalChargesWithTaxes
    {
        return $this->totalChargesWithTaxes;
    }
    /**
     * TotalChargesWithTaxes container would be returned only if TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TotalChargesWithTaxes contains total charges including total taxes applied to a shipment.
     *
     * @param RatedShipmentTotalChargesWithTaxes $totalChargesWithTaxes
     *
     * @return self
     */
    public function setTotalChargesWithTaxes(RatedShipmentTotalChargesWithTaxes $totalChargesWithTaxes) : self
    {
        $this->initialized['totalChargesWithTaxes'] = true;
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }
    /**
     * Negotiated Rate Charges Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @return RatedShipmentNegotiatedRateCharges
     */
    public function getNegotiatedRateCharges() : RatedShipmentNegotiatedRateCharges
    {
        return $this->negotiatedRateCharges;
    }
    /**
     * Negotiated Rate Charges Container.  For tiered rates and promotional discounts, if a particular shipment based on zone, origin, destination or even shipment size doesn't qualify for the existing discount then no negotiated rates container will be returned. Published rates will be the applicable rate.
     *
     * @param RatedShipmentNegotiatedRateCharges $negotiatedRateCharges
     *
     * @return self
     */
    public function setNegotiatedRateCharges(RatedShipmentNegotiatedRateCharges $negotiatedRateCharges) : self
    {
        $this->initialized['negotiatedRateCharges'] = true;
        $this->negotiatedRateCharges = $negotiatedRateCharges;
        return $this;
    }
    /**
     * Rated Package Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<RatedShipmentRatedPackage>
     */
    public function getRatedPackage() : array
    {
        return $this->ratedPackage;
    }
    /**
     * Rated Package Container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<RatedShipmentRatedPackage> $ratedPackage
     *
     * @return self
     */
    public function setRatedPackage(array $ratedPackage) : self
    {
        $this->initialized['ratedPackage'] = true;
        $this->ratedPackage = $ratedPackage;
        return $this;
    }
    /**
     * Container for returned Time in Transit information.  Will only be returned if request option was either "ratetimeintransit" or "shoptimeintransit" and DeliveryTimeInformation container was present in request.
     *
     * @return RatedShipmentTimeInTransit
     */
    public function getTimeInTransit() : RatedShipmentTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Container for returned Time in Transit information.  Will only be returned if request option was either "ratetimeintransit" or "shoptimeintransit" and DeliveryTimeInformation container was present in request.
     *
     * @param RatedShipmentTimeInTransit $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(RatedShipmentTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
    /**
     * The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract.
     *
     * @return string
     */
    public function getScheduledDeliveryDate() : string
    {
        return $this->scheduledDeliveryDate;
    }
    /**
     * The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract.
     *
     * @param string $scheduledDeliveryDate
     *
     * @return self
     */
    public function setScheduledDeliveryDate(string $scheduledDeliveryDate) : self
    {
        $this->initialized['scheduledDeliveryDate'] = true;
        $this->scheduledDeliveryDate = $scheduledDeliveryDate;
        return $this;
    }
    /**
     * Informational only
     *
     * @return string
     */
    public function getRoarRatedIndicator() : string
    {
        return $this->roarRatedIndicator;
    }
    /**
     * Informational only
     *
     * @param string $roarRatedIndicator
     *
     * @return self
     */
    public function setRoarRatedIndicator(string $roarRatedIndicator) : self
    {
        $this->initialized['roarRatedIndicator'] = true;
        $this->roarRatedIndicator = $roarRatedIndicator;
        return $this;
    }
}