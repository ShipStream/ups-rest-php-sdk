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
     * @var string
     */
    protected $pickupRequestConfirmationNumber;
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @var string
    */
    protected $deliveryDate;
    /**
     * The shipment Number assigned to the shipment.
     *
     * @var string
     */
    protected $shipmentNumber;
    /**
     * The retrieval key for the stored BOL.
     *
     * @var string
     */
    protected $bOLID;
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @var string
     */
    protected $guaranteedIndicator;
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @var string
     */
    protected $minimumChargeAppliedIndicator;
    /**
     * 
     *
     * @var list<ShipmentResultsRate>
     */
    protected $rate;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var ShipmentResultsFreightDensityRate
     */
    protected $freightDensityRate;
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @var ShipmentResultsTotalShipmentCharge
     */
    protected $totalShipmentCharge;
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @var ShipmentResultsBillableShipmentWeight
     */
    protected $billableShipmentWeight;
    /**
     * Service Container.
     *
     * @var ShipmentResultsService
     */
    protected $service;
    /**
     * Documents Container.
     *
     * @var ShipmentResultsDocuments
     */
    protected $documents;
    /**
     * Time In transit information.
     *
     * @var ShipmentResultsTimeInTransit
     */
    protected $timeInTransit;
    /**
     * Shipment pickup number.
     *
     * @return string
     */
    public function getPickupRequestConfirmationNumber() : string
    {
        return $this->pickupRequestConfirmationNumber;
    }
    /**
     * Shipment pickup number.
     *
     * @param string $pickupRequestConfirmationNumber
     *
     * @return self
     */
    public function setPickupRequestConfirmationNumber(string $pickupRequestConfirmationNumber) : self
    {
        $this->initialized['pickupRequestConfirmationNumber'] = true;
        $this->pickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
        return $this;
    }
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @return string
    */
    public function getDeliveryDate() : string
    {
        return $this->deliveryDate;
    }
    /**
    * Estimated date that the shipment will be delivered.  
    Format: YYYYMMDD.
    *
    * @param string $deliveryDate
    *
    * @return self
    */
    public function setDeliveryDate(string $deliveryDate) : self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * The shipment Number assigned to the shipment.
     *
     * @return string
     */
    public function getShipmentNumber() : string
    {
        return $this->shipmentNumber;
    }
    /**
     * The shipment Number assigned to the shipment.
     *
     * @param string $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber(string $shipmentNumber) : self
    {
        $this->initialized['shipmentNumber'] = true;
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @return string
     */
    public function getBOLID() : string
    {
        return $this->bOLID;
    }
    /**
     * The retrieval key for the stored BOL.
     *
     * @param string $bOLID
     *
     * @return self
     */
    public function setBOLID(string $bOLID) : self
    {
        $this->initialized['bOLID'] = true;
        $this->bOLID = $bOLID;
        return $this;
    }
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @return string
     */
    public function getGuaranteedIndicator() : string
    {
        return $this->guaranteedIndicator;
    }
    /**
     * This indicator indicates that the rate returned is guaranteed. Can only be returned if the billing option is prepaid.
     *
     * @param string $guaranteedIndicator
     *
     * @return self
     */
    public function setGuaranteedIndicator(string $guaranteedIndicator) : self
    {
        $this->initialized['guaranteedIndicator'] = true;
        $this->guaranteedIndicator = $guaranteedIndicator;
        return $this;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @return string
     */
    public function getMinimumChargeAppliedIndicator() : string
    {
        return $this->minimumChargeAppliedIndicator;
    }
    /**
     * This is an empty tag. The presence of the tag indicates the rate returned has a minimum charge applied to it. Can only be returned if the billing option is prepaid.
     *
     * @param string $minimumChargeAppliedIndicator
     *
     * @return self
     */
    public function setMinimumChargeAppliedIndicator(string $minimumChargeAppliedIndicator) : self
    {
        $this->initialized['minimumChargeAppliedIndicator'] = true;
        $this->minimumChargeAppliedIndicator = $minimumChargeAppliedIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<ShipmentResultsRate>
     */
    public function getRate() : array
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param list<ShipmentResultsRate> $rate
     *
     * @return self
     */
    public function setRate(array $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @return ShipmentResultsFreightDensityRate
     */
    public function getFreightDensityRate() : ShipmentResultsFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param ShipmentResultsFreightDensityRate $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(ShipmentResultsFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @return ShipmentResultsTotalShipmentCharge
     */
    public function getTotalShipmentCharge() : ShipmentResultsTotalShipmentCharge
    {
        return $this->totalShipmentCharge;
    }
    /**
     * TotalShipmentCharge Container. Can only be returned if the billing option is prepaid.
     *
     * @param ShipmentResultsTotalShipmentCharge $totalShipmentCharge
     *
     * @return self
     */
    public function setTotalShipmentCharge(ShipmentResultsTotalShipmentCharge $totalShipmentCharge) : self
    {
        $this->initialized['totalShipmentCharge'] = true;
        $this->totalShipmentCharge = $totalShipmentCharge;
        return $this;
    }
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @return ShipmentResultsBillableShipmentWeight
     */
    public function getBillableShipmentWeight() : ShipmentResultsBillableShipmentWeight
    {
        return $this->billableShipmentWeight;
    }
    /**
     * BillableShipmentWeight Container. Can only be returned if the billing option is prepaid.
     *
     * @param ShipmentResultsBillableShipmentWeight $billableShipmentWeight
     *
     * @return self
     */
    public function setBillableShipmentWeight(ShipmentResultsBillableShipmentWeight $billableShipmentWeight) : self
    {
        $this->initialized['billableShipmentWeight'] = true;
        $this->billableShipmentWeight = $billableShipmentWeight;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return ShipmentResultsService
     */
    public function getService() : ShipmentResultsService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param ShipmentResultsService $service
     *
     * @return self
     */
    public function setService(ShipmentResultsService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Documents Container.
     *
     * @return ShipmentResultsDocuments
     */
    public function getDocuments() : ShipmentResultsDocuments
    {
        return $this->documents;
    }
    /**
     * Documents Container.
     *
     * @param ShipmentResultsDocuments $documents
     *
     * @return self
     */
    public function setDocuments(ShipmentResultsDocuments $documents) : self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
     * Time In transit information.
     *
     * @return ShipmentResultsTimeInTransit
     */
    public function getTimeInTransit() : ShipmentResultsTimeInTransit
    {
        return $this->timeInTransit;
    }
    /**
     * Time In transit information.
     *
     * @param ShipmentResultsTimeInTransit $timeInTransit
     *
     * @return self
     */
    public function setTimeInTransit(ShipmentResultsTimeInTransit $timeInTransit) : self
    {
        $this->initialized['timeInTransit'] = true;
        $this->timeInTransit = $timeInTransit;
        return $this;
    }
}