<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponseShipment extends \ArrayObject
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
     * Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendices section.
     *
     * @var string
     */
    protected $importCountryCode;
    /**
     * Specifies the Shipment ID in the Landed Cost quote.
     *
     * @var string
     */
    protected $id;
    /**
     * An array of Brokerage fees.
     *
     * @var list<BrokerageFeeItems>
     */
    protected $brokerageFeeItems;
    /**
     * Grand total of all applicable Brokerage fees.
     *
     * @var float
     */
    protected $totalBrokerageFees;
    /**
     * Total duty amount of this shipment.
     *
     * @var float
     */
    protected $totalDuties;
    /**
     * Total tax and other fees at commodity level.
     *
     * @var float
     */
    protected $totalCommodityLevelTaxesAndFees;
    /**
     * Total tax and other fees at shipment level.
     *
     * @var float
     */
    protected $totalShipmentLevelTaxesAndFees;
    /**
     * Total VAT of the shipment.
     *
     * @var float
     */
    protected $totalVAT;
    /**
     * Grand total of the combined duty, VAT, tax, and other fees of all commodities in this shipment including shipment level taxes and fees.
     *
     * @var float
     */
    protected $totalDutyAndTax;
    /**
     * Sum of totalDutyAndTax + totalBrokerageFees
     *
     * @var float
     */
    protected $grandTotal;
    /**
     * An array of Landed Cost for all valid commodities.
     *
     * @var list<ResponseShipmentItems>
     */
    protected $shipmentItems;
    /**
     * An identifier unique to the request.
     *
     * @var string
     */
    protected $transID;
    /**
     * See ALPerfStats
     *
     * @var LandedCostResponseShipmentPerfStats
     */
    protected $perfStats;
    /**
     * Version number of the instance that processed this request. Default is 1.
     *
     * @var int
     */
    protected $alVersion;
    /**
     * Error code and description
     *
     * @var Errors
     */
    protected $errors;
    /**
     * Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
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
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendices section.
     *
     * @return string
     */
    public function getImportCountryCode() : string
    {
        return $this->importCountryCode;
    }
    /**
     * Specifies the Import/Ship-To/Destination/Final country of the shipment. Please check country list in the Appendices section.
     *
     * @param string $importCountryCode
     *
     * @return self
     */
    public function setImportCountryCode(string $importCountryCode) : self
    {
        $this->initialized['importCountryCode'] = true;
        $this->importCountryCode = $importCountryCode;
        return $this;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * An array of Brokerage fees.
     *
     * @return list<BrokerageFeeItems>
     */
    public function getBrokerageFeeItems() : array
    {
        return $this->brokerageFeeItems;
    }
    /**
     * An array of Brokerage fees.
     *
     * @param list<BrokerageFeeItems> $brokerageFeeItems
     *
     * @return self
     */
    public function setBrokerageFeeItems(array $brokerageFeeItems) : self
    {
        $this->initialized['brokerageFeeItems'] = true;
        $this->brokerageFeeItems = $brokerageFeeItems;
        return $this;
    }
    /**
     * Grand total of all applicable Brokerage fees.
     *
     * @return float
     */
    public function getTotalBrokerageFees() : float
    {
        return $this->totalBrokerageFees;
    }
    /**
     * Grand total of all applicable Brokerage fees.
     *
     * @param float $totalBrokerageFees
     *
     * @return self
     */
    public function setTotalBrokerageFees(float $totalBrokerageFees) : self
    {
        $this->initialized['totalBrokerageFees'] = true;
        $this->totalBrokerageFees = $totalBrokerageFees;
        return $this;
    }
    /**
     * Total duty amount of this shipment.
     *
     * @return float
     */
    public function getTotalDuties() : float
    {
        return $this->totalDuties;
    }
    /**
     * Total duty amount of this shipment.
     *
     * @param float $totalDuties
     *
     * @return self
     */
    public function setTotalDuties(float $totalDuties) : self
    {
        $this->initialized['totalDuties'] = true;
        $this->totalDuties = $totalDuties;
        return $this;
    }
    /**
     * Total tax and other fees at commodity level.
     *
     * @return float
     */
    public function getTotalCommodityLevelTaxesAndFees() : float
    {
        return $this->totalCommodityLevelTaxesAndFees;
    }
    /**
     * Total tax and other fees at commodity level.
     *
     * @param float $totalCommodityLevelTaxesAndFees
     *
     * @return self
     */
    public function setTotalCommodityLevelTaxesAndFees(float $totalCommodityLevelTaxesAndFees) : self
    {
        $this->initialized['totalCommodityLevelTaxesAndFees'] = true;
        $this->totalCommodityLevelTaxesAndFees = $totalCommodityLevelTaxesAndFees;
        return $this;
    }
    /**
     * Total tax and other fees at shipment level.
     *
     * @return float
     */
    public function getTotalShipmentLevelTaxesAndFees() : float
    {
        return $this->totalShipmentLevelTaxesAndFees;
    }
    /**
     * Total tax and other fees at shipment level.
     *
     * @param float $totalShipmentLevelTaxesAndFees
     *
     * @return self
     */
    public function setTotalShipmentLevelTaxesAndFees(float $totalShipmentLevelTaxesAndFees) : self
    {
        $this->initialized['totalShipmentLevelTaxesAndFees'] = true;
        $this->totalShipmentLevelTaxesAndFees = $totalShipmentLevelTaxesAndFees;
        return $this;
    }
    /**
     * Total VAT of the shipment.
     *
     * @return float
     */
    public function getTotalVAT() : float
    {
        return $this->totalVAT;
    }
    /**
     * Total VAT of the shipment.
     *
     * @param float $totalVAT
     *
     * @return self
     */
    public function setTotalVAT(float $totalVAT) : self
    {
        $this->initialized['totalVAT'] = true;
        $this->totalVAT = $totalVAT;
        return $this;
    }
    /**
     * Grand total of the combined duty, VAT, tax, and other fees of all commodities in this shipment including shipment level taxes and fees.
     *
     * @return float
     */
    public function getTotalDutyAndTax() : float
    {
        return $this->totalDutyAndTax;
    }
    /**
     * Grand total of the combined duty, VAT, tax, and other fees of all commodities in this shipment including shipment level taxes and fees.
     *
     * @param float $totalDutyAndTax
     *
     * @return self
     */
    public function setTotalDutyAndTax(float $totalDutyAndTax) : self
    {
        $this->initialized['totalDutyAndTax'] = true;
        $this->totalDutyAndTax = $totalDutyAndTax;
        return $this;
    }
    /**
     * Sum of totalDutyAndTax + totalBrokerageFees
     *
     * @return float
     */
    public function getGrandTotal() : float
    {
        return $this->grandTotal;
    }
    /**
     * Sum of totalDutyAndTax + totalBrokerageFees
     *
     * @param float $grandTotal
     *
     * @return self
     */
    public function setGrandTotal(float $grandTotal) : self
    {
        $this->initialized['grandTotal'] = true;
        $this->grandTotal = $grandTotal;
        return $this;
    }
    /**
     * An array of Landed Cost for all valid commodities.
     *
     * @return list<ResponseShipmentItems>
     */
    public function getShipmentItems() : array
    {
        return $this->shipmentItems;
    }
    /**
     * An array of Landed Cost for all valid commodities.
     *
     * @param list<ResponseShipmentItems> $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(array $shipmentItems) : self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
    /**
     * An identifier unique to the request.
     *
     * @return string
     */
    public function getTransID() : string
    {
        return $this->transID;
    }
    /**
     * An identifier unique to the request.
     *
     * @param string $transID
     *
     * @return self
     */
    public function setTransID(string $transID) : self
    {
        $this->initialized['transID'] = true;
        $this->transID = $transID;
        return $this;
    }
    /**
     * See ALPerfStats
     *
     * @return LandedCostResponseShipmentPerfStats
     */
    public function getPerfStats() : LandedCostResponseShipmentPerfStats
    {
        return $this->perfStats;
    }
    /**
     * See ALPerfStats
     *
     * @param LandedCostResponseShipmentPerfStats $perfStats
     *
     * @return self
     */
    public function setPerfStats(LandedCostResponseShipmentPerfStats $perfStats) : self
    {
        $this->initialized['perfStats'] = true;
        $this->perfStats = $perfStats;
        return $this;
    }
    /**
     * Version number of the instance that processed this request. Default is 1.
     *
     * @return int
     */
    public function getAlVersion() : int
    {
        return $this->alVersion;
    }
    /**
     * Version number of the instance that processed this request. Default is 1.
     *
     * @param int $alVersion
     *
     * @return self
     */
    public function setAlVersion(int $alVersion) : self
    {
        $this->initialized['alVersion'] = true;
        $this->alVersion = $alVersion;
        return $this;
    }
    /**
     * Error code and description
     *
     * @return Errors
     */
    public function getErrors() : Errors
    {
        return $this->errors;
    }
    /**
     * Error code and description
     *
     * @param Errors $errors
     *
     * @return self
     */
    public function setErrors(Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}