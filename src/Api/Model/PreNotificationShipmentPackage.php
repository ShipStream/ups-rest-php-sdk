<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationShipmentPackage extends \ArrayObject
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
     * The packages tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @var PackagePackageWeight|null
     */
    protected $packageWeight;
    /**
     * Declares that a package was prepared according to ground, passenger aircraft, or cargo aircraft only. Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, PAX.
     *
     * @var string|null
     */
    protected $transportationMode;
    /**
     * Indicator to specify that a Dangerous Goods package is voided. True if VoidIndicator tag exists; false otherwise.
     *
     * @var string|null
     */
    protected $voidIndicator;
    /**
     * Regulated Commodity Transport Package Score Quantity
     *
     * @var string|null
     */
    protected $packagePoints;
    /**
     * 
     *
     * @var list<PreNotificationPackageChemicalRecord>|null
     */
    protected $chemicalRecord;
    /**
     * The packages tracking number.
     *
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * The packages tracking number.
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
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @return PackagePackageWeight|null
     */
    public function getPackageWeight() : ?PackagePackageWeight
    {
        return $this->packageWeight;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @param PackagePackageWeight|null $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(?PackagePackageWeight $packageWeight) : self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * Declares that a package was prepared according to ground, passenger aircraft, or cargo aircraft only. Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, PAX.
     *
     * @return string|null
     */
    public function getTransportationMode() : ?string
    {
        return $this->transportationMode;
    }
    /**
     * Declares that a package was prepared according to ground, passenger aircraft, or cargo aircraft only. Only required when the CommodityRegulatedLevelCode is FR or LQ.  Valid entries include: GND, CAO, PAX.
     *
     * @param string|null $transportationMode
     *
     * @return self
     */
    public function setTransportationMode(?string $transportationMode) : self
    {
        $this->initialized['transportationMode'] = true;
        $this->transportationMode = $transportationMode;
        return $this;
    }
    /**
     * Indicator to specify that a Dangerous Goods package is voided. True if VoidIndicator tag exists; false otherwise.
     *
     * @return string|null
     */
    public function getVoidIndicator() : ?string
    {
        return $this->voidIndicator;
    }
    /**
     * Indicator to specify that a Dangerous Goods package is voided. True if VoidIndicator tag exists; false otherwise.
     *
     * @param string|null $voidIndicator
     *
     * @return self
     */
    public function setVoidIndicator(?string $voidIndicator) : self
    {
        $this->initialized['voidIndicator'] = true;
        $this->voidIndicator = $voidIndicator;
        return $this;
    }
    /**
     * Regulated Commodity Transport Package Score Quantity
     *
     * @return string|null
     */
    public function getPackagePoints() : ?string
    {
        return $this->packagePoints;
    }
    /**
     * Regulated Commodity Transport Package Score Quantity
     *
     * @param string|null $packagePoints
     *
     * @return self
     */
    public function setPackagePoints(?string $packagePoints) : self
    {
        $this->initialized['packagePoints'] = true;
        $this->packagePoints = $packagePoints;
        return $this;
    }
    /**
     * 
     *
     * @return list<PreNotificationPackageChemicalRecord>|null
     */
    public function getChemicalRecord() : ?array
    {
        return $this->chemicalRecord;
    }
    /**
     * 
     *
     * @param list<PreNotificationPackageChemicalRecord>|null $chemicalRecord
     *
     * @return self
     */
    public function setChemicalRecord(?array $chemicalRecord) : self
    {
        $this->initialized['chemicalRecord'] = true;
        $this->chemicalRecord = $chemicalRecord;
        return $this;
    }
}