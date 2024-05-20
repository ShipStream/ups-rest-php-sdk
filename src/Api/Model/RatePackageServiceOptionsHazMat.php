<?php

namespace ShipStream\Ups\Api\Model;

class RatePackageServiceOptionsHazMat extends \ArrayObject
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
     * Identifies the package containing Dangerous Goods.  Required if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packageIdentifier;
    /**
     * QValue is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Applies only if SubVersion is greater than or equal to 1701. Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @var string
     */
    protected $qValue;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $overPackedIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. Indicates the hazmat shipment/package is all packed in one.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $allPackedInOneIndicator;
    /**
     * 
     *
     * @var list<HazMatHazMatChemicalRecord>
     */
    protected $hazMatChemicalRecord;
    /**
     * Identifies the package containing Dangerous Goods.  Required if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackageIdentifier() : string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.  Required if SubVersion is greater than or equal to 1701.
     *
     * @param string $packageIdentifier
     *
     * @return self
     */
    public function setPackageIdentifier(string $packageIdentifier) : self
    {
        $this->initialized['packageIdentifier'] = true;
        $this->packageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * QValue is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Applies only if SubVersion is greater than or equal to 1701. Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return string
     */
    public function getQValue() : string
    {
        return $this->qValue;
    }
    /**
     * QValue is required when a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA.   Applies only if SubVersion is greater than or equal to 1701. Valid values are : 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @param string $qValue
     *
     * @return self
     */
    public function setQValue(string $qValue) : self
    {
        $this->initialized['qValue'] = true;
        $this->qValue = $qValue;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getOverPackedIndicator() : string
    {
        return $this->overPackedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that shipment is overpack.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @param string $overPackedIndicator
     *
     * @return self
     */
    public function setOverPackedIndicator(string $overPackedIndicator) : self
    {
        $this->initialized['overPackedIndicator'] = true;
        $this->overPackedIndicator = $overPackedIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Indicates the hazmat shipment/package is all packed in one.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getAllPackedInOneIndicator() : string
    {
        return $this->allPackedInOneIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Indicates the hazmat shipment/package is all packed in one.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @param string $allPackedInOneIndicator
     *
     * @return self
     */
    public function setAllPackedInOneIndicator(string $allPackedInOneIndicator) : self
    {
        $this->initialized['allPackedInOneIndicator'] = true;
        $this->allPackedInOneIndicator = $allPackedInOneIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<HazMatHazMatChemicalRecord>
     */
    public function getHazMatChemicalRecord() : array
    {
        return $this->hazMatChemicalRecord;
    }
    /**
     * 
     *
     * @param list<HazMatHazMatChemicalRecord> $hazMatChemicalRecord
     *
     * @return self
     */
    public function setHazMatChemicalRecord(array $hazMatChemicalRecord) : self
    {
        $this->initialized['hazMatChemicalRecord'] = true;
        $this->hazMatChemicalRecord = $hazMatChemicalRecord;
        return $this;
    }
}