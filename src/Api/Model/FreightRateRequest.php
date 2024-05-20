<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequest extends \ArrayObject
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
     * Request Container.
     *
     * @var FreightRateRequestRequest
     */
    protected $request;
    /**
     * ShipFrom Container.
     *
     * @var FreightRateRequestShipFrom
     */
    protected $shipFrom;
    /**
     * ShipTo Container.
     *
     * @var FreightRateRequestShipTo
     */
    protected $shipTo;
    /**
     * Payment Information Container.
     *
     * @var FreightRateRequestPaymentInformation
     */
    protected $paymentInformation;
    /**
     * Service Container.
     *
     * @var FreightRateRequestService
     */
    protected $service;
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @var FreightRateRequestHandlingUnitOne
    */
    protected $handlingUnitOne;
    /**
     * HandlingUnit Container.
     *
     * @var FreightRateRequestHandlingUnitTwo
     */
    protected $handlingUnitTwo;
    /**
     * 
     *
     * @var list<FreightRateRequestCommodity>
     */
    protected $commodity;
    /**
     * ShipmentServiceOptions Container.
     *
     * @var FreightRateRequestShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
     * Container for PickupRequest
     *
     * @var FreightRateRequestPickupRequest
     */
    protected $pickupRequest;
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @var FreightRateRequestAlternateRateOptions
     */
    protected $alternateRateOptions;
    /**
     * GFP Options container.
     *
     * @var FreightRateRequestGFPOptions
     */
    protected $gFPOptions;
    /**
     * Handling unit weight container.
     *
     * @var FreightRateRequestHandlingUnitWeight
     */
    protected $handlingUnitWeight;
    /**
    * Indicator used to specify if the user wants to subtract the handling unit weight.
    Defaults to false. 
    
    When AdjustedWeightIndicator is set to "true":
    - If HandlingUnitWeight is present, the HandlingUnitWeight Value will be subtracted and prorated from the FreightLineItem Weight Value. The subtracted/prorated FreightLineItem Weight will be used for GFP rating.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is present, the adjusted weight value from the FreightLineItem object will be used to do a GFP rating request to UPGF.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is not present, the original weight from the FreightLineItem object will be used to do a GFP rating request to UPGF.In this case, the HandlingUnitWeight value  is assume to be zero.
    
    AdjustedWeightIndicator set to "false":
    - The FreightLineItem.Weight will be used for both LTL and GFP rating requests (current functionality). The HandlingUnitWeight or the FreightLineItem.AdjustedWeight will not be used.
    *
    * @var string
    */
    protected $adjustedWeightIndicator;
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @var string
     */
    protected $timeInTransitIndicator;
    /**
     * 
     *
     * @var list<FreightRateRequestHandlingUnits>
     */
    protected $handlingUnits;
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @var string
     */
    protected $adjustedHeightIndicator;
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @var string
    */
    protected $densityEligibleIndicator;
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @var string
     */
    protected $quoteNumberIndicator;
    /**
     * Request Container.
     *
     * @return FreightRateRequestRequest
     */
    public function getRequest() : FreightRateRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container.
     *
     * @param FreightRateRequestRequest $request
     *
     * @return self
     */
    public function setRequest(FreightRateRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * ShipFrom Container.
     *
     * @return FreightRateRequestShipFrom
     */
    public function getShipFrom() : FreightRateRequestShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * ShipFrom Container.
     *
     * @param FreightRateRequestShipFrom $shipFrom
     *
     * @return self
     */
    public function setShipFrom(FreightRateRequestShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * ShipTo Container.
     *
     * @return FreightRateRequestShipTo
     */
    public function getShipTo() : FreightRateRequestShipTo
    {
        return $this->shipTo;
    }
    /**
     * ShipTo Container.
     *
     * @param FreightRateRequestShipTo $shipTo
     *
     * @return self
     */
    public function setShipTo(FreightRateRequestShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * Payment Information Container.
     *
     * @return FreightRateRequestPaymentInformation
     */
    public function getPaymentInformation() : FreightRateRequestPaymentInformation
    {
        return $this->paymentInformation;
    }
    /**
     * Payment Information Container.
     *
     * @param FreightRateRequestPaymentInformation $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(FreightRateRequestPaymentInformation $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return FreightRateRequestService
     */
    public function getService() : FreightRateRequestService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param FreightRateRequestService $service
     *
     * @return self
     */
    public function setService(FreightRateRequestService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @return FreightRateRequestHandlingUnitOne
    */
    public function getHandlingUnitOne() : FreightRateRequestHandlingUnitOne
    {
        return $this->handlingUnitOne;
    }
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @param FreightRateRequestHandlingUnitOne $handlingUnitOne
    *
    * @return self
    */
    public function setHandlingUnitOne(FreightRateRequestHandlingUnitOne $handlingUnitOne) : self
    {
        $this->initialized['handlingUnitOne'] = true;
        $this->handlingUnitOne = $handlingUnitOne;
        return $this;
    }
    /**
     * HandlingUnit Container.
     *
     * @return FreightRateRequestHandlingUnitTwo
     */
    public function getHandlingUnitTwo() : FreightRateRequestHandlingUnitTwo
    {
        return $this->handlingUnitTwo;
    }
    /**
     * HandlingUnit Container.
     *
     * @param FreightRateRequestHandlingUnitTwo $handlingUnitTwo
     *
     * @return self
     */
    public function setHandlingUnitTwo(FreightRateRequestHandlingUnitTwo $handlingUnitTwo) : self
    {
        $this->initialized['handlingUnitTwo'] = true;
        $this->handlingUnitTwo = $handlingUnitTwo;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateRequestCommodity>
     */
    public function getCommodity() : array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<FreightRateRequestCommodity> $commodity
     *
     * @return self
     */
    public function setCommodity(array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @return FreightRateRequestShipmentServiceOptions
     */
    public function getShipmentServiceOptions() : FreightRateRequestShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @param FreightRateRequestShipmentServiceOptions $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(FreightRateRequestShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * Container for PickupRequest
     *
     * @return FreightRateRequestPickupRequest
     */
    public function getPickupRequest() : FreightRateRequestPickupRequest
    {
        return $this->pickupRequest;
    }
    /**
     * Container for PickupRequest
     *
     * @param FreightRateRequestPickupRequest $pickupRequest
     *
     * @return self
     */
    public function setPickupRequest(FreightRateRequestPickupRequest $pickupRequest) : self
    {
        $this->initialized['pickupRequest'] = true;
        $this->pickupRequest = $pickupRequest;
        return $this;
    }
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @return FreightRateRequestAlternateRateOptions
     */
    public function getAlternateRateOptions() : FreightRateRequestAlternateRateOptions
    {
        return $this->alternateRateOptions;
    }
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @param FreightRateRequestAlternateRateOptions $alternateRateOptions
     *
     * @return self
     */
    public function setAlternateRateOptions(FreightRateRequestAlternateRateOptions $alternateRateOptions) : self
    {
        $this->initialized['alternateRateOptions'] = true;
        $this->alternateRateOptions = $alternateRateOptions;
        return $this;
    }
    /**
     * GFP Options container.
     *
     * @return FreightRateRequestGFPOptions
     */
    public function getGFPOptions() : FreightRateRequestGFPOptions
    {
        return $this->gFPOptions;
    }
    /**
     * GFP Options container.
     *
     * @param FreightRateRequestGFPOptions $gFPOptions
     *
     * @return self
     */
    public function setGFPOptions(FreightRateRequestGFPOptions $gFPOptions) : self
    {
        $this->initialized['gFPOptions'] = true;
        $this->gFPOptions = $gFPOptions;
        return $this;
    }
    /**
     * Handling unit weight container.
     *
     * @return FreightRateRequestHandlingUnitWeight
     */
    public function getHandlingUnitWeight() : FreightRateRequestHandlingUnitWeight
    {
        return $this->handlingUnitWeight;
    }
    /**
     * Handling unit weight container.
     *
     * @param FreightRateRequestHandlingUnitWeight $handlingUnitWeight
     *
     * @return self
     */
    public function setHandlingUnitWeight(FreightRateRequestHandlingUnitWeight $handlingUnitWeight) : self
    {
        $this->initialized['handlingUnitWeight'] = true;
        $this->handlingUnitWeight = $handlingUnitWeight;
        return $this;
    }
    /**
    * Indicator used to specify if the user wants to subtract the handling unit weight.
    Defaults to false. 
    
    When AdjustedWeightIndicator is set to "true":
    - If HandlingUnitWeight is present, the HandlingUnitWeight Value will be subtracted and prorated from the FreightLineItem Weight Value. The subtracted/prorated FreightLineItem Weight will be used for GFP rating.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is present, the adjusted weight value from the FreightLineItem object will be used to do a GFP rating request to UPGF.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is not present, the original weight from the FreightLineItem object will be used to do a GFP rating request to UPGF.In this case, the HandlingUnitWeight value  is assume to be zero.
    
    AdjustedWeightIndicator set to "false":
    - The FreightLineItem.Weight will be used for both LTL and GFP rating requests (current functionality). The HandlingUnitWeight or the FreightLineItem.AdjustedWeight will not be used.
    *
    * @return string
    */
    public function getAdjustedWeightIndicator() : string
    {
        return $this->adjustedWeightIndicator;
    }
    /**
    * Indicator used to specify if the user wants to subtract the handling unit weight.
    Defaults to false. 
    
    When AdjustedWeightIndicator is set to "true":
    - If HandlingUnitWeight is present, the HandlingUnitWeight Value will be subtracted and prorated from the FreightLineItem Weight Value. The subtracted/prorated FreightLineItem Weight will be used for GFP rating.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is present, the adjusted weight value from the FreightLineItem object will be used to do a GFP rating request to UPGF.
    - If HandlingUnitWeight is not present and the AdjustedWeightValue is not present, the original weight from the FreightLineItem object will be used to do a GFP rating request to UPGF.In this case, the HandlingUnitWeight value  is assume to be zero.
    
    AdjustedWeightIndicator set to "false":
    - The FreightLineItem.Weight will be used for both LTL and GFP rating requests (current functionality). The HandlingUnitWeight or the FreightLineItem.AdjustedWeight will not be used.
    *
    * @param string $adjustedWeightIndicator
    *
    * @return self
    */
    public function setAdjustedWeightIndicator(string $adjustedWeightIndicator) : self
    {
        $this->initialized['adjustedWeightIndicator'] = true;
        $this->adjustedWeightIndicator = $adjustedWeightIndicator;
        return $this;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @return string
     */
    public function getTimeInTransitIndicator() : string
    {
        return $this->timeInTransitIndicator;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @param string $timeInTransitIndicator
     *
     * @return self
     */
    public function setTimeInTransitIndicator(string $timeInTransitIndicator) : self
    {
        $this->initialized['timeInTransitIndicator'] = true;
        $this->timeInTransitIndicator = $timeInTransitIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateRequestHandlingUnits>
     */
    public function getHandlingUnits() : array
    {
        return $this->handlingUnits;
    }
    /**
     * 
     *
     * @param list<FreightRateRequestHandlingUnits> $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(array $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @return string
     */
    public function getAdjustedHeightIndicator() : string
    {
        return $this->adjustedHeightIndicator;
    }
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @param string $adjustedHeightIndicator
     *
     * @return self
     */
    public function setAdjustedHeightIndicator(string $adjustedHeightIndicator) : self
    {
        $this->initialized['adjustedHeightIndicator'] = true;
        $this->adjustedHeightIndicator = $adjustedHeightIndicator;
        return $this;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @return string
    */
    public function getDensityEligibleIndicator() : string
    {
        return $this->densityEligibleIndicator;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @param string $densityEligibleIndicator
    *
    * @return self
    */
    public function setDensityEligibleIndicator(string $densityEligibleIndicator) : self
    {
        $this->initialized['densityEligibleIndicator'] = true;
        $this->densityEligibleIndicator = $densityEligibleIndicator;
        return $this;
    }
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @return string
     */
    public function getQuoteNumberIndicator() : string
    {
        return $this->quoteNumberIndicator;
    }
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @param string $quoteNumberIndicator
     *
     * @return self
     */
    public function setQuoteNumberIndicator(string $quoteNumberIndicator) : self
    {
        $this->initialized['quoteNumberIndicator'] = true;
        $this->quoteNumberIndicator = $quoteNumberIndicator;
        return $this;
    }
}