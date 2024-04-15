<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipResponseShipmentResults extends \ArrayObject
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
     * Shipment pickup number.
     *
     * @var string|null
     */
    protected $pickupRequestConfirmationNumber;
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @var string|null
    */
    protected $deliveryDate;
    /**
     * The shipment Number assigned to the shipment.
     *
     * @var string|null
     */
    protected $shipmentNumber;
    /**
     * The retrieval key for the stored BOL.
     *
     * @var string|null
     */
    protected $bOLID;
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @var string|null
     */
    protected $guaranteedIndicator;
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @var string|null
     */
    protected $minimumChargeAppliedIndicator;
    /**
     * 
     *
     * @var list<ShipmentResultsRate>|null
     */
    protected $rate;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var ShipmentResultsFreightDensityRate|null
     */
    protected $freightDensityRate;
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @var ShipmentResultsTotalShipmentCharge|null
     */
    protected $totalShipmentCharge;
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @var ShipmentResultsBillableShipmentWeight|null
     */
    protected $billableShipmentWeight;
    /**
     * Service Container.
     *
     * @var ShipmentResultsService|null
     */
    protected $service;
    /**
     * Documents Container.
     *
     * @var ShipmentResultsDocuments|null
     */
    protected $documents;
    /**
     * Time In transit information.
     *
     * @var ShipmentResultsTimeInTransit|null
     */
    protected $timeInTransit;
    /**
     * Shipment pickup number.
     *
     * @return string|null
     */
    public function getPickupRequestConfirmationNumber() : ?string
    {
        return $this->pickupRequestConfirmationNumber;
    }
    /**
     * Shipment pickup number.
     *
     * @param string|null $pickupRequestConfirmationNumber
     *
     * @return self
     */
    public function setPickupRequestConfirmationNumber(?string $pickupRequestConfirmationNumber) : self
    {
        $this->initialized['pickupRequestConfirmationNumber'] = true;
        $this->pickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
        return $this;
    }
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @return string|null
    */
    public function getDeliveryDate() : ?string
    {
        return $this->deliveryDate;
    }
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @param string|null $deliveryDate
    *
    * @return self
    */
    public function setDeliveryDate(?string $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * The shipment Number assigned to the shipment.
     *
     * @return string|null
     */
    public function getShipmentNumber() : ?string
    {
        return $this->shipmentNumber;
    }
    /**
     * The shipment Number assigned to the shipment.
     *
     * @param string|null $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(?string $shipmentNumber) : self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @return string|null
     */
    public function getBOLID() : ?string
    {
        return $this->bOLID;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @param string|null $bOLID
     *
     * @return self
     */
    public function setBOLID(?string $bOLID) : self
    {
        $this->initialized['bOLID'] = true;
        $this->bOLID = $bOLID;
        return $this;
    }
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @return string|null
     */
    public function getGuaranteedIndicator() : ?string
    {
        return $this->guaranteedIndicator;
    }
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @param string|null $guaranteedIndicator
     *
     * @return self
     */
    public function setGuaranteedIndicator(?string $guaranteedIndicator) : self
    {
        $this->initialized['guaranteedIndicator'] = true;
        $this->guaranteedIndicator = $guaranteedIndicator;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @return string|null
     */
    public function getMinimumChargeAppliedIndicator() : ?string
    {
        return $this->minimumChargeAppliedIndicator;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @param string|null $minimumChargeAppliedIndicator
     *
     * @return self
     */
    public function setMinimumChargeAppliedIndicator(?string $minimumChargeAppliedIndicator) : self
    {
        $this->initialized['minimumChargeAppliedIndicator'] = true;
        $this->minimumChargeAppliedIndicator = $minimumChargeAppliedIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentResultsRate>|null
     */
    public function getRate() : ?array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<ShipmentResultsRate>|null $rate
     *
     * @return self
     */
    public function setRate(?array $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @return ShipmentResultsFreightDensityRate|null
     */
    public function getFreightDensityRate() : ?ShipmentResultsFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param ShipmentResultsFreightDensityRate|null $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(?ShipmentResultsFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @return ShipmentResultsTotalShipmentCharge|null
     */
    public function getTotalShipmentCharge() : ?ShipmentResultsTotalShipmentCharge
    {
        return $this->totalShipmentCharge;
    }
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @param ShipmentResultsTotalShipmentCharge|null $totalShipmentCharge
     *
     * @return self
     */
    public function setTotalShipmentCharge(?ShipmentResultsTotalShipmentCharge $totalShipmentCharge) : self
    {
        $this->initialized['totalShipmentCharge'] = true;
        $this->totalShipmentCharge = $totalShipmentCharge;
        return $this;
    }
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @return ShipmentResultsBillableShipmentWeight|null
     */
    public function getBillableShipmentWeight() : ?ShipmentResultsBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @param ShipmentResultsBillableShipmentWeight|null $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(?ShipmentResultsBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return ShipmentResultsService|null
     */
    public function getService() : ?ShipmentResultsService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param ShipmentResultsService|null $service
     *
     * @return self
     */
    public function setService(?ShipmentResultsService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Documents Container.
     *
     * @return ShipmentResultsDocuments|null
     */
    public function getDocuments() : ?ShipmentResultsDocuments
    {
        return $this->documents;
    }
    /**
     * Documents Container.
     *
     * @param ShipmentResultsDocuments|null $documents
     *
     * @return self
     */
    public function setDocuments(?ShipmentResultsDocuments $documents) : self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return ShipmentResultsTimeInTransit|null
     */
    public function getTimeInTransit() : ?ShipmentResultsTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param ShipmentResultsTimeInTransit|null $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(?ShipmentResultsTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
}