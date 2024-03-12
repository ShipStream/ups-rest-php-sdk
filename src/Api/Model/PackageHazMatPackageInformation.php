<?php

namespace ShipStream\Ups\Api\Model;

class PackageHazMatPackageInformation extends \ArrayObject
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
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
     *
     * @var string
     */
    protected $allPackedInOneIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that one or more hazmat/chemicals are in separate boxes in a package.  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
     *
     * @var string
     */
    protected $overPackedIndicator;
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA, Ship API must require the shipment to specify a Q-Value with exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @var string
     */
    protected $qValue;
    /**
     * This field is used for the Outer Hazmat packaging type.  Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @var string
     */
    protected $outerPackagingType;
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
     *
     * @return string
     */
    public function getAllPackedInOneIndicator() : string
    {
        return $this->allPackedInOneIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates if multiple, different hazmat/chemicals are contained within one box in a package  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
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
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that one or more hazmat/chemicals are in separate boxes in a package.  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
     *
     * @return string
     */
    public function getOverPackedIndicator() : string
    {
        return $this->overPackedIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. Presence indicates that one or more hazmat/chemicals are in separate boxes in a package.  When number of Hazmat containers in a package is more than one, either AllPackedInOneIndicator or OverPackedIndicator is needed
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
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA, Ship API must require the shipment to specify a Q-Value with exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
     *
     * @return string
     */
    public function getQValue() : string
    {
        return $this->qValue;
    }
    /**
     * When a HazMat shipment specifies AllPackedInOneIndicator and the regulation set for that shipment is IATA, Ship API must require the shipment to specify a Q-Value with exactly one of the following values: 0.1; 0.2; 0.3; 0.4; 0.5; 0.6; 0.7; 0.8; 0.9; 1.0
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
     * This field is used for the Outer Hazmat packaging type.  Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @return string
     */
    public function getOuterPackagingType() : string
    {
        return $this->outerPackagingType;
    }
    /**
     * This field is used for the Outer Hazmat packaging type.  Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @param string $outerPackagingType
     *
     * @return self
     */
    public function setOuterPackagingType(string $outerPackagingType) : self
    {
        $this->initialized['outerPackagingType'] = true;
        $this->outerPackagingType = $outerPackagingType;
        return $this;
    }
}