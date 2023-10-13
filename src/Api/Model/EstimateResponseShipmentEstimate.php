<?php

namespace ShipStream\Ups\Api\Model;

class EstimateResponseShipmentEstimate extends \ArrayObject
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
     * Currency Code provided by user in the LandedCostRequest/QueryRequest/Shipment/Result Currency. If not specified, it is shipment destination country or territory's currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Container for the shipment level cost
     *
     * @var ShipmentEstimateShipmentCharges
     */
    protected $shipmentCharges;
    /**
     * Container for the list of each Product charges and 			Products total charges
     *
     * @var ShipmentEstimateProductsCharges
     */
    protected $productsCharges;
    /**
    * The total Landed Cost ...sum of shipment level charge and all Product level charges. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @var string
    */
    protected $totalLandedCost;
    /**
     * Currency Code provided by user in the LandedCostRequest/QueryRequest/Shipment/Result Currency. If not specified, it is shipment destination country or territory's currency code.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Currency Code provided by user in the LandedCostRequest/QueryRequest/Shipment/Result Currency. If not specified, it is shipment destination country or territory's currency code.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Container for the shipment level cost
     *
     * @return ShipmentEstimateShipmentCharges
     */
    public function getShipmentCharges() : ShipmentEstimateShipmentCharges
    {
        return $this->shipmentCharges;
    }
    /**
     * Container for the shipment level cost
     *
     * @param ShipmentEstimateShipmentCharges $shipmentCharges
     *
     * @return self
     */
    public function setShipmentCharges(ShipmentEstimateShipmentCharges $shipmentCharges) : self
    {
        $this->initialized['shipmentCharges'] = true;
        $this->shipmentCharges = $shipmentCharges;
        return $this;
    }
    /**
     * Container for the list of each Product charges and 			Products total charges
     *
     * @return ShipmentEstimateProductsCharges
     */
    public function getProductsCharges() : ShipmentEstimateProductsCharges
    {
        return $this->productsCharges;
    }
    /**
     * Container for the list of each Product charges and 			Products total charges
     *
     * @param ShipmentEstimateProductsCharges $productsCharges
     *
     * @return self
     */
    public function setProductsCharges(ShipmentEstimateProductsCharges $productsCharges) : self
    {
        $this->initialized['productsCharges'] = true;
        $this->productsCharges = $productsCharges;
        return $this;
    }
    /**
    * The total Landed Cost ...sum of shipment level charge and all Product level charges. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @return string
    */
    public function getTotalLandedCost() : string
    {
        return $this->totalLandedCost;
    }
    /**
    * The total Landed Cost ...sum of shipment level charge and all Product level charges. 
    Valid characters are 0-9, Decimal Point ("."), and Thousand separator (","). 
    Limit to 4 characters after the decimal point.
    *
    * @param string $totalLandedCost
    *
    * @return self
    */
    public function setTotalLandedCost(string $totalLandedCost) : self
    {
        $this->initialized['totalLandedCost'] = true;
        $this->totalLandedCost = $totalLandedCost;
        return $this;
    }
}