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
     * @var FreightRateRequestRequest|null
     */
    protected $request;
    /**
     * ShipFrom Container.
     *
     * @var FreightRateRequestShipFrom|null
     */
    protected $shipFrom;
    /**
     * ShipTo Container.
     *
     * @var FreightRateRequestShipTo|null
     */
    protected $shipTo;
    /**
     * Payment Information Container.
     *
     * @var FreightRateRequestPaymentInformation|null
     */
    protected $paymentInformation;
    /**
     * Service Container.
     *
     * @var FreightRateRequestService|null
     */
    protected $service;
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @var FreightRateRequestHandlingUnitOne|null
    */
    protected $handlingUnitOne;
    /**
     * HandlingUnit Container.
     *
     * @var FreightRateRequestHandlingUnitTwo|null
     */
    protected $handlingUnitTwo;
    /**
     * 
     *
     * @var list<FreightRateRequestCommodity>|null
     */
    protected $commodity;
    /**
     * ShipmentServiceOptions Container.
     *
     * @var FreightRateRequestShipmentServiceOptions|null
     */
    protected $shipmentServiceOptions;
    /**
     * Container for PickupRequest
     *
     * @var FreightRateRequestPickupRequest|null
     */
    protected $pickupRequest;
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @var FreightRateRequestAlternateRateOptions|null
     */
    protected $alternateRateOptions;
    /**
     * GFP Options container.
     *
     * @var FreightRateRequestGFPOptions|null
     */
    protected $gFPOptions;
    /**
     * Handling unit weight container.
     *
     * @var FreightRateRequestHandlingUnitWeight|null
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
    * @var string|null
    */
    protected $adjustedWeightIndicator;
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @var string|null
     */
    protected $timeInTransitIndicator;
    /**
     * 
     *
     * @var list<FreightRateRequestHandlingUnits>|null
     */
    protected $handlingUnits;
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @var string|null
     */
    protected $adjustedHeightIndicator;
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @var string|null
    */
    protected $densityEligibleIndicator;
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @var string|null
     */
    protected $quoteNumberIndicator;
    /**
     * Request Container.
     *
     * @return FreightRateRequestRequest|null
     */
    public function getRequest() : ?FreightRateRequestRequest
    {
        return $this->request;
    }
    /**
     * Request Container.
     *
     * @param FreightRateRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?FreightRateRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * ShipFrom Container.
     *
     * @return FreightRateRequestShipFrom|null
     */
    public function getShipFrom() : ?FreightRateRequestShipFrom
    {
        return $this->shipFrom;
    }
    /**
     * ShipFrom Container.
     *
     * @param FreightRateRequestShipFrom|null $shipFrom
     *
     * @return self
     */
    public function setShipFrom(?FreightRateRequestShipFrom $shipFrom) : self
    {
        $this->initialized['shipFrom'] = true;
        $this->shipFrom = $shipFrom;
        return $this;
    }
    /**
     * ShipTo Container.
     *
     * @return FreightRateRequestShipTo|null
     */
    public function getShipTo() : ?FreightRateRequestShipTo
    {
        return $this->shipTo;
    }
    /**
     * ShipTo Container.
     *
     * @param FreightRateRequestShipTo|null $shipTo
     *
     * @return self
     */
    public function setShipTo(?FreightRateRequestShipTo $shipTo) : self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;
        return $this;
    }
    /**
     * Payment Information Container.
     *
     * @return FreightRateRequestPaymentInformation|null
     */
    public function getPaymentInformation() : ?FreightRateRequestPaymentInformation
    {
        return $this->paymentInformation;
    }
    /**
     * Payment Information Container.
     *
     * @param FreightRateRequestPaymentInformation|null $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(?FreightRateRequestPaymentInformation $paymentInformation) : self
    {
        $this->initialized['paymentInformation'] = true;
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return FreightRateRequestService|null
     */
    public function getService() : ?FreightRateRequestService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param FreightRateRequestService|null $service
     *
     * @return self
     */
    public function setService(?FreightRateRequestService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @return FreightRateRequestHandlingUnitOne|null
    */
    public function getHandlingUnitOne() : ?FreightRateRequestHandlingUnitOne
    {
        return $this->handlingUnitOne;
    }
    /**
    * HandlingUnitOne Container.
    Required, unless HandlingUnitTwo is present with a value of LOO -LOOSE.
    *
    * @param FreightRateRequestHandlingUnitOne|null $handlingUnitOne
    *
    * @return self
    */
    public function setHandlingUnitOne(?FreightRateRequestHandlingUnitOne $handlingUnitOne) : self
    {
        $this->initialized['handlingUnitOne'] = true;
        $this->handlingUnitOne = $handlingUnitOne;
        return $this;
    }
    /**
     * HandlingUnit Container.
     *
     * @return FreightRateRequestHandlingUnitTwo|null
     */
    public function getHandlingUnitTwo() : ?FreightRateRequestHandlingUnitTwo
    {
        return $this->handlingUnitTwo;
    }
    /**
     * HandlingUnit Container.
     *
     * @param FreightRateRequestHandlingUnitTwo|null $handlingUnitTwo
     *
     * @return self
     */
    public function setHandlingUnitTwo(?FreightRateRequestHandlingUnitTwo $handlingUnitTwo) : self
    {
        $this->initialized['handlingUnitTwo'] = true;
        $this->handlingUnitTwo = $handlingUnitTwo;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateRequestCommodity>|null
     */
    public function getCommodity() : ?array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<FreightRateRequestCommodity>|null $commodity
     *
     * @return self
     */
    public function setCommodity(?array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @return FreightRateRequestShipmentServiceOptions|null
     */
    public function getShipmentServiceOptions() : ?FreightRateRequestShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * ShipmentServiceOptions Container.
     *
     * @param FreightRateRequestShipmentServiceOptions|null $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(?FreightRateRequestShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * Container for PickupRequest
     *
     * @return FreightRateRequestPickupRequest|null
     */
    public function getPickupRequest() : ?FreightRateRequestPickupRequest
    {
        return $this->pickupRequest;
    }
    /**
     * Container for PickupRequest
     *
     * @param FreightRateRequestPickupRequest|null $pickupRequest
     *
     * @return self
     */
    public function setPickupRequest(?FreightRateRequestPickupRequest $pickupRequest) : self
    {
        $this->initialized['pickupRequest'] = true;
        $this->pickupRequest = $pickupRequest;
        return $this;
    }
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @return FreightRateRequestAlternateRateOptions|null
     */
    public function getAlternateRateOptions() : ?FreightRateRequestAlternateRateOptions
    {
        return $this->alternateRateOptions;
    }
    /**
     * Container to indicate that alternate rates are requested.
     *
     * @param FreightRateRequestAlternateRateOptions|null $alternateRateOptions
     *
     * @return self
     */
    public function setAlternateRateOptions(?FreightRateRequestAlternateRateOptions $alternateRateOptions) : self
    {
        $this->initialized['alternateRateOptions'] = true;
        $this->alternateRateOptions = $alternateRateOptions;
        return $this;
    }
    /**
     * GFP Options container.
     *
     * @return FreightRateRequestGFPOptions|null
     */
    public function getGFPOptions() : ?FreightRateRequestGFPOptions
    {
        return $this->gFPOptions;
    }
    /**
     * GFP Options container.
     *
     * @param FreightRateRequestGFPOptions|null $gFPOptions
     *
     * @return self
     */
    public function setGFPOptions(?FreightRateRequestGFPOptions $gFPOptions) : self
    {
        $this->initialized['gFPOptions'] = true;
        $this->gFPOptions = $gFPOptions;
        return $this;
    }
    /**
     * Handling unit weight container.
     *
     * @return FreightRateRequestHandlingUnitWeight|null
     */
    public function getHandlingUnitWeight() : ?FreightRateRequestHandlingUnitWeight
    {
        return $this->handlingUnitWeight;
    }
    /**
     * Handling unit weight container.
     *
     * @param FreightRateRequestHandlingUnitWeight|null $handlingUnitWeight
     *
     * @return self
     */
    public function setHandlingUnitWeight(?FreightRateRequestHandlingUnitWeight $handlingUnitWeight) : self
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
    * @return string|null
    */
    public function getAdjustedWeightIndicator() : ?string
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
    * @param string|null $adjustedWeightIndicator
    *
    * @return self
    */
    public function setAdjustedWeightIndicator(?string $adjustedWeightIndicator) : self
    {
        $this->initialized['adjustedWeightIndicator'] = true;
        $this->adjustedWeightIndicator = $adjustedWeightIndicator;
        return $this;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @return string|null
     */
    public function getTimeInTransitIndicator() : ?string
    {
        return $this->timeInTransitIndicator;
    }
    /**
     * Presence of the tag indicates Time in Transit information is requested and will be returned.
     *
     * @param string|null $timeInTransitIndicator
     *
     * @return self
     */
    public function setTimeInTransitIndicator(?string $timeInTransitIndicator) : self
    {
        $this->initialized['timeInTransitIndicator'] = true;
        $this->timeInTransitIndicator = $timeInTransitIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<FreightRateRequestHandlingUnits>|null
     */
    public function getHandlingUnits() : ?array
    {
        return $this->handlingUnits;
    }
    /**
     * 
     *
     * @param list<FreightRateRequestHandlingUnits>|null $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(?array $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @return string|null
     */
    public function getAdjustedHeightIndicator() : ?string
    {
        return $this->adjustedHeightIndicator;
    }
    /**
     * The presence of the AdjustedHeightIndicator indicates that allow the height reduction adjustment for density based rate request.
     *
     * @param string|null $adjustedHeightIndicator
     *
     * @return self
     */
    public function setAdjustedHeightIndicator(?string $adjustedHeightIndicator) : self
    {
        $this->initialized['adjustedHeightIndicator'] = true;
        $this->adjustedHeightIndicator = $adjustedHeightIndicator;
        return $this;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @return string|null
    */
    public function getDensityEligibleIndicator() : ?string
    {
        return $this->densityEligibleIndicator;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @param string|null $densityEligibleIndicator
    *
    * @return self
    */
    public function setDensityEligibleIndicator(?string $densityEligibleIndicator) : self
    {
        $this->initialized['densityEligibleIndicator'] = true;
        $this->densityEligibleIndicator = $densityEligibleIndicator;
        return $this;
    }
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @return string|null
     */
    public function getQuoteNumberIndicator() : ?string
    {
        return $this->quoteNumberIndicator;
    }
    /**
     * The presence of this indicator means a Quote Number will be returned for this LTL Freight Rate quote request.
     *
     * @param string|null $quoteNumberIndicator
     *
     * @return self
     */
    public function setQuoteNumberIndicator(?string $quoteNumberIndicator) : self
    {
        $this->initialized['quoteNumberIndicator'] = true;
        $this->quoteNumberIndicator = $quoteNumberIndicator;
        return $this;
    }
}