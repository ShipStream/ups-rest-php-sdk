<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsDryIce extends \ArrayObject
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
     * Regulation set for dryIce Shipment. Valid values: CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA= Worldwide Air movement.  The following values are valid: IATA, CFR.
     *
     * @var string|null
     */
    protected $regulationSet;
    /**
     * Container for Dry Ice weight.
     *
     * @var DryIceDryIceWeight|null
     */
    protected $dryIceWeight;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 Kgs or 5.7 Lbs.
     *
     * @var string|null
     */
    protected $medicalUseIndicator;
    /**
     * Regulation set for dryIce Shipment. Valid values: CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA= Worldwide Air movement.  The following values are valid: IATA, CFR.
     *
     * @return string|null
     */
    public function getRegulationSet() : ?string
    {
        return $this->regulationSet;
    }
    /**
     * Regulation set for dryIce Shipment. Valid values: CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, IATA= Worldwide Air movement.  The following values are valid: IATA, CFR.
     *
     * @param string|null $regulationSet
     *
     * @return self
     */
    public function setRegulationSet(?string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * Container for Dry Ice weight.
     *
     * @return DryIceDryIceWeight|null
     */
    public function getDryIceWeight() : ?DryIceDryIceWeight
    {
        return $this->dryIceWeight;
    }
    /**
     * Container for Dry Ice weight.
     *
     * @param DryIceDryIceWeight|null $dryIceWeight
     *
     * @return self
     */
    public function setDryIceWeight(?DryIceDryIceWeight $dryIceWeight) : self
    {
        $this->initialized['dryIceWeight'] = true;
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 Kgs or 5.7 Lbs.
     *
     * @return string|null
     */
    public function getMedicalUseIndicator() : ?string
    {
        return $this->medicalUseIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. Relevant only in CFR regulation set. If present it is used to designate the dry Ice is for any medical use and rates are adjusted for DryIce weight more than 2.5 Kgs or 5.7 Lbs.
     *
     * @param string|null $medicalUseIndicator
     *
     * @return self
     */
    public function setMedicalUseIndicator(?string $medicalUseIndicator) : self
    {
        $this->initialized['medicalUseIndicator'] = true;
        $this->medicalUseIndicator = $medicalUseIndicator;
        return $this;
    }
}