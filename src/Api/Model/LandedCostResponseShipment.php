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
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendices section.
     *
     * @var string|null
     */
    protected $importCountryCode;
    /**
     * Specifies the Shipment ID in the Landed Cost quote
     *
     * @var string|null
     */
    protected $id;
    /**
     * An Array of Brokerage fee
     *
     * @var list<BrokerageFeeItems>|null
     */
    protected $brokerageFeeItems;
    /**
     * Grand Total of all applicable Brokerage Fees
     *
     * @var float|null
     */
    protected $totalBrokerageFees;
    /**
     * Total duty amount of this shipment
     *
     * @var float|null
     */
    protected $totalDuties;
    /**
     * Total tax and other fees at commodity level
     *
     * @var float|null
     */
    protected $totalCommodityLevelTaxesAndFees;
    /**
     * Total tax and other fees at shipment level
     *
     * @var float|null
     */
    protected $totalShipmentLevelTaxesAndFees;
    /**
     * Total VAT of this shipment
     *
     * @var float|null
     */
    protected $totalVAT;
    /**
     * Grand Total combined duty, VAT, tax, and other fees of all commodities of this shipment including shipment level taxes and fee
     *
     * @var float|null
     */
    protected $totalDutyAndTax;
    /**
     * (TotalDutyAndTax+ totalBrokerageFees)
     *
     * @var float|null
     */
    protected $grandTotal;
    /**
     * An Array or List of Landed Cost result for all valid commodities
     *
     * @var list<ResponseShipmentItems>|null
     */
    protected $shipmentItems;
    /**
     * An identifier unique to the request
     *
     * @var string|null
     */
    protected $transID;
    /**
     * See ALPerfStats
     *
     * @var LandedCostResponseShipmentPerfStats|null
     */
    protected $perfStats;
    /**
     * Version number of the instance that processed this request. Default by 1
     *
     * @var int|null
     */
    protected $alVersion;
    /**
     * Error code and description
     *
     * @var Errors|null
     */
    protected $errors;
    /**
     * Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Specifies the Currency Code set at the commodity level. This currency is applicable for all duty, tax, VAT, and fee at the shipment and commodity level.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendices section.
     *
     * @return string|null
     */
    public function getImportCountryCode() : ?string
    {
        return $this->importCountryCode;
    }
    /**
     * Specifies the Import/Ship To/Destination/Final country of the shipment. Check Country List in the Appendices section.
     *
     * @param string|null $importCountryCode
     *
     * @return self
     */
    public function setImportCountryCode(?string $importCountryCode) : self
    {
        $this->initialized['importCountryCode'] = true;
        $this->importCountryCode = $importCountryCode;
        return $this;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Specifies the Shipment ID in the Landed Cost quote
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * An Array of Brokerage fee
     *
     * @return list<BrokerageFeeItems>|null
     */
    public function getBrokerageFeeItems() : ?array
    {
        return $this->brokerageFeeItems;
    }
    /**
     * An Array of Brokerage fee
     *
     * @param list<BrokerageFeeItems>|null $brokerageFeeItems
     *
     * @return self
     */
    public function setBrokerageFeeItems(?array $brokerageFeeItems) : self
    {
        $this->initialized['brokerageFeeItems'] = true;
        $this->brokerageFeeItems = $brokerageFeeItems;
        return $this;
    }
    /**
     * Grand Total of all applicable Brokerage Fees
     *
     * @return float|null
     */
    public function getTotalBrokerageFees() : ?float
    {
        return $this->totalBrokerageFees;
    }
    /**
     * Grand Total of all applicable Brokerage Fees
     *
     * @param float|null $totalBrokerageFees
     *
     * @return self
     */
    public function setTotalBrokerageFees(?float $totalBrokerageFees) : self
    {
        $this->initialized['totalBrokerageFees'] = true;
        $this->totalBrokerageFees = $totalBrokerageFees;
        return $this;
    }
    /**
     * Total duty amount of this shipment
     *
     * @return float|null
     */
    public function getTotalDuties() : ?float
    {
        return $this->totalDuties;
    }
    /**
     * Total duty amount of this shipment
     *
     * @param float|null $totalDuties
     *
     * @return self
     */
    public function setTotalDuties(?float $totalDuties) : self
    {
        $this->initialized['totalDuties'] = true;
        $this->totalDuties = $totalDuties;
        return $this;
    }
    /**
     * Total tax and other fees at commodity level
     *
     * @return float|null
     */
    public function getTotalCommodityLevelTaxesAndFees() : ?float
    {
        return $this->totalCommodityLevelTaxesAndFees;
    }
    /**
     * Total tax and other fees at commodity level
     *
     * @param float|null $totalCommodityLevelTaxesAndFees
     *
     * @return self
     */
    public function setTotalCommodityLevelTaxesAndFees(?float $totalCommodityLevelTaxesAndFees) : self
    {
        $this->initialized['totalCommodityLevelTaxesAndFees'] = true;
        $this->totalCommodityLevelTaxesAndFees = $totalCommodityLevelTaxesAndFees;
        return $this;
    }
    /**
     * Total tax and other fees at shipment level
     *
     * @return float|null
     */
    public function getTotalShipmentLevelTaxesAndFees() : ?float
    {
        return $this->totalShipmentLevelTaxesAndFees;
    }
    /**
     * Total tax and other fees at shipment level
     *
     * @param float|null $totalShipmentLevelTaxesAndFees
     *
     * @return self
     */
    public function setTotalShipmentLevelTaxesAndFees(?float $totalShipmentLevelTaxesAndFees) : self
    {
        $this->initialized['totalShipmentLevelTaxesAndFees'] = true;
        $this->totalShipmentLevelTaxesAndFees = $totalShipmentLevelTaxesAndFees;
        return $this;
    }
    /**
     * Total VAT of this shipment
     *
     * @return float|null
     */
    public function getTotalVAT() : ?float
    {
        return $this->totalVAT;
    }
    /**
     * Total VAT of this shipment
     *
     * @param float|null $totalVAT
     *
     * @return self
     */
    public function setTotalVAT(?float $totalVAT) : self
    {
        $this->initialized['totalVAT'] = true;
        $this->totalVAT = $totalVAT;
        return $this;
    }
    /**
     * Grand Total combined duty, VAT, tax, and other fees of all commodities of this shipment including shipment level taxes and fee
     *
     * @return float|null
     */
    public function getTotalDutyAndTax() : ?float
    {
        return $this->totalDutyAndTax;
    }
    /**
     * Grand Total combined duty, VAT, tax, and other fees of all commodities of this shipment including shipment level taxes and fee
     *
     * @param float|null $totalDutyAndTax
     *
     * @return self
     */
    public function setTotalDutyAndTax(?float $totalDutyAndTax) : self
    {
        $this->initialized['totalDutyAndTax'] = true;
        $this->totalDutyAndTax = $totalDutyAndTax;
        return $this;
    }
    /**
     * (TotalDutyAndTax+ totalBrokerageFees)
     *
     * @return float|null
     */
    public function getGrandTotal() : ?float
    {
        return $this->grandTotal;
    }
    /**
     * (TotalDutyAndTax+ totalBrokerageFees)
     *
     * @param float|null $grandTotal
     *
     * @return self
     */
    public function setGrandTotal(?float $grandTotal) : self
    {
        $this->initialized['grandTotal'] = true;
        $this->grandTotal = $grandTotal;
        return $this;
    }
    /**
     * An Array or List of Landed Cost result for all valid commodities
     *
     * @return list<ResponseShipmentItems>|null
     */
    public function getShipmentItems() : ?array
    {
        return $this->shipmentItems;
    }
    /**
     * An Array or List of Landed Cost result for all valid commodities
     *
     * @param list<ResponseShipmentItems>|null $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(?array $shipmentItems) : self
    {
        $this->initialized['shipmentItems'] = true;
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
    /**
     * An identifier unique to the request
     *
     * @return string|null
     */
    public function getTransID() : ?string
    {
        return $this->transID;
    }
    /**
     * An identifier unique to the request
     *
     * @param string|null $transID
     *
     * @return self
     */
    public function setTransID(?string $transID) : self
    {
        $this->initialized['transID'] = true;
        $this->transID = $transID;
        return $this;
    }
    /**
     * See ALPerfStats
     *
     * @return LandedCostResponseShipmentPerfStats|null
     */
    public function getPerfStats() : ?LandedCostResponseShipmentPerfStats
    {
        return $this->perfStats;
    }
    /**
     * See ALPerfStats
     *
     * @param LandedCostResponseShipmentPerfStats|null $perfStats
     *
     * @return self
     */
    public function setPerfStats(?LandedCostResponseShipmentPerfStats $perfStats) : self
    {
        $this->initialized['perfStats'] = true;
        $this->perfStats = $perfStats;
        return $this;
    }
    /**
     * Version number of the instance that processed this request. Default by 1
     *
     * @return int|null
     */
    public function getAlVersion() : ?int
    {
        return $this->alVersion;
    }
    /**
     * Version number of the instance that processed this request. Default by 1
     *
     * @param int|null $alVersion
     *
     * @return self
     */
    public function setAlVersion(?int $alVersion) : self
    {
        $this->initialized['alVersion'] = true;
        $this->alVersion = $alVersion;
        return $this;
    }
    /**
     * Error code and description
     *
     * @return Errors|null
     */
    public function getErrors() : ?Errors
    {
        return $this->errors;
    }
    /**
     * Error code and description
     *
     * @param Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}